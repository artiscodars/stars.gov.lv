@extends('layout')


@section('content')
<div class="container mx-auto px-6 pb-8 prose">
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <h3>Piemērs</h3>

    <example class="not-prose">

        <button data-tooltip-target="tooltip-default" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Default
            tooltip</button>

        <div id="tooltip-default" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Tooltip content
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

    </example>

    <h3>Stili</h3>

    <example class="not-prose">


        <!-- Light style tooltip -->

        <button data-tooltip-target="tooltip-light" data-tooltip-style="light" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Light
            tooltip</button>

        <div id="tooltip-light" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Tooltip content
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Dark style tooltip -->

        <button data-tooltip-target="tooltip-dark" type="button"
            class="ms-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Dark
            tooltip</button>

        <div id="tooltip-dark" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Tooltip content
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>


    </example>

    <h3>Novietojums</h3>

    <example class="not-prose">


        <!-- Show tooltip on top -->

        <button data-tooltip-target="tooltip-top" data-tooltip-placement="top" type="button"
            class="mb-2 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tooltip
            top</button>

        <div id="tooltip-top" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Tooltip on top
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Show tooltip on right -->

        <button data-tooltip-target="tooltip-right" data-tooltip-placement="right" type="button"
            class="ms-3 mb-2 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tooltip
            right</button>

        <div id="tooltip-right" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Tooltip on right
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Show tooltip on bottom -->

        <button data-tooltip-target="tooltip-bottom" data-tooltip-placement="bottom" type="button"
            class="ms-3 mb-2 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tooltip
            bottom</button>

        <div id="tooltip-bottom" role="tooltip"
           
 class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Tooltip on bottom
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- Show tooltip on left -->

        <button data-tooltip-target="tooltip-left" data-tooltip-placement="left" type="button"
            class="ms-3 mb-2 md:mb-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tooltip
            left</button>

        <div id="tooltip-left" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Tooltip on left
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

    </example>


</div>
@endsection