@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <h2 class="uppercase  font-sans text-xl font-normal">Karjeras konsultanti</h2>





    <!-- Search bar -->
    <div class="relative mb-6 w-full md:w-1/3">
        <input type="text" placeholder="Meklēt"
            class="w-full border-0 border-b border-primary py-2 pr-10 focus:outline-none">
        <button class="absolute right-1 top-0.5 mt-2 mr-2 text-primary hover:opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.9 14.32a8 8 0 111.414-1.414l4.244 4.243a1 1 0 01-1.415 1.415l-4.243-4.244zM14 8a6 6 0 11-12 0 6 6 0 0112 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <!-- Consultant cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Card -->
        <div class="bg-light rounded-lg  p-4 flex gap-4 items-center">
            <img src="/images/janis.png" alt="Consultant photo" class="w-20 h-20 rounded-md object-cover my-0">
            <div>
                <h3 class="text-lx font-semibold  m-0"><a href="#" class="no-underline">Jānis
                        Bērziņš</a></h3>
                <p class="text-sm font-medium text-third uppercase m-0 ">Profesionāls koučs</p>
            </div>
        </div>

        <!-- Card -->
        <div class="bg-light rounded-lg  p-4 flex gap-4 items-center">
            <img src="/images/janis.png" alt="Consultant photo" class="w-20 h-20 rounded-md object-cover m-0">
            <div>
                <h3 class="text-xl font-semibold  m-0"><a href="#" class="no-underline">Pēteris
                        Ozols</a></h3>
                <p class="text-sm font-medium text-third uppercase m-0">Profesionāls koučs</p>
            </div>
        </div>
    </div>



    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Konsultāciju vēsture</h2>




    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-spacing-0 responsive">

            <tbody>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2">
                        <a href="#" class="underline font-serif text-primary text-lg">Koučings personības attīstībā.
                        </a>
                    </td>

                </tr>
                <tr>
                    <td class="ps-0 pe-4 py-2 text-third">01.09.2021</td>
                    <td class="ps-0 pe-4 py-2 ">
                        <a href="#" class="underline font-serif text-primary text-lg">Koučings personības attīstībā.</a>
                    </td>


                </tr>

            </tbody>
        </table>
    </div>

</div>


@endsection