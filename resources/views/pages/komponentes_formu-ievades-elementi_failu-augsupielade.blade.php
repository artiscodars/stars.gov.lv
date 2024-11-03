@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <p>Failu augšupielādes lauki ļauj lietotājiem augšupielādēt dažādu formātu failus tieši no savas ierīces. Šie lauki
        var būt dažādās formās un izmēros, un tie nodrošina ērtu un intuitīvu veidu, kā iesniegt nepieciešamos failus.
    </p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Formu aizpildīšana:</strong> Failu augšupielādes lauki tiek izmantoti, lai lietotāji varētu
            pievienot dokumentus, attēlus vai citus failus, aizpildot dažādas formas, piemēram, pieteikumus,
            reģistrācijas formas vai klientu atbalsta pieprasījumus.</li>
        <li><strong>Ielādes laukums:</strong> Velc un nomet stila ielādes laukums nodrošina lietotājiem vienkāršu un
            ātru veidu, kā augšupielādēt failus, vilkšanas un nomešanas metodes izmantošanu, uzlabojot lietotāja
            pieredzi.</li>
        <li><strong>Dažādi izmēri un paskaidrojumi:</strong> Ievades lauki ar dažādiem izmēriem un paskaidrojošiem
            tekstiem palīdz lietotājiem labāk izprast, kādus failus viņi var augšupielādēt un kādas ir konkrētas
            prasības (piemēram, failu formāti un izmēri).</li>
        <li><strong>Multivides augšupielāde:</strong> Bieži tiek izmantoti, lai lietotāji varētu augšupielādēt attēlus,
            videoklipus vai dokumentus, kas nepieciešami multivides galerijām, portfeļiem vai produktu lapām.</li>
    </ul>

    <h3>Piemērs</h3>

    <example class="not-prose">
        <label class="block mb-2 text-sm font-medium text-primary dark:text-light" for="file_input">Augšupielādēt
            failu</label>
        <input
            class="block w-full text-sm text-primary border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
            id="file_input" type="file">
    </example>

    <h3>Ar paskaidrojumu</h3>

    <example class="not-prose">
        <label class="block mb-2 text-sm font-medium text-primary dark:text-light" for="file_input">Augšupielādēt
            failu</label>
        <input
            class="block w-full text-sm text-primary border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
            aria-describedby="file_input_help" id="file_input" type="file">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400" id="file_input_help">SVG, PNG, JPG vai GIF (MAX.
            800x400px).</p>
    </example>

    <h3>Izmēri</h3>

    <example class="not-prose">
        <label class="block mb-2 text-sm font-medium text-primary dark:text-light" for="small_size">Mazs faila ievades
            lauks</label>
        <input
            class="block w-full mb-5 text-xs text-primary border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
            id="small_size" type="file">

        <label class="block mb-2 text-sm font-medium text-primary dark:text-light" for="default_size">Noklusējuma
            izmērs</label>
        <input
            class="block w-full mb-5 text-sm text-primary border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
            id="default_size" type="file">

        <label class="block mb-2 text-sm font-medium text-primary dark:text-light" for="large_size">Liels faila ievades
            lauks</label>
        <input
            class="block w-full text-lg text-primary border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
            id="large_size" type="file">
    </example>

    <h3>Ielādes laukums</h3>

    <example class="not-prose">
        <div class="flex items-center justify-center w-full">
            <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Noklikšķiniet,

                            lai augšupielādētu</span> vai velciet un nometiet</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG vai GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
        </div>
    </example>

</div>
@endsection