@php
    $menu = loadMenu();
    $currentPath = request()->path();

    // Define the function only if it doesn't already exist
    if (!function_exists('findBreadcrumbTrail')) {
        function findBreadcrumbTrail($menu, $currentPath, $trail = [])
        {
            foreach ($menu as $item) {
                $newTrail = array_merge($trail, [
                    ['name' => $item['name'], 'url' => url($item['route'])]
                ]);

                // Check if current item matches the current path
                if ($item['route'] === $currentPath) {
                    return $newTrail;
                }

                // If the item has children, continue searching
                if (!empty($item['children'])) {
                    $foundTrail = findBreadcrumbTrail($item['children'], $currentPath, $newTrail);
                    if ($foundTrail) {
                        return $foundTrail;
                    }
                }
            }
            return null;
        }
    }

    // Find breadcrumb trail in the menu
    $breadcrumbTrail = findBreadcrumbTrail($menu, $currentPath);
@endphp

@if ($breadcrumbTrail)
    <div class="container mx-auto">
        <nav aria-label="breadcrumb" class="py-8 text-sm">
            <ol class="flex flex-wrap gap-2 items-center">
                <li class="flex items-center gap-2">
                    <a href="{{ url('/') }}" class="text-gray-500">
                        <svg class="w-5 h-5 text-gray-600 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                                clip-rule="evenodd" />
                        </svg>

                    </a>
                    <svg class="w-5 h-5 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>



                </li>
                @foreach ($breadcrumbTrail as $index => $crumb)
                    <li class="flex items-center gap-1 ">
                        <a href="{{ $crumb['url'] }}"
                            class="text-nowrap {{ $index !== count($breadcrumbTrail) - 1 ? 'text-gray-500 underline' : 'text-gray-900' }}">
                            {{ $crumb['name'] }}

                        </a>

                        @if ($index !== count($breadcrumbTrail) - 1)
                            <svg class="w-5 h-5 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m9 5 7 7-7 7" />
                            </svg>
                        @endif

                    </li>

                @endforeach
            </ol>


            </ nav>
    </div>
@endif