@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <p>Datu ievades ieteikumi, pazīstami arī kā tooltips, ir nelieli informācijas burbuļi, kas parādās, kad lietotājs
        uzved kursoru virs noteiktas saskarnes daļas. Tie nodrošina papildu informāciju vai paskaidrojumus,
        nepārslogojot lietotāja interfeisu ar lieku tekstu.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Forma aizpildīšana:</strong> Tooltips var sniegt norādes vai paskaidrojumus par to, kā pareizi
            aizpildīt formu laukus, palīdzot lietotājiem izvairīties no kļūdām.</li>
        <li><strong>Papildu informācija:</strong> Tooltips ir lieliski piemēroti, lai sniegtu papildinformāciju par
            konkrētiem elementiem, piemēram, ikonas nozīmi vai saīsinājumu skaidrojumu.</li>
        <li><strong>Lietotāja pieredzes uzlabošana:</strong> Ar tooltips palīdzību var samazināt informācijas pārslodzi,
            saglabājot saskarni tīru un vienkāršu, vienlaikus nodrošinot piekļuvi svarīgai informācijai.</li>
    </ul>

    <h3>Piemērs</h3>

    <example class="not-prose">
        <button data-tooltip-target="tooltip-default" type="button"
            class="text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-third font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Noklusējuma padoms
        </button>

        <div id="tooltip-default" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip">
            Padoma saturs
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </example>

    <h3>Stili</h3>

    <example class="not-prose">
        <!-- Gaišais stils -->
        <button data-tooltip-target="tooltip-light" data-tooltip-style="light" type="button"
            class="text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-third font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Gaišs padoms
        </button>

        <div id="tooltip-light" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-primary bg-light border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Padoma saturs
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Tumšais stils -->
        <button data-tooltip-target="tooltip-dark" type="button"
            class="ms-3 text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-third font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Tumšs padoms
        </button>

        <div id="tooltip-dark" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600  rounded-lg shadow-sm opacity-0 tooltip">
            Padoma saturs
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </example>

    <h3>Novietojums</h3>

    <example class="not-prose">
        <!-- Padoms augšpusē -->
        <button data-tooltip-target="tooltip-top" data-tooltip-placement="top" type="button"
            class="mb-2 md:mb-0 text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-third font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Padoms augšā
        </button>

        <div id="tooltip-top" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600  rounded-lg shadow-sm opacity-0 tooltip">
            Padoms augšpusē
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Padoms labajā pusē -->
        <button data-tooltip-target="tooltip-right" data-tooltip-placement="right" type="button"
            class="ms-3 mb-2 md:mb-0 text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-third font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Padoms labajā pusē
        </button>

        <div id="tooltip-right" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600  rounded-lg shadow-sm opacity-0 tooltip">
            Padoms labajā pusē
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Padoms apakšā -->
        <button data-tooltip-target="tooltip-bottom" data-tooltip-placement="bottom" type="button"
            class="ms-3 mb-2 md:mb-0 text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-third font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Padoms apakšā
        </button>

        <div id="tooltip-bottom" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600  rounded-lg shadow-sm opacity-0 tooltip">
            Padoms apakšā
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Padoms kreisajā pusē -->
        <button data-tooltip-target="tooltip-left" data-tooltip-placement="left" type="button"
            class="ms-3 mb-2 md:mb-0 text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-third font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Padoms kreisajā pusē
        </button>

        <div id="tooltip-left" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg shadow-sm opacity-0 tooltip">
           
 Padoms kreisajā pusē
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </example>
</div>
@endsection