<!-- Header Section -->
<header class="bg-white py-2">
    <div class="flex justify-between items-center py-2">
        <!-- Logo and Agency Name -->
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/viaa-logo.svg') }}" alt="Valsts izglītības attīstības aģentūra" class="h-12">
            <!-- Replace with your logo -->

        </div>

        <!-- Language and Accessibility Options -->
        <div class="flex space-x-6 items-end">
            <!-- Accessibility Options -->
            <div class="flex gap-2 items-end ">
                <a href=" #" class="text-md  leading-none">A</a>
                <a href="#" class="text-lg  leading-none">A</a>
                <a href="#" class="text-xl  leading-none">A</a>
            </div>
            <!-- Language Switch -->
            <div class="flex gap-2 text-lg items-end leading-none">
                <a href="#" class="font-bold ">LV</a>
                <a href="#" class="">EN</a>
            </div>
        </div>
    </div>

    <hr class="border-t border-gray-800 my-2">

    <!-- Navigation -->
    <div class="flex justify-between items-center py-5">
        <!-- Website Title -->
        <a href="/"><img src="{{ asset('images/stars-logo.svg') }}" alt="Stars" class="h-12"></a>

        @include('includes.top-menu')
    </div>
</header>