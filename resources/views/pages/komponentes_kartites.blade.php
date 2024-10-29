@extends('layout')


@section('content')
<div class="container mx-auto px-6 pb-8 prose">
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>


    <h3>Izglītības programmas</h3>

    <example class="not-prose">




        <div class="grid grid-cols-3 gap-4">

            @include('includes.card-programma', [
    'severity' => 'primary',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

            @include('includes.card-programma', [
    'severity' => 'secondary',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

            @include('includes.card-programma', [
    'severity' => 'third',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

            @include('includes.card-programma', [
    'severity' => 'success',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])
            @include('includes.card-programma', [
    'severity' => 'success-dark',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])
            @include('includes.card-programma', [
    'severity' => 'warning',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

            @include('includes.card-programma', [
    'severity' => 'error',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])
    </example>



</div>




@endsection