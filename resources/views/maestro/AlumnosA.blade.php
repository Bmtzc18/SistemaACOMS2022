@extends('maestro.contenidoT')

@section('content')
<div class="flex flex-col justify-center h-auto w-auto mt-10 mx-10 bg-stone-100 shadow-lg rounded-md">
    <h1 class="text-3xl ml-10 mt-10">Alumnos Aceptados al Proyecto</h1>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-8 mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-spacing-2">
            <thead class="text-xs text-white uppercase bg-azul-fondo dark:bg-gray-700 dark:text-gray-400">

                <tr>
                    <th scope="col" class="py-3 px-20">
                        Apellidos
                    </th>
                    <th scope="col" class="py-3 px-20">
                        Nombre(s)
                    </th>
                    <th scope="col" class="py-3 px-20">
                        Carrera
                    </th>
                    <th scope="col" class="py-3 px-20">
                        No. de Control
                    </th> 
                    <th scope="col" class="py-3 px-20">
                       
                    </th> 
                     
                </tr>
            </thead>
            
            <tbody>
                <tr class="bg-azul-grisecito border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-20 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      Martinez Castillo
                    </th>
                    <td class="py-4 px-20 font-medium text-gray-900">
                        Brenda
                    </td>
                    <td class="py-4 px-20 font-medium  text-gray-900">
                        ISC
                    <td class="py-4 px-20 font-medium  text-gray-900">
                       18270337
                    </td>
                    <td class="py-4 px-20">
                        <button class="h-10 w-24 rounded-lg bg-red-500 hover:bg-red-700 text-white text-sm font-sans">
                            Descartar
                        </button>
                    </td>

                </tr>
                <tr class="bg-sky-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-20 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Gomez Sauceda
                    </th>
                    <td class="py-4 px-20 font-medium text-gray-900">
                      Christopher 
                    </td>
                    <td class="py-4 px-20 font-medium text-gray-900">
                       ISC
                    </td>
                    <td class="py-4 px-20 font-medium text-gray-900">
                        18270330
                    </td>
                    <td class="py-4 px-20">
                        <button class="h-10 w-24 rounded-lg bg-red-500  hover:bg-red-700 text-white text-sm font-sans">
                            Descartar
                        </button>
                    </td>
                     
                </tr>
                
            </tbody>
        </table>
    </div>

</div>

@endsection