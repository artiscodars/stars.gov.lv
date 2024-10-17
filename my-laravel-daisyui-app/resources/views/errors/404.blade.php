@extends('layout')

@section('content')
<div class="container mx-auto py-6 text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">404 - Page Not Found</h1>
    <p class="text-lg text-gray-600 mb-6">Sorry, the page you're looking for doesn't exist.</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back to Home</a>
</div>
@endsection

@section('leftMenu')
@include('includes.left-menu', ['leftMenu' => $leftMenu])
@endsection

@section('topMenu')
@include('includes.top-menu', ['topMenu' => $topMenu])
@endsection