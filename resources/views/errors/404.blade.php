@extends('layout')

@section('content')
<div class="container mx-auto py-6 text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">404 - Page Not Found</h1>
    <p class="text-lg text-gray-600 mb-6">Sorry, the page you're looking for doesn't exist.</p>
    <pre class="text-md text-gray-600 mb-6">{{ $missingView }}</pre>
    <a href="{{ route('home') }}" class="py-2 px-4 bg-warning text-white rounded">Go Back to Home</a>
</div>
@endsection

@section('leftMenu')
@include('includes.left-menu', ['menu' => $menu])
@endsection

@section('topMenu')
@include('includes.top-menu', ['menu' => $menu])
@endsection