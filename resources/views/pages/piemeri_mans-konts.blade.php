@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">Esiet sveicināts!</h1>

    <div class="p-4 mb-4  bg-gray-100 border-l-[15px] border-success  rounded-lg" role="alert">
        <span class="font-medium">Veiksmīgs paziņojums!</span> Jūsu pieprasījums tika veiksmīgi apstrādāts.
    </div>

    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Pādējie darījumi</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-spacing-0">

            <tbody>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2">
                        <a href="#" class="underline font-serif text-primary text-lg">Izglītības dokumenta nosaukums par
                            kaut
                            kādu apgūtu
                            kursu</a>
                    </td>
                    <td class="px-0 py-2 md:text-end">
                        Finansējuma piešķīrāja nosaukums
                    </td>
                </tr>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2 ">
                        <a href="#" class="underline font-serif text-primary text-lg">Izglītības dokumenta nosaukums par
                            kaut kādu apgūtu kursu</a>
                    </td>
                    <td class="px-0 py-2 md:text-end ">
                        Finansējuma piešķīrāja nosaukums
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <button type="button"
        class="text-white bg-primary hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Visi
        darījumi</button>

    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Cits izvilkums</h2>

</div>
@endsection