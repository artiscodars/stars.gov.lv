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
                    <div class="flex space-x-6 items-center">

                        <!-- Accessibility Widget Open Button -->
                        <div class="asw-widget">
                            <a href="#" class="asw-menu-btn" title="Open Accessibility Menu" role="button"
                                aria-expanded="false">
                                <!-- Button Icon SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" style="fill: white" viewBox="0 0 24 24"
                                    width="30px" height="30px">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M20.5 6c-2.61.7-5.67 1-8.5 1s-5.89-.3-8.5-1L3 8c1.86.5 4 .83 6 1v13h2v-6h2v6h2V9c2-.17 4.14-.5 6-1l-.5-2zM12
           6c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z" />
                                </svg>
                            </a>
                        </div>


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
                    <button id="openLightbox" class="btn btn-ghost btn-circle p-3">
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


<!-- Lightbox Container -->
<div id="lightbox" class="fixed inset-0 bg-black bg-opacity-50 hidden z-[99999999999999] p-6">
    <div class="relative w-full h-full flex items-start justify-center">
        <!-- Lightbox Content -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-[500px] max-w-full relative mt-16">
            <!-- Close Button -->
            <button id="closeLightbox"
                class="absolute -top-4 -right-4 text-white hover:bg-secondary bg-primary rounded-full p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>


            <input type="text"
                class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-primary"
                placeholder="Meklēt...">
        </div>
    </div>
</div>



<script>
    function toggleNavMenu() {
        const
            navMenu = document.getElementById("navMenu");
        if (navMenu.classList.contains("translate-x-[100%]")) {
            navMenu.classList.remove("translate-x-[100%]");
            navMenu.classList.add("translate-x-0");
        } else {
            navMenu.classList.remove("translate-x-0");
            navMenu.classList.add("translate-x-[100%]");
        }

    }
</script>