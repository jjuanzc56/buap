<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de empresas') }}
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
    
    <form method="post" action="{{url('/admin/empresa')}}" enctype="multipart/form-data">
    @csrf
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
<div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nombre_empresa">
    Nombre de la empresa
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="nombre_empresa" type="text" placeholder="Nombre de la empresa" name="nombre_empresa">

    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="archivo_empresa">
    Archivo de empresa
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="archivo_empresa" type="text" placeholder="Link del archivo de empresa" name="archivo_empresa">

    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="representante">
    Representante de la empresa
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="representante" type="text" placeholder="Representante de la empresa" name="representante">

    <div class="-mx-3 md:flex mb-2">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="created_at">
    Fecha de registro
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="created_at" type="date" name="created_at">
    </div>
    
    <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="Estado">
    Seleccione la casilla que usted considere
    ¿Proyecto está activo?
    </label>
    <label><input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="Estado" type="checkbox" name="Estado" value="1">Sí</label>
    <label><input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="Estado" type="checkbox" name="Estado" value="0">No</label>
    </div>
    </div>

    <div class="inline-block mr-2 mt-2">
    <a href="{{ route('admin.empresa.index') }}" button type="button" class="focus:outline-none text-white text-sm py-2.5 px-10 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Regresar</a>
    
    <div class="inline-block mr-2 mt-2">
    <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-6 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg" value="Guardar datos">Guardar datos</a>
</div>
</div>
</form>

</x-app-layout>
