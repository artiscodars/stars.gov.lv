@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <p>Modālie logi ir lietotāja interfeisa elementi, kas tiek parādīti virs galvenā satura, aptumšojot pārējo lapas
        daļu, lai piesaistītu lietotāja uzmanību konkrētam ziņojumam vai darbībai. Tie bieži tiek izmantoti, lai sniegtu
        svarīgu informāciju vai pieprasītu lietotāja darbību, nepārvietojot lietotāju uz citu lapu.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Paziņojumi un brīdinājumi:</strong> Modālie logi ir lieliski piemēroti, lai parādītu svarīgus
            paziņojumus vai brīdinājumus, piemēram, kļūdu ziņojumus, apstiprinājumus vai drošības brīdinājumus.</li>
        <li><strong>Datu ievade:</strong> Tos var izmantot, lai pieprasītu lietotāja ievadi, piemēram, formas
            aizpildīšanai, parakstīšanās uz jauninājumiem vai lietotāja autentifikācijai (pieteikšanās/log in).</li>
        <li><strong>Attēlu vai multivides demonstrēšana:</strong> Modālie logi bieži tiek izmantoti, lai parādītu
            attēlus, videoklipus vai citu multivides saturu pilnā izmērā, nezaudējot kontekstu par pašreizējo lapu.</li>
        <li><strong>Darījumu apstiprināšana:</strong> Pirms svarīgu darbību veikšanas, piemēram, dzēšanas, pirkuma
            apstiprināšanas vai iestatījumu maiņas, modālie logi var nodrošināt, ka lietotājs apzināti piekrīt veikt šo
            darbību.</li>
        <li><strong>Interaktīvie dialogi:</strong> Modālie logi var kalpot kā platforma sarežģītākiem dialogiem,
            piemēram, vairāku soļu veidlapām vai jautājumiem, kur nepieciešama lietotāja mijiedarbība.</li>
    </ul>

    <h3>Piemērs</h3>

    <example class="not-prose">

        <!-- Modal toggle -->
        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
            class="block text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            type="button">
            Atvērt modālo logu
        </button>

        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold ">
                            Modālā loga virsraksts
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover: rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Aizvērt</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed Atcelt">
                        <p class="text-base leading-relaxed Atcelt">
                            Mazāk nekā mēnesi pirms Eiropas Savienība ievieš jaunus patērētāju privātuma likumus saviem
                            pilsoņiem, uzņēmumi visā pasaulē atjaunina savus pakalpojumu sniegšanas noteikumus, lai
                            atbilstu prasībām.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Eiropas Savienības Vispārīgā datu aizsardzības regula (G.D.P.R.) stājas spēkā 25. maijā un
                            ir paredzēta, lai nodrošinātu vienotu datu tiesību kopumu Eiropas Savienībā. Tā prasa
                            organizācijām pēc iespējas ātrāk informēt lietotājus par augsta riska datu pārkāpumiem, kas
                            varētu viņus personīgi ietekmēt.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button data-modal-hide="default-modal" type="button"
                            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Apstiprinu</button>
                        <button data-modal-hide="default-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium  focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Atcelt</button>
                    </div>
                </div>
            </div>
        </div>

    </example>

    <h3>Statisks</h3>

    <example class="not-prose">

        <!-- Modal toggle -->
        <button data-modal-target="static-modal" data-modal-toggle="static-modal"
            class="block text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            type="button">
            Atvērt modālo logu
        </button>

        <!-- Main modal -->
        <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold ">
                            Statisks modālais logs
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover: rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="static-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Aizvērt</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed Atcelt">
                        <p class="text-base leading-relaxed Atcelt">
                            Mazāk nekā mēnesi pirms Eiropas Savienība ievieš jaunus patērētāju privātuma likumus saviem
                            pilsoņiem, uzņēmumi visā pasaulē atjaunina savus pakalpojumu sniegšanas noteikumus, lai
                            atbilstu prasībām.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Eiropas Savienības Vispārīgā datu aizsardzības regula (G.D.P.R.) stājas spēkā 25. maijā un
                            ir paredzēta, lai nodrošinātu vienotu datu tiesību kopumu Eiropas Savienībā. Tā prasa
                            organizācijām pēc iespējas ātrāk informēt lietotājus par augsta riska datu pārkāpumiem, kas
                            varētu viņus personīgi ietekmēt.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button data-modal-hide="static-modal" type="button"
                            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Apstiprinu</button>
                        <button data-modal-hide="static-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium  focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Atcelt</button>
                    </div>
                </div>
            </div>
        </div>

    </example>

    <h3>Izmēri</h3>

    <example class="not-prose">

        <div class="block space-y-4 md:flex md:space-y-0 md:space-x-4 rtl:space-x-reverse">
            <!-- Modal toggle -->
            <button data-modal-target="small-modal" data-modal-toggle="small-modal"
                class="block w-full md:w-auto text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Mazs modālais logs
            </button>
            <button data-modal-target="medium-modal" data-modal-toggle="medium-modal"
                class="block w-full md:w-auto text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Noklusētais logs
            </button>
            <button data-modal-target="large-modal" data-modal-toggle="large-modal"
                class="block w-full md:w-auto text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Liels modālais logs
            </button>
            <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                class="block w-full md:w-auto text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Ļoti liels modālais logs
            </button>
        </div>

        <!-- Small Modal -->
        <div id="small-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-medium ">
                            Mazs modālais logs
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover: rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="small-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Aizvērt</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed Atcelt">
                        <p class="text-base leading-relaxed Atcelt">
                            Mazāk nekā mēnesi pirms Eiropas Savienība ievieš jaunus patērētāju privātuma likumus saviem
                            pilsoņiem, uzņēmumi visā pasaulē atjaunina savus pakalpojumu sniegšanas noteikumus, lai
                            atbilstu prasībām.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Eiropas Savienības Vispārīgā datu aizsardzības regula (G.D.P.R.) stājas spēkā 25. maijā un
                            ir paredzēta, lai nodrošinātu vienotu datu tiesību kopumu Eiropas Savienībā. Tā prasa
                            organizācijām pēc iespējas ātrāk informēt lietotājus par augsta riska datu pārkāpumiem, kas
                            varētu viņus personīgi ietekmēt.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button data-modal-hide="small-modal" type="button"
                            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Apstiprinu</button>
                        <button data-modal-hide="small-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium  focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Atcelt</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Default Modal -->
        <div id="medium-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
            <div class="relative w-full max-w-lg max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-medium ">
                            Noklusētais logs
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover: rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="medium-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Aizvērt</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed Atcelt">
                            Mazāk nekā mēnesi pirms Eiropas Savienība ievieš jaunus patērētāju privātuma likumus saviem
                            pilsoņiem, uzņēmumi visā pasaulē atjaunina savus pakalpojumu sniegšanas noteikumus, lai
                            atbilstu prasībām.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Eiropas Savienības Vispārīgā datu aizsardzības regula (G.D.P.R.) stājas spēkā 25. maijā un
                            ir paredzēta, lai nodrošinātu vienotu datu tiesību kopumu Eiropas Savienībā. Tā prasa
                            organizācijām pēc iespējas ātrāk informēt lietotājus par augsta riska datu pārkāpumiem, kas
                            varētu viņus personīgi ietekmēt.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                        <button data-modal-hide="medium-modal" type="button"
                            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Apstiprinu</button>
                        <button data-modal-hide="medium-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium  focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Atcelt</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Large Modal -->
        <div id="large-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
            <div class="relative w-full max-w-4xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-medium ">
                            Liels modālais logs
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover: rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="large-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Aizvērt</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed Atcelt">
                            Mazāk nekā mēnesi pirms Eiropas Savienība ievieš jaunus patērētāju privātuma likumus saviem
                            pilsoņiem, uzņēmumi visā pasaulē atjaunina savus pakalpojumu sniegšanas noteikumus, lai
                            atbilstu prasībām.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Eiropas Savienības Vispārīgā datu aizsardzības regula (G.D.P.R.) stājas spēkā 25. maijā un
                            ir paredzēta, lai nodrošinātu vienotu datu tiesību kopumu Eiropas Savienībā. Tā prasa
                            organizācijām pēc iespējas ātrāk informēt lietotājus par augsta riska datu pārkāpumiem, kas
                            varētu viņus personīgi ietekmēt.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                        <button data-modal-hide="large-modal" type="button"
                            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Apstiprinu</button>
                        <button data-modal-hide="large-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium  focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Atcelt</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Extra Large Modal -->
        <div id="extralarge-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black bg-opacity-50">
            <div class="relative w-full max-w-7xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">

                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-medium ">
                            Ļoti liels modālais logs
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover: rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="extralarge-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Aizvērt</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed Atcelt">
                            Mazāk nekā mēnesi pirms Eiropas Savienība ievieš jaunus patērētāju privātuma likumus saviem
                            pilsoņiem, uzņēmumi visā pasaulē atjaunina savus pakalpojumu sniegšanas noteikumus, lai
                            atbilstu prasībām.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Eiropas Savienības Vispārīgā datu aizsardzības regula (G.D.P.R.) stājas spēkā 25. maijā un
                            ir paredzēta, lai nodrošinātu vienotu datu tiesību kopumu Eiropas Savienībā. Tā prasa
                            organizācijām pēc iespējas ātrāk informēt lietotājus par augsta riska datu pārkāpumiem, kas
                            varētu viņus personīgi ietekmēt.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Mazāk nekā mēnesi pirms Eiropas Savienība ievieš jaunus patērētāju privātuma likumus saviem
                            pilsoņiem, uzņēmumi visā pasaulē atjaunina savus pakalpojumu sniegšanas noteikumus, lai
                            atbilstu prasībām.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Eiropas Savienības Vispārīgā datu aizsardzības regula (G.D.P.R.) stājas spēkā 25. maijā un
                            ir paredzēta, lai nodrošinātu vienotu datu tiesību kopumu Eiropas Savienībā. Tā prasa
                            organizācijām pēc iespējas ātrāk informēt lietotājus par augsta riska datu pārkāpumiem, kas
                            varētu viņus personīgi ietekmēt.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Mazāk nekā mēnesi pirms Eiropas Savienība ievieš jaunus patērētāju privātuma likumus saviem
                            pilsoņiem, uzņēmumi visā pasaulē atjaunina savus pakalpojumu sniegšanas noteikumus, lai
                            atbilstu prasībām.
                        </p>
                        <p class="text-base leading-relaxed Atcelt">
                            Eiropas Savienības Vispārīgā datu aizsardzības regula (G.D.P.R.) stājas spēkā 25. maijā un
                            ir paredzēta, lai nodrošinātu vienotu datu tiesību kopumu Eiropas Savienībā. Tā prasa
                            organizācijām pēc iespējas ātrāk informēt lietotājus par augsta riska datu pārkāpumiem, kas
                            varētu viņus personīgi ietekmēt.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                        <button data-modal-hide="extralarge-modal" type="button"
                            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Apstiprinu</button>
                        <button data-modal-hide="extralarge-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium  focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Atcelt</button>
                    </div>
                </div>
            </div>
        </div>

        </examp le>

</div>
@endsection