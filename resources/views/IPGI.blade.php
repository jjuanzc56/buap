<div>
	
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Buap</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,600;0,700;1,400&amp;display=swap'><link rel="stylesheet" href="./style.css">

  <script src="https://use.fontawesome.com/b658ad5274.js"></script>
  <link rel="stylesheet" href="css/output.css">
</head>
<body class="antialiased">
  

<div class="bg-gradient-to-br from-blue-800 to-green-900 shadow-sm sticky top-0">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-1 md:py-4">
    <div class="flex items-center justify-between md:justify-start">
      <!-- Menu Trigger -->
      <button type="button" class="md:hidden w-10 h-10 rounded-lg -ml-2 flex justify-center items-center">
        <svg class="text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      <!-- ./ Menu Trigger -->

      <a href="#" class="font-bold text-gray-700 text-2xl"><img src="https://virtual.buap.mx/sites/default/files/Logos/logo_buap_h.png" border="1" alt="logo" width="150" height="100"></a>

      <div class="hidden md:flex space-x-3 flex-1 lg:ml-8">
        <a href="{{ route('login') }}" class="px-2 py-2 hover:bg-black rounded-lg text-white hover:text-white">INICIAR SESIÓN</a>
        <a href="{{ route('register') }}" class="px-2 py-2 hover:bg-black rounded-lg text-white hover:text-white">REGISTRATE</a>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScaAw7zjGHhSUV-SJiyDLeyGC4pq0wjhCUp7QNSm7Rda2TvHg/viewform?usp=sf_link" class="px-2 py-2 hover:bg-black rounded-lg text-white hover:text-white">REGISTRA TU PROYECTO</a>
        <a href="#" class="px-2 py-2 hover:bg-black rounded-lg text-white hover:text-white">QUIENES SOMOS</a>
      </div>

      <div class="flex items-center space-x-4">
        <div class="relative hidden md:block">
          <input type="search" class="pl-10 pr-2 h-10 py-1 rounded-lg border border-gray-200 focus:border-gray-300 focus:outline-none focus:shadow-inner leading-none" placeholder="Search">
          <svg class="h-6 w-6 text-gray-300 ml-2 mt-2 stroke-current absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>

        <button type="button" class="hidden md:block w-10 h-10 rounded-lg bg-gray-100 border border-gray-200 flex justify-center items-center">
          <img src="https://universidadesdemexico.mx/logos/original/logo-benemerita-universidad-autonoma-de-puebla.png" alt="bottts" width="28" height="28" class="rounded-lg mx-auto">
        </button>
      </div>
    </div>

    <!-- Search Mobile -->
    <div class="relative md:hidden">
      <input type="search" class="mt-1 w-full pl-10 pr-2 h-10 py-1 rounded-lg border border-gray-200 focus:border-gray-300 focus:outline-none focus:shadow-inner leading-none" placeholder="Search">

      <svg class="h-6 w-6 text-gray-300 ml-2 mt-3 stroke-current absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>
    <!-- ./ Search Mobile -->
  </div>
</div>
    <!-- ./ termina la barra de navegación -->
    <main class="w-full">
        <div class="relative">
            <div class="sliderAx h-4/5">
                <div id="slider-1" class="mx-auto">
                    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://www.buap.mx/sites/default/files/styles/slider_general/public/banner-ultrasonido.png?itok=lsBCq22h)">
                        <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase"></p>
                        <p class="text-3xl font-bold">¡¡BIENVENIDOS!!</p>
                        <p class="text-2xl mb-10 leading-none"></p>
                        </div>  
                    </div>
                    <br>
                </div>
                <div id="slider-2" class="mx-auto">
                    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://sintesis.com.mx/puebla/wp-content/uploads/2021/04/slider-buap-asciende.png)">
                        <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase"></p>
                        <p class="text-3xl font-bold"></p>
                        <p class="text-2xl mb-10 leading-none"></p>
                        </div>  
                    </div>
                    <br>
                </div>
                
                <div  class="flex justify-between w-12 mx-auto pb-2">
                <button id="sButton1" onclick="sliderButton1()" class="bg-blue-900 rounded-full w-4 pb-2 " ></button>
                <button id="sButton2" onclick="sliderButton2() " class="bg-blue-900 rounded-full w-4 p-2"></button>
            </div>
            <div class="container mx-auto">
            <h1 class="text-center text-black-800 py-6 text-5xl ">
                ¡¡Ingeniería en procesos y gestión industrial!!
            </h1> 
            <div class="text-gray-900">
                <div class="grid grid-cols-6 mb-20">
                    <div class="col-span-1 text-center text-6xl py-4"><i class="fa fa-gift" aria-hidden="true"></i></div>
                    <div class="col-span-5">
                        <h3 class="text-gray-700 text-justify">
                        El Complejo Regional Centro - Campus San José Chiapa, Puebla. Cuenta desde su creación con una iniciativa para la realización de proyectos externos para la industria, con la intención de que los estudiantes participen en estos desarrollos y tengan un acercamiento con el entorno laboral industrial. Este esquema ayuda a los estudiantes a pulir sus habilidades técnicas y a moldear sus habilidades blandas. En la actualidad se está trabajando con las academias de las 3 carreras del campus para formalizar cada una de las áreas que integran al Departamento de  Proyectos de Vinculación Industrial, donde se atiende la gestión y el seguimiento de los proyectos externos, a fin de optimizar las actividades de cada área y especificar adecuadamente las funciones y responsabilidades de cada una de ellas, así como la participación de los estudiantes en cada área y proyecto. 
                        </h3>
                    </div>
                </div>
            </div>   
        </div>

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
                    <h2 class="font-bold uppercase text-2xl mb-5 border-1 border-white">Carrera: {{$proyecto->carrera}}</h2>
                    <p class="text-sm">{{$proyecto->descripcion}}<a href="#" class="opacity-50 text-gray-900 hover:opacity-100 inline-block text-xs leading-none border-b border-gray-900"></a></p>

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
        
  </body>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>
<!-- nuevo script-->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script>
    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
           
        cont=0;
        
        break;
        }
        
        
        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}

function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-purple-800");
    $("#sButton1").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=0
    
    }
    
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-purple-800");
    $("#sButton2").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=1
    
    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");
        
        loopSlider();
     
    });
  </script>
</html>

</div>