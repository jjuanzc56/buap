<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empresas') }}
        </h2>
        
        @if(Session::has('mensaje'))
    <div class="block text-sm text-left text-white bg-green-500 border border-green-700 h-12 flex items-center p-4 rounded-sm" role="alert">
    {{Session::get('mensaje')}}
        </div>
    @endif          
    </x-slot>


<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<div class="inline-block mr-2 mt-2">
<a href="{{ route('admin.empresa.create') }}" :active="request()->routeIs('admin.empresa.create')" button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">Registrar nueva empresa</a>
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
            Nombre de la empresa
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Representante
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Archivos
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Estado
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
            @foreach( $empresas as $empresa )
            <tr>
            
            <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
            <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
            {{$empresa->id}}
            </div>
            </div>
            </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
            <div class="ml-4">
            <div class="text-sm font-medium text-gray-900">
            {{$empresa->nombre_empresa}}
            </div>
            </div>
            </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">{{$empresa->representante}}</div>
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
            {{$empresa->archivo_empresa}}
            </span>
            </td>
              
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$empresa->estado}}
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$empresa->created_at}}
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <a href="{{url('/admin/empresa/'.$empresa->id.'/edit')}}" button type="button" class="focus:outline-none text-white text-sm py-2.5 px-6 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Editar</a>
            <td>
            <form action="{{url('/admin/empresa/'.$empresa->id) }}" class="d-line" method="post">
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
        {!!$empresas->links()!!}
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</x-app-layout>