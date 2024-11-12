@extends('layout')

@section('content')
<div class="flex flex-row justify-between">
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>
    <button type="button"
        class="text-white bg-primary hover:opacity-70  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Nosūtīt
        ziņu</button>



</div>
<div class="pt-6">
    <div class="flex flex-col md:flex-row border-t border-primary py-4 md:gap-5">
        <div class="py-0.5">19.08.2024</div>
        <div>
            <h3 class="m-0 font-bold text-xl">Kontā saņemti 500 EUR</h3>
            <p class="mb-0">Kontā saņemti 500 EUR, jo pieteicāties programmai X un jūsu pieteikums ir viens pirmajiem Y
                pieteikumiem</p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row border-t border-primary py-4 md:gap-5">
        <div class="py-0.5">19.08.2024</div>
        <div>
            <h3 class="m-0 font-bold text-xl">Kontā saņemti 500 EUR</h3>
            <p class="mb-0">Kontā saņemti 500 EUR, jo pieteicāties programmai X un jūsu pieteikums ir viens pirmajiem Y
                pieteikumiem</p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row border-t border-primary py-4 md:gap-5">
        <div class="py-0.5">19.08.2024</div>
        <div>
            <h3 class="m-0  text-xl">Kontā saņemti 500 EUR</h3>
            <p class="mb-0">Kontā saņemti 500 EUR, jo pieteicāties programmai X un jūsu pieteikums ir viens pirmajiem Y
                pieteikumiem</p>
        </div>
    </div>
</div>

@endsection