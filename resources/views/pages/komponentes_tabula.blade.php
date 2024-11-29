@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Ja nepieciešams, lai tabula ir adaptīva uz tālruņa izmēra ekrāniem, tad <b>table</b> tags ir jāpapildina ar klasi
        <b>"responsive"</b> un <b>td</b> tagos ir jāievieto
        <b>data-label="Kolonnas nosaukums"</b> uz kuru attiecas šis elements.
    </p>


    <example class="not-prose">
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border-spacing-0 responsive">
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
                        <td class="px-4 py-2" data-label="Datums">01.09.2021</td>
                        <td class="px-4 py-2" data-label="Dokuments">
                            <a href="#" class="underline max-w-full">Izglītības dokumenta nosaukums par kaut kādu apgūtu
                                kursu</a>
                        </td>
                        <td class="px-4 py-2" data-label="Tips">
                            DOC

                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 " data-label="Datums">

                            01.09.2021
                        </td>
                        <td class="px-4 py-2 " data-label="Dokuments">

                            <a href="#" class="underline">Izglītības dokumenta nosaukums par kaut kādu apgūtu kursu</a>
                        </td>
                        <td class="px-4 py-2 " data-label="Tips">
                            PDF
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </example>




</div>


@endsection