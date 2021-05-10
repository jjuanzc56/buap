<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Models\Proyecto;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        if (Gate::denies('manage-courses')) {
            abort(403);
        }

        //$datos['proyectos'] = Proyecto::paginate(5);                
        $datos['proyectos'] = Proyecto::paginate(5);
        return view('teacher.courses.index', compact('datos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['proyectos'] = Proyecto::paginate(5);                
        return view('teacher.courses.ver', $datos);
        //return  view('teacher.courses.ver');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $proyecto=Proyecto::findOrFail($id);
        return view('teacher.courses.gestion', compact('proyecto'));
    
    }

}
