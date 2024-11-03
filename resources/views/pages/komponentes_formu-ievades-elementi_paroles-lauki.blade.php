@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <p>Paroles lauki ir specializēti ievades lauki, kas ļauj lietotājiem ievadīt paroles vai citas sensitīvas
        informācijas daļas. Paroles laukos ievadītie simboli parasti tiek aizstāti ar punktiem vai zvaigznītēm, lai
        aizsargātu datus no nevēlamas skatīšanās.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Lietotāja autentifikācija:</strong> Paroles lauki ir būtiski pieteikšanās formās, kur lietotāji
            ievada savas paroles, lai piekļūtu saviem kontiem vai aizsargātām vietnes daļām.</li>
        <li><strong>Jaunu kontu izveide:</strong> Reģistrācijas procesos paroles lauki tiek izmantoti, lai lietotāji
            varētu izveidot jaunu paroli, kas tiks izmantota konta aizsardzībai.</li>
        <li><strong>Paroles atjaunošana:</strong> Paroles lauki tiek izmantoti arī paroles atjaunošanas procesos, kur
            lietotāji ievada jaunu paroli, lai atjaunotu piekļuvi savam kontam.</li>
        <li><strong>Drošības uzlabošana:</strong> Paroles lauki bieži ir kombinēti ar vizuāliem indikatoriem, kas parāda
            paroles stiprumu, motivējot lietotājus izvēlēties drošākas paroles.</li>
    </ul>

    <h3>Piemērs</h3>

    <example class="not-prose">
        <div class="mb-6">
            <label for="password" class="block mb-2  font-medium text-primary">Parole</label>
            <input type="password" id="password"
                class="bg-gray-50 border border-gray-300 text-primary  rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                placeholder="•••••••••" required />
        </div>
        <div class="mb-6">
            <label for="confirm_password" class="block mb-2  font-medium text-primary">Apstiprināt paroli</label>
            <input type="password" id="confirm_password"
                class="bg-gray-50 border border-gray-300 text-primary  rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                placeholder="•••••••••" required />
        </div>

    </example>

</div>
@endsection