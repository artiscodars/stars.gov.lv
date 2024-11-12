@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Mācību ceļi</h2>

    <div class="flex flex-col md:flex-row">

        <div class="md:pr-6 pb-6">
            <ul
                class="list-none m-0 p-0 pr-[20px] flex flex-wrap gap-x-5 md:gap-0 flex-row md:flex-col md:flex-none border-b border-primary pb-4 md:border-0">



                <li class="m-0 p-0 leading-1">
                    <!-- Top-level menu item -->
                    <a href="#" class="flex relative items-center py-1 no-underline text-gray-700 hover:text-gray-500 ">

                        Mans konts

                    </a>

                    <!-- Submenu (children) -->
                </li>

                <li class="m-0 p-0 leading-1">
                    <!-- Top-level menu item -->
                    <a href="#"
                        class="flex relative items-center py-1 no-underline text-gray-700 hover:text-gray-500 font-[600] pl-4">

                        <span class="block h-2 w-2 absolute left-0 bg-gray-900"></span>
                        Mans mācību ceļš

                    </a>

                    <!-- Submenu (children) -->
                </li>

                <li class="m-0 p-0 leading-1">
                    <!-- Top-level menu item -->
                    <a href="#" class="flex relative items-center py-1 no-underline text-gray-700 hover:text-gray-500 ">

                        Mācību vēsture

                    </a>

                    <!-- Submenu (children) -->
                </li>

                <li class="m-0 p-0 leading-1">
                    <!-- Top-level menu item -->
                    <a href="#" class="flex relative items-center py-1 no-underline text-gray-700 hover:text-gray-500 ">

                        Programmu katalogs

                    </a>

                    <!-- Submenu (children) -->
                </li>


            </ul>
        </div>
        <div class="flex-1">

            <div class="timeline md:pl-[50%]">



                <div class="timeline-item px-6 md:pt-2 pb-6 relative border-l border-primary">
                    <div class="md:absolute left-0 md:px-6 md:-translate-x-full top-0">12.12.2024</div>
                    <div class="w-5 aspect-square rounded-full absolute left-0 top-0 bg-primary -translate-x-1/2"></div>
                    <div class="p-5 rounded-lg bg-light">
                        <h3 class="mb-0"><a href="#">Programmas nosaukums</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div
                    class="timeline-item px-6 pb-6 md:pt-2 relative border-l md:border-l-0 md:border-r border-primary md:-translate-x-full md:-mr-[1px]">
                    <div class="md:absolute right-0 md:px-6 md:translate-x-full top-0">12.12.2024</div>
                    <div
                        class="w-5 aspect-square rounded-full absolute left-0 md:left-auto md:right-0 top-0 bg-primary -translate-x-1/2 md:translate-x-1/2">
                    </div>
                    <div class="p-5 rounded-lg bg-light">
                        <h3 class="mb-0"><a href="#">Programmas nosaukums</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div class="timeline-item px-6 md:pt-2 pb-6 relative ">
                    <div class="md:absolute left-0 md:px-6 md:-translate-x-full top-0">12.12.2024</div>
                    <div class="w-5 aspect-square rounded-full absolute left-0 top-0 bg-primary -translate-x-1/2"></div>
                    <div class="p-5 rounded-lg bg-light">
                        <h3 class="mb-0"><a href="#">Programmas nosaukums</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>

                </div>

            </div>



        </div>
    </div>

</div>



@endsection