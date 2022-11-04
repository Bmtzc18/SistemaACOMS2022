@extends('layouts.app')

@section('pagTitle')
    Principal
@endsection

@section('header')
    <nav class="flex gap-2 items-center">
        <div class="container mx-auto items-center flex content-center justify-center">
            <h2 class="text-5xl font-bold  mt-0 mb-2 text-white">
                Bienvenido
            </h2>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container grid-cols-4 items-center justify-center px-10">
        <div> <button type="button" onClick="location.href='/inicio'"
                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-azul-tec rounded-full border border-gray-200
         hover:bg-gray-100 hover:text-black w-1/4">Maestro</div>
        <div> <button type="button" onClick="location.href='/login'"
                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-azul-tec rounded-full border border-gray-200
         hover:bg-gray-100 hover:text-black w-1/4">Jefe de departamento
            </div>
        <div> <button type="button" onClick="location.href='/inicioInv'"
                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-azul-tec rounded-full border border-gray-200
                 hover:bg-gray-100 hover:text-black w-1/4">Invitado</div>
         
                <div> <button type="button" onClick="location.href=''"
                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-azul-tec rounded-full border border-gray-200
         hover:bg-gray-100 hover:text-black w-1/4">Alternative</div>

        </div>
    @endsection

    @section('footer')
        TecNM {{ now()->format('d-m-Y') }} -
        <a href="https://www.tecnm.mx/" class="hover:underline">TecNM.com</a>
    @endsection
