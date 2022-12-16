<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema ACOMS - formulario</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-azul-tec">
        <div class="w-full px-4 sm:px-6 lg:px-8 ">
            <div class="flex h-20 items-center flow-root">
                <div class="flex items-center ">
                   <div class="flex-shrink-0">
                      <img class="h-15 w-16" src="{{asset('img/logoITTG.png')}}">
                    </div>
                    <div class="mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8">
                        <h1 class="text-white ml-20 text-center font-bold text-3xl">ITTG</h1>
                    </div>
                    <div class="max-w-7xl py-4 px-4 sm:px-6 lg:px-8 relative float-right ">
                    <button  class="text-gray-300 hover:bg-sky-600 hover:text-white px-3 py-2 rounded-md text-md font-bold " type="button" onClick="location.href='/inicio'"  >  
                      Regresar
                    </button>
                    </div>
                </div>
            </div>
      </nav>
      <div class="flex justify-center h-full w-full bg-stone-100">  
        <div class="flex justify-center mt-10 h-auto lg:w-2/6 md:2/6- sm:w-auto bg-white rounded-md">
            <div class="m-12">
                <img class="h-40 w-40 ml-28" src="{{asset('img/profile.png')}}" alt="">
                <h1 class="mt-6 text-center text-xl font-bold text-gray-900 ">
                    Cambio de Usuario y Contraseña de
                </h1>
                <h1 class="mt-1 text-center text-xl font-bold text-gray-900 ">
                    M.C. Octavio Ariosto Rios Tercero
                </h1>
                <div class="mt-4">
                <form method="POST">
                <label for="nombreUsuario" class="font-sans text-gray-500">Nombre de usuario:</label>
                <input id="nombreUsuario" name="fechaInicio" type="text"
                 class="p-3 w-full h-16 rounded-3xl shadow-md bg-stone-200 " />
                
                 <label for="password" class="font-sans text-gray-500">Contraseña:</label>
                 <input id="password" name="password" type="password"
                  class="p-3 w-full h-16 rounded-3xl shadow-md bg-stone-200" />
                  
                  <button type="submit" class="h-12 w-64 mt-5 ml-20 bg-azul-tec text-white rounded-3xl">Guardar cambios</button>
                <div>
                </form>
            </div>

        </div>    
        </div>
      </div>

       


    

</body>

</html>
