<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edición de usuarios') }}
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
    
    <form method="post" action="{{url('/admin/users/'.$user->id)}}" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
<div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
    Nombre de usuario
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="name" type="text" placeholder="Nombre del usuario" name="name" value="{{$user->name}}">
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
    Email
    </label>
    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="email" type="email" placeholder="Ingrese su email" name="email" value="{{$user->email}}">
    
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="role_id">
    Rol
    </label>
    <select id="role_id" name="role_id" style="width:200px" >
    <option value="2">Estudiante</option>
    <option value="3">Docente</option>
    </select>
    <br>

    <div class="inline-block mr-2 mt-2">
    <a href="{{ route('admin.users.index') }}" button type="button" class="focus:outline-none text-white text-sm py-2.5 px-10 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Regresar</a>
    
    <div class="inline-block mr-2 mt-2">
    <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-6 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg" value="Guardar datos">Guardar datos</a>
</div>
</div>
</form>

</x-app-layout>
