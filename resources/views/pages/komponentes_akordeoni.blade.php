@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <h2>Akordeoni</h2>
    <p>Akordeoni ir interaktīvi lietotāja interfeisa elementi, kas ļauj lietotājiem atvērt un aizvērt sadaļas, lai
        parādītu vai paslēptu saturu. Tie ir noderīgi, lai samazinātu informācijas pārslodzi un uzlabotu lapas lasāmību.
    </p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>FAQ sadaļas:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li><strong>Produktu apraksti:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li><strong>Projekta detalizācija:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
    </ul>
    <h3>Piemērs</h3>
    <example class="not-prose">
        <div id="accordion-collapse" data-accordion="collapse" data-active-classes="bg-beige text-primary"
            data-inactive-classes="text-primary">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border border-b-0 border-gray-200 rounded-t-xl hover:bg-beige gap-3 text-xl text-primary"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span>Lorem ipsum dolor sit amet?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                        eget
                        quam non erat consequat bibendum.</p>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#"
                            class="text-blue-600 hover:underline">Lorem ipsum link</a>.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border border-b-0 border-gray-200 hover:bg-beige gap-3 text-xl text-primary"
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                    <span>Lorem ipsum dolor sit amet?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                        scelerisque nulla in lorem aliquam, vel consequat velit volutpat.</p>
                    <p class="">Lorem ipsum dolor sit amet. <a href="#" class="text-blue-600 hover:underline">Lorem
                            ipsum link</a>.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border border-gray-200 hover:bg-beige gap-3 text-xl text-primary"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span>Lorem ipsum dolor sit amet?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200">
                    <p class="mb-2 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget
                        urna malesuada, facilisis nisl sit amet, hendrerit ligula.</p>
                    <p class="mb-2 ">Lorem ipsum dolor sit amet.</p>
                    <ul class="ps-5  list-disc">
                        <li><a href="#" class="text-blue-600 hover:underline">Lorem ipsum Pro</a></li>
                        <li><a href="#" rel="nofollow" class="text-blue-600 hover:underline">Lorem ipsum link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </example>

    <h3>Vienmēr atvērts</h3>
    <example class="not-prose">
        <div id="accordion-open" data-accordion="open" data-active-classes="bg-beige hover:bg-beige text-primary"
            data-inactive-classes="text-primary">
            <h2 id="accordion-open-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border border-b-0 border-gray-200 rounded-t-xl hover:bg-beige gap-3 text-xl"
                    data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                    aria-controls="accordion-open-body-1">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg> Lorem ipsum dolor sit amet?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                        eget
                        quam non erat consequat bibendum.</p>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#"
                            class="text-blue-600 hover:underline">Lorem ipsum link</a>.</p>
                </div>
            </div>
            <h2 id="accordion-open-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border border-b-0 border-gray-200 hover:bg-beige gap-3 text-xl"
                    data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                    aria-controls="accordion-open-body-2">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg> Lorem ipsum dolor sit amet?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                        scelerisque nulla in lorem aliquam, vel consequat velit volutpat.</p>
                    <p class="">Lorem ipsum dolor sit amet. <a href="#" class="text-blue-600 hover:underline">Lorem
                            ipsum link</a>.</p>
                </div>
            </div>
            <h2 id="accordion-open-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border border-gray-200 hover:bg-beige gap-3 text-xl"
                    data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                    aria-controls="accordion-open-body-3">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg> Lorem ipsum dolor sit amet?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                <div class="p-5 border border-t-0 border-gray-200">
                    <p class="mb-2 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget
                        urna malesuada, facilisis nisl sit amet, hendrerit ligula.</p>
                    <p class="mb-2 ">Lorem ipsum dolor sit amet.</p>
                    <ul class="ps-5  list-disc">
                        <li><a href="#" class="text-blue-600 hover:underline">Lorem ipsum Pro</a></li>
                        <li><a href="#" rel="nofollow" class="text-blue-600 hover:underline">Lorem ipsum link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </example>
</div>



@endsection