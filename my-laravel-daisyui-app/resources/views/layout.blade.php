<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARS</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto">
        @include('includes.header')

        <div class="flex">
            <!-- Include Left Sidebar -->
            @include('includes.left-menu', ['menu' => $menu])



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