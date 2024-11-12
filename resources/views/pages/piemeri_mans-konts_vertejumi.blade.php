@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Saņemtie vērtējumi</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-spacing-0 responsive">

            <tbody>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2">
                        <a href="#" class="underline font-serif text-primary text-lg">Vērtējums par pabeigto
                            programmu</a>
                    </td>

                </tr>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2 ">
                        <a href="#" class="underline font-serif text-primary text-lg">Vērtējums par pabeigto
                            programmu</a>
                    </td>

                </tr>

            </tbody>
        </table>
    </div>


</div>
@endsection