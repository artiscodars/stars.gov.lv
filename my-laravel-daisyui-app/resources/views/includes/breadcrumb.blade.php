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
<nav aria-label="breadcrumb" class="pt-8 text-sm">
    <ol class="flex space-x-2">
        <li class="flex items-center gap-1">
            <a href="{{ url('/') }}" class="text-gray-500">
                <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.3695 5.31836V10.9035C13.3695 11.5363 12.8468 12.0591 12.214 12.0591H4.78543C4.15263 12.0591 3.62988 11.5363 3.62988 10.9035V5.31836"
                        stroke="#2D233D" stroke-width="1.5" stroke-miterlimit="10" />
                    <path d="M0.773438 7.77757L8.36704 1.05859L16.2271 7.77757" stroke="#2D233D" stroke-width="1.5"
                        stroke-miterlimit="10" />
                </svg>
            </a>
            <span class="h-2 w-2 inline-block ml-1 bg-gray-900"></span>
        </li>
        @foreach ($breadcrumbTrail as $index => $crumb)
        <li>
            <a href="{{ $crumb['url'] }}"
                class="{{ $index !== count($breadcrumbTrail) - 1 ? 'text-gray-500' : 'text-gray-900' }}">
                {{ $crumb['name'] }}
            </a>
            @if ($index !== count($breadcrumbTrail) - 1)
            <span class="h-2 w-2 inline-block ml-1 bg-gray-900"></span>
            @endif
        </li>
        @endforeach
    </ol>
</nav>
@endif