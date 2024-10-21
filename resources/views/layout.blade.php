<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap"
        rel="stylesheet">


    @vite('resources/css/app.css')
</head>

<body class="flex flex-col h-screen overflow-x-hidden">

    @include('includes.header', ['menu' => $menu])

    @include('includes.breadcrumb', ['menu' => $menu])

    @if (submenu())
    <div class="container mx-auto flex-1 pb-8">
        <div class="flex">
            @include('includes.left-menu', ['menu' => $menu])
            <div class="flex-1">
                @yield('content')
            </div>
        </div>
    </div>
    @else
    <div class="flex-1 pb-8">
        @yield('content')
    </div>
    @endif



    @include('includes.footer')


    @vite('resources/js/app.js')
</body>


</html>