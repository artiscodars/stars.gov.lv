@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <p>Datuma lauki ir specializēti ievades lauki, kas ļauj lietotājiem ievadīt vai izvēlēties konkrētu datumu. Tie
        nodrošina vienotu un ērtu datuma ievadi, izmantojot kalendāra logrīkus vai manuālu datuma ievadīšanu.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Rezervācijas un plānošana:</strong> Datuma lauki ir bieži izmantoti rezervācijas formās, piemēram,
            ceļojumu, viesnīcu vai pasākumu biļešu rezervēšanā.</li>
        <li><strong>Datuma specifikācija:</strong> Tiek izmantoti formās, kur nepieciešams norādīt konkrētus datumus,
            piemēram, dzimšanas datumu, dokumentu iesniegšanas termiņus vai plānošanas grafikus.</li>
        <li><strong>Atgādinājumu iestatīšana:</strong> Datuma lauki ir noderīgi, lai iestatītu atgādinājumus vai svarīgu
            notikumu termiņus, piemēram, maksājumu datumiem vai svarīgām tikšanās reizēm.</li>
        <li><strong>Statistikas un ziņojumu ģenerēšana:</strong> Tiek izmantoti datu analīzes rīkos, lai noteiktu
            periodus, no kuriem iegūt datus statistikas vai ziņojumu ģenerēšanai.</li>
    </ul>

    <h3>Piemērs</h3>

    <example class="not-prose">
        <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                </svg>
            </div>
            <input datepicker id="default-datepicker" type="text"
                class=" border border-gray-300 bg-gray-50 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full ps-10 p-2.5"
                datepicker datepicker-format="dd/mm/yyyy" placeholder="dd/mm/gggg">
        </div>
    </example>

    <h3>Intervāls</h3>

    <example class="not-prose">
        <div id="date-range-picker" date-rangepicker class="flex items-center">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input id="datepicker-range-start" name="start" type="text"
                    class="border-gray-300 bg-gray-50 border  text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full ps-10 p-2.5"
                    datepicker datepicker-format="dd/mm/yyyy" placeholder="dd/mm/gggg">
            </div>
            <span class="mx-4 text-gray-500">līdz</span>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input id="datepicker-range-end" name="end" type="text"
                    class=" border border-gray-300 bg-gray-50 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full ps-10 p-2.5"
                    datepicker datepicker-format="dd/mm/yyyy" placeholder="dd/mm/gggg">
            </div>
        </div>
    </example>
</div>
@endsection