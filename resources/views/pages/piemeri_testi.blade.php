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


    <div class="grid grid-cols-1 gap-4">
        @include('includes.card-tests', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])

        @include('includes.card-tests', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])

        @include('includes.card-tests', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])

        @include('includes.card-tests', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])
    </div>

    <div class="flex items-center justify-center space-x-4 text-ig-primary py-6">
        <!-- Previous Button -->
        <button class="text-2xl focus:outline-none">
            <svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.2305 20L1.9997 10.5L12.2305 1" stroke="#2D233D" stroke-width="2" />
            </svg>

        </button>

        <!-- Page Info -->
        <span class="text-lg px-10">2 NO 10</span>

        <!-- Next Button -->
        <button class="text-2xl  focus:outline-none">
            <svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.769531 1L11.0003 10.5L0.769535 20" stroke="#2D233D" stroke-width="2" />
            </svg>

        </button>
    </div>


</div>
@endsection