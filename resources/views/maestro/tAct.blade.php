@extends('maestro.menuPD')

@section('titulo')
Listado de actividades
@endsection

@section('content')
    <div class="pl-8 mt-20 flow-root">
        <div class="float-left">
          <h1 class="font-bold ml-14 text-3xl" >Listado de actividades</h1>
        </div>

        <div class="flex gap-2 float-right bg-azul-tec p-3 rounded-md mr-36">
            <input type="text" placeholder="" class="rounded-md p-2 text-stone-500">
            <button class="bg-white px-2 rounded-md border-b">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </button>
        </div>
    </div> 
    <div class="sm:flex flex-wrap lg:flex flex-row mt-5 ml-20">
        <div class="h-auto w-5/12">
            <li class="w-auto" style="list-style:none">
                <a class="flex items-center active-nav-link bg-azul-grisecito py-4 pl-4 nav-item rounded-3xl px-4 duration-300 cursor-pointer hover:bg-azul-menuL"
                    > 
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Nombre de la actividad</span>
                        <span class="text-xs text-white font-sans">Actividad 1</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Tipo de ACOM</span>
                        <span class="text-xs text-white font-sans">Acom-1:Tutorías</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Fecha de inicio</span>
                        <span class="text-xs text-white font-sans">01-01-2022</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Fecha de fin</span>
                        <span class="text-xs text-white font-sans">02-02-2022</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>

                    <button class="rounded-full h-6 w-6 text-white"  onclick="submenu1()" > 
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                          </svg>
                    </button>    
                </a>
                
                <div id="submenuDiv" class="flex flex-row w-auto mx-3 bg-azul-submenu rounded-md text-gray-200 font-bold">
                   <div class="flex flex-col w-3/5">
                    <h1 class="p-2 text-xs rounded-md mt-1">
                        Código:
                    </h1>
                    <p class="font-sans text-xs ml-10">#00000</p>
                    <h1 class="p-2 text-xs rounded-md mt-1">
                        Departamento:
                    </h1>
                    <p class="font-sans text-xs ml-10">Departamento de Electrica</p>
                    <h1 class="p-2 text-xs rounded-md mt-1">
                        Descripcion de la Actividad:
                    </h1>
                    <p class="font-sans text-xs px-10 ">Colaborar en proyecto de investigación, cuya líder es la M.C. Rosy Ilda Basave Torres</p>
                   </div>

                   <div class="flex flex-col">
                   <div class="flex flex-row mt-8">
                    <button onClick="location.href='/SolicitudesR'" class="rounded-full h-10 w-20 bg-azul-b1  hover:bg-sky-600  text-xs text-white" > 
                        Solicitudes Recibidas
                    </button>  
                    <button onClick="location.href='/AlumnosA'" class="rounded-full h-10 w-20 ml-2 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                        Alumnos Aceptados
                    </button>  
                    <button onClick="location.href='/prueba'" class="rounded-full h-10 w-20 ml-2 mr-2 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                        Liberar alumnos
                    </button>  
                   </div>
                   <div class="flex flex-row mt-8">
                    <button  class="rounded-full h-10 w-28 ml-6 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                        Gestionar PDF Inscritos
                    </button>  
                    <button  onClick="location.href='/modificarAct'" class="rounded-full h-10 w-20 ml-2 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                        Modificar 
                   </div>

                   </div>
            </li>

            <li class="w-auto mt-3" style="list-style:none">
                <a class="flex items-center active-nav-link bg-azul-grisecito py-4 pl-4 nav-item rounded-3xl px-4 duration-300 cursor-pointer hover:bg-azul-menuL"
                    >
                      
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Nombre de la actividad</span>
                        <span class="text-xs text-white font-sans">Actividad 1</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Tipo de ACOM</span>
                        <span class="text-xs text-white font-sans">Acom-1:Tutorías</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Fecha de inicio</span>
                        <span class="text-xs text-white font-sans">01-01-2022</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Fecha de fin</span>
                        <span class="text-xs text-white font-sans">02-02-2022</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>

                    <button id="submenuBtn2" class="rounded-full h-6 w-6 text-white"  onclick="submenu2()" > 
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                          </svg>
                    </button>    
                </a>
                
                <div id="submenuDiv2" class="flex flex-row w-auto mx-3 bg-azul-submenu rounded-md text-gray-200 font-bold" id="submenu">
                  
                    <div class="flex flex-col w-3/4">
                    <h1 class="p-2 text-xs rounded-md mt-1">
                        Código:
                    </h1>
                    <p class="font-sans text-xs ml-10">#00000</p>
                    <h1 class="p-2 text-xs rounded-md mt-1">
                        Departamento:
                    </h1>
                    <p class="font-sans text-xs ml-10">Departamento de Electrica</p>
                    <h1 class="p-2 text-xs rounded-md mt-1">
                        Descripcion de la Actividad:
                    </h1>
                    <p class="font-sans text-xs px-10 ">Colaborar en proyecto de investigación, cuya líder es la M.C. Rosy Ilda Basave Torres</p>
                   </div>
                   

                <div class="flex flex-col">
                    <div class="flex flex-row mt-8">
                     <button class="rounded-full h-10 w-20 bg-azul-b1 hover:bg-sky-600 text-xs text-white" > 
                         Solicitudes Recibidas
                     </button>  
                     <button class="rounded-full h-10 w-20 ml-2 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                         Alumnos Aceptados
                     </button>  
                     <button class="rounded-full h-10 w-20 ml-2 mr-2 bg-azul-b1 hover:bg-sky-600 text-xs text-white" > 
                         Liberar alumnos
                     </button>  
                    </div>
                    <div class="flex flex-row mt-8">
                     <button class="rounded-full h-10 w-28 ml-6 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                         Gestionar PDF Inscritos
                     </button>  
                     <button class="rounded-full h-10 w-20 ml-2 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                         Modificar 
                    </div>

                  </div>
                </div>
               
            </li>
        </div>  
        <div class="h-auto w-5/12 ml-10">
            <li class="w-auto" style="list-style:none">
                <a class="flex items-center active-nav-link bg-azul-grisecito py-4 pl-4 nav-item rounded-3xl px-4 duration-300 cursor-pointer hover:bg-azul-menuL"
                    > 
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Nombre de la actividad</span>
                        <span class="text-xs text-white font-sans">Actividad 1</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Tipo de ACOM</span>
                        <span class="text-xs text-white font-sans">Acom-1:Tutorías</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Fecha de inicio</span>
                        <span class="text-xs text-white font-sans">01-01-2022</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="flex flex-col w-full items-center">
                        <span class="text-[15px] text-xs  text-white font-bold">Fecha de fin</span>
                        <span class="text-xs text-white font-sans">02-02-2022</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>

                    <button id="submenuBtn" class="rounded-full h-6 w-6 text-white"  onclick="submenu1()" > 
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                          </svg>
                    </button>    
                </a>
                
                <div id="submenuDiv" class="flex flex-row w-auto mx-3 bg-azul-submenu rounded-md text-gray-200 font-bold">
                   <div class="flex flex-col w-3/5">
                    <h1 class="p-2 text-xs rounded-md mt-1">
                        Código:
                    </h1>
                    <p class="font-sans text-xs ml-10">#00000</p>
                    <h1 class="p-2 text-xs rounded-md mt-1">
                        Departamento:
                    </h1>
                    <p class="font-sans text-xs ml-10">Departamento de Electrica</p>
                    <h1 class="p-2 text-xs rounded-md mt-1">
                        Descripcion de la Actividad:
                    </h1>
                    <p class="font-sans text-xs px-10 ">Colaborar en proyecto de investigación, cuya líder es la M.C. Rosy Ilda Basave Torres</p>
                   </div>

                   <div class="flex flex-col">
                   <div class="flex flex-row mt-8">
                    <button onClick="location.href='/SolicitudesR'" class="rounded-full h-10 w-20 bg-azul-b1  hover:bg-sky-600  text-xs text-white" > 
                        Solicitudes Recibidas
                    </button>  
                    <button onClick="location.href='/AlumnosA'" class="rounded-full h-10 w-20 ml-2 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                        Alumnos Aceptados
                    </button>  
                    <button onClick="location.href='/prueba'" class="rounded-full h-10 w-20 ml-2 mr-2 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                        Liberar alumnos
                    </button>  
                   </div>
                   <div class="flex flex-row mt-8">
                    <button  class="rounded-full h-10 w-28 ml-6 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                        Gestionar PDF Inscritos
                    </button>  
                    <button  onClick="location.href='/modificarAct'" class="rounded-full h-10 w-20 ml-2 bg-azul-b1  hover:bg-sky-600 text-xs text-white" > 
                        Modificar 
                   </div>

                   </div>

            </li>
        </div>    
    </div>  

    <script type="text/javascript">
        /*
        function submenu(id) {
        x = 0;
        var element = document.getElementsByClassName(id +''+x++);
            for(let i = 0; i <x.length;i++){
                x[i].classList.toggle("hidden");
            }
            console.log(element);
        }*/
        
        function submenu1() {
           document.querySelector("#submenuDiv").classList.toggle("hidden");
        }
    
        function submenu2() {
            document.querySelector("#submenuDiv2").classList.toggle("hidden");
            document.querySelector("#submenuBtn2").classList.toggle("rotate-0");
        }
    
    
    
        submenu1();
        submenu2();
       
    
    </script>
   
    @endsection
 
   


   
      
   