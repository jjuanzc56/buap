<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de proyectos') }}
        </h2>
    </x-slot>
    
    @if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
    </div> 
    @endif
    
    <form method="post" action="{{url('/admin/proyecto')}}" enctype="multipart/form-data">
    @csrf
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
<div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nombre_proyecto">
    Nombre del proyecto
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="nombre_proyecto" type="text" placeholder="Nombre del proyecto" name="nombre_proyecto">
    
    <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
	¿Qué empresa propuso el proyecto?
	</label>
	<select name="id_empresa" x-model="id_empresa" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
    @foreach($empresas as $empresa)
    <option value="{{$empresa->id}}">{{$empresa->nombre_empresa}}</option>
    @endforeach
    </select>
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="descripcion">
    Descripción de los proyectos
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-6 mb-3" id="descripcion" type="text" placeholder="Descripción del proyecto" name="descripcion">
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="cupo">
    Seleccione el número de integrantes
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="cupo" type="number" placeholder="Seleccione el número" name="cupo">
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="created_at">
    Fecha de registro
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="created_at" type="date" name="created_at">

    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nivel">
    ¿Para que niveles se recomiendan esta proyecto? 
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="nivel" type="text" placeholder="Recomendaciones" name="nivel">

    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="link_archivo_proyecto">
    Ingrese el link de archivos 
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="link_archivo_proyecto" type="text" placeholder="Ingrese el link" name="link_archivo_proyecto">

    <label class="block mb-2 text-sm font-bold text-gray-700" for="carrera">
	Seleccione la carrera que se involucra es este proyecto
	</label>
	<select name="carrera" x-model="carrera" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
    <option value="ISTII">Ingeniería en sistemas y tecnologías de la información industrial</option>
    <option value="IAA">Ingeniería en automatización y autotrónica</option>
    <option value="IPGI">Ingeniería en procesos y gestión industrial</option>
    </select>
    

    <br>
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="foto">
    Seleccione una imagen 
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="foto" type="file" placeholder="Seleccione foto" name="foto">

    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="estado">
    Seleccione si el proyecto está activo 
    </label>
    <label><input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="estado" type="checkbox" name="estado" value="1">Sí</label>
    <label><input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="estado" type="checkbox" name="estado" value="0">No</label>
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="cooperativo">
    ¿El proyecto es cooperativo? 
    </label>    
    <select id="cooperativo" name="cooperativo" style="width:200px">
    <option value="1">Sí</option>
    <option value="0">No</option>
    </select>
    </div>
    </div>

    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="codigo_proyecto">
    Ingrese una clave de proyecto
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="codigo_proyecto" type="text" placeholder="Ingrese el codigo de proyecto" name="codigo_proyecto">


    <div class="inline-block mr-2 mt-2">
    <a href="{{ route('admin.proyecto.index') }}" button type="button" class="focus:outline-none text-white text-sm py-2.5 px-10 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Regresar</a>
    
    <div class="inline-block mr-2 mt-2">
    <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-6 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg" value="Guardar datos">Guardar datos</a>
</div>
</div>
</form>

</x-app-layout>
