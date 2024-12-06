@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Mācību seļš no sākuma uz rezultātu
    </h2>

    <div class="flex justify-end pb-6 px-6 items-center gap-2">
        Kārtot:
        <select id="small"
            class="block w-auto p-2 text-sm text-primary border border-gray-500 rounded-lg bg-white focus:ring-primary focus:border-third">
            <option value="rs">Rezultāts - Sākums</option>
            <option selected="" value="sr">Sākums - Rezultāts</option>

        </select>
    </div>


    <div class="flex flex-col md:flex-row">


        <div class="flex-1">

            <div class="timeline md:pl-[50%]">



                <div class="timeline-item px-6 md:pt-2 pb-6 relative border-l border-gray-300">
                    <div class="md:absolute left-0 md:px-6 md:-translate-x-full top-0">13.05.2024</div>
                    <div class="w-5 aspect-square rounded-full absolute left-0 top-0 bg-success -translate-x-1/2"
                        data-tooltip-target="tooltip-default"></div>
                    <div class="p-5 rounded-lg bg-light">
                        <span
                            class="bg-light text-success text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-success">Nokārtots</span>
                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums 1</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                    <div id="tooltip-default" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-success rounded-lg shadow-sm opacity-0 tooltip">
                        Nokārtots
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
                <div
                    class="timeline-item px-6 pb-6 md:pt-2 relative border-l md:border-l-0 md:border-r border-error md:-translate-x-full md:-mr-[1px]">
                    <div class="md:absolute right-0 md:px-6 md:translate-x-full top-0">23.07.2024</div>
                    <div data-tooltip-target="tooltip-error"
                        class="w-5 aspect-square rounded-full absolute left-0 md:left-auto md:right-0 top-0 bg-error -translate-x-1/2 md:translate-x-1/2">
                    </div>
                    <div id="tooltip-error" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-error rounded-lg shadow-sm opacity-0 tooltip">
                        Jāpārliek
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div class="p-5 rounded-lg bg-light ">

                        <span
                            class="bg-light text-error text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-error">Jāpārliek</span>

                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums ar ļoti gar nosaukumu, ka nesaiet
                                vienā
                                rindā</a>

                        </h3>

                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div class="timeline-item px-6 md:pt-2 pb-6 relative border-l border-primary">
                    <div class="md:absolute left-0 md:px-6 md:-translate-x-full top-0">12.12.2024</div>
                    <div class="w-5 aspect-square rounded-full absolute left-0 top-0 bg-primary -translate-x-1/2"></div>
                    <div class="p-5 rounded-lg bg-light">
                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums 1</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div
                    class="timeline-item px-6 pb-6 md:pt-2 relative border-l md:border-l-0 md:border-r border-primary md:-translate-x-full md:-mr-[1px]">
                    <div class="md:absolute right-0 md:px-6 md:translate-x-full top-0">Nav zināms</div>
                    <div
                        class="w-5 aspect-square rounded-full absolute left-0 md:left-auto md:right-0 top-0 bg-primary -translate-x-1/2 md:translate-x-1/2">
                    </div>
                    <div class="p-5 rounded-lg bg-light">
                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums 2</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div class="timeline-item px-6 md:pt-2 pb-6 relative border-l border-primary">
                    <div class="md:absolute left-0 md:px-6 md:-translate-x-full top-0">Nav zināms</div>
                    <div class="w-5 aspect-square rounded-full absolute left-0 top-0 bg-primary -translate-x-1/2"></div>
                    <div class="p-5 rounded-lg bg-light">
                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums 1</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div class="timeline-item px-6 md:pt-2 pb-6 relative w-[300px]">

                    <div class="w-5 aspect-square rounded-full absolute left-0 top-0 bg-primary -translate-x-1/2"></div>
                    <div
                        class="p-5 rounded-lg bg-primary  md:-translate-x-1/2 md:-ml-6 md:mt-5 flex flex-col items-center">
                        <h3 class="mb-0 text-white">Rezultāts</h3>
                        <div class="text-white uppercase">Iegūts diploms</div>
                    </div>
                </div>


            </div>



        </div>
    </div>


    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Mācību seļš no rezultāta uz sākumu
    </h2>

    <div class="flex justify-end pb-6 px-6 items-center gap-2">
        Kārtot:
        <select id="small"
            class="block w-auto p-2 text-sm text-primary border border-gray-500 rounded-lg bg-white focus:ring-primary focus:border-third">
            <option selected="" value="rs">Rezultāts - Sākums</option>
            <option value="sr">Sākums - Rezultāts</option>

        </select>
    </div>

    <div class="flex flex-col md:flex-row">


        <div class="flex-1">

            <div class="timeline md:pl-[50%]">


                <div class="timeline-item px-6 md:pt-2 pb-6 relative w-[300px]">


                    <div
                        class="p-5 rounded-lg bg-primary  md:-translate-x-1/2 md:-ml-6 md:mt-5 flex flex-col items-center">
                        <h3 class="mb-0 text-white">Rezultāts</h3>
                        <div class="text-white uppercase">Iegūts diploms</div>
                    </div>
                </div>

                <div class="timeline-item px-6 md:pt-2 pb-6 relative border-l border-primary">
                    <div class="md:absolute left-0 md:px-6 md:-translate-x-full top-0">Nav zināms</div>
                    <div class="w-5 aspect-square rounded-full absolute left-0 top-0 bg-primary -translate-x-1/2"></div>
                    <div class="p-5 rounded-lg bg-light">
                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums 1</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div
                    class="timeline-item px-6 pb-6 md:pt-2 relative border-l md:border-l-0 md:border-r border-primary md:-translate-x-full md:-mr-[1px]">
                    <div class="md:absolute right-0 md:px-6 md:translate-x-full top-0">Nav zināms</div>
                    <div
                        class="w-5 aspect-square rounded-full absolute left-0 md:left-auto md:right-0 top-0 bg-primary -translate-x-1/2 md:translate-x-1/2">
                    </div>
                    <div class="p-5 rounded-lg bg-light">
                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums 2</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div class="timeline-item px-6 md:pt-2 pb-6 relative border-l border-primary">
                    <div class="md:absolute left-0 md:px-6 md:-translate-x-full top-0">12.12.2024</div>
                    <div class="w-5 aspect-square rounded-full absolute left-0 top-0 bg-primary -translate-x-1/2"></div>
                    <div class="p-5 rounded-lg bg-light">
                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums 1</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div
                    class="timeline-item px-6 pb-6 md:pt-2 relative border-l md:border-l-0 md:border-r border-error md:-translate-x-full md:-mr-[1px]">
                    <div class="md:absolute right-0 md:px-6 md:translate-x-full top-0">23.07.2024</div>
                    <div data-tooltip-target="tooltip-error"
                        class="w-5 aspect-square rounded-full absolute left-0 md:left-auto md:right-0 top-0 bg-error -translate-x-1/2 md:translate-x-1/2">
                    </div>
                    <div id="tooltip-error" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-error rounded-lg shadow-sm opacity-0 tooltip">
                        Jāpārliek
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div class="p-5 rounded-lg bg-light ">

                        <span
                            class="bg-light text-error text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-error">Jāpārliek</span>

                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums ar ļoti gar nosaukumu, ka nesaiet
                                vienā
                                rindā</a>

                        </h3>

                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                </div>
                <div class="timeline-item px-6 md:pt-2 pb-6 relative ">
                    <div class="md:absolute left-0 md:px-6 md:-translate-x-full top-0">13.05.2024</div>
                    <div class="w-5 aspect-square rounded-full absolute left-0 top-0 bg-success -translate-x-1/2"
                        data-tooltip-target="tooltip-default"></div>
                    <div class="p-5 rounded-lg bg-light">
                        <span
                            class="bg-light text-success text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-success">Nokārtots</span>
                        <h3 class="mb-0 text-xl"><a href="#">Programmas nosaukums 1</a></h3>
                        <div class="text-third uppercase">Iestādes nosaukums</div>
                    </div>
                    <div id="tooltip-default" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-success rounded-lg shadow-sm opacity-0 tooltip">
                        Nokārtots
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>






            </div>



        </div>
    </div>

</div>









@endsection