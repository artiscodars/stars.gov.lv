@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <example class="not-prose">

        @include('includes.breadcrumb', ['menu' => $menu])


    </example>

</div>
@endsection