<!-- Navigation Links -->
<nav class="flex gap-5 flex-row items-center flex-1 justify-end ">

    @php
        $menu = loadMenu();
    @endphp

    @if ($menu)
        <div class="flex flex-row flex-1 justify-end gap-5 w-full px-0">
            @foreach($menu as $menuItem)
                @php
                    $isActive = request()->is($menuItem['route']) || request()->is($menuItem['route'] . '/*');
                @endphp
                @if (!empty($menuItem['children']))
                    <!-- Dropdown with children -->
                    <div class="relative group">
                        <a href="{{ url($menuItem['route']) }}" class="flex items-center {{ $isActive ? 'font-[600]' : '' }}">
                            <span>{{ $menuItem['name'] }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <!-- Second-level dropdown -->
                        <ul
                            class="z-[999] absolute hidden group-hover:block bg-white shadow-lg rounded py-2 w-[250px] border border-gray-300">
                            @foreach($menuItem['children'] as $child)
                                @php
                                    $hasSubChildren = !empty($child['children']);
                                @endphp
                                <li class="relative group/submenu">
                                    <a href="{{ url($child['route']) }}"
                                        class="px-4 py-1 text-sm flex items-center group-hover/submenu:text-third group/level">
                                        {{ $child['name'] }}
                                        @if ($hasSubChildren)
                                            <!-- Icon for indicating submenu -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        @endif
                                    </a>
                                    @if ($hasSubChildren)
                                        <!-- Third-level dropdown (hidden by default, shown on hover of the submenu-group) -->
                                        <ul
                                            class="absolute right-full top-0 hidden group-hover/submenu:block  peer-hover:block peer group-hover/level:text-third bg-white shadow-lg rounded py-2 w-[200px] border border-gray-300">
                                            @foreach($child['children'] as $subChild)
                                                <li>
                                                    <a href="{{ url($subChild['route']) }}"
                                                        class="block px-4 py-1 text-sm hover:text-third">{{ $subChild['name'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <!-- Regular menu item -->
                    <a href="{{ url($menuItem['route']) }}" class="{{ $isActive ? 'font-[600]' : '' }}">{{ $menuItem['name'] }}</a>
                @endif
            @endforeach
        </div>
    @endif

    <!-- Search Button -->
    <button class="btn btn-ghost btn-circle p-3 " id="openLightbox_desk">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </button>


    @if (Str::contains(url()->current(), 'piemeri/mans-konts'))

        @include('includes.usermenu')
    @else

        <!-- Login Button -->
        <a href="#" class="py-3 px-5 bg-warning rounded">Pieslēgties</a>

    @endif




</nav>