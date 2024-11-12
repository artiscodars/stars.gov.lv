@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <div class="p-4 mb-4  bg-gray-100 border-l-[15px] border-primary  rounded-lg" role="alert">
        Lūdzam aizpildīt anketu par pabeigto Inženiezinātnes programmu!
        <div class="pt-2"> <button type="button"
                class="text-white bg-primary hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Aizpildīt
                anketu</button></div>

    </div>

    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Azpildītās anketas</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-spacing-0 responsive">

            <tbody>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2">
                        <a href="#" class="underline font-serif text-primary text-lg">Anketa par pabeigto programmu</a>
                    </td>

                </tr>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2 ">
                        <a href="#" class="underline font-serif text-primary text-lg">Anketa par pabeigto programmu</a>
                    </td>

                </tr>

            </tbody>
        </table>
    </div>

</div>
@endsection