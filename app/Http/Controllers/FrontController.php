<?php

namespace VSF\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index");
    }   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function conocenos()
    {
        $titulo = "Conocenos";  

        return view("conocenos",compact('titulo'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    { 
        $titulo = "Contacto";  

        return view("contacto",compact('titulo'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dona()
    {      
        return view("dona");
    }





   
}
