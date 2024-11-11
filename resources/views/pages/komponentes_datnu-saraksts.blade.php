@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Datņu saraksta templeits ļauj lietotājiem ērti pārlūkot un piekļūt dažādiem dokumentiem strukturētā un viegli
        pārskatāmā formātā. Šis templeits ietver gan tabulu, gan kartītes, kas nodrošina elastīgu un pielāgojamu veidu,
        kā parādīt informāciju par dokumentiem.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Dokumentu uzskaitījums tabulā:</strong> Tabulas formāts ir ideāli piemērots, lai organizētu un
            sakārtotu dokumentus pēc datuma, tipa vai citiem kritērijiem. Tas nodrošina lietotājiem skaidru un ātru
            pārskatu par pieejamajiem failiem.</li>
        <li><strong>Dokumentu kartītes:</strong> Kartītes piedāvā alternatīvu veidu, kā parādīt dokumentu informāciju,
            nodrošinot vizuāli pievilcīgu un kompaktu izkārtojumu. Tās ir noderīgas, ja vēlaties sniegt
            papildinformāciju vai izcelt konkrētus dokumentus.</li>
        <li><strong>Pielāgojams izkārtojums:</strong> Datņu saraksta templeits ļauj viegli pielāgot un paplašināt datu
            parādīšanu atbilstoši lietotāja vajadzībām, piemēram, pievienojot jaunus dokumentus vai mainot to
            izkārtojumu.</li>
    </ul>

    <h2>Tabula</h2>

    <example class="not-prose">
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border-spacing-0">
                <thead>
                    <tr>
                        <th class="border-b border-primary px-4 py-2 text-left font-medium ">
                            Datums</th>
                        <th class="border-b border-primary px-4 py-2 text-left font-medium ">
                            Dokuments</th>
                        <th class="border-b border-primary px-4 py-2 text-left  font-medium ">
                            Tips</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2">01.09.2021</td>
                        <td class="px-4 py-2">
                            <a href="#" class="underline">Izglītības dokumenta nosaukums par kaut kādu apgūtu kursu</a>
                        </td>
                        <td class="px-4 py-2">
                            PDF
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 ">01.09.2021</td>
                        <td class="px-4 py-2 ">
                            <a href="#" class="underline">Izglītības dokumenta nosaukums par kaut kādu apgūtu kursu</a>
                        </td>
                        <td class="px-4 py-2 ">
                            DOC
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </example>

    <h2>Kartītes</h2>


    <example class="not-prose">

        <div class=" grid grid-cols-1 gap-4">
            @include('includes.card-file', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])

            @include('includes.card-file', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])


            @include('includes.card-file', [
    'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
])



            </d iv>
    </example>





</div>
@endsection
