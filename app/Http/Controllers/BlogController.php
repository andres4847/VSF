<?php

namespace VSF\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        Date::setLocale('es');
    }

    public function index(Request $request)
    {
       return view("blog");
    }

    public function listall()
    { 
      $blogs = DB::table('blogs')
            ->join('tipo_categoria_blogs', 'tipo_categoria_blogs.id', '=', 'blogs.idTipoCategoriaBlog')  
            ->select('blogs.*', 'tipo_categoria_blogs.nombre as nombreCategoria')  
            ->orderBy('fechaPublicacion','desc')
            ->paginate(5); //paginacion por pagina  

        return view("blog-list",compact('blogs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = DB::table('blogs')
                    ->join('tipo_categoria_blogs', 'tipo_categoria_blogs.id', '=', 'blogs.idTipoCategoriaBlog')  
                    ->select('blogs.*', 'tipo_categoria_blogs.nombre as nombreCategoria')
                    ->where('blogs.id', '=', $id)
                    ->first();                

        return view("blog-detalle", compact('blog'));
    }
  
}
