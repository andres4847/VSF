<?php

namespace VSF\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;


class EventosController extends Controller
{  

    public function __construct()
    {
        Date::setLocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("eventos");
    }    

    public function eventosall(Request $request)
    {  
        $eventos = DB::table('eventos')
                  ->paginate(5);     

        return view("eventos-list", compact('eventos'));         
    }
}
