@extends('maestro.contenidoT')

@section('content')
<div class="flex flex-col justify-center h-auto w-auto mt-10 mx-10 bg-stone-100 shadow-lg rounded-md">
    <h1 class="text-3xl ml-10 mt-10 text-center font-bold">Gestion de profesores</h1>
    <button class="h-12 w-36 ml-10 mt-5 rounded-lg bg-red-500 hover:bg-red-700 text-white text-sm font-sans">
        Descartar todos
    </button>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-8 mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-spacing-2">
            <thead class="text-xs text-white uppercase bg-azul-fondo dark:bg-gray-700 dark:text-gray-400">
            <tr>
                    <th scope="col" class="py-3 px-20">
                       Nombre del profesor
                    </th>
                    <th scope="col" class="py-3 px-20">
                       Departamento
                    </th>
                    <th scope="col" class="py-3 px-20">
                        Usuario
                    </th>
                    <th scope="col" class="py-3 px-20">
                        
                    </th> 
                 
                     
                </tr>
            </thead>
            
            <tbody>
                <tr class="bg-azul-grisecito border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-20 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Héctor Guerra Crespo
                    </th>
                    <td class="py-4 px-20 font-medium text-gray-900">
                        Departamento de Sistemas y Computación
                    </td>
                    <td class="py-4 px-20 font-medium  text-gray-900">
                        hector
                    </td>
                    <td class="py-4 px-20">
                        <button class="h-10 w-24 rounded-lg bg-red-500 hover:bg-red-700 text-white text-sm font-sans">
                            Descartar
                        </button>
                    </td>

                </tr>
                <tr class="bg-sky-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-20 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        M.C. Aída Guillermina Cossío Martínez
                    </th>
                    <td class="py-4 px-20 font-medium text-gray-900">
                        Departamento de Sistemas y Computación
                    </td>
                    <td class="py-4 px-20 font-medium text-gray-900">
                        aida_guillermina
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