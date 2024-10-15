<ul class="space-y-2">
    @foreach ($menu as $item)
        <li>
            <a href="{{ $item['route'] === 'home' ? route('home') : url($item['route']) }}"
                class="flex items-center space-x-3 p-2 text-sm font-medium text-gray-900 rounded-lg hover:bg-gray-200">
                {{ $item['name'] }}
            </a>

            @if (!empty($item['children']))
                <ul class="pl-4 space-y-2">
                    @foreach ($item['children'] as $child)
                        <li>
                            <a href="{{ url($child['route']) }}"
                                class="flex items-center space-x-3 p-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100">
                                {{ $child['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>