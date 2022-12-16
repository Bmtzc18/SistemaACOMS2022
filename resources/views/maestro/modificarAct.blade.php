@extends('maestro.contenidoT')

@section('content')
<div class="ml-24 md:ml-0 px-4 py-6 flex flex-col">

    <div class="h-20 w-3/4">
        <h1 class="pt-6 md:ml-52 ml-0 font-bold text-3xl md:text-left">Modificar actividad</h1>
    </div>


    <div class="lg:flex flex-row h-3/6 w-full mt-3 justify-center sm:flex flex-wrap">
        <div class="w-80 h-full">
        <form>
            <div class="mb-5 mt-7 mr-10">

                <textarea id="nombreAct"
                class="p-2 text-sm text-gray-900 rounded-lg border border-black focus:border-blue-500 h-40 w-full"
                placeholder="Nombre de la actividad"></textarea>
          
                <input id="departamentoAct" name="departamentoAct" type="text"
                    placeholder="Departamento al que pertenece la actividad"
                    class="p-3 w-full h-16 rounded-md border mt-4 border-black shadow-md" />
            
                <input id="codigoAct" name="codigoAct" type="text"
                    placeholder="Código de la actividad"
                    class="p-3 w-full h-16 mt-7 rounded-md border border-black shadow-md" />

                <input id="name" name="name" type="text" placeholder="Subtipo de ACOM"
                class="p-3 w-full h-16 mt-7 rounded-md border border-black shadow-md" />   
                 
            </div>
        </form>  
        </div>
        <div class="w-80 h-full sm:mt-4 lg:mt-0 lg:ml-3">
            <div class="mb-5 lg:mt-7 mr-10 sm:mt-3">
                <input id="rolAct" name="rolAct" type="text"
                    placeholder="Rol del encargado de la actividad"
                    class="p-3 w-full h-16 rounded-md border border-black shadow-md" />


                <input id="name" name="name" type="text" placeholder="Periodo escolar"
                    class="p-3 w-full mt-7 h-16 rounded-md border border-black shadow-md" />

                <input id="name" name="name" type="text" placeholder="Año del periodo"
                 class="p-3 w-full h-16 border mt-7 rounded-md border-black shadow-md" /> 
                 
                 <label class="font-sans text-gray-500">Fecha de inicio:</label>
                <input id="fehcaInicio" name="fechaInicio" type="date"
                 class="p-3 w-full h-16 rounded-md border border-black shadow-md text-gray-400" />

                 <label class="font-sans text-gray-500">Fecha final:</label>
                 <input id="dateF" name="dateF" type="date"
                 class="p-3 w-full h-16 rounded-md border border-black shadow-md text-gray-400"/> 
               
            </div>
        </div>
        <div class="w-80 h-full lg:ml-3">
            <div class="mb-5 lg:mt-7 mr-10 sm:mt-2">
                <input id="totalA" name="totalA" type="number" min="1"
                    placeholder="Cantidad de alumnos"
                    class="p-3 w-full h-16 rounded-md border border-black shadow-md" />

                    <input id="tipoAcom" name="tipoAcom" type="text" placeholder="Tipo de ACOM"
                    class="p-3 w-full h-16 mt-7 rounded-md border border-black shadow-md" />
               
                    <textarea id="description"
                        class="p-2 mt-7  text-sm text-gray-900 rounded-lg border border-black focus:border-blue-500 h-40 w-full"
                        placeholder="Descripcion de la actividad"></textarea>
               
                
                <button type="submit" value="Registrar Actividad" class="mt-7 bg-sky-600 hover:bg-sky-700 rounded-md px-20 py-5 text-white font-bold text-lg">
                 Registrar</button>
               

                 
            </div>
        </div>
        
    </div>

   
</div>
      @endsection