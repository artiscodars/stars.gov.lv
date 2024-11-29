@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>
    <p>Citāti ir teksta fragmenti, kas tiek izmantoti, lai izceltu svarīgas idejas vai atkārtotu citu personu
        izteikumus. Tie piešķir saturam autoritāti, dziļumu un kontekstu, padarot tekstu daudzveidīgāku un
        informatīvāku.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Autoritātes pievienošana:</strong> Citāti no uzticamiem avotiem var pievienot saturam ticamību un
            autoritāti, stiprinot lietotāju uzticību.</li>
        <li><strong>Informatīvā vērtība:</strong> Citāti var sniegt papildu informāciju vai ilustrēt rakstā minētos
            punktus, piedāvājot lasītājiem plašāku skatījumu.</li>
        <li><strong>Estētiskā vērtība:</strong> Labi formatēti citāti var uzlabot lapas vizuālo izskatu, piešķirot tai
            profesionālu un izsmalcinātu izskatu.</li>
    </ul>
    <example class="not-prose">
        <div class="bg-primary text-white p-8 rounded-lg shadow-lg max-w-lg mx-auto">
            <div class="relative text-xl font-semibold mb-4 font-serif italic">

                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis felis ut mi vehicula
                fermentum."
            </div>

            <p class="text-sm font-mediumm text-end text-warning">/ Alfrēds Kalniņš /</p>
        </div>



    </example>

    <example class="not-prose">
        <div class="bg-secondary text-white p-8 rounded-lg shadow-lg max-w-lg mx-auto">
            <div class="relative text-xl font-semibold mb-4 font-serif italic">

                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis felis ut mi vehicula
                fermentum."
            </div>

            <p class="text-sm font-mediumm text-end text-warning">/ Alfrēds Kalniņš /</p>
        </div>



    </example>

    <example class="not-prose">
        <div class=" bg-beige p-8 rounded-lg shadow-lg max-w-lg mx-auto">
            <div class="relative text-xl font-semibold mb-4 font-serif italic">

                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis felis ut mi vehicula
                fermentum."
            </div>

            <p class="text-sm font-mediumm text-end ">/ Alfrēds Kalniņš /</p>
        </div>



    </example>

    <example class="not-prose">
        <div class=" bg-light p-8 rounded-lg shadow-lg max-w-lg mx-auto">
            <div class="relative text-xl font-semibold mb-4 font-serif italic">

                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis felis ut mi vehicula
                fermentum."
            </div>

            <p class="text-sm font-mediumm text-end ">/ Alfrēds Kalniņš /</p>
        </div>



    </example>
</div>

@endsection