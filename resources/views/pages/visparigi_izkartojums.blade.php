@extends('layout')


@section('content')
<div class="container mx-auto px-6 pb-8 prose">
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>
    <p> Ir divi ekrāna izkārtojuma veidi</p>

    <h2>Pilna izkārtojuma piemērs</h2>

    <example>

        <iframe src="/" class="w-full h-96 border-none"></iframe>

    </example>

    <h2>
        Izkārtojuma piemērs ar sānu paneli
    </h2>

    <example>

        <iframe src="/komponentes" class="w-full h-96 border-none"></iframe>


    </example>

</div>
@endsection