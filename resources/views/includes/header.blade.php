<div class="{{ Route::is('home') ? 'bg-[#EBE7E0]' : 'bg-white' }}">
    <div class="container mx-auto">
        <!-- Header Section -->
        <header class="py-2">
            <div class=" hidden lg:block">
                <div class="flex justify-between items-center py-2">
                    <!-- Logo and Agency Name -->
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('images/viaa-logo.svg') }}" alt="Valsts izglītības attīstības aģentūra"
                            class="h-12">
                        <!-- Replace with your logo -->

                    </div>

                    <!-- Language and Accessibility Options -->
                    <div class="flex space-x-6 items-end">

                        <!-- Language Switch -->
                        <div class="flex gap-2 text-lg items-end leading-none">
                            <a href="#" class="font-bold ">LV</a>
                            <a href="#" class="">EN</a>
                        </div>
                    </div>
                </div>

                <hr class="border-t border-gray-800 my-2">
            </div>

            <!-- Navigation -->
            <div class="flex justify-between items-center py-5">
                <!-- Website Title -->
                <a href="/"><img src="{{ asset('images/stars-logo.svg') }}" alt="Stars" class="h-12"></a>


                <div class="hidden lg:block">
                    @include('includes.top-menu', ['menu' => $menu])
                </div>
                <div class="lg:hidden">
                    @include('includes.top-menu-mobile', ['menu' => $menu])
                </div>

                <div class="lg:hidden flex items-center gap-4">
                    <!-- Search Button -->
                    <button class="btn btn-ghost btn-circle p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>

                    <!-- Toggle Navigation Button -->
                    <button class="py-3 hover:opacity-70" onclick="toggleNavMenu()">
                        <svg width="33" height="10" viewBox="0 0 33 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1L33 1" stroke="#22272E" />

                            <path d="M0 9L33 9" stroke="#22272E" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>
    </div>
</div>


<script>
    function toggleNavMenu() {
        const navMenu = document.getElementById("navMenu");
        if (navMenu.classList.contains("translate-x-[100%]")) {
            navMenu.classList.remove("translate-x-[100%]");
            navMenu.classList.add("translate-x-0");
        } else {
            navMenu.classList.remove("translate-x-0");
            navMenu.classList.add("translate-x-[100%]");
        }
    }
</script>
