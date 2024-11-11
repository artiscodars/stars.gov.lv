@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Koka skata navigācija ir lietotāja interfeisa elements, kas vizuāli attēlo hierarhisku struktūru, ļaujot
        lietotājiem ātri pārlūkot un piekļūt informācijai. Šis skats tiek izmantots, lai parādītu saistītos elementus ar
        iespēju tos paplašināt vai sakļaut, lai detalizētāk izpētītu saturu.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Satura hierarhijas attēlošana:</strong> Koka skata navigācija ir noderīga, lai organizētu sarežģītus
            datu kopumus vai dokumentu struktūras, piemēram, failu sistēmas, produktu kategorijas vai dokumentācijas
            sadaļas.</li>
        <li><strong>Daudzlīmeņu navigācija:</strong> Tā ļauj lietotājiem viegli pārvietoties starp dažādiem hierarhijas
            līmeņiem, piemēram, galvenajām sadaļām un to apakšsadaļām, bez nepieciešamības ielādēt jaunas lapas.</li>
        <li><strong>Organizācijas un procesu struktūras:</strong> Koka skats var attēlot uzņēmuma struktūru, projektu
            plānus vai procesu soļus, sniedzot skaidru pārskatu par savstarpējām attiecībām un hierarhiju.</li>
        <li><strong>Interaktīva lietotāja pieredze:</strong> Koka skata navigācija ļauj lietotājiem intuitīvi
            mijiedarboties ar saturu, paplašinot vai sakļaujot mezglus, lai atrastu nepieciešamo informāciju, vienlaikus
            saglabājot skaidru pārskatu.</li>
    </ul>


    <example class="not-prose">

        @include('includes.left-menu', ['menu' => $menu])

    </example>


</div>
@endsection