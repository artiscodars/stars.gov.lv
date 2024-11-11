@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
            // Load the menu structure
            $menu = loadMenu();

            // Find the "Komponentes" section
            $komponentes = collect($menu)->firstWhere('route', 'komponentes');

            // Find "Navigācijas elementi" under "Komponentes"
            $navigacijasElementi = null;
            if ($komponentes && !empty($komponentes['children'])) {
                $navigacijasElementi = collect($komponentes['children'])->firstWhere(
                    'route',
                    'komponentes/navigacijas-elementi'
                );
            }

            // Sort subcomponents by name
            $sortedSubcomponents = $navigacijasElementi && !empty($navigacijasElementi['children'])
                ? collect($navigacijasElementi['children'])->sortBy('name')
                : collect([]);
        @endphp

        @if ($sortedSubcomponents->isNotEmpty())
            @foreach ($sortedSubcomponents as $subcomponent)
                <a href="{{ url($subcomponent['route']) }}"
                    class="bg-white hover:bg-gray-200 rounded-lg p-4 transition-shadow duration-200 border border-gray-300">
                    {{ $subcomponent['name'] }}
                </a>
            @endforeach
        @else
            <p>No components found.</p>
        @endif
    </div>
</div>
@endsection