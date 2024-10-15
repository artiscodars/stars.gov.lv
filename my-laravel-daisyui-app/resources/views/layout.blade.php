<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Header</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Header Section -->
    <header class="bg-white py-2">
        <div class="container mx-auto flex justify-between items-center py-2">
            <!-- Logo and Agency Name -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/viaa-logo.svg') }}" alt="Valsts izglītības attīstības aģentūra" class="h-12">
                <!-- Replace with your logo -->

            </div>

            <!-- Language and Accessibility Options -->
            <div class="flex space-x-6 items-end">
                <!-- Accessibility Options -->
                <div class="flex gap-2 items-end ">
                    <a href=" #" class="text-md text-gray-500 leading-none">A</a>
                    <a href="#" class="text-lg text-gray-500 leading-none">A</a>
                    <a href="#" class="text-xl text-gray-500 leading-none">A</a>
                </div>

                <!-- Language Switch -->
                <div class="flex gap-2 text-lg items-end leading-none">
                    <a href="#" class="font-bold text-gray-800">LV</a>
                    <a href="#" class="text-gray-500">EN</a>
                </div>


            </div>
        </div>

        <div class="container mx-auto">
            <hr class="border-t border-gray-300 my-2">
        </div>

        <!-- Navigation -->
        <div class="container mx-auto flex justify-between items-center py-5">
            <!-- Website Title -->
            <a href="/"><img src="{{ asset('images/stars-logo.svg') }}" alt="Stars" class="h-12"></a>

            <!-- Navigation Links -->
            <nav class="flex space-x-6 text-sm text-gray-700 items-center">
                <div class="relative group">
                    <a href="#"
                        class="inline-flex items-center text-[#2d233d] text-base font-semibold font-['Source Sans 3']">Jaunumi
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg></a>
                    <!-- Dropdown (on hover) -->
                    <ul class="absolute hidden group-hover:block bg-white shadow-lg rounded py-2">
                        <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jaunums 1</a>
                        </li>
                        <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jaunums 2</a>
                        </li>
                    </ul>
                </div>
                <a href="#"
                    class="hover:text-gray-900 text-[#2d233d] text-base font-normal font-['Source Sans 3']">Pieaugušajiem</a>
                <a href="#"
                    class="hover:text-gray-900 text-[#2d233d] text-base font-normal font-['Source Sans 3']">Izglītības
                    iestādēm</a>
                <a href="#" class="hover:text-gray-900 text-[#2d233d] text-base font-normal font-['Source Sans 3']">Par
                    projektu</a>
                <a href="#"
                    class="hover:text-gray-900 text-[#2d233d] text-base font-normal font-['Source Sans 3']">Kontakti</a>
                <button class="btn btn-ghost btn-circle"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg></button>
                <!-- Login Button -->
                <a href="#" class="btn btn-warning text-white">Pieslēgties</a> <!-- Replace with your login URL -->
            </nav>


        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto py-6">
        @yield('content')
    </main>

    <!-- Footer (optional) -->
    <footer class="bg-white py-4 text-center">
        <p>&copy; 2024 MyWebsite. All rights reserved.</p>
    </footer>

    @vite('resources/js/app.js')
</body>

</html>