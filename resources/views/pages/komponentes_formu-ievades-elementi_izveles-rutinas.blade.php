@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>




    <h3>Piemērs</h3>
    <example class="not-prose">
        <div class="flex items-center mb-4">
            <input id="default-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default
                checkbox</label>
        </div>
        <div class="flex items-center">
            <input checked id="checked-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked
                state</label>
        </div>
    </example>

    <h3>Atspējots</h3>
    <example class="not-prose">

        <div class="flex items-center mb-4">
            <input disabled id="disabled-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="disabled-checkbox" class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">Disabled
                checkbox</label>
        </div>
        <div class="flex items-center">
            <input disabled checked id="disabled-checked-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="disabled-checked-checkbox"
                class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">Disabled checked</label>
        </div>

    </example>

    <h3>Ar saiti</h3>
    <example class="not-prose">

        <div class="flex items-center">
            <input id="link-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with
                the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms and
                    conditions</a>.</label>
        </div>

    </example>

    <h3>Ar paskaidrojumu</h3>
    <example class="not-prose">

        <div class="flex">
            <div class="flex items-center h-5">
                <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>
            <div class="ms-2 text-sm">
                <label for="helper-checkbox" class="font-medium text-gray-900 dark:text-gray-300">Free shipping via
                    Flowbite</label>
                <p id="helper-checkbox-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">For orders
                    shipped from $25 in books or $29 in other categories</p>
            </div>
        </div>

    </example>

    <h3>Rāmī</h3>
    <example class="not-prose">

        <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
            <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-checkbox-1"
                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default radio</label>
        </div>
        <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
            <input checked id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-checkbox-2"
                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
        </div>

    </example>

    <h3>Vertikālā grupa</h3>
    <example class="not-prose">

        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Technology</h3>
        <ul
            class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="vue-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="vue-checkbox"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="react-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="react-checkbox"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">React</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="angular-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="angular-checkbox"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Angular</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="laravel-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="laravel-checkbox"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laravel</label>
                </div>
            </li>
        </ul>

    </example>

    <h3>Horizontālā grupa</h3>
    <example class="not-prose">

        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Identification</h3>
        <ul
            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="vue-checkbox-list" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="vue-checkbox-list"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="react-checkbox-list" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="react-checkbox-list"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">React</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="angular-checkbox-list" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="angular-checkbox-list"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Angular</label>
                </div>
            </li>
            <li class="w-full dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="laravel-checkbox-list" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="laravel-checkbox-list"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laravel</label>
                </div>
            </li>
        </ul>

    </example>

    <h3>Rindā</h3>
    <example class="not-prose">

        <div class="flex">
            <div class="flex items-center me-4">
                <input id="inline-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline
                    1</label>
            </div>
            <div class="flex items-center me-4">
                <input id="inline-2-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-2-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline
                    2</label>
            </div>
            <div class="flex items-center me-4">
                <input checked id="inline-checked-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-checked-checkbox"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline checked</label>
            </div>
            <div class="flex items-center">
                <input disabled id="inline-disabled-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-disabled-checkbox"
                    class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">Inline disabled</label>
            </div>
        </div>

    </example>



</div>
@endsection