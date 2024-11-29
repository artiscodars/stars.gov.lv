@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>


    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pb-20 pt-10">
        <!-- Card 1 -->
        <a href="/piemeri/jaunums" class="hover:opacity-70 no-underline">
            <div class="bg-gray-300 h-96 mb-4 rounded-md"></div>
            <p class="text-sm text-orange-600 mb-2">02.10.2023</p>
            <h3 class="text-lg text-titleLink">

                Vēl līdz 30. novembrim nodarbinātie var pieteikties kompensācijai par profesionālās kvalifikācijas
                iegūšanu
            </h3>
        </a>

        <!-- Card 2 -->
        <a href="/piemeri/jaunums" class="hover:opacity-70 no-underline">
            <div class="bg-gray-300 h-96 mb-4 rounded-md"></div>
            <p class="text-sm text-orange-600 mb-2">02.10.2023</p>
            <h3 class="text-lg text-titleLink">

                Vēl līdz 30. novembrim nodarbinātie var pieteikties kompensācijai par profesionālās kvalifikācijas
                iegūšanu
            </h3>
        </a>

        <!-- Card 3 -->
        <a href="/piemeri/jaunums" class="hover:opacity-70 no-underline">
            <div class="bg-gray-300 h-96 mb-4 rounded-md"></div>
            <p class="text-sm text-orange-600 mb-2">02.10.2023</p>
            <h3 class="text-lg text-titleLink">

                Vēl līdz 30. novembrim nodarbinātie var pieteikties kompensācijai par profesionālās kvalifikācijas
                iegūšanu
            </h3>
        </a>

        <a href="/piemeri/jaunums" class="hover:opacity-70 no-underline">
            <div class="bg-gray-300 h-96 mb-4 rounded-md"></div>
            <p class="text-sm text-orange-600 mb-2">02.10.2023</p>
            <h3 class="text-lg text-titleLink">

                Vēl līdz 30. novembrim nodarbinātie var pieteikties kompensācijai par profesionālās kvalifikācijas
                iegūšanu
            </h3>
        </a>

        <a href="/piemeri/jaunums" class="hover:opacity-70 no-underline">
            <div class="bg-gray-300 h-96 mb-4 rounded-md"></div>
            <p class="text-sm text-orange-600 mb-2">02.10.2023</p>
            <h3 class="text-lg text-titleLink">

                Vēl līdz 30. novembrim nodarbinātie var pieteikties kompensācijai par profesionālās kvalifikācijas
                iegūšanu
            </h3>
        </a>

        <a href="/piemeri/jaunums" class="hover:opacity-70 no-underline">
            <div class="bg-gray-300 h-96 mb-4 rounded-md"></div>
            <p class="text-sm text-orange-600 mb-2">02.10.2023</p>
            <h3 class="text-lg text-titleLink">

                Vēl līdz 30. novembrim nodarbinātie var pieteikties kompensācijai par profesionālās kvalifikācijas
                iegūšanu
            </h3>
        </a>

        <a href="/piemeri/jaunums" class="hover:opacity-70 no-underline">
            <div class="bg-gray-300 h-96 mb-4 rounded-md"></div>
            <p class="text-sm text-orange-600 mb-2">02.10.2023</p>
            <h3 class="text-lg text-titleLink">

                Vēl līdz 30. novembrim nodarbinātie var pieteikties kompensācijai par profesionālās kvalifikācijas
                iegūšanu
            </h3>
        </a>

        <a href="/piemeri/jaunums" class="hover:opacity-70 no-underline">
            <div class="bg-gray-300 h-96 mb-4 rounded-md"></div>
            <p class="text-sm text-orange-600 mb-2">02.10.2023</p>
            <h3 class="text-lg text-titleLink">

                Vēl līdz 30. novembrim nodarbinātie var pieteikties kompensācijai par profesionālās kvalifikācijas
                iegūšanu
            </h3>
        </a>
    </div>

    <div class="flex items-center justify-center space-x-4 text-ig-primary py-6">
        @include('includes.paginator')
    </div>

</div>
@endsection