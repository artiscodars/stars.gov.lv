@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Paziņojumi ir lietotāja interfeisa elementi, kas tiek izmantoti, lai sniegtu lietotājiem svarīgu informāciju,
        brīdinājumus vai atsauksmes par viņu darbībām. Tie palīdz uzturēt lietotājus informētus par notiekošo sistēmā
        vai lietotnē, nodrošinot reāllaika komunikāciju.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Kļūdu un brīdinājumu ziņojumi:</strong> Paziņojumi tiek izmantoti, lai informētu lietotājus par
            kļūdām vai potenciālām problēmām, piemēram, nepareizi aizpildītām formām vai sistēmas kļūmēm.</li>
        <li><strong>Veiksmīgu darbību apstiprinājumi:</strong> Tie var sniegt atsauksmes par veiksmīgi izpildītām
            darbībām, piemēram, veiksmīgu datu saglabāšanu vai reģistrāciju.</li>
        <li><strong>Informējoši paziņojumi:</strong> Paziņojumi var informēt lietotājus par jauniem atjauninājumiem,
            izmaiņām vai citiem svarīgiem notikumiem sistēmā vai lietotnē.</li>
        <li><strong>Lietotāja darbību apstiprinājumi:</strong> Tos var izmantot, lai pieprasītu lietotāja apstiprinājumu
            vai reakciju uz noteiktām darbībām, piemēram, apstiprinot izmaiņas vai piekrišanu noteikumiem.</li>
        <li><strong>Drošības paziņojumi:</strong> Paziņojumi var brīdināt lietotājus par drošības jautājumiem, piemēram,
            neautorizētu piekļuvi, parolas stiprumu vai nepieciešamību veikt papildu drošības pārbaudes.</li>
    </ul>

    <h3>Piemērs</h3>


    <example class="not-prose">
        <div class="p-4 mb-4  bg-gray-100 border-l-[15px] border-third   rounded-lg" role="alert">
            <span class="font-medium">Informācijas paziņojums!</span> Lūdzu, veiciet dažas izmaiņas un mēģiniet vēlreiz.
        </div>
        <div class="p-4 mb-4 t bg-gray-100 border-l-[15px] border-error  rounded-lg" role="alert">
            <span class="font-medium">Kļūdas paziņojums!</span> Lūdzu, veiciet dažas izmaiņas un mēģiniet vēlreiz.
        </div>
        <div class="p-4 mb-4  bg-gray-100 border-l-[15px] border-success  rounded-lg" role="alert">
            <span class="font-medium">Veiksmīgs paziņojums!</span> Jūsu pieprasījums tika veiksmīgi apstrādāts.
        </div>
        <div class="p-4 mb-4 bg-gray-100 border-l-[15px] border-warning  rounded-lg" role="alert">
            <span class="font-medium">Brīdinājuma paziņojums!</span> Lūdzu, pievērsiet uzmanību šai informācijai.
        </div>
        <div class="p-4  bg-gray-100 border-l-[15px] border-primary rounded-lg" role="alert">
            <span class="font-medium">Tumšais paziņojums!</span> Šī ir papildu informācija, kas jāņem vērā.
        </div>
    </example>

    <h3>Ar piktorgrammu</h3>

    <example class="not-prose">
        <div class="flex items-center p-4 mb-4 bg-gray-100 border-l-[15px] border-third rounded-lg" role="alert">
            <svg class="flex-shrink-0 w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Informācija</span>
            <div>
                <span class="font-medium">Informācijas paziņojums!</span> Lūdzu, veiciet dažas izmaiņas un mēģiniet
                vēlreiz.
            </div>
        </div>
        <div class="flex items-center p-4 mb-4 bg-gray-100 border-l-[15px] border-error rounded-lg" role="alert">
            <svg class="flex-shrink-0 w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Kļūda</span>
            <div>
                <span class="font-medium">Kļūdas paziņojums!</span> Lūdzu, veiciet dažas izmaiņas un mēģiniet vēlreiz.
            </div>
        </div>
        <div class="flex items-center p-4 mb-4 bg-gray-100 border-l-[15px] border-success rounded-lg" role="alert">
            <svg class="flex-shrink-0 w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Veiksmīgi</span>
            <div>
                <span class="font-medium">Veiksmīgs paziņojums!</span> Jūsu pieprasījums tika veiksmīgi apstrādāts.
            </div>
        </div>
        <div class="flex items-center p-4 mb-4 bg-gray-100 border-l-[15px] border-warning rounded-lg" role="alert">
            <svg class="flex-shrink-0 w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Brīdinājums</span>
            <div>
                <span class="font-medium">Brīdinājuma paziņojums!</span> Lūdzu, pievērsiet uzmanību šai informācijai.
            </div>
        </div>
        <div class="flex items-center p-4 bg-gray-100 border-l-[15px] border-primary rounded-lg" role="alert">
            <svg class="flex-shrink-0 w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Informācija</span>
            <div>
                <span class="font-medium">Tumšais paziņojums!</span> Šī ir papildu informācija, kas jāņem vērā.
            </div>
        </div>
    </example>


    <h3>Ar paplašinātu informāciju</h3>

    <example class="not-prose">
        <div class="flex p-4 mb-4 bg-gray-100 border-l-[15px] border-third rounded-lg" role="alert">
            <svg class="flex-shrink-0 w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Informācija</span>
            <div>
                <span class="font-medium">Pārliecinieties, ka šīs prasības ir izpildītas:</span>
                <ul class="mt-1.5 list-disc list-inside">
                    <li>Vismaz 10 rakstzīmes (un līdz 100 rakstzīmēm)</li>
                    <li>Vismaz viena mazā burta rakstzīme</li>
                    <li>Vismaz viens īpašs simbols, piem., ! @ # ?</li>
                </ul>
            </div>
        </div>
        <div class="flex p-4 mb-4 bg-gray-100 border-l-[15px] border-error rounded-lg" role="alert">
            <svg class="flex-shrink-0 w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Briesmas</span>
            <div>
                <span class="font-medium">Pārliecinieties, ka šīs prasības ir izpildītas:</span>
                <ul class="mt-1.5 list-disc list-inside">
                    <li>Vismaz 10 rakstzīmes (un līdz 100 rakstzīmēm)</li>
                    <li>Vismaz viena mazā burta rakstzīme</li>
                    <li>Vismaz viens īpašs simbols, piem., ! @ # ?</li>
                </ul>
            </div>
        </div>
    </example>



    <h3>Aizveramie</h3>


    <example class="not-prose">
        <div id="alert-1" class="flex items-center p-4 mb-4 bg-gray-100 border-l-[15px] border-third rounded-lg"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Vienkāršs informācijas paziņojums ar <a href="#"
                    class="font-semibold underline hover:no-underline">piemēra saiti</a>. Noklikšķiniet, ja vēlaties.
            </div>
            <button type="button"
                class="ms-auto p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 bg-gray-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400"
                data-dismiss-target="#alert-1" aria-label="Aizvērt">
                <span class="sr-only">Aizvērt</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>

        <div id="alert-2" class="flex items-center p-4 mb-4 bg-gray-100 border-l-[15px] border-error rounded-lg"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Vienkāršs kļūdas paziņojums ar <a href="#" class="font-semibold underline hover:no-underline">piemēra
                    saiti</a>. Noklikšķiniet, ja vēlaties.
            </div>
            <button type="button"
                class="ms-auto p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 bg-gray-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400"
                data-dismiss-target="#alert-2" aria-label="Aizvērt">
                <span class="sr-only">Aizvērt</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>

        <div id="alert-3" class="flex items-center p-4 mb-4 bg-gray-100 border-l-[15px] border-success rounded-lg"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Vienkāršs veiksmīgs paziņojums ar <a href="#" class="font-semibold underline hover:no-underline">piemēra
                    saiti</a>. Noklikšķiniet, ja vēlaties.
            </div>
            <button type="button"
                class="ms-auto p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 bg-gray-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400"
                data-dismiss-target="#alert-3" aria-label="Aizvērt">
                <span class="sr-only">Aizvērt</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>

        <div id="alert-4" class="flex items-center p-4 mb-4 bg-gray-100 border-l-[15px] border-warning rounded-lg"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                Vienkāršs brīdinājuma paziņojums ar <a href="#"
                    class="font-semibold underline hover:no-underline">piemēra saiti</a>. Noklikšķiniet, ja vēlaties.
            </div>
            <button type="button"
                class="ms-auto p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 bg-gray-100 text-warning rounded-lg focus:ring-2 focus:ring-yellow-400"
                data-dismiss-target="#alert-4" aria-label="Aizvērt">
                <span class="sr-only">Aizvērt</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>

        <div id="alert-5" class="flex items-center p-4 bg-gray-100 border-l-[15px] border-primary rounded-lg"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium text-gray-800">
                Vienkāršs tumšais paziņojums ar <a href="#" class="font-semibold underline hover:no-underline">piemēra
                    saiti</a>. Noklikšķiniet, ja vēlaties.
            </div>
            <button type="button"
                class="ms-auto p-1.5 hover:bg-gray-200 inline-flex items-center justify-center h-8 w-8 bg-gray-100 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400"
                data-dismiss-target="#alert-5" aria-label="Aizvērt">
                <span class="sr-only">Aizvērt</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </example>






</div>
@endsection