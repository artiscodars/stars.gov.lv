@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>
    <p>te teksts</p>
    <example class="not-prose">
        <div class="bg-primary text-white p-8 rounded-lg shadow-lg max-w-lg mx-auto">
            <div class="relative text-xl font-semibold mb-4 font-serif italic">

                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis felis ut mi vehicula
                fermentum."
            </div>

            <p class="text-sm font-mediumm text-end text-warning">/ Alfrēds Kalniņš /</p>
        </div>


        </examp le>
</div>

@endsection