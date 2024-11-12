@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue et mauris sit amet consectetur. Ut
            accumsan nunc vitae purus fringilla, sed convallis elit commodo. Suspendisse potenti. Fusce vel molestie
            felis, vel ullamcorper lacus. Donec libero tellus, cursus eget mauris eget, imperdiet auctor turpis. Sed
            eget mollis ante. Aliquam viverra congue nibh eget aliquet. Quisque non mi et odio ullamcorper sagittis.
            Donec fermentum sapien id imperdiet consectetur.</p>
        <p>Cras vulputate leo sit amet interdum venenatis. Aliquam commodo gravida neque eu commodo. Cras tincidunt
            justo sed ultrices lacinia. Suspendisse potenti. In ac mattis sem. Sed efficitur eros vitae ligula
            sagittis molestie. Suspendisse potenti. Donec aliquam et quam eget cursus. Quisque sagittis sapien sed
            mi volutpat, ac pulvinar mauris tristique. Donec a pharetra arcu, quis pretium eros. Donec eu nisl
            scelerisque, pretium libero ut, iaculis metus.</p>

    </div>

    <h2 class="uppercase pb-4 border-b border-primary font-sans text-xl font-normal">Pieteikuma forma</h2>

    <form class="w-full max-w-2xl">
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-primary">Izglītības iestādes
                    nosaukums</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                    placeholder="Jānis" required="">
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-primary">Reģistrācijas numurs</label>
                <input type="text" id="last_name"
                    class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full md:w-1/2 p-2.5"
                    placeholder="Bērziņš" required="">
            </div>
            <div>
                <label for="company" class="block mb-2 text-sm font-medium text-primary">E-pasts</label>
                <input type="text" id="company"
                    class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full md:w-1/2  p-2.5"
                    placeholder="Uzņēmums" required="">
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-primary">Tālruņa numurs</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full md:w-1/2  p-2.5"
                    placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="">
            </div>

        </div>


        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value=""
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary"
                    required="">
            </div>
            <label for="remember" class="ms-2 text-sm font-medium text-primary">Es piekrītu <a href="#"
                    class="text-link hover:underline">noteikumiem un nosacījumiem</a>.</label>
        </div>
        <button type="submit"
            class="text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Pieteikties</button>
    </form>

</div>

@endsection