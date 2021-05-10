<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EquipoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['equipos'] = Equipo::paginate(5);                
        return view('admin.equipo.index', $datos);  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //consulta                
        $proyectos = DB::table('proyectos')->get();
        $users = DB::table('users')->get(); 
        return  view('admin.equipo.create', compact('proyectos'), compact('users'));
        
        //return  view('admin.equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar datos
        $campos=[
            'nombre_equipo'=>'required|string|max:100',
            'estado'=>'required|',
            'id_proyecto'=>'required|',
            'id_integrante_alumno'=>'required|',
            'integrante_docente'=>'required|integer|',
            'created_at'=>'required|', 
            
        ];
        $mensaje=[
            'required='>'El: attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);
        $datosProyecto = request()->except('_token');
        
        /*fotografia
        if ($foto = $request->file('foto')) {
            $destinationPath = 'foto/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $datosProyecto['foto'] = "$profileImage";
        }*/

        Equipo::insert($datosProyecto);
        return redirect('admin/equipo')->with('mensaje','Equipo agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyectos = DB::table('proyectos')->get();
        $users = DB::table('users')->get(); 
        $equipo=Equipo::findOrFail($id);
        return view('admin.equipo.edit', compact('equipo', 'users', 'proyectos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validación de campos de formulario
        $campos=[
            'nombre_equipo'=>'required|string|max:100',
            'estado'=>'required|',
            'id_proyecto'=>'required|',
            'id_integrante_alumno'=>'required|',
            'integrante_docente'=>'required|integer|',
            ];
        $mensaje=[
            'required='>'El: attribute es requerido',
        ];
        $this->validate($request, $campos, $mensaje);
        
        //Recepción de datos, omitiendo a token y metodo además los busca por el id y lo actuliza
        $datosProyecto = request()->except(['_token','_method']);
        Equipo::where('id','=',$id)->update($datosProyecto);
        return redirect('admin/equipo')->with('mensaje','Equipo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo=Equipo::findOrFail($id);
        //$equipo->delete();
        $equipo::destroy($id);
        return redirect('admin/equipo')->with('mensaje','Equipo Borrado');        
    
    }
}
