<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema ACOMS - formulario</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class=" bg-azul-tec">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
            <div class="h-20 items-center flow-root">
                <div class="flex items-center ">
                    <div class="flex-shrink-0">
                      <img class="h-15 w-16" src="{{asset('img/logoITTG.png')}}">
                    </div>
                    <div class="mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8">
                        <h1 class="text-white text-center font-bold text-3xl">ITTG</h1>
                    </div>
                    <div class="max-w-7xl py-4 px-4 sm:px-6 lg:px-8 relative float-right ">
                    <button  class="text-gray-300 hover:bg-sky-600 hover:text-white px-3 py-2 rounded-md text-md font-bold " type="button" onClick="location.href='/'"  >  
                      Regresar
                    </button>
                   
                    </div>
                </div>
            </div>
        </div>    
    </nav>
   
    <div class="relative min-h-6xl max-w-7xl mx-2 lg:mx-20 xl:mx-20 my-10 rounded-xl justify-center bg-center py-12 px-4 sm:px-6 lg:px-8  bg-no-repeat bg-cover items-center grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
        <div class="bg-white md:w-20/40 p-20 rounded-lg drop-shadow-2xl ">
                <img class="h-48 w-48 ml-28" src="{{asset('img/logoITTG.png')}}" >   
                <p class="text-center pt-9">El Tecnologico Nacional de Mexico Campus Tuxtla Gutierrez o Instituto Tecnológico de Tuxtla Gutiérrez; es una pequeña universidad pública de tecnología, ubicada en la Ciudad de Tuxtla Gutiérrez, Chiapas, México.</p>

        </div>    
        <div class="bg-azul-fondo flex flex-col md:w-20/40 p-14 rounded-lg drop-shadow-2xl ">
           <div class="flex" >
            <button type="button" onClick="location.href='/informacion'" class=" lg:h-80 lg:w-3/6 sm:h-80 sm:w-80 sm:ml-5 bg-azul-iconos hover:bg-sky-500 rounded-md">
                <img class="h-28 w-28 ml-12" src="{{asset('img/informacion.png')}}" >  
                <h1 class="text-white mt-10 font-semibold">Acerca de los ACOMs</h1> 
            </button>  
            <button class="sm:h-80 sm:w-80 lg:h-80 lg:w-3/6 lg:ml-5 md:ml-5 sm:ml-8 bg-azul-iconos hover:bg-sky-500 rounded-md" onClick="location.href='https://drive.google.com/file/d/1cLGc2MPb5KjEcdADWPeb2g6oK_Pj-kFO/view'">
                <img class="h-28 w-28 sm:ml-10 md:ml-24 lg:ml-11 " src="{{asset('img/androide.png')}}" >  
                <h1 class="text-white mt-10 font-semibold">Descarga la app</h1> 
            </button> 
           </div> 
           <button type="button" onClick="location.href='/informacion'" class="text-white mt-7 font-sans text-center"> 
          Reestablecer contraseña
        </button> 
        </div>
    </div>
      
   


</body>

</html>
