@extends('Invitado.navarI')


@section('content')
    <div class="flex">
      <div class="hidden md:block lg:block xl:block  w-3/6  bg-slate-200"> 
        <h1 class="text-center text-sky-800 mt-24 text-4xl font-bold ">Bienvenido</h1>
        <img class="h-auto w-auto" src="{{asset('img/actividades.png')}}">
        <button class="ml-28 h-16 w-24 pl-3 rounded-md bg-neutral-100 shadow-md hover:bg-white" onclick="moveSlide(-1)" > 
          <svg xmlns="http://www.w3.org/2000/svg" width="68" height="50" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg>
        </button>
        <button class="ml-36 h-16 w-24 pl-3 rounded bg-neutral-100 hover:bg-white shadow-md" onclick="moveSlide(1)"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="68" height="50" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
          </svg>
        </button>
      </div>  
      <div class="h-full w-screen md:w-3/4"> 
          <div class="relative mx-auto">
            <div class="slide relative">
               <h1 class="mt-10 text-2xl font-bold text-center">¿Qué es un Acom?</h1>
               <h2 class="mt-5 text-xl font-sans text-center">Las ACOMS también conocidas como actividades complementarias.</h2>
               <p class="pt-7 px-10">Son aquellas actividades que realizan los estudiantes en beneficio de su formación integral. Estas tienen como objetivo el complementar sus competencias profesionales.</p>
               <ol class="list-decimal text-justify pt-4 px-10">
                <li>Para que se cumplan las competencias de una actividad complementaria es indispensable que el estudiante cubra el 100% de las evidencias.</li>
                
                <li>Una competencia de actividad complementaria evaluada se registra con los niveles de desempeño:</li>
                <ul class="list-disc">
                  <li>Excelente.</li>
                  <li>Notable.</li>
                  <li>Bueno.</li>
                  <li>Suficiente.</li>
                </ul>

                <li>De no cumplir el estudiante con la competencia de la actividad complementaria correspondiente, debe volver a solicitarla sin afectar su situación académica.</li>

                <li>Al momento de cubrir los cinco créditos de las actividades complementarias establecidas con el plan de estudios, el Departamento de Servicios Escolares es el responsable de realizar un promedio final con los valores numéricos reportados de las actividades complementarias, así como emitir la constancia de liberación de actividades complementarias.</li>
            </div>
    
            <div class="slide relative">
              <h1 class="mt-10 text-2xl font-bold text-center">Lineamientos de las Actividades Complementarias</h1>
              <h2 class="mt-4 text-2xl font-sans text-center">Políticas de operación</h2>
              <ol class="list-decimal text-justify pt-5 px-10">

                <li>Cada Instituto oferta las actividades complementarias, a través de los Departamentos correspondientes, de acuerdo con su Programa Institucional de Innovación y Desarrollo.</li>
                
                <li>Las actividades complementarias son propuestas por los Departamentos involucrados ante el Comité Académico, quien asígna el número de créditos y lo presenta como recomendación al Director del Instituto para su dictamen. </li>
                
                <li> El valor curricular para el conjunto de las actividades complementarias establecidas en el plan de estudios es de cinco créditos , considerando que por cada crédito equivale a veinte horas efectivas y verificables, su cumplimiento debe ser dentro de los primeros seis semestres. </li>

                <li>Para cada una de las actividades complementarias autorizadas, no deben tener dos créditos asignados.</li>

                <li>El Departamento de Desarrollo Académico o su equivalente en los Institutos Tecnológicos Descentralizados difunde en los cursos de inducción las diversas actividades complementarias autorizadas.</li>
                
                <li>El Jefe de Departamento designa y da seguimineto al profesor responsable que dirige la actividad complementaria; quien determina la forma de evaluar, definir las evidencias a satisfacer y de confirmar que el estudiante adquiera las competencias necesarias para la formación integral.</li>

                <li>La lengua extrangera no se autoriza como actividad complementaria.</li>
                </ol>
            </div>
    
            <div class="slide relative">
              <h1 class="p-10 text-2xl font-bold text-center">Tipos de acoms</h1>
              <img class="mx-80 h-64 w-64" src="{{asset('img/copiar.png')}}" alt="informacion">
              <p class="pt-8 pl-16">Actualmente existen siete tipos de actividades complementarias, a continuación se muestra a detalle información sobre los tipos de acom existentes.</p> 
              <button type="button" class="bg-sky-700 hover:bg-sky-600 rounded-lg mt-5 ml-96 h-14 w-32 text-white font-bold" onClick="location.href='/tablaAcoms'" >
                Ver aquí
              </button>  
            </div>

            <div class="flex justify-center mt-3 mb-5  md:mt-10 lg:mt-10 space-x-5">
              <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
              <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
              <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
            </div>

          </div>
      </div> 

    </div> 
</body>     
<script>
  // set the default active slide to the first one
  let slideIndex = 1;
  showSlide(slideIndex);

  // change slide with the prev/next button
  function moveSlide(moveStep) {
      showSlide(slideIndex += moveStep);
  }

  // change slide with the dots
  function currentSlide(n) {
      showSlide(slideIndex = n);
  }

  function showSlide(n) {
      let i;
      const slides = document.getElementsByClassName("slide");
      const dots = document.getElementsByClassName('dot');
      
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }

      // hide all slides
      for (i = 0; i < slides.length; i++) {
          slides[i].classList.add('hidden');
      }

      // remove active status from all dots
      for (i = 0; i < dots.length; i++) {
          dots[i].classList.remove('bg-sky-700');
          dots[i].classList.add('bg-sky-200');
      }

      // show the active slide
      slides[slideIndex - 1].classList.remove('hidden');

      // highlight the active dot
      dots[slideIndex - 1].classList.remove('bg-sky-200');
      dots[slideIndex - 1].classList.add('bg-sky-700');
  }
</script>
@endsection