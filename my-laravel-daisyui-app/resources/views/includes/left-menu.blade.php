@if (submenu())

<ul class="mt-8">



    @foreach (submenu() as $item)
    @php
    // Check if the current route is either the top-level or a child of the current section
    $isActive = request()->is($item['route']) || request()->is($item['route'] . '/*');
    @endphp

    <li>
        <!-- Top-level menu item -->
        <a href="{{ url($item['route']) }}"
            class="flex relative items-center py-1 hover:text-gray-500 {{ $isActive ? 'font-[600] pl-4' : '' }}">

            @if ($isActive)
            <span class="block h-2 w-2 absolute left-0 bg-gray-900"></span>
            @endif
            {{ $item['name'] }}

            @if (!empty($item['children']))
            <!-- Arrow icon that rotates based on whether the section is active -->
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 ml-2 transition-transform transform {{ $isActive ? 'rotate-180' : '' }}" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
            @endif
        </a>

        <!-- Submenu (children) -->
        @if (!empty($item['children']))
        <ul class="pl-4 transition-all {{ $isActive ? 'block' : 'hidden' }}">
            @foreach ($item['children'] as $child)
            <li>
                <a href="{{ url($child['route']) }}"
                    class="flex relative items-center  py-1 text-sm font-medium text-secondary rounded-lg hover:text-gray-900 {{ request()->is($child['route']) ? '!text-gray-900 font-[600] pl-4' : '' }}">

                    @if (request()->is($child['route']))
                    <span class="block h-2 w-2 absolute left-0 bg-gray-900"></span>
                    @endif

                    {{ $child['name'] }}
                </a>
            </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endforeach
</ul>

@endif