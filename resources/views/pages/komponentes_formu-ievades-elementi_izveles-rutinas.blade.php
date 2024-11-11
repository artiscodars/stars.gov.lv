@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Izvēles rūtiņas ir lietotāja interfeisa elementi, kas ļauj lietotājiem izvēlēties vienu vai vairākas opcijas no
        pieejamajiem variantiem. Atšķirībā no radio pogām, izvēles rūtiņas ļauj atzīmēt vairākas opcijas vienlaicīgi.
    </p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Vairāku izvēļu atļaušana:</strong> Izvēles rūtiņas ir ideāli piemērotas situācijās, kur lietotājiem
            ir jāizvēlas vairākas iespējas, piemēram, intereses, iestatījumi vai kategorijas.</li>
        <li><strong>Nosacījumu pieņemšana:</strong> Tās bieži tiek izmantotas, lai ļautu lietotājiem piekrist
            noteikumiem un nosacījumiem vai pieņemt konfidencialitātes politiku.</li>
        <li><strong>Filtrēšanas funkcijas:</strong> Izvēles rūtiņas var izmantot, lai filtrētu meklēšanas rezultātus vai
            satura sarakstus, ļaujot lietotājiem pielāgot redzamo saturu atbilstoši vairākām izvēlētām kategorijām.</li>
    </ul>

    <h3>Piemērs</h3>
    <example class="not-prose">
        <div class="flex items-center mb-4">
            <input id="default-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
            <label for="default-checkbox" class="ms-2  font-medium text-primary">Noklusējuma izvēles
                rūtiņa</label>
        </div>
        <div class="flex items-center">
            <input checked id="checked-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
            <label for="checked-checkbox" class="ms-2  font-medium text-primary">Atzīmēts stāvoklis</label>
        </div>
    </example>

    <h3>Atspējots</h3>
    <example class="not-prose">
        <div class="flex items-center mb-4">
            <input disabled id="disabled-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
            <label for="disabled-checkbox" class="ms-2  font-medium text-gray-500">Atspējota izvēles
                rūtiņa</label>
        </div>
        <div class="flex items-center">
            <input disabled checked id="disabled-checked-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
            <label for="disabled-checked-checkbox" class="ms-2  font-medium text-gray-500">Atspējota atzīmēta
                izvēles rūtiņa</label>
        </div>
    </example>

    <h3>Ar saiti</h3>
    <example class="not-prose">
        <div class="flex items-center">
            <input id="link-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
            <label for="link-checkbox" class="ms-2  font-medium text-primary">Es piekrītu <a href="#"
                    class="text-link hover:underline">noteikumiem un nosacījumiem</a>.</label>
        </div>
    </example>

    <h3>Ar paskaidrojumu</h3>
    <example class="not-prose">
        <div class="flex">
            <div class="flex items-center h-5">
                <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox" value=""
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
            </div>
            <div class="ms-2 ">
                <label for="helper-checkbox" class="font-medium text-primary">Bezmaksas piegāde ar Flowbite</label>
                <p id="helper-checkbox-text" class="text-xs font-normal text-gray-500">Piegādēm no $25 grāmatās vai $29
                    citās kategorijās</p>
            </div>
        </div>
    </example>

    <h3>Rāmī</h3>
    <example class="not-prose">
        <div class="flex items-center ps-4 border border-gray-300 rounded">
            <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox"
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
            <label for="bordered-checkbox-1" class="w-full py-4 ms-2  font-medium text-primary">Noklusējuma
                izvēles rūtiņa</label>
        </div>
        <div class="flex items-center ps-4 border border-gray-300 rounded">
            <input checked id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox"
                class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
            <label for="bordered-checkbox-2" class="w-full py-4 ms-2  font-medium text-primary">Atzīmēts
                stāvoklis</label>
        </div>
    </example>

    <h3>Vertikālā grupa</h3>
    <example class="not-prose">
        <h3 class="mb-4 font-semibold text-primary">Tehnoloģijas</h3>
        <ul class="w-48  font-medium text-primary bg-light border border-gray-300 rounded-lg">
            <li class="w-full border-b border-gray-300 rounded-t-lg">
                <div class="flex items-center ps-3">
                    <input id="vue-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                    <label for="vue-checkbox" class="w-full py-3 ms-2  font-medium text-primary">Vue JS</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300">
                <div class="flex items-center ps-3">
                    <input id="react-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                    <label for="react-checkbox" class="w-full py-3 ms-2  font-medium text-primary">React</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300">
                <div class="flex items-center ps-3">
                    <input id="angular-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                    <label for="angular-checkbox" class="w-full py-3 ms-2  font-medium text-primary">Angular</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300">
                <div class="flex items-center ps-3">
                    <input id="laravel-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                    <label for="laravel-checkbox" class="w-full py-3 ms-2  font-medium text-primary">Laravel</label>
                </div>
            </li>
        </ul>
    </example>

    <h3>Horizontālā grupa</h3>
    <example class="not-prose">
        <h3 class="mb-4 font-semibold text-primary">Identifikācija</h3>
        <ul class="items-center w-full  font-medium text-primary bg-light border border-gray-300 rounded-lg sm:flex">
            <li class="w-full border-b border-gray-300 sm:border-b-0 sm:border-r">
                <div class="flex items-center ps-3">
                    <input id="vue-checkbox-list" type="checkbox" value=""
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                    <label for="vue-checkbox-list" class="w-full py-3 ms-2  font-medium text-primary">Vue
                        JS</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300 sm:border-b-0 sm:border-r">
                <div class="flex items-center ps-3">
                    <input id="react-checkbox-list" type="checkbox" value=""
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                    <label for="react-checkbox-list" class="w-full py-3 ms-2  font-medium text-primary">React</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-300 sm:border-b-0 sm:border-r">
                <div class="flex items-center ps-3">
                    <input id="angular-checkbox-list" type="checkbox" value=""
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                    <label for="angular-checkbox-list"
                        class="w-full py-3 ms-2  font-medium text-primary">Angular</label>
                </div>
            </li>
            <li class="w-full">
                <div class="flex items-center ps-3">
                    <input id="laravel-checkbox-list" type="checkbox" value=""
                        class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                    <label for="laravel-checkbox-list"
                        class="w-full py-3 ms-2  font-medium text-primary">Laravel</label>
                </div>
            </li>
        </ul>
    </example>

    <h3>Rindā</h3>
    <example class="not-prose">
        <div class="flex">
            <div class="flex items-center me-4">
                <input id="inline-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                <label for="inline-checkbox" class="ms-2  font-medium text-primary">Rindā 1</label>
            </div>
            <div class="flex items-center me-4">
                <input id="inline-2-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                <label for="inline-2-checkbox" class="ms-2  font-medium text-primary">Rindā 2</label>
            </div>
            <div class="flex items-center me-4">
                <input checked id="inline-checked-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                <label for="inline-checked-checkbox" class="ms-2  font-medium text-primary">Rindā
                    atzīmēts</label>
            </div>
            <div class="flex items-center">
                <input disabled id="inline-disabled-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-primary bg-gray-50 border-gray-300 rounded focus:ring-third">
                <label for="inline-disabled-checkbox" class="ms-2  font-medium text-gray-500">Rindā

                    atspējots</label>
            </div>
        </div>
    </example>
</div>
@endsection