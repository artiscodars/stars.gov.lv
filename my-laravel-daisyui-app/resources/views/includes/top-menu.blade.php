<!-- Navigation Links -->
<nav class="flex space-x-6 items-center">

    @php

        $menu = loadMenu();
        // print_r($menu);


    @endphp


    @if ($menu)

        @foreach($menu as $menuItem)

            @php
                // Check if the current route is either the top-level or a child of the current section
                $isActive = request()->is($menuItem['route']) || request()->is($menuItem['route'] . '/*');
            @endphp


            @if (!empty($menuItem['children']))
                <!-- If the menu item has children, create a dropdown -->
                <div class="relative group">
                    <a href="{{ url($menuItem['route']) }}" class="flex items-center {{ $isActive ? 'font-[600]' : '' }}">
                        <span>{{ $menuItem['name'] }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <!-- Dropdown (on hover) -->
                    <ul class="absolute hidden group-hover:block bg-white shadow-lg rounded py-2 w-[200px]">
                        @foreach($menuItem['children'] as $child)
                            <li><a href="{{ url($child['route']) }}" class="block px-4 py-2 text-sm">{{ $child['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @else
                <!-- Regular menu item without children -->
                <a href="{{ url($menuItem['route']) }}" class=" {{ $isActive ? 'font-[600]' : '' }}">{{ $menuItem['name'] }}</a>
            @endif
        @endforeach
    @endif
    <!-- Search Button -->
    <button class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </button>

    <!-- Login Button -->
    <a href="#" class="py-3 px-5 bg-warning rounded">Pieslēgties</a>

</nav>