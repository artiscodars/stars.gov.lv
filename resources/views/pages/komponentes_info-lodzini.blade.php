@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <p>Uznirstošie informācijas lodziņi ir mazi, konteksta jutīgi elementi, kas parādās, kad lietotājs veic noteiktu
        darbību, piemēram, uzved kursoru virs elementa vai noklikšķina uz tā. Tie nodrošina papildinformāciju vai
        paskaidrojumus, nepārslogojot lietotāja interfeisu ar lieku tekstu.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Konteksta paskaidrojumi:</strong> Uznirstošie lodziņi palīdz lietotājiem labāk saprast interfeisa
            elementus vai darbības, sniedzot papildu informāciju par pogām, ikonām vai saīsinājumiem.</li>
        <li><strong>Palīdzības norādes:</strong> Tie var nodrošināt īsus padomus vai norādes, kas palīdz lietotājiem
            aizpildīt formas vai veikt sarežģītas darbības.</li>
        <li><strong>Detalizēta informācija:</strong> Uznirstošie lodziņi var sniegt papildu detalizētu informāciju,
            piemēram, skaidrojumus par datiem, bez nepieciešamības atvērt atsevišķu lapu vai sadaļu.</li>
    </ul>

    <h3>Piemērs</h3>
    <example class="not-prose">
        <button data-popover-target="popover-default" type="button"
            class="text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-secondary font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Noklusētais uznirstošais logs
        </button>

        <div data-popover id="popover-default" role="tooltip"
            class="absolute z-10 invisible inline-block w-64 text-sm text-primary transition-opacity duration-300 bg-white border border-beige rounded-lg shadow-sm opacity-0">
            <div class="px-3 py-2 bg-beige border-b border-gray-200 rounded-t-lg">
                <h3 class="font-semibold text-primary">Uznirstošā loga virsraksts</h3>
            </div>
            <div class="px-3 py-2">
                <p>Šis ir pārsteidzošs saturs. Vai ne?</p>
            </div>
            <div data-popper-arrow></div>
        </div>
    </example>

    <h3>Novietojums</h3>
    <example class="not-prose">
        <button data-popover-target="popover-top" data-popover-placement="top" type="button"
            class="text-white mb-3 me-4 bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-secondary font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Uznirstošais logs augšā
        </button>

        <div data-popover id="popover-top" role="tooltip"
            class="absolute z-10 invisible inline-block w-64 text-sm text-primary transition-opacity duration-300 bg-white border border-beige rounded-lg shadow-sm opacity-0">
            <div class="px-3 py-2 bg-beige border-b border-gray-200 rounded-t-lg">
                <h3 class="font-semibold text-primary">Augšējais uznirstošais logs</h3>
            </div>
            <div class="px-3 py-2">
                <p>Šis ir pārsteidzošs saturs. Vai ne?</p>
            </div>
            <div data-popper-arrow></div>
        </div>

        <button data-popover-target="popover-right" data-popover-placement="right" type="button"
            class="text-white mb-3 me-4 bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-secondary font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Uznirstošais logs pa labi
        </button>

        <div data-popover id="popover-right" role="tooltip"
            class="absolute z-10 invisible inline-block w-64 text-sm text-primary transition-opacity duration-300 bg-white border border-beige rounded-lg shadow-sm opacity-0">
            <div class="px-3 py-2 bg-beige border-b border-gray-200 rounded-t-lg">
                <h3 class="font-semibold text-primary">Labais uznirstošais logs</h3>
            </div>
            <div class="px-3 py-2">
                <p>Šis ir pārsteidzošs saturs. Vai ne?</p>
            </div>
            <div data-popper-arrow></div>
        </div>

        <button data-popover-target="popover-bottom" data-popover-placement="bottom" type="button"
            class="text-white mb-3 me-4 bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-secondary font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Uznirstošais logs apakšā
        </button>

        <div data-popover id="popover-bottom" role="tooltip"
            class="absolute z-10 invisible inline-block w-64 text-sm text-primary transition-opacity duration-300 bg-white border border-beige rounded-lg shadow-sm opacity-0">
            <div class="px-3 py-2 bg-beige border-b border-gray-200 rounded-t-lg">
                <h3 class="font-semibold text-primary">Apakšējais uznirstošais logs</h3>
            </div>
            <div class="px-3 py-2">
                <p>Šis ir pārsteidzošs saturs. Vai ne?</p>
            </div>
            <div data-popper-arrow></div>
        </div>

        <button data-popover-target="popover-left" data-popover-placement="left" type="button"
            class="text-white mb-3 me-4 bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-secondary font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Uznirstošais logs pa kreisi
        </button>

        <div data-popover id="popover-left" role="tooltip"
            class="absolute z-10 invisible inline-block w-64 text-sm text-primary transition-opacity duration-300 bg-white border border-beige rounded-lg shadow-sm opacity-0">
            <div class="px-3 py-2 bg-beige border-b border-gray-200 rounded-t-lg">
                <h3 class="font-semibold text-primary">Kreisais uznirstošais logs</h3>
            </div>
            <div class="px-3 py-2">
                <p>Šis ir pārsteidzošs saturs. Vai ne?</p>

            </div>
            <div data-popper-arrow></div>
        </div>
    </example>
</div>
@endsection