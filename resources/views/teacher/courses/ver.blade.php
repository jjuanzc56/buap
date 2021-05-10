<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-900 leading-tight ">
            {{ __('Proyectos por semestre') }}
        </h2>
    </x-slot>
    @foreach($proyectos as $proyecto)
    <style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
    <style>
    .bg-image {
      background-image: url(https://media.istockphoto.com/photos/blue-abstract-background-or-texture-picture-id1138395421?k=6&m=1138395421&s=612x612&w=0&h=bJ1SRWujCgg3QWzkGPgaRiArNYohPl7-Wc4p_Fa_cyA=);
      background-size: cover;
      background-position: center;
    }
    .backdrop {
      backdrop-filter: blur(-20px);
    }
    .text-shadow {
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }
  </style>

<div class="bg-image w-full min-h-screen flex flex-wrap justify-center items-center gap-3 py-5">
    <div class="w-full max-w-6xl rounded backdrop w-10/12 bg-white bg-opacity-10 border border-gray-300 shadow-lg p-10 lg:p-20 mx-auto text-white relative md:text-left">
        <div class="md:flex items-center -mx-10">
            <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0 ">
                <div class="relative">
                    <img src="/foto/{{ $proyecto->foto }}" class="w-full h-50 object-cover mb-2" alt="">
                    <div class="absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-10 ">
                <div class="mb-10">
                    <h1 class="font-bold uppercase text-2xl mb-5 border-b border-1 border-white">{{$proyecto->nombre_proyecto}}</h1>
                    <p class="text-sm">{{$proyecto->descripcion}}<a href="#" class="opacity-50 text-gray-900 hover:opacity-100 inline-block text-xs leading-none border-b border-gray-900"></a></p>
                </div>
                    <div class="inline-block align-bottom">
                    
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="codigo_proyecto" type="text" placeholder="--codigo--" value="{{$proyecto->codigo_proyecto}}" name="codigo_proyecto">        
                    <a href="{{ url('/teacher/courses/'.$proyecto->id.'/gestion') }}" button type="submit" class="bg-gradient-to-br from-blue-800 to-green-900 opacity-100 hover:opacity-100 text-white hover:text-gray-900 rounded-full px-10 py-2 font-semibold">Unirse al proyecto</a>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
<div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
        <a title="Buy me a beer" href="https://www.buymeacoffee.com/scottwindon" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg"/>
        </a>
    </div>
</div>
    @endforeach
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
