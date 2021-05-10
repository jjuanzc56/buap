<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyectos') }}
        </h2>
        
        @if(Session::has('mensaje'))
    <div class="block text-sm text-left text-white bg-green-700 border border-green-700 h-12 flex items-center p-4 rounded-sm" role="alert">
    {{Session::get('mensaje')}}
        </div>
    @endif          
    </x-slot>



<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<div class="inline-block mr-2 mt-2">
<a href="{{ route('admin.proyecto.create') }}" :active="request()->routeIs('admin.proyecto.create')" button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">Registrar nuevo proyecto</a>
</div>
<br>
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
            Imagen del proyecto
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Nombre de proyectos
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Nombre de la empresa que propuso
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Descripción
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Cupo
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Nivel
            </th>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Carrera(s)
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Link de archivos
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Estado
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Codigo de proyecto
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
            @foreach( $proyectos as $proyecto )
          <tr>
            
            <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
            <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
            {{$proyecto->id}}
            </div>
            </div>
            </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
            <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
            <img class="img-thumbail img-fluid" src="/foto/{{ $proyecto->foto }}">
            </div>
            </div>
            </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
            <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
            {{$proyecto->nombre_proyecto}}
            </div>
            </div>
            </div>
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
            <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
            {{$proyecto->id_empresa}}
            </div>
            </div>
            </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">{{$proyecto->descripcion}}</div>
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
            {{$proyecto->cupo}}
            </span>
            </td>
              
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$proyecto->nivel}}
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$proyecto->carrera}}
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$proyecto->link_archivo_proyecto}}
            </td>

            
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$proyecto->estado}}
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$proyecto->codigo_proyecto}}
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$proyecto->created_at}}
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <a href="{{url('/admin/proyecto/'.$proyecto->id.'/edit')}}" button type="button" class="focus:outline-none text-white text-sm py-2.5 px-6 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Editar</a>
            <td>

            <form action="{{url('/admin/proyecto/'.$proyecto->id) }}" class="d-line" method="post">
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
        {!!$proyectos->links()!!}
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</x-app-layout>