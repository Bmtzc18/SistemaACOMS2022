@extends('maestro.contenidoT')


@section('content')
<div class="flex justify-center">  
    <div class="flex justify-center mt-10 h-auto w-auto md:w-1/2 lg:w-2/6 bg-stone-100 shadow-xl rounded-md mb-10">
        <div class="m-12">
            <img class="h-40 w-40 ml-28 sm:ml-56 md:ml-24 lg:ml-28" src="{{asset('img/profile.png')}}" alt="">
            <h1 class="mt-6 text-center text-xl font-bold text-gray-900 ">
                Cambio de Usuario y Contraseña de
            </h1>
            <h1 class="mt-1 text-center text-xl font-bold text-gray-900 ">
                M.C. Octavio Ariosto Rios Tercero
            </h1>
            <div class="mt-4">
            <form method="POST">
            <label for="nombreUsuario" class="font-sans text-gray-500">Nombre de usuario:</label>
            <input id="nombreUsuario" name="nombreUsuario" type="text"
             class="p-3 w-full h-16 rounded-3xl shadow-md bg-stone-200"/>
            
             <label for="password" class="font-sans text-gray-500">Contraseña:</label>
             <input id="password" name="password" type="password"
              class="p-3 w-full h-16 rounded-3xl shadow-md bg-stone-200" />
              
              <button type="submit" class="h-12 w-64 mt-5 ml-16 sm:ml-40 md:ml-14 lg:ml-20 bg-azul-tec text-white rounded-3xl">Restablecer contraseña</button>
            <div>
            </form>
        </div>

    </div>    
    </div>
  </div>
@endsection
       


    

