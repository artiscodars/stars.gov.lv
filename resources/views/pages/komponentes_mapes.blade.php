@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <p>Mapes ir lietotāja interfeisa elementi, kas ļauj sadalīt saturu vairākās sadaļās, kuras var viegli pārslēgt,
        noklikšķinot uz cilnēm. Šis izkārtojums uzlabo lietotāja pieredzi, nodrošinot ātru piekļuvi dažādām satura
        daļām, nepārslogojot vienu lapu ar pārāk daudz informācijas.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Satura grupēšana:</strong> Tabs ir noderīgi, lai organizētu saistīto saturu loģiskās sadaļās,
            piemēram, informāciju par produktu specifikācijām, atsauksmēm un biežāk uzdotajiem jautājumiem (FAQ).</li>
        <li><strong>Daudzfunkcionālas lietotnes:</strong> Mapes bieži izmanto daudzfunkcionālās lietotnēs, lai lietotāji
            varētu ātri pārslēgties starp dažādām funkcijām vai iestatījumiem, piemēram, profila pārvaldību, ziņojumiem
            vai statistiku.</li>
        <li><strong>Uzlabota navigācija:</strong> Tabs nodrošina lietotājiem viegli pieejamu un intuitīvu navigāciju,
            ļaujot pārslēgties starp satura blokiem, nepārkāpjot no vienas lapas uz citu.</li>
        <li><strong>Vietas ekonomija:</strong> Izmantojot mapes, var efektīvi izmantot ekrāna vietu, parādot tikai to
            informāciju, kas lietotājam ir nepieciešama konkrētajā brīdī, un ļaujot viņam ātri piekļūt citām sadaļām pēc
            vajadzības.</li>
        <li><strong>Uzlabota lietotāja pieredze:</strong> Tabs uzlabo satura organizāciju un pieejamību, padarot to
            viegli pārskatāmu un samazinot informācijas pārslodzi, kas veicina labāku lietotāja iesaisti un
            apmierinātību.</li>
    </ul>

    <example class="not-prose">




        <div class="mb-4 border-b border-gray-200">
            <ul class="flex flex-wrap -mb-px font-medium text-center text-primary" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist"
                data-tabs-active-classes="text-primary border-third" data-tabs-inactive-classes="text-primary">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                        data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">Profils</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Panelis</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                        aria-selected="false">Iestatījumi</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                        aria-selected="false">Kontakti</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-white" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p class="text-primary">Šis ir <strong class="font-medium text-gray-800">Profila mapes saturs</strong>.
                    Noklikšķinot uz citas mapes, šī mape tiks paslēpta, un tiks parādīts cits saturs.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-white" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <p class="text-primary">Šis ir <strong class="font-medium text-gray-800">Paneļa mapes saturs</strong>.
                    Noklikšķinot uz citas mapes, šī mape tiks paslēpta, un tiks parādīts cits saturs.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-white" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-primary">Šis ir <strong class="font-medium text-gray-800">Iestatījumu mapes
                        saturs</strong>.

                    Noklikšķinot uz citas mapes, šī mape tiks paslēpta, un tiks parādīts cits saturs.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-white" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <p class="text-primary">Šis ir <strong class="font-medium text-gray-800">Kontaktu mapes
                        saturs</strong>.
                    Noklikšķinot uz citas mapes, šī mape tiks paslēpta, un tiks parādīts cits saturs.</p>
            </div>
        </div>



    </example>
</div>
@endsection
