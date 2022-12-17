@extends('maestro.contenidoT')
@section('content')
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-8 mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-spacing-2">
            <thead class="text-xs text-white uppercase bg-sky-900 dark:bg-gray-700 dark:text-gray-400">

                <tr>
                    <th scope="col" class="py-3 px-6">
                        Nombre de la Actividad
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Codigo de la Actividad
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Tipo de Acom
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Departamento al que pertenece la actividad
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Encargado de la Actividad
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Descripcion de la Actividad
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Fecha de inicion de la Actividad
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Fecha de finalizacion de la Actividad
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Alumnos Aprobados
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Alumnos No Aprobados
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Gestionar PDF
                    </th>
                    
                     
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      Proyecto 1
                    </th>
                    <td class="py-4 px-6">
                        Ejemplo
                    </td>
                    <td class="py-4 px-6">
                        Acom-2
                    <td class="py-4 px-6">
                        Departamento de Sistemas y Computación
                    </td>
                    <td class="py-4 px-6">
                        Admi
                    </td>
                    <td class="py-4 px-6">
                        Colaborar en proyecto de investigación
                    </td>
                    <td class="py-4 px-6">
                        2020-08-03
                    </td>
                    <td class="py-4 px-6">
                        2020-12-18
                    </td>
                    <td class="py-4 px-6">
                        <button class="h-10 w-16 bg-sky-500 rounded-md text-white text-base font-sans ">
                            Ver
                        </button>
                    </td>
                    <td class="py-4 px-6">
                        <button class="h-10 w-16 bg-sky-500 rounded-md text-white text-base font-sans">
                            Ver
                        </button>
                    </td>
                    <td class="py-4 px-6">
                        <button class="h-10 w-20 bg-sky-500 rounded-md text-white text-sm font-sans">
                            PDF aprobados
                        </button>
                        <button class="h-10 w-20 bg-red-500 rounded-md text-white text-sm font-sans mt-3">
                            PDF reprobados
                        </button>
                    </td>
                    
                </tr>
                <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Proyecto 2
                    </th>
                    <td class="py-4 px-6">
                        Proyectos de investigación
                    </td>
                    <td class="py-4 px-6">
                       Acom-2
                    </td>
                    <td class="py-4 px-6">
                        sistemas
                    </td>
                    <td class="py-4 px-6">
                        Admi
                    </td>
                    <td class="py-4 px-6">
                        Colaborar en proyecto de investigación
                    </td>
                    <td class="py-4 px-6">
                        2020-08-03
                    </td>
                    <td class="py-4 px-6">
                        2020-12-18
                    </td>
                    <td class="py-4 px-6">
                        <button class="h-10 w-16 bg-sky-500 rounded-md text-white text-base font-sans ">
                            Ver
                        </button>
                    </td>
                    <td class="py-4 px-6">
                        <button class="h-10 w-16 bg-sky-500 rounded-md text-white text-base font-sans">
                            Ver
                        </button>
                    </td>
                    <td class="py-4 px-6">
                        <button class="h-10 w-20 bg-sky-500 rounded-md text-white text-sm font-sans">
                            PDF aprobados
                        </button>
                        <button class="h-10 w-20 bg-red-500 rounded-md text-white text-sm font-sans mt-3">
                            PDF reprobados
                        </button>
                    </td>    
                </tr>
                
            </tbody>
        </table>
    </div>
    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-10">
        <div class="flex flex-1 justify-between sm:hidden">
          <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
          <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
        </div>
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
          <div>
            <p class="text-sm text-gray-700">
              Mostrando
              <span class="font-medium">1</span>
              a
              <span class="font-medium">10</span>
              de
              <span class="font-medium">97</span>
              resultados
            </p>
          </div>
          <div>
            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
              <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                <span class="sr-only">Anterior</span>
                <!-- Heroicon name: mini/chevron-left -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                </svg>
              </a>
              
              <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
              <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
              <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
              <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
              <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
              <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
              <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
              <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                <span class="sr-only">Siguiente</span>
                <!-- Heroicon name: mini/chevron-right -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
              </a>
            </nav>
          </div>
        </div>
      </div>

@endsection      
      

    
