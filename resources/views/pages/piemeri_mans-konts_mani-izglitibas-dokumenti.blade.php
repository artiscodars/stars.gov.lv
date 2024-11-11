@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <button type="button"
        class="text-white bg-primary hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Augšupielādēt
        izglītības dokumentu</button>


    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-spacing-0 mt-10 responsive">
            <thead>
                <tr>
                    <th class="border-b border-primary px-4 py-2 text-left font-medium ">
                        Datums</th>
                    <th class="border-b border-primary px-4 py-2 text-left font-medium ">
                        Dokuments</th>
                    <th class="border-b border-primary px-4 py-2 text-left  font-medium ">
                        Izglītības iestāde</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2 text-third">01.09.2021</td>
                    <td class="px-4 py-2">
                        <a href="#" class="underline">Izglītības dokumenta nosaukums par kaut kādu apgūtu kursu</a>
                    </td>
                    <td class="px-4 py-2">
                        <a href="#" class="underline">Izglītības iestādes nosaukums ne pārāk garš ne pārāk īss</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-4 py-2 text-third">01.09.2021</td>
                    <td class="px-4 py-2 ">
                        <a href="#" class="underline">Izglītības dokumenta nosaukums par kaut kādu apgūtu kursu</a>
                    </td>
                    <td class="px-4 py-2 ">
                        <a href="#" class="underline">Izglītības iestādes nosaukums </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection