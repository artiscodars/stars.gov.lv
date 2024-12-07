@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

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

</div>

@endsection