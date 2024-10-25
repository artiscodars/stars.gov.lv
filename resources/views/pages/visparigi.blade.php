@extends('layout')

@section('content')
<div class="container mx-auto px-6 pb-8 prose">
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>
    <p>Dizaina sistēmas vispārīgā daļa apraksta interneta sistēmas vēlamo izkārtojumu, izmantojamās krāsas, burtu
        veidolus un izmērus, kā arī piedāvā ikonu bibliotāku.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @php
        // Load the menu structure
        $menu = loadMenu();

        // Find the "Komponentes" section
        $komponentes = collect($menu)->firstWhere('route', 'visparigi');
        @endphp

        @if ($komponentes && !empty($komponentes['children']))
        @foreach ($komponentes['children'] as $component)
        @php
        $subcomponentCount = !empty($component['children']) ? count($component['children']) : 0;
        @endphp
        <a href="{{ url($component['route']) }}"
            class="bg-white hover:bg-gray-200 rounded-lg p-4  transition-shadow duration-200 border border-gray-300">


            {{ $component['name'] }}
            @if($subcomponentCount > 0)
            <span class="text-third text-sm">({{ $subcomponentCount }})</span>
            @endif


        </a>
        @endforeach
        @else
        <p>No components found.</p>
        @endif
    </div>
</div>
@endsection