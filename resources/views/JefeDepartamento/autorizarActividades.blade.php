@extends('maestro.contenidoT')

@section('titulo')
Autorizar actividades
@endsection

@section('content')
    <div class="pl-8 mt-20 flow-root">
        <div class="float-left">
          <h1 class="font-bold ml-14 text-3xl">Autorizar actividades</h1>
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
                <th scope="col" class="py-3 px-2">
                    Nombre de la actividad
                </th>
                <th scope="col" class="py-3 px-2  bg-gray-50 dark:bg-gray-800">
                    Código
                </th>
                <th scope="col" class="py-3 px-2">
                     Tipo de ACOM
                </th> 
                <th scope="col" class="py-3 px-2 bg-gray-50 dark:bg-gray-800">
                   Departamento al que pertenece
                 </th>
                 <th scope="col" class="py-3 px-2">
                    Encargado de la actividad
                  </th>
                 <th scope="col" class="py-3 px-8  bg-gray-50 dark:bg-gray-800">
                    Descripción de la actividad 
                </th>
                <th scope="col" class="py-3 px-4">
                    Fecha de inicio
                </th>
                <th scope="col" class="py-3 px-6  bg-gray-50 dark:bg-gray-800">
                  Fecha de finalización
                </th>
                <th scope="col" class="py-3 px-2">
                   Autorizar 
                </th>
                <th scope="col" class="py-3 px-2  bg-gray-50 dark:bg-gray-800">
                    Rechazar
                  </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700 text-xs">
                <td class="py-4 px-2">
                    Expositor en el 31 Seminario de Investigación en Ingeniería en Sistemas Computacionales
                </td>
                <td class="py-4 px-2  bg-gray-50 dark:bg-gray-800">
                    OART05
                </td>
                <td class="py-4 px-2">
                    Acom-2: Proyectos de Investigación
                </td>
                <td class="py-4 px-2 bg-gray-50 dark:bg-gray-800">
                   sistemas
                </td>
                <td class="py-4 px-2">
                    hector
                 </td>
                <td class="py-4 px-2  bg-gray-50 dark:bg-gray-800">
                    Alumnos que cursan Taller de Investigación II que participen en el Seminario de Investigación indicado, y que el promedio obtenido en el dictamen sea 80 como mínimo.
                </td>
                <td class="py-4 px-4 ">
                   22 Agosto 2022
                </td>
                <td class="py-4 px-4 bg-gray-50 dark:bg-gray-800">
                    22 Agosto 2022
                 </td>
                <td class="py-4 px-2 ">
                    <button onClick="location.href='/'" class=" w-14 h-12 ml-3
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hand-thumbs-up-fill ml-3" viewBox="0 0 16 16">
                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                      </svg>
                    </button>
                </td>
                <td class="py-4 px-2  bg-gray-50 dark:bg-gray-800">
                    <button onClick="location.href='/'" class="w-14 h-12 ml-3
                    bg-sky-500 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hand-thumbs-down-fill ml-3" viewBox="0 0 16 16">
                        <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z"/>
                      </svg>
                    </button>
                </td>
            
            </tr>
           
           
            
           
        </tbody>
    </table>
</div>

    


@endsection
 
   


   
      
   