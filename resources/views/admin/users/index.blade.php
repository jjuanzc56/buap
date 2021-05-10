<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
        
        @if(Session::has('mensaje'))
    <div class="block text-sm text-left text-white bg-green-700 border border-green-700 h-12 flex items-center p-4 rounded-sm" role="alert">
    {{Session::get('mensaje')}}
        </div>
    @endif          
    </x-slot>

    
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            #
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Nombre del usuario
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Email
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Rol
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Fecha de registro
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            <center>
            Acciones
            </center> 
            </th>
            
            <th scope="col" class="relative px-6 py-3">
            <span class="sr-only">Edit</span>
            </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach( $users as $user )
            <tr>
            
            <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
            <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
            {{$user->id}}
            </div>
            </div>
            </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
            <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
            {{$user->name}}
            </div>
            </div>
            </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">{{$user->email}}</div>
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
            {{$user->role_id}}
            </span>
            </td>
              
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$user->created_at}}
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <a href="{{url('/admin/users/'.$user->id.'/edit')}}" button type="button" class="focus:outline-none text-white text-sm py-2.5 px-6 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Editar</a>
            <td>
            <form action="{{url('/admin/users/'.$user->id) }}" class="d-line" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-6 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg" onclick="return confirm('¿Quiere borrar?')" value="Borrar">Borrar</a>
            </center>
            </td>
            </tr>
            @endforeach
            <!-- More people... -->
          </tbody>
        </table>
        {!!$users->links()!!}
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</x-app-layout>