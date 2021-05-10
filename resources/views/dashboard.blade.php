<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

<div class="w-full h-screen bg-center bg-no-repeat bg-cover" style="background-image: url('https://www.poblanerias.com/wp-content/archivos/2017/08/inauguracion-arena-buap-295791.jpg');">
    <div class="w-full h-screen bg-opacity-50 bg-black flex justify-center items-center">
        <div class="mx-4 text-center text-white">
            <h1 class="font-bold text-6xl mb-4 text-white ">¡Pensar bien para vivir mejor!</h1>
            <h2 class="font-bold text-3xl mb-12">¡Bienvenido!</h2>
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
