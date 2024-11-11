@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>


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




</div>
@endsection