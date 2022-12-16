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
</nav>

<div class="min-h-6xl max-w-7xl mx-2 lg:mx-20 xl:mx-20 my-10 rounded-xl shadow-xl justify-center bg-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2  "
    style="background-image: url(https://i.pinimg.com/originals/c2/02/34/c202347d24840b56d99fc6691dcd0e2e.jpg);">
    <a class="hidden lg:block xl:block text-right mt-52 pr-10 justify-end tracking-widest text-blue-200 font-bold text-8xl">TecNM Campus Tuxtla</a>
    <div class="bg-white flex justify-center md:w-20/40 p-20 rounded-lg drop-shadow-2xl ">
    <div class="w-full max-w-md space-y-8">
        <div>
            <img class="mx-auto h-20 w-20 xl:h-28 xl:w-28 lg:h-28 lg:w-28  " src="{{ asset('img/group.png') }}" alt="ITTG">
            <h2 class="mt-6 text-center text-4xl sm:t justify-center font-bold tracking-tight text-gray-900 ">
                Bienvenido</h2>
                <h2 class="mt-1 text-center text-2xl justify-center font-sans tracking-tight text-gray-900 ">
                  Inicié sesión</h2>
        </div>
        <form class="mt-8 space-y-6" action="#" method="POST">
            <input type="hidden" name="remember" value="true">

            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label for="usuario" class="sr-only">Usuario</label>
                    <input id="usuario" name="usuario" type="usuario" autocomplete="usuario" required
                        class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-900 focus:outline-none focus:ring-blue-900 sm:text-sm"
                        placeholder="Usuario">
                </div>
                <div>
                    <label for="password" class="sr-only">Contraseña</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-900 focus:outline-none focus:ring-blue-900 sm:text-sm"
                        placeholder="Contraseña">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Recuerdame</label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-blue-800 hover:text-sky-900">Olvidaste tu
                        contraseña?</a>
                </div>
            </div>


            <div>
                <button type="submit" 
                    class="group relative flex w-full justify-center rounded-md border border-transparent bg-sky-800 py-2 px-4 text-sm font-medium text-white hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <!-- Heroicon name: mini/lock-closed -->
                        <svg class="h-5 w-5 text-white group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    Entrar
                </button>
            </div>
        </form>
    </div>

</div>
</div>
</div>
