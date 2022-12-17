@extends('maestro.contenidoT')

@section('content')
    <div class="mt-10">
        <h1 class="text-center text-3xl font-bold">Solicitudes para la Actividad</h1>
        <div class="flex flex-row justify-end mt-10 mr-20">
          <button class="w-24 h-10 mr-8 text-white font-semibold bg-green-500 rounded-md">Aceptar</button>
          <button class="w-24 h-10 text-white font-semibold bg-red-500 rounded-md">Rechazar</button>
        </div>    
    </div>
      <div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-8 mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-spacing-2">
            <thead class="text-xs text-white uppercase bg-sky-800 dark:bg-gray-700 dark:text-gray-400">

                <tr>
                    <th scope="col" class="py-3 px-6">
                        <input id="myCheckbox" type="checkbox" value="" class="w-5 h-5 ml-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600">
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Apellidos
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nombre(s)
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Usuario
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Carrera
                    </th>  
                    <th scope="col" class="py-3 px-6">
                        No. de Control
                    </th>                    
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <input id="myCheckbox" type="checkbox" value="" class="w-5 h-5 ml-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600">
                    </th>
                    <td class="py-4 px-6">
                       Brenda
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
                        Admi
                    </td>
                   
                </tr>
                <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          <input id="myCheckbox" type="checkbox" value="" class="w-5 h-5 ml-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600">
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
                        Admi
                    </td>
                   
                </tr>
                
            </tbody>
        </table>
    </div>

   
@endsection