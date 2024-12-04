@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <!-- Search bar -->
    <div class="relative mb-6 w-full md:w-1/3">
        <input type="text" placeholder="Meklēt"
            class="w-full border-0 border-b border-primary py-2 pr-10 focus:outline-none">
        <button class="absolute right-1 top-0.5 mt-2 mr-2 text-primary hover:opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.9 14.32a8 8 0 111.414-1.414l4.244 4.243a1 1 0 01-1.415 1.415l-4.243-4.244zM14 8a6 6 0 11-12 0 6 6 0 0112 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>


    <h2>Prasmju novērtēšanas riski</h2>


    <div class="grid grid-cols-3 gap-4">
        @include('includes.card-tests-kategorija', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])

        @include('includes.card-tests-kategorija', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])

        @include('includes.card-tests-kategorija', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])


    </div>


    <h2>Digitālo prasmju novērtēšana</h2>


    <div class="grid grid-cols-3 gap-4">
        @include('includes.card-tests-kategorija', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])

        @include('includes.card-tests-kategorija', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])

        @include('includes.card-tests-kategorija', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])


    </div>

</div>
@endsection