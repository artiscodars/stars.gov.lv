@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Padomu rīki jeb tooltips ir nelieli informācijas burbuļi, kas parādās, kad lietotājs veic noteiktu darbību,
        piemēram, uzved kursoru virs elementa vai noklikšķina uz tā. Tie sniedz īsus un precīzus paskaidrojumus vai
        papildu informāciju par interfeisa elementiem, bez nepieciešamības pārslogot lietotāja interfeisu ar tekstu.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Konteksta paskaidrojumi:</strong> Tooltips palīdz lietotājiem labāk saprast interfeisa elementus vai
            funkcijas, piemēram, skaidro pogu vai ikonu nozīmi.</li>
        <li><strong>Palīdzība formu aizpildīšanā:</strong> Tie var sniegt norādes vai padomus par to, kā pareizi
            aizpildīt formas laukus, piemēram, paskaidrot, kādu formātu izmantot ievadot informāciju.</li>
        <li><strong>Papildu informācijas sniegšana:</strong> Tooltips var piedāvāt sīkāku informāciju vai skaidrojumus
            par konkrētiem datiem, piemēram, terminu definīcijas vai saīsinājumu nozīmi.</li>
        <li><strong>Uzlabota lietotāja pieredze:</strong> Ar tooltips palīdzību var nodrošināt lietotājiem noderīgu
            informāciju īstajā brīdī, nepārslogojot galveno saturu, tādējādi uzlabojot lietotāja pieredzi.</li>
        <li><strong>Dizaina vienkāršošana:</strong> Tooltips ļauj saglabāt tīru un kārtīgu dizainu, nodrošinot, ka
            papildinformācija ir pieejama tikai tad, kad tā ir nepieciešama, nevis tiek rādīta vienmēr.</li>
    </ul>

    <h3>Piemērs</h3>

    <example class="not-prose">
        <button data-tooltip-target="tooltip-default" type="button"
            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-third-light font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Noklusējuma uzvedne
        </button>

        <div id="tooltip-default" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-700 rounded-lg shadow-sm opacity-0 tooltip">
            Uzvednes saturs
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </example>

    <h3>Novietojums</h3>

    <example class="not-prose">
        <!-- Uzvedne virs pogas -->
        <button data-tooltip-target="tooltip-top" data-tooltip-placement="top" type="button"
            class="mb-2 md:mb-0 text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-third-light font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Uzvedne augšā
        </button>

        <div id="tooltip-top" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-700 rounded-lg shadow-sm opacity-0 tooltip">
            Uzvedne augšā
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Uzvedne labajā pusē -->
        <button data-tooltip-target="tooltip-right" data-tooltip-placement="right" type="button"
            class="ms-3 mb-2 md:mb-0 text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-third-light font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Uzvedne pa labi
        </button>

        <div id="tooltip-right" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-700 rounded-lg shadow-sm opacity-0 tooltip">
            Uzvedne pa labi
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Uzvedne apakšā -->
        <button data-tooltip-target="tooltip-bottom" data-tooltip-placement="bottom" type="button"
            class="ms-3 mb-2 md:mb-0 text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-third-light font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Uzvedne apakšā
        </button>

        <div id="tooltip-bottom" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-700 rounded-lg shadow-sm opacity-0 tooltip">
            Uzvedne apakšā
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Uzvedne kreisajā pusē -->
        <button data-tooltip-target="tooltip-left" data-tooltip-placement="left" type="button"
            class="ms-3 mb-2 md:mb-0 text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-third-light font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Uzvedne pa kreisi
        </button>

        <di v id="tooltip-left" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-700 rounded-lg shadow-sm opacity-0 tooltip">
            Uzvedne pa kreisi
            <div class="tooltip-arrow" data-popper-arrow></div>
        </di>
    </example>
</div>
@endsection