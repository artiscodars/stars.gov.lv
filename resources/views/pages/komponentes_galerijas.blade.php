@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>


    <p>Foto galerija ir lietotāja interfeisa elements, kas ļauj organizēt un parādīt attēlus strukturētā un vizuāli
        pievilcīgā veidā. Tā piedāvā lietotājiem iespēju pārlūkot attēlus, apskatīt tos pilnā izmērā un bieži vien
        pievienot papildinformāciju, piemēram, parakstus vai aprakstus.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Produktu prezentācija:</strong> Foto galerijas ir lieliskas, lai parādītu produktu attēlus
            e-komercijas vietnēs, piedāvājot lietotājiem vizuālu priekšstatu par piedāvātajām precēm.</li>
        <li><strong>Portfolio demonstrēšana:</strong> Mākslinieki, fotogrāfi un citi radošo nozaru pārstāvji var
            izmantot foto galerijas, lai prezentētu savu darbu, organizējot attēlus pēc kolekcijām vai projektiem.</li>
        <li><strong>Pasākumu vai aktivitāšu atspoguļošana:</strong> Foto galerijas tiek izmantotas, lai dalītos ar
            attēliem no pasākumiem, konferencēm, kāzām vai citām aktivitātēm, sniedzot lietotājiem ieskatu piedzīvotajā.
        </li>
        <li><strong>Multivides satura bagātināšana:</strong> Tās palīdz uzlabot lietotāju pieredzi, sniedzot vizuālu
            atbalstu tekstuālajam saturam, piemēram, emuāru ierakstos, ziņās vai izglītojošās vietnēs.</li>
    </ul>



    <example class="not-prose">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @for ($i = 0; $i < 12; $i++)
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="/images/7.avif" alt="Galerijas attēls">
                </div>
            @endfor
        </div>
    </example>







</div>
@endsection