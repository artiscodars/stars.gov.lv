@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Laika lauki ir specializēti ievades lauki, kas ļauj lietotājiem ievadīt vai izvēlēties konkrētu laiku. Tie
        nodrošina vienkāršu un precīzu laika ievadi, izmantojot manuālu ievadi vai grafisko interfeisu ar laika izvēlni.
    </p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Rezervācijas un plānošana:</strong> Laika lauki tiek izmantoti, lai lietotāji varētu norādīt precīzu
            laiku rezervācijām vai tikšanās reizēm, piemēram, restorānu rezervācijās vai medicīnisko vizīšu plānošanā.
        </li>
        <li><strong>Notikumu grafiku iestatīšana:</strong> Tiek izmantoti, lai plānotu un organizētu notikumus ar
            precīzu sākuma un beigu laiku, piemēram, sanāksmes, seminārus vai pasākumus.</li>
        <li><strong>Atgādinājumu un trauksmju iestatīšana:</strong> Laika lauki ir noderīgi, lai iestatītu konkrētus
            laika punktus, kad nepieciešams saņemt atgādinājumus vai trauksmes signālus.</li>
        <li><strong>Laika ieraksti un darba laika uzskaite:</strong> Tiek izmantoti, lai reģistrētu darba laiku,
            uzskaite darba stundas vai citas laika atkarīgas darbības.</li>
    </ul>

    <h3>Piemērs</h3>
    <example class="not-prose">
        <form class="max-w-[8rem] ">
            <label for="time" class="block mb-2 text-sm font-medium text-primary dark:text-light">Izvēlieties
                laiku:</label>
            <div class="relative">
                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-light" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <input type="time" id="time"
                    class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-light dark:placeholder-gray-400 dark:text-light dark:focus:ring-primary dark:focus:border-primary"
                    min="09:00" max="18:00" value="00:00" required />
            </div>
        </form>
    </example>
</div>
@endsection