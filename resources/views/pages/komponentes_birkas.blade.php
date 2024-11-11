@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Birkas ir lietotāja interfeisa elementi, kas palīdz organizēt un kategorizēt saturu. Tās bieži tiek izmantotas,
        lai ātri un efektīvi marķētu saistītus objektus, piemēram, rakstus, produktus vai projektus.</p>

    <h3>Pielietojuma gadījumli</h3>
    <ul>
        <li><strong>Satura organizācija:</strong> Birkas ļauj lietotājiem ātri atrast saistītu saturu, izmantojot
            kategorijas vai atslēgvārdus.</li>
        <li><strong>Meklēšanas uzlabošana:</strong> Birkas palīdz lietotājiem filtrēt saturu, uzlabojot meklēšanas
            un
            navigācijas pieredzi.</li>
        <li><strong>Lietotāja iesaiste:</strong> Izmantojot birkas, lietotāji var vieglāk izpētīt līdzīgu vai
            saistītu
            saturu, kas palielina viņu iesaisti un uzturēšanās laiku vietnē.</li>
    </ul>

    <h3>Piemērs</h3>

    <example class="not-prose">
        <span class="bg-light text-primary text-xs font-medium me-2 px-2.5 py-0.5 rounded">Primārais</span>
        <span class="bg-light text-secondary text-xs font-medium me-2 px-2.5 py-0.5 rounded">Sekundārais</span>
        <span class="bg-light text-third text-xs font-medium me-2 px-2.5 py-0.5 rounded">Akcenta</span>
        <span class="bg-light text-success text-xs font-medium me-2 px-2.5 py-0.5 rounded">Veiksmīgs</span>
        <span class="bg-light text-warning text-xs font-medium me-2 px-2.5 py-0.5 rounded">Brīdinājums</span>
        <span class="bg-light text-error text-xs font-medium me-2 px-2.5 py-0.5 rounded">Kļūda</span>

    </example>

    <h3>Lielas birkas</h3>
    <example class="not-prose">
        <span class="bg-light text-primary text-sm font-medium me-2 px-2.5 py-0.5 rounded">Primārais</span>
        <span class="bg-light text-secondary text-sm font-medium me-2 px-2.5 py-0.5 rounded">Sekundārais</span>
        <span class="bg-light text-third text-sm font-medium me-2 px-2.5 py-0.5 rounded">Akcenta</span>
        <span class="bg-light text-success text-sm font-medium me-2 px-2.5 py-0.5 rounded">Veiksmīgs</span>
        <span class="bg-light text-warning text-sm font-medium me-2 px-2.5 py-0.5 rounded">Brīdinājums</span>
        <span class="bg-light text-error text-sm font-medium me-2 px-2.5 py-0.5 rounded">Kļūda</span>

    </example>

    <h3>Ar apvilktu līniju</h3>
    <example class="not-prose">
        <span
            class="bg-light text-primary text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-primary">Primārais</span>
        <span
            class="bg-light text-secondary text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-secondary">Sekundārais</span>
        <span
            class="bg-light text-third text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-third">Akcenta</span>
        <span
            class="bg-light text-success text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-success">Veiksmīgs</span>
        <span
            class="bg-light text-warning text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-warning">Brīdinājums</span>
        <span
            class="bg-light text-error text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-error">Kļūda</span>

    </example>

    <h3>Noapaļotas</h3>
    <example class="not-prose">
        <span class="bg-light text-primary text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Primārais</span>
        <span class="bg-light text-secondary text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Sekundārais</span>
        <span class="bg-light text-third text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Akcenta</span>
        <span class="bg-light text-success text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Veiksmīgs</span>
        <span class="bg-light text-warning text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Brīdinājums</span>
        <span class="bg-light text-error text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Kļūda</span>

    </example>

    <h3>Kā saites</h3>
    <example class="not-prose">
        <a href="#"
            class="bg-light hover:bg-primary hover:text-white text-primary text-xs font-semibold me-2 px-2.5 py-0.5 rounded border border-primary inline-flex items-center justify-center">Birku
            saite</a>
        <a href="#"
            class="bg-light hover:bg-primary text-primary hover:text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-primary inline-flex items-center justify-center">Birku
            saite</a>
    </example>

    <h3>Ar piktogrammām</h3>
    <example class="not-prose">
        <span
            class="bg-light text-primary text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded me-2 border border-primary">
            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
            </svg>
            Pirms 3 dienām
        </span>
        <span
            class="bg-light text-primary text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded me-2 border border-primary">
            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
            </svg>
            Pirms 2 minūtēm
        </span>
    </example>

    <h3>Notifikācijas birka</h3>
    <example class="not-prose">
        <button type="button"
            class="relative inline-flex items-center p-3 text-sm font-medium hover:opacity-70 text-center text-white bg-primary rounded-lg hover:bg-primary-dark focus:ring-4 focus:outline-none focus:ring-primary">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 16">
                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                <path
                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
            </svg>
            <span class="sr-only">Paziņojumi</span>
            <div
                class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-error border-2 border-white rounded-full -top-2 -end-2">
                20
            </div>
        </button>
    </example>

    <h3>Poga ar birku</h3>
    <example class="not-prose">
        <button type="button"
            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-primary hover:opacity-70 rounded-lg hover:bg-primary-dark">
            Ziņas
            <span
                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-primary bg-light rounded-full">
                2
            </span>
        </button>
    </example>

    <h3>Tikai piktogrammas</h3>
    <example class="not-prose">
        <span
            class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-primary bg-light rounded-full">
            <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 16 12">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5.917 5.724 10.5 15 1.5" />
            </svg>
            <span class="sr-only">Ikonas apraksts</span>
        </span>
    </example>

    <h3>Atceļamās birkas</h3>
    <example class="not-prose">
        <span id="badge-dismiss-default"
            class="inline-flex items-center px-2 py-1 me-2 text-sm font-medium text-primary bg-light rounded">
            Noklusējums
            <button type="button"
                class="inline-flex items-center p-1 ms-2 text-sm text-primary bg-transparent rounded-sm hover:bg-light hover:text-primary-dark"
                data-dismiss-target="#badge-dismiss-default" aria-label="Noņemt">
                <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Noņemt birku</span>
            </button>
        </span>
        </examp le>
</div>
@endsection