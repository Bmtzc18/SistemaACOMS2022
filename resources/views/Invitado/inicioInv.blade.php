@extends('Invitado.navarI')

@section('content')   
    <div class="relative mx-2 lg:mx-20 xl:mx-20 my-10 rounded-xl justify-center bg-center py-12 px-4 sm:px-6 lg:px-8  bg-no-repeat bg-cover items-center grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
        <div class="bg-white md:w-20/40 p-20 rounded-lg drop-shadow-2xl ">
                <img class="h-48 w-48 ml-20 lg:ml-28" src="{{asset('img/logoITTG.png')}}" >   
                <p class="text-center pt-9">El Tecnologico Nacional de Mexico Campus Tuxtla Gutierrez o Instituto Tecnológico de Tuxtla Gutiérrez; es una pequeña universidad pública de tecnología, ubicada en la Ciudad de Tuxtla Gutiérrez, Chiapas, México.</p>

        </div>    
        <div class="bg-azul-fondo flex flex-col md:w-20/40 p-14 rounded-lg drop-shadow-2xl ">
            <div class="flex ml-3 md:ml-2 lg:ml-0">
            <button type="button" onClick="location.href='/informacion'" class="h-42 w-32 md:h-80 md:w-3/6 lg:h-80 lg:w-3/6 ml-3 lg:ml-5 bg-azul-iconos hover:bg-sky-600 rounded-md">
                <img class="w-24 h-24 lg:h-28 lg:w-28 ml-4 md:ml-24 lg:ml-14 mt-6" src="{{asset('img/informacion.png')}}" >  
                <h1 class="text-white mt-3 lg:mt-10 font-semibold">Acerca de los ACOMs</h1> 
            </button>  
            <button class="h-42 w-32  md:h-80 md:w-3/6 lg:h-80 lg:w-3/6 ml-8 md:ml-5 lg:ml-8  bg-azul-iconos hover:bg-sky-600 rounded-md" onClick="location.href='https://drive.google.com/file/d/1cLGc2MPb5KjEcdADWPeb2g6oK_Pj-kFO/view'">
                <img class="w-15 h-24 lg:h-28 lg:w-28 ml-4 md:ml-24 lg:ml-14 mt-5" src="{{asset('img/androide.png')}}" >  
                <h1 class="text-white mt-3 lg:mt-10 font-semibold">Descarga la app</h1> 
            </button> 
           </div> 

           <button type="button" onClick="location.href='/cambioCA'" class="text-white mt-7 font-sans text-center italic underline"> 
          Restablecer contraseña
        </button> 
        </div>
    </div>
      
@endsection    
   



