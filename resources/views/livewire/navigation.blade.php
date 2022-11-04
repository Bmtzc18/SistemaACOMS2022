<div class="min-h-full">

    <!-- Nav -->
    <nav class="bg-azul-tec">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">

            <div class="relative flex items-center justify-between h-20">
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <button id="sidebarBtn1" class="px-4 py-2 text-gray-700 text-2xl rounded-lg hover:bg-sky-800 hidden sm:block md:block lg:block xl:block"
                    onclick="openSB()">
                    <span class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 m-auto"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>

                    </span>
                </button>

                <button id="sidebarBtn2" class="px-4 py-2 text-gray-700 text-2xl rounded-lg hover:bg-sky-800 sm:hidden"
                    onclick="sidebarM()">
                    <span class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 m-auto"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                </button>


                    <form method="GET" class="w-full invisible sm:visible">
                        <div class="relative text-gray-500 ml-6 px-3 pt-5">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <div class="inline-flex gap-3 mt-2">
                                <button type="submit" class="mt-2 pt-1 focus:outline-none focus:shadow-outline">
                                    <span class="text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </span>
                                </button>
                                <input type="search"
                                    class="mt-3 py-2 text-md text-white w-full rounded-md pl-10 bg-transparent placeholder-white focus:outline-none focus:bg-sky-800 focus:text-"
                                    placeholder="Buscar">
                                </div>
                            </span>
                        </div>
                    </form>

                </div>

                <div class="mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:mr-96 px-8">
                    <h1 class="text-white text-center font-bold text-3xl">ITTG</h1>
                </div>


                <div class="ml-3 relative">
                    <div>
                        <button id="notificaBtn"
                            class="bg-white rounded-full text-xl text-gray-700 px-4 py-2 focus:outline-none"
                            onclick="wNotifica()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </button>
                    </div>
                    <div id="notificaDiv"
                        class="origin-top-right absolute right-0 mt-2 w-64 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <p class="p-2 text-sm text-gray-700">Sin notificaciones...</p>
                    </div>
                </div>

                <div class="relative ml-3" x-data="{ open: false }">
                    <div>
                        <button id="profileBtn" type="button"
                            class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-expanded="false" aria-haspopup="true" onclick="wProfile()">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-15 w-10 rounded-full" src="{{ asset('img/profile.png') }}" alt="Perfil">
                        </button>
                    </div>

                    <div id="profileDiv"
                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- x-show metodo para ocultar, se especifica lo que va a ocultar dentro del componentes -->
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-0">Tu perfil</a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-1">Herramientas</a>

                        <a href="/" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-2">Cerrar sesión</a>
                    </div>
                </div>


            </div>
        </div>
    </nav>


    <!-- Sidebar -->
    <main class="flex bg-gray-100">
        <aside class="sidebar bg-azul-tec relative h-screen w-72 md:w-65 hidden sm:block shadow-xl h-auto left-[-400px] peer:transition ease-out delay-150 duration-200">
            <div class="p-6 ">
                <a href="#" class="text-white text-3xl font-semibold hover:text-gray-300">
                    Bienvenido
                </a>
            </div>
            <nav class="text-white text-base font-semibold pt-3">
                <a href="/"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600">
                    <i class="bi bi-house-door-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                      
                    <span class="text-[15px] text-lg ml-4 text-gray-200 font-bold">Principal</span>
                </a>

               
                <a class="flex items-center active-nav-link text-white py-4 pl-6 nav-item rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600"
                    onclick="dropdown()">
                    <i class="bi bi-chat-left-text-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                      </svg>
                      
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] text-lg ml-4 text-gray-200 font-bold">Registrar</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                </a>
                
                <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold" id="submenu">
                    <h1 onClick="location.href='/registro'" class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1">
                        Proyecto
                    </h1>
                    <h1 class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1">
                        Encargado
                    </h1>
                    <h1 class="cursor-pointer p-2 hover:bg-sky-600 rounded-md mt-1">
                        Departamento
                    </h1>
                </div>

                <a href="#"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600">
                    <i class="bi bi-house-door-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                      </svg>
                    <span class="text-[15px] text-lg ml-4 text-gray-200 font-bold">Documentos</span>
                </a>


                <a href="/"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item rounded-md px-4 duration-300 cursor-pointer hover:bg-sky-600">
                    <i class="bi bi-house-door-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                      </svg>
                    <span class="text-[15px] text-lg ml-4 text-gray-200 font-bold">Salir</span>
                </a>
            </nav>
        </aside>


        


        <!-- Sidebar móvil -->
        <div id="sidemDiv" class="fixed top-20 w-full h-screen overflow-y-hidden absolute">

            <header class="bg-azul-tec w-full py-5 px-6 sm:hidden">

                <nav class="text-white text-base font-semibold pt-3">
                    <a href="/" class="block text-white opacity-75 hover:opacity-100 py-4 pl-6">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Principal</span>
                    </a>


                    <a class="block text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item" onclick="dropdown()">
                        <i class="bi bi-chat-left-text-fill"></i>
                        <div class="flex justify-between w-full items-center">
                            <span class="text-[15px] ml-4 text-gray-200 font-bold">Registrar</span>
                            <span class="text-sm rotate-180" id="arrow">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </div>
                    </a>

                    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold" id="submenu">
                        <h1 onClick="location.href='/'"
                            class="cursor-pointer p-2 block text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item mt-1">
                            Proyecto
                        </h1>
                        <h1
                            class="cursor-pointer p-2 block text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item mt-1">
                            Encargado
                        </h1>
                        <h1
                            class="cursor-pointer p-2 block text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item mt-1">
                            Departamento
                        </h1>
                    </div>

                    <a href="#" class="block text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Documentos</span>
                    </a>


                    <a href="#" class="block text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Salir</span>
                    </a>
                </nav>
            </header>
        </div>
        
            
              
            <div class="px-4 py-6 w-full h-screen justify-between mt-20">
                <div class="p-6">
                    <img class="h-64 w-64" src="{{asset('img/logoITTG.png')}}" alt="">
                </div>
                <div class="my-10 text-center h-4/5 w-full md:w-10/18 p-7 justify-center lg:mt-32 ">
                 <p class="font-sans text-lg"> El Tecnologico Nacional de Mexico Campus Tuxtla Gutierrez o Instituto Tecnológico de Tuxtla Gutiérrez; es una pequeña universidad pública de tecnología, ubicada en la Ciudad de Tuxtla Gutiérrez, Chiapas, México. </p>
                </div>
           
            </div>    
              
     
          
      
    </main>
    <footer class="text-center p-10 text-gray-500 uppercase border-t italic text-sm ">
        Tecnologico Nacional de México-Todos los derechos reservados {{ now()->year }}
    </footer>

</div>


<!-- Funciones -->
<script type="text/javascript">

    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }

    function wProfile() {
        document.querySelector("#profileDiv").classList.toggle("hidden");
        document.querySelector("#profileBtn").classList.toggle("rotate-0");
    }


    function wNotifica() {
        document.querySelector("#notificaDiv").classList.toggle("hidden");
        document.querySelector("#notificaBtn").classList.toggle("rotate-0");
    }

    function sidebarM() {
        document.querySelector("#sidemDiv").classList.toggle("hidden");
    }

    function openSB() {
            document.querySelector('.sidebar').classList.toggle('left-[-400px]');
    }

    sidebarM();
    wProfile();
    dropdown();
    wNotifica();

</script>
