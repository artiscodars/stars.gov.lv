@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <p>Radio pogas ir lietotāja interfeisa elementi, kas ļauj lietotājiem izvēlēties vienu opciju no vairākiem
        iespējamiem variantiem. Atšķirībā no izvēles rūtiņām (checkbox), radio pogas nodrošina ekskluzīvu izvēli, kur
        vienlaicīgi iespējama tikai viena opcija.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Anketas un aptaujas:</strong> Radio pogas bieži tiek izmantotas anketās, kur lietotājiem jāizvēlas
            viens no vairākiem atbilžu variantiem.</li>
        <li><strong>Formu iesniegšana:</strong> Radio pogas ir noderīgas, lai izvēlētos vienu opciju no vairākiem
            iespējamiem iestatījumiem, piemēram, piegādes vai maksājuma metodēm.</li>
        <li><strong>Kategoriju vai filtru izvēle:</strong> Radio pogas var tikt izmantotas, lai izvēlētos vienu
            kategoriju vai filtru, kas tiek piemērots meklēšanas rezultātiem vai satura filtrēšanai.</li>
    </ul>

    <h3>Vienkāršas pogas</h3>
    <example class="not-prose">
        <div class="flex items-center mb-4">
            <input id="default-radio-1" type="radio" value="" name="default-radio"
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
            <label for="default-radio-1" class="ms-2  font-medium text-primary">Noklusējuma radio poga</label>
        </div>
        <div class="flex items-center">
            <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
            <label for="default-radio-2" class="ms-2  font-medium text-primary">Atzīmēta stāvoklis</label>
        </div>
    </example>

    <h3>Atspējotas pogas</h3>

    <example class="not-prose">
        <div class="flex items-center mb-4">
            <input disabled id="disabled-radio-1" type="radio" value="" name="disabled-radio"
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
            <label for="disabled-radio-1" class="ms-2  font-medium text-gray-500">Atspējota radio poga</label>
        </div>
        <div class="flex items-center">
            <input disabled checked id="disabled-radio-2" type="radio" value="" name="disabled-radio"
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
            <label for="disabled-radio-2" class="ms-2  font-medium text-gray-500">Atspējota atzīmēta
                poga</label>
        </div>
    </example>

    <h3>Ar saiti</h3>
    <example class="not-prose">
        <div class="flex items-center">
            <input id="link-radio" type="radio" value=""
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
            <label for="link-radio" class="ms-2  font-medium text-primary">Radio poga ar
                <a href="#" class="text-link hover:underline">saiti iekšā</a>.</label>
        </div>
    </example>

    <h3>Ar paskaidrojošo tekstu</h3>
    <example class="not-prose">
        <div class="flex">
            <div class="flex items-center h-5">
                <input id="helper-radio" aria-describedby="helper-radio-text" type="radio" value=""
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
            </div>
            <div class="ms-2 ">
                <label for="helper-radio" class="font-medium text-primary">Bezmaksas piegāde caur Flowbite</label>
                <p id="helper-radio-text" class="text-xs font-normal text-gray-500">Pasūtījumiem virs 25$ grāmatām vai
                    29$ citām kategorijām</p>
            </div>
        </div>
    </example>

    <h3>Rāmī</h3>
    <example class="not-prose">
        <div class="flex items-center ps-4 border border-gray-300 rounded">
            <input id="bordered-radio-1" type="radio" value="" name="bordered-radio"
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
            <label for="bordered-radio-1" class="w-full py-4 ms-2  font-medium text-primary">Noklusējuma radio
                poga</label>
        </div>
        <div class="flex items-center ps-4 border border-gray-300 rounded">
            <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio"
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
            <label for="bordered-radio-2" class="w-full py-4 ms-2  font-medium text-primary">Atzīmēta
                stāvoklis</label>
        </div>
    </example>

    <h3>Saraksta grupa</h3>
    <example class="not-prose">
        <h3 class="mb-4 font-semibold text-primary">Identifikācija</h3>
        <ul class="w-48  font-medium text-primary bg-gray-50 border border-gray-300 rounded-lg">
            <li class="w-full border-b border-gray-300 rounded-t-lg">
                <div class="flex items-center ps-3">
                    <input id="list-radio-license" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                    <label for="list-radio-license" class="w-full py-3 ms-2  font-medium text-primary">Vadītāja
                        apliecība</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300 rounded-t-lg">
                <div class="flex items-center ps-3">
                    <input id="list-radio-id" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                    <label for="list-radio-id" class="w-full py-3 ms-2  font-medium text-primary">Valsts
                        ID</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300 rounded-t-lg">
                <div class="flex items-center ps-3">
                    <input id="list-radio-military" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                    <label for="list-radio-military" class="w-full py-3 ms-2  font-medium text-primary">ASV
                        Militārais ID</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300 rounded-t-lg">
                <div class="flex items-center ps-3">
                    <input id="list-radio-passport" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                    <label for="list-radio-passport" class="w-full py-3 ms-2  font-medium text-primary">ASV
                        Pase</label>
                </div>
            </li>
        </ul>
    </example>

    <h3>Horizontālā grupa</h3>
    <example class="not-prose">
        <ul class="items-center w-full  font-medium text-primary bg-gray-50 border border-gray-300 rounded-lg sm:flex">
            <li class="w-full border-b border-gray-300 sm:border-b-0 sm:border-r">
                <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-license" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                    <label for="horizontal-list-radio-license"
                        class="w-full py-3 ms-2  font-medium text-primary">Vadītāja apliecība</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300 sm:border-b-0 sm:border-r">
                <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-id" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                    <label for="horizontal-list-radio-id" class="w-full py-3 ms-2  font-medium text-primary">Valsts
                        ID</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300 sm:border-b-0 sm:border-r">
                <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-military" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                    <label for="horizontal-list-radio-military" class="w-full py-3 ms-2  font-medium text-primary">ASV
                        Militārais ID</label>
                </div>
            </li>
            <li class="w-full">
                <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-passport" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                    <label for="horizontal-list-radio-passport" class="w-full py-3 ms-2  font-medium text-primary">ASV
                        Pase</label>
                </div>
            </li>
        </ul>
    </example>

    <h3>Rinda</h3>
    <example class="not-prose">
        <div class="flex">
            <div class="flex items-center me-4">
                <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                <label for="inline-radio" class="ms-2  font-medium text-primary">Rindā 1</label>
            </div>
            <div class="flex items-center me-4">
                <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                <label for="inline-2-radio" class="ms-2  font-medium text-primary">Rindā 2</label>
            </div>
            <div class="flex items-center me-4">
                <input checked id="inline-checked-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                <label for="inline-checked-radio" class="ms-2  font-medium text-primary">Rindā atzīmēta</label>
            </div>
            <div class="flex items-center">
                <input disabled id="inline-disabled-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 focus:ring-third">
                <label for="inline-disabled-radio" class="ms-2  font-medium text-gray-500">Rindā

                    atspējota</label>
            </div>
        </div>
    </example>
</div>
@endsection