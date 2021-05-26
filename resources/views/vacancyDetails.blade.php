@extends('layouts.web')

@section('content')

<h2 class="mt-6 text-gray-800 text-center text-2xl font-bold">Detalle de la vacante</h2>

<div class="bg-gray-200 text-gray-800 my-6 mx-10 rounded-md items-center border-2 border-blue-300">
    {{-- <a href="{{ route('vacancyDetails', $vacancy) }}" class=""> --}}
        <div class="p-4">
            <h2 class="text-2xl tracking-tight font-semibold">{{ $vacancy->title }}</h2>
            <div class="flex justify-between items-center mt-2">
                <div class="text-sm">Publicado el {{ $vacancy->updated_at->format('d M Y') }}</div>
                <div class="text-xl text-green-600 font-semibold">{{ $vacancy->currency }}
                    {{ $vacancy->salary }}</div>
            </div>
            <div class="mt-2">
                <p>
                    {{ $vacancy->descriptionVacancy }}
                    {{-- <span class="text-blue-600 font-semibold">ver más</span> --}}
                </p>
            </div>
            <div class="flex justify-between mt-3">
                <div>
                    <span class="bg-blue-600 text-white rounded-3xl px-3 py-1">MySQL</span>
                    <span class="bg-blue-600 text-white rounded-3xl px-3 py-1">PHP</span>
                </div>
                <div>
                    <i class="fa fa-map-marker"></i> Colombia
                </div>
            </div>
            <a class="grid" href="#">
                <div class="bg-gray-700 mt-5 text-white rounded-md py-1 w-64 place-self-center text-center font-bold text-lg">Aplicar</div>
            </a>
        </div>
    {{-- </a> --}}
</div>

@endsection