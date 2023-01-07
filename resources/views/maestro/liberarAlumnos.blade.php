@extends('maestro.contenidoT')

@section('content')
<div class="flex flex-col justify-center h-auto w-auto mt-10 mx-10 bg-stone-100 shadow-lg rounded-md">
    <h1 class="text-3xl ml-10 mt-10 text-center font-bold">Alumnos aceptados al proyecto</h1>
    <div class="flex justify-center mt-5 sm:flex flex-wrap">
    <button class="h-12 w-36 ml-10 mt-5 rounded-lg bg-azul-botones hover:bg-sky-700 text-white text-sm font-sans">
        Excelente 
    </button>
    <button class="h-12 w-36 ml-10 mt-5 rounded-lg bg-azul-botones  hover:bg-sky-700 text-white text-sm font-sans">
        Notable
    </button>
    <button class="h-12 w-36 ml-10 mt-5 rounded-lg bg-azul-botones hover:bg-sky-700 text-white text-sm font-sans">
        Bueno
    </button>
    <button class="h-12 w-36 ml-10 mt-5 rounded-lg bg-azul-botones hover:bg-sky-700 text-white text-sm font-sans">
        Suficiente
    </button>
    <button class="h-12 w-36 ml-10 mt-5 rounded-lg bg-azul-botones hover:bg-sky-700 text-white text-sm font-sans">
        Malo
    </button>
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-8 mx-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-spacing-2">
            <thead class="text-xs text-white uppercase bg-azul-fondo dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        <input id="select-all" type="checkbox" value="" class="w-5 h-5 ml-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600">
                    </th>
                    <th scope="col" class="py-3 px-10">
                        Apellidos
                    </th>
                    <th scope="col" class="py-3 px-10">
                        Nombre(s)
                    </th>
                    <th scope="col" class="py-3 px-10">
                        Usuario
                    </th>
                    <th scope="col" class="py-3 px-10">
                        Carrera
                    </th>
                    <th scope="col" class="py-3 px-10">
                        No. de Control
                    </th> 
                    <th scope="col" class="py-3 px-10">
                       Tipo de ACOM
                    </th> 
                     
                </tr>
            </thead>
            
            <tbody>
                <tr class="bg-azul-grisecito border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <input id="myCheckbox" type="checkbox" name="casillas" value="" class="w-5 h-5 ml-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600">
                    </th>
                    <th scope="row" class="py-4 px-10 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      Martinez Castillo
                    </th>
                    <td class="py-4 px-10 font-medium text-gray-900">
                        Brenda
                    </td>
                    <td class="py-4 px-10 font-medium text-gray-900">
                        bmtz
                     </td>
                    <td class="py-4 px-10 font-medium  text-gray-900">
                        ISC
                    <td class="py-4 px-10 font-medium  text-gray-900">
                       18270337
                    </td>
                    <td class="py-4 px-10 font-medium  text-gray-900">
                        Acom 1
                     </td>
                   

                </tr>
                <tr class="bg-sky-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <input id="myCheckbox" type="checkbox" name="casillas" value="" class="w-5 h-5 ml-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600">
                    </th>
                    <th scope="row" class="py-4 px-10 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Gomez Sauceda
                    </th>
                    <td class="py-4 px-10 font-medium text-gray-900">
                      Christopher 
                    </td>
                    <td class="py-4 px-10 font-medium text-gray-900">
                        CGS
                     </td>
                    <td class="py-4 px-10 font-medium text-gray-900">
                       ISC
                    </td>
                    <td class="py-4 px-10 font-medium text-gray-900">
                        18270330
                    </td>
                    <td class="py-4 px-10 font-medium text-gray-900">
                        Acom 2
                    </td>
                   
                     
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    document.getElementById('select-all').onclick = function() {
    var checkboxes = document.getElementsByName('casillas');
    for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
    }
    }
    </script>

@endsection