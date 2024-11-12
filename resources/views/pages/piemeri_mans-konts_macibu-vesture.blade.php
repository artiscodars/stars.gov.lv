@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>


    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Notikumi</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-spacing-0 responsive">

            <tbody>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2">
                        <a href="#" class="underline font-serif text-primary text-lg">Pabeigtas mācības programmā X,
                            kura tika finansēta no 8.4.1</a>
                    </td>
                    <td class="px-0 py-2 md:text-end">
                        <a href="">Izglītības iestāde 1</a>
                    </td>
                </tr>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2 ">
                        <a href="#" class="underline font-serif text-primary text-lg">Saņemta kvalifikācija tehikumā Y,
                            pabeidzot programmu Z</a>
                    </td>
                    <td class="px-0 py-2 md:text-end ">
                        <a href="#">Izglītības iestāde 2, programma 2
                            Informācija saņemta no VIIS piešķīrāja nosaukums</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
@endsection