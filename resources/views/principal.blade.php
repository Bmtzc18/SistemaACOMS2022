@extends('layouts.app')

@section('pagTitle')
Principal
@endsection

@section('header')
    <nav class="flex gap-2 items-center">
        <div class="container mx-auto items-center flex content-center justify-center">
            <h2 class="text-3xl font-bold  mt-0 mb-2 text-white">
                Bienvenido
            </h2>
        </div>
    </nav>
@endsection

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-20 bg-gray-100 drop-shadow-2xl rounded-md m-10 p-10">

    <a      href="/login"
            class="bg-azul-tec hover:bg-sky-600 rounded-md
            h-60 w-auto
            drop-shadow-2xl
            flex items-center">
        <div
            class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-10 lg:gap-20 xl:gap-20 px-20 justify-items-center">
            <img alt="user_img" src="{{ asset('img/usuario.png') }}" class="border w-3 h-3 my-2">
            <h2
                class="flex text-white font-bold items-center px-2 text-2sm md:text-xl lg:text-xl xl:text-2xl h-10 w-20 md:w-28 lg:w-32 xl:w-38">
                Administrador</h2>
        </div>
    </a>

    <a  href="/principalJ"
        class="bg-azul-tec hover:bg-sky-600 rounded-md
            h-60 w-auto
            drop-shadow-2xl
            flex items-center">
        <div
            class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-10 lg:gap-20 xl:gap-20 px-20 justify-items-center">
            <img alt="user_img" src="{{ asset('img/usuario.png') }}" class="border w-3 h-3 my-2">
            <h2
                class="flex text-white font-bold items-center px-2 text-2sm md:text-xl lg:text-xl xl:text-2xl h-10 w-20 md:w-28 lg:w-32 xl:w-38">
                Jefe de departamento</h2>
        </div>
    </a>

    <a      href="/principalD"
            class="bg-azul-tec hover:bg-sky-600 rounded-md
            h-60 w-auto
            drop-shadow-2xl
            flex items-center">
            <div
                class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-10 lg:gap-20 xl:gap-20 px-20 justify-items-center">
                <img alt="user_img" src="{{ asset('img/usuario.png') }}" class="border w-3 h-3 my-2">
                <h2
                    class="flex text-white font-bold items-center px-2 text-2sm md:text-xl lg:text-xl xl:text-2xl h-10 w-20 md:w-28 lg:w-32 xl:w-38">
                    Docente</h2>
           </div>
    </a>

    <a      href="/inicioInv"
            class="bg-azul-tec hover:bg-sky-600 rounded-md
            h-60 w-auto
            drop-shadow-2xl
            flex items-center">
            <div
                class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-10 lg:gap-20 xl:gap-20 px-20 justify-items-center">
                <img alt="user_img" src="{{ asset('img/usuario.png') }}" class="border w-3 h-3 my-2">
                <h2
                    class="flex  text-white font-bold items-center px-2 text-2sm md:text-xl lg:text-xl xl:text-2xl h-10 w-20 md:w-28 lg:w-32 xl:w-38">
                    Alumno</h2>
            </div>
    </a>

</div>
    @endsection

    @section('footer')
        TecNM {{ now()->format('d-m-Y') }} -
        <a href="https://www.tecnm.mx/" class="hover:underline">TecNM.com</a>
    @endsection
