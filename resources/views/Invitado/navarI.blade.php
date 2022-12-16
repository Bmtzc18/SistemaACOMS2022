<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema ACOMS - formulario</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col">
        <nav class="px-6 bg-azul-tec">
            <div class="h-20 items-center flow-root">
                <div class="flex items-center ">
                   <div class="flex-shrink-0">
                      <img class="h-15 w-16" src="{{asset('img/logoITTG.png')}}">
                    </div>
                    <div class="mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8">
                        <h1 class="text-white text-center font-bold text-3xl">ITTG</h1>
                    </div>
                    <div class="max-w-7xl py-4 px-4 sm:px-6 lg:px-8 relative float-right ">
                    <button class="text-gray-300 hover:bg-sky-600 hover:text-white px-3 py-2 rounded-md text-md font-bold " type="button" onClick="location.href='/principalD'"  >  
                      Regresar
                    </button>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="flex-grow bg-stone-100">
            @yield('content')
        </div>
        
        <footer class="py-3 text-stone-500 text-center border-t font-normal italic text-md object-contain">
            TecNM {{ now()->format('d-m-Y') }} -
            <a href="https://www.tecnm.mx/" class="hover:underline">TecNM.com</a>
        </footer>
               
      </div>

</body>     