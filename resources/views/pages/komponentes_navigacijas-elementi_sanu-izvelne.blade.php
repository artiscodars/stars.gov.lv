@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>
    <p>
        Kreisās puses izvēlne (jeb sānu izvēlne) bieži tiek izmantota tīmekļa lietotnēs un vietnēs, lai nodrošinātu
        lietotājiem ērtu navigāciju starp dažādām sadaļām vai funkcionalitātēm. Tā ir īpaši noderīga, ja ir daudz
        izvēles iespēju vai sadaļu, jo tā ļauj saglabāt galveno saturu tīru un nepārblīvētu. Kreisās puses izvēlne
        parasti ir pieejama lapās ar dziļu līmeņu navigāciju.</p>
    <example>
        @include ('includes.left-menu')
    </example>
</div>
@endsection