<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
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
        $datos['empresas'] = Empresa::paginate(5);
        return view('admin.empresa.index', $datos);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.empresa.create');
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
            'nombre_empresa'=>'required|string|max:100',
            'representante'=>'required|string|max:100',
            'archivo_empresa'=>'required|string|max:100',
            //'Estado'=>'accepted',

        ];
        $mensaje=[
            'required='>'El: attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);
        $datosEmpresa = request()->except('_token');

        Empresa::insert($datosEmpresa);
        return redirect('admin/empresa')->with('mensaje','Empresa agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa=Empresa::findOrFail($id);
        return view('admin.empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validación de campos de formulario
        $campos=[
            'nombre_empresa'=>'required|string|max:100',
            'representante'=>'required|string|max:100',
            'archivo_empresa'=>'required|string|max:100',
            'created_at'=>'required|',
        ];
        $mensaje=[
            'required='>'El: attribute es requerido',
        ];
        $this->validate($request, $campos, $mensaje);
        
        //Recepción de datos, omitiendo a token y metodo además los busca por el id y lo actuliza
        $datosEmpresa = request()->except(['_token','_method']);

        Empresa::where('id','=',$id)->update($datosEmpresa);

        //Vueleve a buscar la información y la retorna pero con lo datos actualizados
        //$empleado=Empleado::findOrFail($id);
        //return view('empleado.edit', compact('empleado'));
        return redirect('admin/empresa')->with('mensaje','Empresa actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$empresa=Empresa::findOrFail($id);
        Empresa::destroy($id);
        return redirect('admin/empresa')->with('mensaje','Empresa Borrada');        
    }
}
