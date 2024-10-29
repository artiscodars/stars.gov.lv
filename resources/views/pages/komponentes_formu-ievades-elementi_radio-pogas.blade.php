@extends('layout')


@section('content')
<div class="container mx-auto px-6 pb-8">
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <h3>Vienkāršas pogas</h3>
    <example class="not-prose">
        <div class="flex items-center mb-4">
            <input id="default-radio-1" type="radio" value="" name="default-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default
                radio</label>
        </div>
        <div class="flex items-center">
            <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked
                state</label>
        </div>
    </example>

    <h3>Atspējotas pogas</h3>

    <example class="not-prose">
        <div class="flex items-center mb-4">
            <input disabled id="disabled-radio-1" type="radio" value="" name="disabled-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="disabled-radio-1" class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">Disabled
                radio</label>
        </div>
        <div class="flex items-center">
            <input disabled checked id="disabled-radio-2" type="radio" value="" name="disabled-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="disabled-radio-2" class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">Disabled
                checked</label>
        </div>
    </example>

    <h3>Ar saiti</h3>
    <example class="not-prose">
        <div class="flex items-center">
            <input id="link-radio" type="radio" value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="link-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Radio button with
                a <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">link inside</a>.</label>
        </div>
    </example>

    <h3>Ar paskaidrojošo tekstu</h3>
    <example class="not-prose">
        <div class="flex">
            <div class="flex items-center h-5">
                <input id="helper-radio" aria-describedby="helper-radio-text" type="radio" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>
            <div class="ms-2 text-sm">
                <label for="helper-radio" class="font-medium text-gray-900 dark:text-gray-300">Free shipping via
                    Flowbite</label>
                <p id="helper-radio-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">For orders
                    shipped from $25 in books or $29 in other categories</p>
            </div>
        </div>
    </example>

    <h3>Rāmī</h3>
    <example class="not-prose">

        <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
            <input id="bordered-radio-1" type="radio" value="" name="bordered-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-radio-1"
                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default radio</label>
        </div>
        <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
            <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-radio-2"
                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
        </div>

    </example>

    <h3>Saraksta grupa</h3>
    <example class="not-prose">

        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Identification</h3>
        <ul
            class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="list-radio-license" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="list-radio-license"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Driver License
                    </label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="list-radio-id" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="list-radio-id"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">State ID</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="list-radio-military" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="list-radio-military"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">US
                        Military</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="list-radio-passport" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="list-radio-passport"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">US
                        Passport</label>
                </div>
            </li>
        </ul>

    </example>

    <h3>Horizontālā grupa</h3>
    <example class="not-prose">


        <ul
            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-license" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="horizontal-list-radio-license"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Driver License
                    </label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-id" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="horizontal-list-radio-id"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">State ID</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-military" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="horizontal-list-radio-military"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">US
                        Military</label>
                </div>
            </li>
            <li class="w-full dark:border-gray-600">
                <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-passport" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="horizontal-list-radio-passport"
                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">US
                        Passport</label>
                </div>
            </li>
        </ul>

    </example le>

    <h3>Rinda</h3>
    <example class="not-prose">

        <div class="flex">
            <div class="flex items-center me-4">
                <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline
                    1</label>
            </div>
            <div class="flex items-center me-4">
                <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline
                    2</label>
            </div>
            <div class="flex items-center me-4">
                <input checked id="inline-checked-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-checked-radio"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inline
                    checked</label>
            </div>
            <div class="flex items-center">
                <input disabled id="inline-disabled-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-disabled-radio"
                    class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">Inline
                    disabled</label>
            </div>
        </div>

    </example>

</div>


@endsection