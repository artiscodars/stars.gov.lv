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
    @vite('resources/css/app.css')
</head>

<body class="font-sans">
    <div class="container mx-auto">





        @include('includes.header', ['menu' => $menu])

        @include('includes.breadcrumb', ['menu' => $menu])

        <div class="flex">
            @if (submenu())
            @include('includes.left-menu', ['menu' => $menu])
            @endif


            <!-- Main Content Area -->
            <div class="flex-1 p-6">
                @yield('content')
            </div>
        </div>

        @include('includes.footer')
    </div>

    @vite('resources/js/app.js')
</body>

</html>