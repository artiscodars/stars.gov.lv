@extends('layout')


@section('content')
<div class="container mx-auto px-6 prose">
    <h1>{{ $pageTitle }}</h1>

    <p class="mb-4">
        Dizaina sistēma izstrādāta, lai palīdzētu veidot vienota stila un uz dizaina sistēmu balstītu
        interneta projektu izstrādi, kas nodrošinās lietotājiem vienotus sistēmu izmantošanas principus un
        līdzīgas saskarnes.
    </p>
    <p class="mb-4">
        Dizaina sistēmu, ir strukturēts savstarpēji saistītu modeļu un kopīgas izmantošanas kopums, kas dod
        ievirzi digitālo produktu projektēšanā un izstrādē.
    </p>
    <p>
        Dizaina sistēma kalpo par atsauci dažādām iesaistītajām digitālā produkta izstrādes pusēm, piemēram,
        dizaineriem, izstrādātājiem, tekstu autoriem un projektu vadītājiem.
    </p>



    <h2>Dizaina sistēmas sadaļas</h2>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="border border-gray-300 rounded-md">
            <div class="p-6">
                <h3>Vispārīgās dizaina vadlīnijas</h3>
                <a href="index-1.htm?s=d&amp;p=visparigi" class="flex items-center">
                    Vairāk <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
        </div>

        <div class="border border-gray-300 rounded-md">
            <div class="p-6">
                <h3>Komponentes</h3>
                <a href="index-6.htm?s=d&amp;p=komponentes" class=" flex items-center">
                    Vairāk <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
        </div>

        <div class="border border-gray-300 rounded-md">
            <div class="p-6">
                <h3>Piemēri</h3>
                <a href="index-23.htm?s=d&amp;p=piemeri" class=" flex items-center">
                    Vairāk <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
        </div>
    </div>

    <h2>Par dizaina sistēmu</h2>

    <p class="mb-4">
        Dizaina sistēmas HTML/CSS ir veidots uz TAILWIND bāzes, lai atspoguļotu dizaina sistēmas elementu
        izmantošanu noteikta dizaina izstrādes ietvarā. Pēc analoģijas var izmantot jebkuru citu dizaina
        izstrādes ietvaru, to atbilstoši pielāgojot šajā dizaina sistēmā attēlotajiem dizaina elementiem,
        komponentēm un paraugiem.
    </p>
    <p class="mb-4">
        Šis dizaina sistēmas ietvars var tikt izmantots kā bāzes šablons jaunu sistēmu izveidei.
    </p>
    <p class="mb-4">
        Dizaina sistēma var tikt papildināta ar jaunām dizaina un funkcionalitātes komponentēm. Veidojot
        jaunas komponentes galvenais nosacījums ir ievērot, lai tā iekļaujas pārējo dizaina elementu grupā.
    </p>
    <h2>Lejupielādes</h2>
    <p>
        Dizaina sistēma ir pieejama lejupielādei <a href="https://github.com/artiscodars/stars.gov.lv.git">GitHub</a>.
    </p>
    <h2>Dizaina sistēmas izstrādātājs</h2>
    <p>
        Artis Čodars, <a href="mailto:artis@codars.com">artis@codars.com</a><br>
        CODARS DESIGN, SIA <br>
        <a href="https://codars.com">https://codars.com</a>
    </p>



</div>
@endsection