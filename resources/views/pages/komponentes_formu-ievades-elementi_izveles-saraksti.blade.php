@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Izvēles saraksti ir lietotāja interfeisa elementi, kas ļauj lietotājiem izvēlēties vienu vai vairākas opcijas no
        iepriekš definēta saraksta. Tie ir īpaši noderīgi, lai saglabātu vietu saskarnē un vienkāršotu sarežģītu izvēļu
        procesu.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Formu aizpildīšana:</strong> Izvēles saraksti ļauj lietotājiem ātri un vienkārši izvēlēties no
            iepriekš definētiem variantiem, piemēram, valsts, pilsētas vai produkta kategorijas.</li>
        <li><strong>Filtru un iestatījumu pārvaldība:</strong> Izvēles saraksti var tikt izmantoti, lai piedāvātu
            dažādus filtrus vai konfigurācijas iestatījumus, kas palīdz lietotājiem pielāgot saturu vai funkcionalitāti.
        </li>
        <li><strong>Kompleksas izvēles vienkāršošana:</strong> Lielos datu kopumos izvēles saraksti palīdz sakārtot un
            samazināt izvēles iespēju daudzumu, padarot izvēles procesu lietotājam vieglāk saprotamu.</li>
    </ul>

    <h3>Piemērs</h3>
    <example class="not-prose">

        <form class="max-w-sm mx-auto">
            <label for="countries" class="block mb-2 text-sm font-medium text-primary">Izvēlieties opciju</label>
            <select id="countries"
                class="bg-white border border-gray-500 text-primary text-sm rounded-lg focus:ring-primary focus:border-third block w-full p-2.5">
                <option selected>Izvēlieties valsti</option>
                <option value="US">Amerikas Savienotās Valstis</option>
                <option value="CA">Kanāda</option>
                <option value="FR">Francija</option>
                <option value="DE">Vācija</option>
            </select>
        </form>

    </example>

    <h3>Vairākas izvēles</h3>

    <example class="not-prose">

        <form class="max-w-sm mx-auto">
            <label for="countries_multiple" class="block mb-2 text-sm font-medium text-primary">Izvēlieties
                opciju</label>
            <select multiple id="countries_multiple"
                class="bg-white border border-gray-500 text-primary text-sm rounded-lg focus:ring-primary focus:border-third block w-full p-2.5">
                <option selected>Izvēlieties valstis</option>
                <option value="US">Amerikas Savienotās Valstis</option>
                <option value="CA">Kanāda</option>
                <option value="FR">Francija</option>
                <option value="DE">Vācija</option>
            </select>
        </form>

    </example>

    <h3>Atspējota</h3>

    <example class="not-prose">

        <form class="max-w-sm mx-auto">
            <label for="countries_disabled" class="block mb-2 text-sm font-medium text-primary">Izvēlieties
                opciju</label>
            <select disabled id="countries_disabled"
                class="bg-white border border-gray-500 text-primary text-sm rounded-lg focus:ring-primary focus:border-third block w-full p-2.5">
                <option selected>Izvēlieties valsti</option>
                <option value="US">Amerikas Savienotās Valstis</option>
                <option value="CA">Kanāda</option>
                <option value="FR">Francija</option>
                <option value="DE">Vācija</option>
            </select>
        </form>

    </example>

    <h3>Izmēri</h3>

    <example class="not-prose">

        <form class="max-w-sm mx-auto">
            <label for="small" class="block mb-2 text-sm font-medium text-primary">Mazs izvēles lauks</label>
            <select id="small"
                class="block w-full p-2 mb-6 text-sm text-primary border border-gray-500 rounded-lg bg-white focus:ring-primary focus:border-third">
                <option selected>Izvēlieties valsti</option>
                <option value="US">Amerikas Savienotās Valstis</option>
                <option value="CA">Kanāda</option>
                <option value="FR">Francija</option>
                <option value="DE">Vācija</option>
            </select>
            <label for="default" class="block mb-2 text-sm font-medium text-primary">Noklusējuma izvēles lauks</label>
            <select id="default"
                class="bg-white border border-gray-500 text-primary mb-6 text-sm rounded-lg focus:ring-primary focus:border-third block w-full p-2.5">
                <option selected>Izvēlieties valsti</option>
                <option value="US">Amerikas Savienotās Valstis</option>
                <option value="CA">Kanāda</option>
                <option value="FR">Francija</option>
                <option value="DE">Vācija</option>
            </select>
            <label for="large" class="block mb-2 text-base font-medium text-primary">Liels izvēles lauks</label>
            <select id="large"
                class="block w-full px-4 py-3 text-base text-primary border border-gray-500 rounded-lg bg-white focus:ring-primary focus:border-third">
                <option selected>Izvēlieties valsti</option>
                <option value="US">Amerikas Savienotās Valstis</option>
                <option value="CA">Kanāda</option>
                <option value="FR">Francija</option>

                <option value="DE">Vācija</option>
            </select>
        </form>

    </example>
</div>
@endsection