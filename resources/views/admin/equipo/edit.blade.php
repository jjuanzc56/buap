<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edición de equipos') }}
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
    
    <form method="post" action="{{url('/admin/equipo/'.$equipo->id)}}" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
<div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nombre_equipo">
    Nombre del equipo
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="nombre_equipo" type="text" placeholder="Nombre del equipo" name="nombre_equipo" value="{{$equipo->nombre_equipo}}">

    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="id_proyecto">
    Seleccione el proyecto en el cual participara
    </label>
    <select name="id_proyecto" x-model="id_proyecto" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
    @foreach ($proyectos as $proyecto)
    <option value="{{$proyecto->id}}">{{$proyecto->nombre_proyecto}}</option>
    @endforeach
    </select>
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="id_integrante_alumno">
    Seleccione matricula del alumno que participara
    </label>
    <select name="id_integrante_alumno" x-model="id_integrante_alumno" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
    <option>--Seleccione matricula--</option>
    @foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->student_matricula}}</option>
    @endforeach
    </select>
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="integrante_docente">
    Seleccione la célula profesional del docente que participara
    </label>
    <select name="integrante_docente" x-model="integrante_docente" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
    <option>--Seleccione célula--</option>
    @foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->teacher_celula}}</option>
    @endforeach
    </select>
    </div>

    <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="Estado">
    Seleccione la casilla que usted considere
    ¿El equipo está activo?
    </label>
    <label><input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="estado" type="checkbox" name="estado" value="1">Sí</label>
    <label><input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="estado" type="checkbox" name="estado" value="0">No</label>
    </div>
    </div>

    <div class="inline-block mr-2 mt-2">
    <a href="{{ route('admin.equipo.index') }}" button type="button" class="focus:outline-none text-white text-sm py-2.5 px-10 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Regresar</a>    
    <div class="inline-block mr-2 mt-2">
    <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-6 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg" value="Guardar datos">Guardar datos</a>
</div>
</div>
</form>

</x-app-layout>
