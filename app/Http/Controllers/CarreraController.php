<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CarreraController extends Controller
{
    public function index()
    {
        $proyectos = DB::table('proyectos')
        ->select('foto','nombre_proyecto','descripcion','carrera')
        ->orWhere(function($query){
            $query->where('carrera','ISTII');
        })
        ->get();
        return  view('ISTII', compact('proyectos'));      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyectos = DB::table('proyectos')
        ->select('foto','nombre_proyecto','descripcion','carrera')
        ->orWhere(function($query){
            $query->where('carrera','IAA');
        })
        ->get();
        return  view('IAA', compact('proyectos'));      
    }
    
    /*public function car()
    {
        $proyectos = DB::table('proyectos')
        ->select('foto','nombre_proyecto','descripcion','carrera')
        ->orWhere(function($query){
            $query->where('carrera','IPGI');
        })
        ->get();
        return  view('IPGI', compact('proyectos')); 
    }*/
}
