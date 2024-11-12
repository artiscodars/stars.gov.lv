@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>



    <div>

        <div class="flex items-center gap-2 md:hidden cursor-pointer mb-4" onclick="toggleFilter()">
            Filtrs
            <div class="rotate-0"><svg width="17" height="9" viewBox="0 0 17 9" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.2803 1L8.64013 8L0.999985 0.999999" stroke="#8A8A8A" />
                </svg></div>
        </div>

        <div id="filterForm" class="hidden md:block -mt-4 md:mt-0">
            <form class="flex flex-col md:flex-row  gap-5 pb-5 pt-3 ">

                <select id="countries"
                    class="bg-white border border-gray-500 text-primary text-sm rounded-lg focus:ring-primary focus:border-third block  p-2.5 ">
                    <option>Izglītības iestādes</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                </select>
                <select id="countries"
                    class="bg-white border border-gray-500 text-primary text-sm rounded-lg focus:ring-primary focus:border-third block  p-2.5 ">
                    <option selected>Programmas veids </option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                </select>
                <select id="countries"
                    class="bg-white border border-gray-500 text-primary text-sm rounded-lg focus:ring-primary focus:border-third block  p-2.5">
                    <option selected>Digitālo kompetenču līmenis</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                </select>
                <select id="countries"
                    class="bg-white border border-gray-500 text-primary text-sm rounded-lg focus:ring-primary focus:border-third block  p-2.5">
                    <option selected>Īstenošanas vietas </option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                </select>
                <select id="countries"
                    class="bg-white border border-gray-500 text-primary text-sm rounded-lg focus:ring-primary focus:border-third block  p-2.5">
                    <option selected>Prasības iepriekšējai izglītībai</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                    <option value="1">Viens nosaukums</option>
                </select>
            </form>
        </div>
    </div>

    <script>
        function toggleFilter() {
            const filterForm = document.getElementById('filterForm');
            filterForm.classList.toggle('hidden');
        }
    </script>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        @include('includes.card-programma', [
    'severity' => 'primary',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

        @include('includes.card-programma', [
    'severity' => 'secondary',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

        @include('includes.card-programma', [
    'severity' => 'third',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

        @include('includes.card-programma', [
    'severity' => 'success',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])
        @include('includes.card-programma', [
    'severity' => 'success-dark',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])
        @include('includes.card-programma', [
    'severity' => 'warning',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])

        @include('includes.card-programma', [
    'severity' => 'error',
    'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
])
    </div>


    <div class="flex items-center justify-center space-x-4 text-ig-primary py-6">
        <!-- Previous Button -->
        <button class="text-2xl focus:outline-none">
            <svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.2305 20L1.9997 10.5L12.2305 1" stroke="#2D233D" stroke-width="2" />
            </svg>

        </button>

        <!-- Page Info -->
        <span class="text-lg px-10">2 NO 10</span>

        <!-- Next Button -->
        <button class="text-2xl  focus:outline-none">
            <svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.769531 1L11.0003 10.5L0.769535 20" stroke="#2D233D" stroke-width="2" />
            </svg>

        </button>
    </div>


</div>
@endsection