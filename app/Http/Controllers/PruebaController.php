<?php

namespace VSF\Http\Controllers;

class PruebaController extends Controller
{
    public function index()
    {
    	return 'Hola desde controller 85';
    }

    public function nombre($nombre)
    {
    	return 'Mi nombre es:'.$nombre;
    }
}
