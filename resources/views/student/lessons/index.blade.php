<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyectos') }}
        </h2>
        <p></p>
    @if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
    {{Session::get('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif          
    </x-slot>
    <style>
    .bg-image {
      background-image: url(https://media.istockphoto.com/photos/blue-abstract-background-or-texture-picture-id1138395421?k=6&m=1138395421&s=612x612&w=0&h=bJ1SRWujCgg3QWzkGPgaRiArNYohPl7-Wc4p_Fa_cyA=);
      background-size: cover;
      background-position: center;
    }
    .backdrop {
      backdrop-filter: blur(5px);
    }
    .text-shadow {
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }
  </style>

  <div class="bg-image w-full min-h-screen flex flex-wrap justify-center items-center gap-3 py-5">
    <div class="backdrop w-10/12 md:w-1/4 bg-white bg-opacity-10 rounded p-3 text-white border border-gray-300 shadow-lg">
    
      <!-- header -->
      <div class="w-full mb-3 pb-3 border-b border-1 border-white">
        <h3 class="text-xl font-semibold text-shadow">Por carrera</h3>
      </div>
      <!-- body -->
      <div>
        <img src="https://i.postimg.cc/J4khxLqf/bg02.jpg" alt="image2" class="w-full h-48 object-cover mb-2">
        <p class="mb-3 tracking-wide text-base text-shadow">
          Ingrese para poder visualizar los proyectos por carrera.
        </p>    
        <a href="{{ route('student.lessons.create') }}" :active="request()->routeIs('student.lessons.create')" button type="button" class="backdrop bg-white bg-opacity-0 border border-white px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 text-lg">Detalles</a>
      </div>
    </div>
    <div class="backdrop w-10/12 md:w-1/4 bg-white bg-opacity-10 rounded p-3 text-white border border-white shadow-lg">
      <!-- header -->
      <div class="w-full mb-3 pb-3 border-b border-1 border-white">
        <h3 class="text-xl font-semibold text-shadow">Por empresa</h3>
      </div>
      <!-- body -->
      <div>
        <img src="https://cdn-3.expansion.mx/dims4/default/dc43d6f/2147483647/strip/true/crop/1254x836+0+0/resize/1800x1200!/quality/90/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F5b%2F8a%2F3de43ba64858b3210e733bd78ba5%2Fistock-1211991390.jpg" alt="image3" class="w-full h-48 object-cover mb-2">
        <p class="mb-3 tracking-wide text-base text-shadow">
          Ingrese para poder visualizar los proyectos por empresa.
        </p>
        <button class="backdrop bg-white bg-opacity-0 border border-white px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 text-lg">
          Detalles
        </button>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/4db6b32bd3.js" crossorigin="anonymous"></script>
<div class="bg-gradient-to-br from-blue-800 to-green-900 text-white">
    <div class="xl:px-40 pb-12 lg:px-20 md:px-10 sm:px-5 px-10">
        <div class="w-full pt-12 flex flex-col sm:flex-row space-y-2  justify-start">
            <div class="w-full sm:w-2/5 pr-6 flex flex-col space-y-4">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="57" viewBox="0 0 160 57">
                    <defs>
                        <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 197 70">
                        <image width="197" height="70" xlink:href="https://virtual.buap.mx/sites/default/files/Logos/logo_buap_h.png"/>
                        </pattern>
                    </defs>
                    <rect id="ETI-Logo" width="160" height="57" fill="url(#pattern)"/>
                </svg> 
                <p class="opacity-60 text-blue-400">Benemérita Universidad Autónoma de Puebla</p>
                <p class="opacity-60 text-blue-400">Blvd. Audi Sur,Puebla</p>
                <p class="opacity-60 text-blue-400">Teléfono 2222295500 ext.1510</p>             
            </div>
            
            <div class="w-full sm:w-1/5 flex flex-col space-y-4 text-blue-400">
                <p class="opacity-60"><center>Transparencia y Acesso a la Información</center></p>
                <a class="opacity-60"><center>Aviso de Privacidad</center></a>
                <br>
                <div class="flex flex-row space-x-14">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-google"></i>
                </div>  
            </div>

            <div class="w-full sm:w-1/2 flex flex-col space-y-6 text-blue-400">
                <p class="opacity-60"><center>San José Chiapa,Puebla</center></p>
                <a class="opacity-60"><center>Compromiso con la transparencia y rendención de cuentas</center></a>
            </div>
            
        </div>
        <div class="opacity-60 pt-2 text-blue-400">
            <p>© 2021 J&M'S.</p>
        </div>
    </div>
</div>        



</x-app-layout>
