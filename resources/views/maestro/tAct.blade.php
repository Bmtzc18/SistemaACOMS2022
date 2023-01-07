@extends('maestro.contenidoT')

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
   
   
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-8 mt-4">
    <table class="w-full text-sm  text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs border-b text-gray-700 uppercase dark:text-gray-400">
            <tr>
                
                <th scope="col" class="py-3 px-3 bg-gray-50 dark:bg-gray-800">
                   Mostrar a alumnos
                </th>
                <th scope="col" class="py-3 px-2">
                    Nombre de la actividad
                </th>
                <th scope="col" class="py-3 px-2 bg-gray-50 dark:bg-gray-800">
                     Tipo de ACOM
                </th>
                <th scope="col" class="py-3 px-2">
                    Código
                </th>
                <th scope="col" class="py-3 px-2 bg-gray-50 dark:bg-gray-800">
                   Departamento
                 </th>
                 <th scope="col" class="py-3 px-8">
                    Descripción de la actividad 
                </th>
                <th scope="col" class="py-3 px-4 bg-gray-50 dark:bg-gray-800">
                    Periodo escolar
                </th>
                <th scope="col" class="py-3 px-6">
                  Fechas de la actividad 
                </th>
                <th scope="col" class="py-3 px-2 bg-gray-50 dark:bg-gray-800">
                   Solicitudes recibidas 
                </th>
                <th scope="col" class="py-3 px-2">
                    Alumnos aceptados
                  </th>
                <th scope="col" class="py-3 px-2 bg-gray-50 dark:bg-gray-800">
                   PDF aceptados
                </th>
                <th scope="col" class="py-3 px-2">
                   Modificar actividad 
                </th>
                <th scope="col" class="py-3 px-2 bg-gray-50 dark:bg-gray-800">
                    Liberar alumnos 
                 </th>
                 <th scope="col" class="py-3 px-2">
                   Alumnos aprobados
                 </th>
                 <th scope="col" class="py-3 px-2 bg-gray-50 dark:bg-gray-800">
                    Alumnos no aprobados 
                 </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700 text-xs">
                <th scope="row" class="py-4 px-3 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    
                    <label class="inline-flex relative items-center cursor-pointer ml-2">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="w-11 h-6 bg-sky-500 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                      </label>
                </th>
                <td class="py-4 px-2">
                    Expositor en el 31 Seminario de Investigación en Ingeniería en Sistemas Computacionales
                </td>
                <td class="py-4 px-2 bg-gray-50 dark:bg-gray-800">
                    Acom-2: Proyectos de Investigación
                </td>
                <td class="py-4 px-2">
                    OART05
                </td>
                <td class="py-4 px-2 bg-gray-50 dark:bg-gray-800">
                    Departamento de Sistemas y Computación
                </td>
                <td class="py-4 px-2">
                    Alumnos que cursan Taller de Investigación II que participen en el Seminario de Investigación indicado, y que el promedio obtenido en el dictamen sea 80 como mínimo.
                </td>
                <td class="py-4 px-4 bg-gray-50 dark:bg-gray-800">
                    Agosto-Diciembre de 2022
                </td>
                <td class="py-4 px-6">
                    Inicio: 2022-12-08 Fin: 2022-12-09
                </td>
                <td class="py-4 px-2 bg-gray-50 dark:bg-gray-800">
                    <button onClick="location.href='/SolicitudesR'" class=" w-14 h-12 ml-3
                    bg-sky-500 rounded-md text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-add ml-3" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                          </svg>
                    </button>
                </td>
                <td class="py-4 px-2">
                    <button onClick="location.href='/AlumnosA'" class="w-14 h-12 ml-3
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-check ml-3" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                      </svg>
                    </button>
                </td>
                <td class="py-4 px-2 bg-gray-50 dark:bg-gray-800">
                    <button onClick="location.href='/'" class=" w-14 h-12 ml-3
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-vcard-fill ml-3" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
                      </svg>
                    </button>
                </td>
                <td class="py-4 px-2">
                    <button onClick="location.href='/modificarAct'" class=" w-14 h-12 ml-2
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square ml-3" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                    </button>
                </td>
                <td class="py-4 px-2 bg-gray-50 dark:bg-gray-800">
                    <button onClick="location.href='/liberarAlumnos'" class="w-14 h-12 ml-1
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-up ml-3" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                      </svg>
                    </button>
                </td>
                <td class="py-4 px-2">
                    <button onClick="location.href='/alumnosAprobados'" class=" w-14 h-12 ml-3
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-check-fill ml-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg>
                    </button>
                </td>
                <td class="py-4 px-2 bg-gray-50 dark:bg-gray-800">
                    <button onClick="location.href='/alumnosNAprobados'" class=" w-14 h-12 ml-3
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-dash-fill ml-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg>
                    </button>
                </td>
                
            </tr>
           
           
            
           
        </tbody>
    </table>
</div>

    


@endsection
 
   


   
      
   