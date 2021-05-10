<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class VerController extends Controller
{
    public function index()
    {
        $proyectos = DB::table('proyectos')
        ->select('foto','nombre_proyecto','descripcion','carrera')
        ->orWhere(function($query){
            $query->where('carrera','IPGI');
        })
        ->get();
        return  view('IPGI', compact('proyectos'));      
    }
}
