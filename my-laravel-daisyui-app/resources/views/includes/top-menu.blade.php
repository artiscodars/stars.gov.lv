<!-- Navigation Links -->
<nav class="flex gap-5 flex-row items-center flex-1 justify-end">

    @php
    $menu = loadMenu();
    @endphp

    @if ($menu)
    <div class="flex flex-row flex-1 justify-end gap-5 w-full  px-0">
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
            <ul class="z-[999] absolute md:hidden group-hover:block bg-white shadow-lg rounded py-2 w-[250px]">
                @foreach($menuItem['children'] as $child)
                <li><a href="{{ url($child['route']) }}" class="block px-4 py-1 text-sm">{{ $child['name'] }}</a>
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
    <button class="btn btn-ghost btn-circle p-3 ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </button>

    <!-- Login Button -->

    <a href="#" class="py-3 px-5 bg-warning rounded">Pieslēgties</a>

</nav>
