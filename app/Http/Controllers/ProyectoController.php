<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
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
        $datos['proyectos'] = Proyecto::paginate(5);                
        return view('admin.proyecto.index', $datos);  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //consulta                
        $empresas = DB::table('empresas')->get(); 
        
        //$empresas = DB::table('empresas')->select('id')->get(); 
        
        return  view('admin.proyecto.create', compact('empresas'));
        
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
                'nombre_proyecto'=>'required|string|max:100',
                'id_empresa'=>'required|',
                'descripcion'=>'required|string|max:2000',
                'cooperativo'=>'required|',
                'cupo'=>'required|integer|max:10',
                'nivel'=>'required|string|max:250',
                'carrera'=>'required|string|max:250',
                'link_archivo_proyecto'=>'required|string|max:200',
                'estado'=>'required|',
                'created_at'=>'required|', 
                'foto'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',                                
                'codigo_proyecto'=>'required|',
            ];
            $mensaje=[
                'required='>'El: attribute es requerido'
            ];
    
            $this->validate($request, $campos, $mensaje);
            $datosProyecto = request()->except('_token');
            
            //fotografia
            if ($foto = $request->file('foto')) {
                $destinationPath = 'foto/';
                $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
                $foto->move($destinationPath, $profileImage);
                $datosProyecto['foto'] = "$profileImage";
            }

            //consulta                
            /*$empresas = DB::table('empresas')->get();
            /*foreach ($empresas as $empresa)
            {
            echo $empresa->nombre_empresa;   
            }*/

            Proyecto::insert($datosProyecto);
            return redirect('admin/proyecto')->with('mensaje','Proyecto agregado con éxito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('producto.show',compact('producto'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //consulta                
        $empresas = DB::table('empresas')->get();
        $proyecto=Proyecto::findOrFail($id);
        return view('admin.proyecto.edit', compact('proyecto'), compact('empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validación de campos de formulario
        $campos=[
            'nombre_proyecto'=>'required|string|max:100',
            'id_empresa'=>'required|',
            'descripcion'=>'required|string|max:2000',
            'cooperativo'=>'required|',
            'cupo'=>'required|integer|max:10',
            'nivel'=>'required|string|max:250',
            'carrera'=>'required|string|max:250',
            'link_archivo_proyecto'=>'required|string|max:200',
            'estado'=>'required|',
            'codigo_proyecto'=>'required|',
            'created_at'=>'required|',                                
            ];
        $mensaje=[
            'required='>'El: attribute es requerido',
        ];
        //validar foto cúando foto no exista
        /*if($request->hasfile('foto')){
            $campos=['foto'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=['foto.required'=>'La foto requerida'];
        }*/
        $this->validate($request, $campos, $mensaje);
        
        //Recepción de datos, omitiendo a token y metodo además los busca por el id y lo actuliza
        $datosProyecto = request()->except(['_token','_method']);

        //actualizar foto
        if ($foto = $request->file('foto')) {
            $destinationPath = 'foto/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $datosProyecto['foto'] = "$profileImage";
        }else{
            unset($datosProyecto['foto']);
        }
        Proyecto::where('id','=',$id)->update($datosProyecto);

        return redirect('admin/proyecto')->with('mensaje','Proyecto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyecto::destroy($id);
        return redirect('admin/proyecto')->with('mensaje','Proyecto Borrado');        
    
    }
}
