@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Navigācijas ceļš, jeb "breadcrumbs," ir lietotāja interfeisa elements, kas parāda lietotāja atrašanās vietu
        tīmekļa vietnes vai lietotnes hierarhijā. Tas sniedz vizuālu norādi par lietotāja pašreizējo pozīciju un ļauj
        viegli atgriezties uz iepriekšējām lapām vai augstākiem satura līmeņiem.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Hierarhisku vietņu navigācija:</strong> Navigācijas ceļš ir noderīgs sarežģītās vietnēs ar dziļu
            hierarhiju, piemēram, e-komercijas vietnēs, kur lietotāji var ātri pāriet starp produktu kategorijām un
            detalizētām lapām.</li>
        <li><strong>Lietotāja orientācija:</strong> Tas palīdz lietotājiem saprast viņu atrašanās vietu vietnē un
            uzturēt saistību ar vietnes struktūru, īpaši, ja lietotājs ir iegājis lapā caur ārēju saiti.</li>
        <li><strong>Navigācijas uzlabošana:</strong> Navigācijas ceļš sniedz ātru piekļuvi augstākiem satura līmeņiem,
            ļaujot lietotājiem efektīvi pārvietoties pa vietni, nepārlādējot galveno navigāciju.</li>
        <li><strong>SEO priekšrocības:</strong> Breadcrumbs var uzlabot vietnes meklētājprogrammu optimizāciju (SEO), jo
            tie sniedz skaidru satura struktūru, ko meklētājprogrammas var viegli indeksēt.</li>
        <li><strong>Lietotāja pieredzes uzlabošana:</strong> Šis elements uzlabo lietotāja pieredzi, samazinot
            navigācijas sarežģītību un nodrošinot intuitīvāku vietnes struktūru.</li>
    </ul>

    <example class="not-prose">

        @include('includes.breadcrumb', ['menu' => $menu])


    </example>

</div>
@endsection