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
                    <th class="border-b border-primary px-4 py-2 text-left  font-medium "></th>
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
                    <td>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm-6 9a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h.5a2.5 2.5 0 0 0 0-5H5Zm1.5 3H6v-1h.5a.5.5 0 0 1 0 1Zm4.5-3a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 15 15.375v-1.75A2.626 2.626 0 0 0 12.375 11H11Zm1 5v-3h.375a.626.626 0 0 1 .625.626v1.748a.625.625 0 0 1-.626.626H12Zm5-5a1 1 0 0 0-1 1v5a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1h1a1 1 0 1 0 0-2h-2Z"
                                clip-rule="evenodd" />
                        </svg>


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
                    <td>
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16 18H8l2.5-6 2 4 1.5-2 2 4Zm-1-8.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1ZM8 18h8l-2-4-1.5 2-2-4L8 18Zm7-8.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                        </svg>


                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection