@extends('maestro.contenidoT')

@section('content')
<div class="flex flex-col justify-center h-auto w-auto mt-10 mx-10 bg-stone-100 shadow-lg rounded-md">
    <div class="mt-10">
        <h1 class="text-center text-3xl font-bold">Actividad</h1>
        <div class="flex flex-row mt-10 ml-8">
          <button class="w-48 h-10 mr-8 text-white font-semibold bg-red-500 rounded-md">Deshacer evaluación</button>
        </div>    
    </div>
      <div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-8 mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-spacing-2">
            <thead class="text-xs text-white uppercase bg-sky-800 dark:bg-gray-700 dark:text-gray-400">

                <tr>
                    <th scope="col" class="py-3 px-6">
                        <input id="select-all" type="checkbox" value="" class="w-5 h-5 ml-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600">
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Número de control
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nombre(s)
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Apellidos 
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Tipo de ACOM
                    </th>  
                    <th scope="col" class="py-3 px-4">
                       Credito obtenido
                    </th>    
                    <th scope="col" class="py-3 px-6">
                        Calificación obtenida 
                     </th>                  
                </tr>
            </thead>
            <tbody>
                <tr class="bg-azul-grisecito border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <input id="myCheckbox" type="checkbox" name="casillas" value="" class="w-5 h-5 ml-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600">
                    </th>
                    <td class="py-4 px-6">
                      18270337
                    </td>
                    <td class="py-4 px-6">
                       Brenda
                    <td class="py-4 px-6">
                       Martinez Castillo
                    </td>
                    <td class="py-4 px-6">
                       ACOM 1
                    </td>
                    <td class="py-4 px-4">
                        0.5
                    </td>
                    <td class="py-4 px-6">
                        Excelente
                    </td>
                   
                </tr>
                <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          <input id="myCheckbox" type="checkbox" name="casillas"  value="" class="w-5 h-5 ml-8 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600">
                    </th>
                    <td class="py-4 px-6">
                        18270337
                      </td>
                      <td class="py-4 px-6">
                         Brenda
                      <td class="py-4 px-6">
                         Martinez Castillo
                      </td>
                      <td class="py-4 px-6">
                         ACOM 1
                      </td>
                      <td class="py-4 px-4">
                          0.5
                      </td>
                      <td class="py-4 px-6">
                          Excelente
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