<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;

class LessonController extends Controller
{

    public function index()
    {
        $datos['proyectos'] = Proyecto::paginate(5);
        return view('student.lessons.index', compact('datos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['proyectos'] = Proyecto::paginate(5);                
        return view('student.lessons.ver', $datos);
    }

}
