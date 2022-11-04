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
            <div class="flex h-20 items-center flow-root">
                <div class="flex items-center ">
                   <div class="flex-shrink-0">
                      <img class="h-15 w-16" src="{{asset('img/logoITTG.png')}}">
                    </div>
                    <div class="mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8">
                        <h1 class="text-white text-center font-bold text-3xl">ITTG</h1>
                    </div>
                    <div class="max-w-7xl py-4 px-4 sm:px-6 lg:px-8 relative float-right ">
                    <button onClick="location.href='/inicioInv'" class="text-gray-300 hover:bg-sky-600 hover:text-white px-3 py-2 rounded-md text-md font-bold " type="button" onClick="location.href='/'"  >  
                      Regresar
                    </button>
                    </div>
                </div>
            </div>
      </nav>

      <div class="h-screen w-full flex">
      <div class="h-full w-3/6 bg-slate-200"> 
        <h1 class="text-center text-sky-800 mt-32 text-3xl font-mono ">¿Qué es un Acom?</h1>
        <img class="h-auto w-auto" src="{{asset('img/imgD.png')}}">
        <button class="ml-28 h-16 w-24 pl-3 rounded-md bg-white shadow-md"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="68" height="50" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg>
        </button>
        <button class="ml-36 h-16 w-24 pl-3 rounded bg-white shadow-md"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="68" height="50" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
          </svg>
        </button>
      </div>  
      <div id="sliderContainer" class="h-full w-3/4"> 
        <div id="slider" class="flex w-full bg-pink-300">
          <li>
            <h1 class="p-10 text-2xl font-bold text-center">Prueba</h1>
            <img class="mx-80 h-64 w-64" src="{{asset('img/copiar.png')}}" alt="informacion">
            <p class="p-10">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet maxime id impedit aut voluptatem voluptate sapiente quibusdam dolores. Ex aliquid illum deserunt reiciendis eaque eligendi reprehenderit distinctio, amet nostrum accusamus!</p>
          </li> 
         </div>
        

      </div>  

      </div> 

</body>     