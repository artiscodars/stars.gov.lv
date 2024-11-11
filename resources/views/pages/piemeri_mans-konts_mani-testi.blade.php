@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <h2 class="uppercase font-sans text-xl font-normal">Pārbaudi sevi</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="block p-6 bg-[#f5f5f5]  rounded-lg ">

            <h5 class="mb-2 text-2xl font-medium tracking-tight text-primary dark:text-white leading-6">Spēju detektors
            </h5>


            <div class="text-third pb-4 text-sm uppercase">Prasmju tiešsaistes testi</div>


            <div class="flex justify-between items-center pt-4">
                <button type="button"
                    class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-third font-medium rounded-md text-sm px-10 py-2.5 ">Sākt</button>
                <a href="#" class="text-gray-500 hover:opacity-70 underline font-medium rounded-md text-sm ">Uzzināt
                    vairāk</a>
            </div>
        </div>

        <div class="block p-6 bg-[#f5f5f5]  rounded-lg ">

            <h5 class="mb-2 text-2xl font-medium tracking-tight text-primary dark:text-white leading-6">Interešu
                laboratorija</h5>


            <div class="text-third pb-4 text-sm uppercase">noskaidro savas intereses</div>


            <div class="flex justify-between items-center pt-4">
                <button type="button"
                    class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-third font-medium rounded-md text-sm px-10 py-2.5 ">Sākt</button>
                <a href="#" class="text-gray-500 hover:opacity-70 underline font-medium rounded-md text-sm ">Uzzināt
                    vairāk</a>
            </div>
        </div>





    </div>

    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Testu vēsture</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-spacing-0 responsive">

            <tbody>
                <tr>
                    <td class="px-4 py-2">01.09.2021</td>
                    <td class="px-4 py-2 font-serif text-lg font-semibold">
                        Digitālo prasmju tests: <br>MyDigiSkills
                    </td>
                    <td class="px-4 py-2 text-success">
                        Nokārtots
                    </td>
                    <td class="px-4 py-2 text-end flex justify-end items-center">
                        Rezultāti <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td colspan="3">


                        <table class="min-w-full border-collapse border-spacing-0">
                            <thead>
                                <tr>
                                    <th class="border-b border-primary px-4 py-2 text-left font-medium ">
                                    </th>
                                    <th class="border-b border-primary px-4 py-2 text-left font-medium ">
                                        Max</th>
                                    <th class="border-b border-primary px-4 py-2 text-left  font-medium ">
                                        Saņemtie</th>
                                    <th class="border-b border-primary px-4 py-2 text-left font-medium ">
                                        %</th>
                                    <th class="border-b border-primary px-4 py-2 text-left  font-medium ">
                                        Līmenis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-2">1. sadaļa</td>
                                    <td class="px-4 py-2">
                                        48
                                    </td>
                                    <td class="px-4 py-2">
                                        33
                                    </td>
                                    <td class="px-4 py-2">
                                        54
                                    </td>
                                    <td class="px-4 py-2">
                                        Vidējs
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 ">2. sadaļa</td>
                                    <td class="px-4 py-2">
                                        48
                                    </td>
                                    <td class="px-4 py-2">
                                        33
                                    </td>
                                    <td class="px-4 py-2">
                                        54
                                    </td>
                                    <td class="px-4 py-2">
                                        Vidējs
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="border-t border-primary">
                                    <td class="px-4 py-2">Kopā</td>
                                    <td class="px-4 py-2">
                                        48
                                    </td>
                                    <td class="px-4 py-2">
                                        33
                                    </td>
                                    <td class="px-4 py-2">
                                        54
                                    </td>
                                    <td class="px-4 py-2">
                                        Vidējs
                                    </td>
                                </tr>
                            </tfoot>
                        </table>




                    </td>
                </tr>
                <tr>
                    <td class="px-4 py-2">01.09.2021</td>
                    <td class="px-4 py-2 font-serif text-lg font-semibold">
                        Digitālo prasmju tests: <br>MyDigiSkills
                    </td>
                    <td class="px-4 py-2 text-success">
                        Nokārtots
                    </td>
                    <td class="px-4 py-2 text-end flex justify-end items-center">
                        Rezultāti <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </td>

                </tr>
                <tr>
                    <td class="px-4 py-2">01.09.2021</td>
                    <td class="px-4 py-2 font-serif text-lg font-semibold">
                        Digitālo prasmju tests: <br>MyDigiSkills
                    </td>
                    <td class="px-4 py-2 text-error">
                        Nepieciešams atkārtot
                    </td>
                    <td class="px-4 py-2 text-end flex justify-end items-center">
                        <button type="button"
                            class="text-error border border-error hover:bg-error hover:text-white  font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Atkārtot</button>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>



</div>


@endsection