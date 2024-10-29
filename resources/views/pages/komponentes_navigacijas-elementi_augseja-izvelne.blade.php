@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>
    <p>
        Augšējā izvēlne tiek izmantota tīmekļa lietotnēs un vietnēs, lai nodrošinātu
        lietotājiem ērtu navigāciju starp dažādām sadaļām vai funkcionalitātēm. Aigšējā izvēlne
        parasti ir pieejama visās lapās, nodrošinot konsekventu un viegli pieejamu navigāciju.</p>
    <example class="not-prose">
        @include ('includes.top-menu')
    </example>
</div>
@endsection