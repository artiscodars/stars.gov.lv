<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARS</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-48x48.png') }}" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />

    @vite('resources/css/app.scss')


</head>

<body class="flex flex-col h-screen overflow-x-hidden">


    @include('includes.header', ['menu' => $menu])

    @if (!View::hasSection('breadcrumb'))

        @include('includes.breadcrumb', ['menu' => $menu])

    @endif

    @if (submenu())

        <div class="container mx-auto flex-1 pb-12 prose">
            <div class="flex gap-8">
                @include('includes.left-menu', ['menu' => $menu])
                <div class="flex-1">
                    @yield('content')
                </div>
            </div>
        </div>

    @elseif (View::hasSection('home'))

        @yield('content')

    @else

        <div class="container mx-auto flex-1 pb-12 prose">
            @yield('content')
        </div>

    @endif




    @include('includes.footer')


    @vite('resources/js/app.js')
</body>



</html>