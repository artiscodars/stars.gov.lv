@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>
    <p>Ievades lauki ir lietotāja interfeisa elementi, kas ļauj lietotājiem ievadīt un iesniegt datus, piemēram, tekstu,
        skaitļus, e-pasta adreses un paroles. Tie ir būtiski, lai lietotāji varētu mijiedarboties ar sistēmu, ievadot
        nepieciešamo informāciju.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Formu aizpildīšana:</strong> Ievades lauki ir būtiski, lai lietotāji varētu aizpildīt formas,
            ievadot personisko informāciju, piemēram, vārdu, e-pastu vai telefona numuru.</li>
        <li><strong>Meklēšanas funkcionalitāte:</strong> Tie bieži tiek izmantoti meklēšanas joslās, ļaujot lietotājiem
            ievadīt meklēšanas kritērijus, lai atrastu nepieciešamo informāciju.</li>

        <li><strong>Datuma vai laika ievade:</strong> Speciāli ievades lauki ļauj lietotājiem izvēlēties vai ievadīt
            datumus un laikus, piemēram, rezervāciju vai plānošanas sistēmās.</li>
    </ul>

    <h3>Piemērs</h3>
    <example class="not-prose">
        <form>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-primary">Vārds</label>
                    <input type="text" id="first_name"
                        class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="Jānis" required />
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-primary">Uzvārds</label>
                    <input type="text" id="last_name"
                        class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="Bērziņš" required />
                </div>
                <div>
                    <label for="company" class="block mb-2 text-sm font-medium text-primary">Uzņēmums</label>
                    <input type="text" id="company"
                        class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="Uzņēmums" required />
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-primary">Tālruņa numurs</label>
                    <input type="tel" id="phone"
                        class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                </div>
                <div>
                    <label for="website" class="block mb-2 text-sm font-medium text-primary">Tīmekļa vietnes URL</label>
                    <input type="url" id="website"
                        class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="uznemums.lv" required />
                </div>
                <div>
                    <label for="visitors" class="block mb-2 text-sm font-medium text-primary">Unikālie apmeklētāji
                        (mēnesī)</label>
                    <input type="number" id="visitors"
                        class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="" required />
                </div>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-primary">E-pasta adrese</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                    placeholder="janis.berzins@uznemums.lv" required />
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-primary">Parole</label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                    placeholder="•••••••••" required />
            </div>
            <div class="mb-6">
                <label for="confirm_password" class="block mb-2 text-sm font-medium text-primary">Apstiprināt
                    paroli</label>
                <input type="password" id="confirm_password"
                    class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                    placeholder="•••••••••" required />
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary"
                        required />
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-primary">Es piekrītu <a href="#"
                        class="text-link hover:underline">noteikumiem un nosacījumiem</a>.</label>
            </div>
            <button type="submit"
                class="text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Iesniegt</button>
        </form>
    </example>

    <h3>Ievades lauku izmēri</h3>
    <example class="not-prose">
        <div class="mb-6">
            <label for="large-input" class="block mb-2 text-sm font-medium text-primary">Liels ievades lauks</label>
            <input type="text" id="large-input"
                class="block w-full p-4 text-primary border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-primary focus:border-primary">
        </div>
        <div class="mb-6">
            <label for="default-input" class="block mb-2 text-sm font-medium text-primary">Noklusējuma ievades
                lauks</label>
            <input type="text" id="default-input"
                class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5">
        </div>
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-primary">Mazs ievades lauks</label>
            <input type="text" id="small-input"
                class="block w-full p-2 text-primary border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-primary focus:border-primary">
        </div>
    </example>

    <h3>Atspējots</h3>
    <example class="not-prose">
        <input type="text" id="disabled-input" aria-label="disabled input"
            class="mb-6 bg-light border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 cursor-not-allowed"
            value="Atspējots ievades lauks" disabled>
        <input type="text" id="disabled-input-2" aria-label="disabled input 2"
            class="bg-light border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 cursor-not-allowed"
            value="Atspējots un tikai lasāms ievades lauks" disabled readonly>
    </example>

    <h3>Validācija</h3>
    <example class="not-prose">
        <div class="mb-6">
            <label for="success" class="block mb-2 text-sm font-medium text-success">Jūsu vārds</label>
            <input type="text" id="success"
                class="bg-gray-50 text-primary border border-successDark text-sm rounded-lg focus:ring-success focus:border-success block w-full p-2.5"
                placeholder="Veiksmīgs ievades lauks">
            <p class="mt-2 text-sm text-success"><span class="font-medium">Labi padarīts!</span> Veiksmīgs ziņojums.</p>
        </div>
        <div>
            <label for="error" class="block mb-2 text-sm font-medium text-error">Jūsu vārds</label>
            <input type="text" id="error"
                class="bg-gray-50 text-primary border border-error text-sm rounded-lg focus:ring-error focus:border-error block w-full p-2.5"
                placeholder="Kļūdains ievades lauks">
            <p class="mt-2 text-sm text-error"><span class="font-medium">Ak, nē!</span> Kļūdas ziņojums.</p>
        </div>
    </example>

    <h3>Ievades grupas</h3>
    <example class="not-prose">
        <label for="input-group-1" class="block mb-2 text-sm font-medium text-primary">Jūsu e-pasts</label>
        <div class="relative mb-6">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 16">
                    <path
                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                    <path
                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                </svg>
            </div>
            <input type="text" id="input-group-1"
                class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full ps-10 p-2.5"
                placeholder="vards@uznemums.lv">
        </div>
        <label for="website-admin" class="block mb-2 text-sm font-medium text-primary">Lietotājvārds</label>
        <div class="flex">
            <span
                class="inline-flex items-center px-3 text-sm text-primary bg-light border border-gray-300 rounded-e-0 border-e-0 rounded-s-md">
                <svg class="w-4 h-4 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg>
            </span>
            <input type="text" id="website-admin"
                class="rounded-none rounded-e-lg bg-gray-50 border text-primary focus:ring-primary focus:border-primary block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                placeholder="lietotajvards">
        </div>
    </example>

    <h3>Palīdzības teksti</h3>
    <example class="not-prose">
        <label for="helper-text" class="block mb-2 text-sm font-medium text-primary">Jūsu e-pasts</label>
        <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
            class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
            placeholder="vards@uznemums.lv">
        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500">Mēs nekad nedalīsimies ar jūsu datiem.
            Lasiet mūsu <a href="#" class="font-medium text-link hover:underline">Privātuma politiku</a>.</p>
    </example>
</div>
@endsection