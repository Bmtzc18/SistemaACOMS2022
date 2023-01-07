@extends('maestro.contenidoT')

@section('titulo')
Listado de actividades pendientes
@endsection

@section('content')
    <div class="pl-8 mt-20 flow-root">
        <div class="float-left">
          <h1 class="font-bold ml-14 text-3xl" >Listado de actividades pendientes</h1>
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
                    Estatus
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
                   Modificar
                </th>
                <th scope="col" class="py-3 px-2">
                    Eliminar
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
                    <button onClick="location.href='/'" class=" w-14 h-12 ml-3
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-fill ml-3" viewBox="0 0 16 16">
                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
                      </svg>
                    </button>
                </td>
                <td class="py-4 px-2">
                    <button onClick="location.href='/'" class="w-14 h-12 ml-3
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eraser-fill ml-3" viewBox="0 0 16 16">
                        <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                      </svg>
                    </button>
                </td>
            
            </tr>
           
           
            
           
        </tbody>
    </table>
</div>

    


@endsection
 
   


   
      
   