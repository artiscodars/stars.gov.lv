<!-- Navigation Links -->
<nav id="navMenu"
    class="z-[999] overflow-auto flex flex-col items-center fixed bg-white top-0 bottom-0 right-0 w-[400px] max-w-[100%] translate-x-[100%] transition-transform duration-300 ease-in-out shadow-lg">

    <!-- Top Section with Logos and Close Button -->
    <div class="w-full px-3 bg-white sticky top-0 z-[999] ">
        <div class="flex items-center justify-between py-4 px-6 border-b border-gray-800">
            <img src="{{ asset('images/viaa-logo.svg') }}" alt="Valsts izglītības attīstības aģentūra" class="h-12">
            <button onclick="toggleNavMenu()">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 24L24.3345 0.665476" stroke="#22272E" />
                    <path d="M1 1L24.3345 24.3345" stroke="#22272E" />
                </svg>
            </button>
        </div>


        <!-- Secondary Section with Language and Font Options -->
        <div class="flex flex-row items-center justify-between py-4 px-6">
            <img src="{{ asset('images/stars-logo.svg') }}" alt="Valsts izglītības attīstības aģentūra" class="h-8">
            <div class="flex gap-6 items-end">
               <?php /*  <div class="flex gap-2 items-end">
                    <a href="#" class="text-md leading-none">A</a>
                    <a href="#" class="text-lg leading-none">A</a>
                    <a href="#" class="text-xl leading-none">A</a>
                </div>*/?>
                <div class="flex gap-2 text-lg items-end leading-none">
                    <a href="#" class="font-bold">LV</a>
                    <a href="#" class="">EN</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Items -->
    @php
    $menu = loadMenu();
    @endphp

    @if ($menu)
    <div class="flex flex-col flex-1 gap-5 w-full px-6 overflow-y-auto py-6">
        @foreach($menu as $menuItem)
        @php
        $isActive = request()->is($menuItem['route']) || request()->is($menuItem['route'] . '/*');
        @endphp
        @if (!empty($menuItem['children']))
        <!-- Dropdown with children -->
        <div class="relative">
            <a href="{{ url($menuItem['route']) }}" class="flex items-center {{ $isActive ? 'font-[600]' : '' }}"
                <?php if (!empty($menuItem['children'])) { ?>
                onclick="toggleSubmenu(event, 'submenu-{{ $loop->index }}')" <?php } ?>>
                <span>{{ $menuItem['name'] }}</span>
                @if (!empty($menuItem['children']))
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
                @endif
            </a>
            <ul id="submenu-{{ $loop->index }}" class="hidden bg-white rounded py-2">
                @foreach($menuItem['children'] as $child)
                <li>
                    <a href="{{ url($child['route']) }}" class="block px-4 py-2 text-sm flex items-center "
                        <?php if (!empty($child['children'])) { ?>
                        onclick="toggleSubmenu(event, 'submenu-{{ $loop->index }}-{{ $loop->parent->index }}')"
                        <?php } ?>>
                        {{ $child['name'] }}
                        <!-- Check for third level -->
                        @if (!empty($child['children']))
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        @endif
                    </a>
                    <!-- Third Level Submenu -->
                    @if (!empty($child['children']))
                    <ul id="submenu-{{ $loop->index }}-{{ $loop->parent->index }}"
                        class="hidden bg-white rounded py-2 ml-4">
                        @foreach($child['children'] as $subChild)
                        <li>
                            <a href="{{ url($subChild['route']) }}"
                                class="block px-4 py-2 text-sm">{{ $subChild['name'] }}</a>
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


    @if (Str::contains(url()->current(), 'piemeri/klienta-sakuma-lapa'))
    <div class="sticky bottom-0 z-[999] p-4 bg-white border-t border-slate-200 w-full  ">
        @include('includes.usermenu-mobile')
    </div>
    @else

    <!-- Login Button -->
    <div class="sticky bottom-0 z-[999] p-4 bg-white border-t border-slate-200 w-full flex justify-center">
        <a href="#" class="py-3 px-5 bg-warning rounded">Pieslēgties</a>
    </div>

    @endif

    <!-- Login Button -->

</nav>

<!-- JavaScript -->
<script>
// Function to toggle the submenu on click
function toggleSubmenu(event, submenuId) {
    event.preventDefault(); // Prevent the default action (navigation)
    const submenu = document.getElementById(submenuId);
    const parentLink = event.currentTarget;

    // Toggle visibility
    if (submenu.classList.contains('hidden')) {
        submenu.classList.remove('hidden');
        parentLink.classList.add('font-medium'); // Add semibold when opened
    } else {
        submenu.classList.add('hidden');
        parentLink.classList.remove('font-medium'); // Remove semibold when closed
    }
}

// Function to close the navigation menu
function toggleNavMenu() {
    const navMenu = document.getElementById('navMenu');
    if (navMenu.style.transform === 'translateX(0%)') {
        navMenu.style.transform = 'translateX(100%)';
    } else {
        navMenu.style.transform = 'translateX(0%)';
    }
}
</script>
