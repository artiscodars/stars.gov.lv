@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">2.līmenis "Pamata digitālās pašapkalpošanās prasmes"</h1>
    <div class="pb-3 flex gap-2">
        @include('includes.stars', ['stars' => $stars ?? 5])

    </div>

    <button class="bg-primary text-white px-4 py-2 rounded-lg mt-4">Pieteikties</button>

    <div class="flex gap-4 mt-10 font-semibold font-serif text-2xl">
        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 12.25V22.875C0 23.2203 0.279687 23.5 0.625 23.5H3.75V11H1.25C0.559766 11 0 11.5598 0 12.25ZM14.0625 10.375H13.125V8.8125C13.125 8.63985 12.9852 8.5 12.8125 8.5H12.1875C12.0148 8.5 11.875 8.63985 11.875 8.8125V11.3125C11.875 11.4852 12.0148 11.625 12.1875 11.625H14.0625C14.2352 11.625 14.375 11.4852 14.375 11.3125V10.6875C14.375 10.5148 14.2352 10.375 14.0625 10.375ZM19.4434 7.87657L13.1934 3.70977C12.988 3.57298 12.7468 3.5 12.5 3.5C12.2532 3.5 12.012 3.57298 11.8066 3.70977L5.55664 7.87657C5.38545 7.9907 5.24508 8.14532 5.14797 8.32671C5.05087 8.50811 5.00004 8.71066 5 8.91641V23.5H10V17.875C10 17.5297 10.2797 17.25 10.625 17.25H14.375C14.7203 17.25 15 17.5297 15 17.875V23.5H20V8.9168C20 8.49883 19.791 8.10821 19.4434 7.87657ZM12.5 13.5C10.7742 13.5 9.375 12.1008 9.375 10.375C9.375 8.64922 10.7742 7.25 12.5 7.25C14.2258 7.25 15.625 8.64922 15.625 10.375C15.625 12.1008 14.2258 13.5 12.5 13.5ZM23.75 11H21.25V23.5H24.375C24.7203 23.5 25 23.2203 25 22.875V12.25C25 11.5598 24.4402 11 23.75 11Z"
                fill="#2D233D" />
        </svg>

        Banku augstskola
    </div>

    <div class="grid grid-cols-2 gap-8 py-10">
        <!-- Left Column -->
        <div class="grid grid-cols-2 ">
            <div class="font-semibold py-2">Programmas veids</div>
            <div class="border-l border-primary pl-6 py-2">Moduļu kopa</div>

            <div class="font-semibold py-2">Stundu skaits</div>
            <div class="border-l border-primary pl-6 py-2">120</div>

            <div class="font-semibold py-2">Mācību forma</div>
            <div class="border-l border-primary pl-6 py-2">Klātiene</div>

            <div class="font-semibold py-2">Mācību valoda</div>
            <div class="border-l border-primary pl-6 py-2">Latviešu</div>

            <div class="font-semibold py-2">Maksimālais dalībnieku skaits mācību grupā</div>
            <div class="border-l border-primary pl-6 py-2">25</div>


        </div>

        <!-- Right Column -->
        <div class="grid grid-cols-2 ">


            <div class="font-semibold py-2">Brīvo vietu skaits</div>
            <div class="border-l border-primary pl-6 py-2">70/100</div>

            <div class="font-semibold py-2">Iegūstamais izglītības dokuments</div>
            <div class="border-l border-primary pl-6 py-2">Apliecība</div>

            <div class="font-semibold py-2">Priekšzināšanas</div>
            <div class="border-l border-primary pl-6 py-2">Iemaņas darbam ar datoru </div>

            <div class="font-semibold py-2">Līdzmaksājums</div>
            <div class="border-l border-primary pl-6 py-2">0,00 €</div>

            <div class="font-semibold py-2">Mācību izmaksas par vienu dalībnieku</div>
            <div class="border-l border-primary pl-6 py-2">325,00 €</div>


        </div>
    </div>




    <h3>Apraksts</h3>

    <div class="prose">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue et mauris sit amet consectetur. Ut
            accumsan nunc vitae purus fringilla, sed convallis elit commodo. Suspendisse potenti. Fusce vel molestie
            felis, vel ullamcorper lacus. Donec libero tellus, cursus eget mauris eget, imperdiet auctor turpis. Sed
            eget mollis ante. Aliquam viverra congue nibh eget aliquet. Quisque non mi et odio ullamcorper sagittis.
            Donec fermentum sapien id imperdiet consectetur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue et mauris sit amet consectetur. Ut
            accumsan nunc vitae purus fringilla, sed convallis elit commodo. Suspendisse potenti. Fusce vel molestie

            felis, vel ullamcorper lacus. Donec libero tellus, cursus eget mauris eget, imperdiet auctor turpis. Sed
            eget mollis ante. Aliquam viverra congue nibh eget aliquet. Quisque non mi et odio ullamcorper sagittis.
            Donec fermentum sapien id imperdiet consectetur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue et mauris sit amet consectetur. Ut
            accumsan nunc vitae purus fringilla, sed convallis elit commodo. Suspendisse potenti. Fusce vel molestie
            felis, vel ullamcorper lacus. Donec libero tellus, cursus eget mauris eget, imperdiet auctor turpis. Sed
            eget mollis ante. Aliquam viverra congue nibh eget aliquet. Quisque non mi et odio ullamcorper sagittis.
            Donec fermentum sapien id imperdiet consectetur.</p>
    </div>


</div>
@endsection