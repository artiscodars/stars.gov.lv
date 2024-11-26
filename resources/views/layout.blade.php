<!DOCTYPE html>
<html lang="lv">

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

    <div>
    <!-- Cookie Icon -->
    <img src="{{ asset('images/cookie.svg') }}"
         id="cookie-icon"
         class="fixed bottom-5 right-5 z-50 cursor-pointer w-10 h-10"
         alt="Cookie Icon" />
</div>

<!-- Cookie Consent Banner -->
<div id="cookie-banner"
     class="fixed inset-x-0 bottom-0 flex flex-col items-center justify-center bg-beige text-primary p-4 sm:p-6 lg:p-8 z-[500001]">
    <p class="text-center mb-4" data-asw-orgfontsize="16" style="font-size: 16px;">
        Mēs izmantojam sīkfailus un citas izsekošanas tehnoloģijas, lai uzlabotu jūsu pārlūkošanas pieredzi mūsu
        vietnē, rādītu jums personalizētu saturu un mērķētas reklāmas, analizētu mūsu vietnes trafiku un
        saprastu, no kurienes nāk mūsu apmeklētāji.
    </p>
    <div class="flex flex-col md:flex-row gap-2">
        <button id="accept-cookies"
                class="bg-warning w-full min-w-[200px] hover:opacity-70 px-4 py-2 rounded-lg mb-2 md:mb-0 font-medium">
            Piekrītu
        </button>
        <button id="reject-cookies"
                class="bg-primary w-full min-w-[200px] hover:opacity-70 px-4 py-2 text-white rounded-lg">
            Noraidu
        </button>
    </div>
</div>

<script>
    // Cookie logic
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieIcon = document.getElementById('cookie-icon');
    const acceptButton = document.getElementById('accept-cookies');
    const rejectButton = document.getElementById('reject-cookies');

    // Check if the user already made a decision
    const cookiePreference = localStorage.getItem('cookie-consent');
    if (cookiePreference) {
        cookieBanner.style.display = 'none'; // Hide banner if already accepted/rejected
        cookieIcon.style.display = 'block'; // Always show icon to change preference
    }

    // Handle accept button click
    acceptButton.addEventListener('click', () => {
        localStorage.setItem('cookie-consent', 'accepted');
        cookieBanner.style.display = 'none';
        cookieIcon.style.display = 'block'; // Show cookie icon
    });

    // Handle reject button click
    rejectButton.addEventListener('click', () => {
        localStorage.setItem('cookie-consent', 'rejected');
        cookieBanner.style.display = 'none';
        cookieIcon.style.display = 'block'; // Show cookie icon
    });

    // Handle cookie icon click to reopen the banner
    cookieIcon.addEventListener('click', () => {
        cookieBanner.style.display = 'flex'; // Show banner
    });
</script>




    @vite('resources/js/app.js')
</body>

<script src="{{ asset('js/accessibility.js') }}"></script>

</html>
