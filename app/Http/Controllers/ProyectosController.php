<?php

namespace VSF\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
       $tipo_proyectos = \VSF\TipoProyecto::All();  //para cargar combo

        return view("proyectos",compact('tipo_proyectos'));
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = \VSF\Proyectos::find($id);       

        return view("proyectos-detalle", compact('proyecto'));
    }    

    public function proyectosall(Request $request)
    {  
        $query = DB::table('proyectos')
        ->join('tipoProyectos', 'tipoProyectos.id', '=', 'proyectos.idTipoProyecto')  
        ->select('proyectos.*', 'tipoProyectos.color');    

        if($request->has('idTipoProyecto') )
        {
            $idTipoProyecto = $request->get('idTipoProyecto');
            
            if($idTipoProyecto != -1)
                  $query->where('proyectos.idTipoProyecto',$idTipoProyecto);       
        }  

        $proyectos = $query->paginate(5); //paginacion por pagina   

        return response()->json(view("proyectos-list",compact('proyectos'))->render());
      
    }
   
}
