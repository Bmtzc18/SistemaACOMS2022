@extends('Invitado.navarI')

 @section('content')   
      <div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-20 mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-spacing-2">
            <thead class="text-xs text-white uppercase bg-sky-700 dark:bg-gray-700 dark:text-gray-400">

                <tr>
                    <th scope="col" class="py-3 px-6">
                        Tipo de acom
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Actividad
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Descripción
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Puntos por actividad 
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Máximo 
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Evidencias 
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Responsables
                    </th>
                    <th scope="col" class="py-3 px-6">
                       Ejemplo de actividades
                    </th>
                    
                     
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Acom-1
                    </th>
                    <td class="py-4 px-6">
                        Tutorias
                    </td>
                    <td class="py-4 px-6">
                        Grupales, asignadas en la carga académica del alumno y horario del tutor.
                    </td>
                    <td class="py-4 px-6">
                        0.5
                    </td>
                    <td class="py-4 px-6">
                        1
                    </td>
                    <td class="py-4 px-6">
                        Carga academica (deberá liberarse al concluir el 2do. semestre)
                    </td>
                    <td class="py-4 px-6">
                        Tutor y Jefe de Departamento Académico
                    </td>
                    <td class="py-4 px-6">
                        Semestre 1 y Semestre 2
                    </td>
                </tr>
                <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Acom-2
                    </th>
                    <td class="py-4 px-6">
                        Proyectos de investigación.
                    </td>
                    <td class="py-4 px-6">
                        Participación en programas, eventos y actividades que tienen relación con la generación y divulgación del conocimiento científico y/o tecnológico.
                    </td>
                    <td class="py-4 px-6">
                        0.5
                    </td>
                    <td class="py-4 px-6">
                        2
                    </td>
                    <td class="py-4 px-6">
                        Constancia de participación o Asignación del Jefe de Proyecto de Investigación
                    </td>
                    <td class="py-4 px-6">
                        Jefe de proyectos de Investigación y Jefe de Departamento Académico.
                    </td>
                    <td class="py-4 px-6">
                        Verano científico o estancias en centros de investigación; Colaborador en el desarrollo de proyectos de investigación; Ponencias en simposios, foros, congresos, etc, de divulgación de la ciencia y la tecnología; Entrevista en programas de radio y/o televisión para la difusión de la ciencia y la tecnología.
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Acom-3
                    </th>
                    <td class="py-4 px-6">
                        Eventos Académicos relacionados con la carrera.
                    </td>
                    <td class="py-4 px-6">
                        Podrán ser los eventos de ciencias básicas, concursos de programación, mini baja u otros.
                    </td>
                    <td class="py-4 px-6">
                        0.5
                    </td>
                    <td class="py-4 px-6">
                        2
                    </td>
                    <td class="py-4 px-6">
                        Constancia de participación o registro de participación.
                    </td>
                    <td class="py-4 px-6">
                        Tutor o asesores, y Jefe de Departamento Académico.
                    </td>
                    <td class="py-4 px-6">
                        Evento académico fase local; Evento académico fase regional; Evento académico fase nacional; Colaboradores en eventos académicos organizados por el Instituto; Participación en congresos académicos nacionales/internacionales, concursos; Cursos de nivelación académicas.
                    </td>
                </tr>
                <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Acom-4
                    </th>
                    <td class="py-4 px-6">
                        Actividades extraescolares.
                    </td>
                    <td class="py-4 px-6">
                        Tomar cuando menos una actividad extraescolar durante los dos primeros semestres
                    </td>
                    <td class="py-4 px-6">
                        0.5
                    </td>
                    <td class="py-4 px-6">
                        1
                    </td>
                    <td class="py-4 px-6">
                        Boleta de inscripción
                    </td>
                    <td class="py-4 px-6">
                        Profesor responsable de la actividad y Jefe de Departamento de Extraescolares.
                    </td>
                    <td class="py-4 px-6">
                        Semestre 1 y Semestre 2
                    </td>
                </tr>
                <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Acom-5
                    </th>
                    <td class="py-4 px-6">
                        Construcción de Protótipos y Desarrollo Tecnológico
                    </td>
                    <td class="py-4 px-6">
                        Participación en eventos en los que se requiera modelado, construcción de prototipos, planes de negocio, etc, en sus distintas etapas.
                    </td>
                    <td class="py-4 px-6">
                        0.5
                    </td>
                    <td class="py-4 px-6">
                       2
                    </td>
                    <td class="py-4 px-6">
                        Constancia de participación o registro de participación (ciencias básicas)
                    </td>
                    <td class="py-4 px-6">
                        Jefe de Proyectos de Vinculación y Jefe de Departamento de Gestión Tecnológica.
                    </td>
                    <td class="py-4 px-6">
                        Concurso de Innovación Tecnológica Fase Local; Concurso de Innovación Tecnológica Fase Regional; Concurso de Innovación Tecnológica Fase Nacional; Diseño y construcción de prototipos didácticos.
                    </td>
                </tr>
                <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Acom-6
                    </th>
                    <td class="py-4 px-6">
                        Participación en Ediciones.
                    </td>
                    <td class="py-4 px-6">
                        Aparecer como uno de los autores en un artículo público en revistas, memorias de congresos, gacetas, exposiciones, etc.
                    </td>
                    <td class="py-4 px-6">
                        0.5
                    </td>
                    <td class="py-4 px-6">
                       1
                    </td>
                    <td class="py-4 px-6">
                        Portada o primera página de los artículos
                    </td>
                    <td class="py-4 px-6">
                        Tutor o asesores, y Jefe de Departamento Académico.
                    </td>
                    <td class="py-4 px-6">
                        Revista Científica; Memoria de congreso.
                    </td>
                </tr>
                <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Acom-7
                    </th>
                    <td class="py-4 px-6">
                        Programas de Apoyo a la Formación Profesional
                    </td>
                    <td class="py-4 px-6">
                        Tomar cursos sobre uso de software, equipos y/o herramientas ofertados por el Instituto o externos.
                    </td>
                    <td class="py-4 px-6">
                        0.5
                    </td>
                    <td class="py-4 px-6">
                       2
                    </td>
                    <td class="py-4 px-6">
                        Constancia de participación y/o registro de la participación en talleres.
                    </td>
                    <td class="py-4 px-6">
                        Tutor y Jefe de Departamento de Desarrollo Académico.
                    </td>
                    <td class="py-4 px-6">
                        Cursos/talleres de formación profesional; Taller de fomento a la lectura; Actividades de conservación del medio ambiente; Participación en programas de apoyo a la formación académica (asesoría alumno-alumno).
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection   