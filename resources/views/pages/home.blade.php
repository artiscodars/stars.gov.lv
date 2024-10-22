@extends('layout')

@section('breadcrumb', false)

@section('content')
<div class="bg-[#EBE7E0]">
    <div class="container mx-auto px-6">
        @include('includes.banner')
    </div>
</div>

<div class="container mx-auto px-6">
    @include('includes.jaunumi')
</div>

@include('includes.reviews')

@include('includes.partners')

@endsection