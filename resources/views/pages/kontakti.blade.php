@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Kontaktinformācija -->
        <div>

            <p class="mb-4">
                Stars.gov.lv attīsta Izglītības un zinātnes ministrija sadarbībā ar Valsts izglītības attīstības
                aģentūru.
            </p>
            <ul class="space-y-2 list-none p-0 m-0">
                <li>
                    <span class="font-medium">E-pasts:</span>
                    <a href="mailto:info@viaa.gov.lv" class="text-primary hover:underline">info@viaa.gov.lv</a>
                </li>
                <li>
                    <span class="font-medium">Tīmekļa vietne:</span>
                    <a href="https://viaa.gov.lv" target="_blank" class="text-primary hover:underline">viaa.gov.lv</a>
                </li>
                <li>
                    <span class="font-medium">Tālruņi:</span>
                    <ul class="space-y-1 list-none p-0 m-0">
                        <li><a href="tel:+37167785406" class="text-primary hover:underline">+371 67 785 406</a></li>
                        <li><a href="tel:+37167830841" class="text-primary hover:underline">+371 67 830 841</a></li>
                    </ul>
                </li>
                <li>
                    <span class="font-medium">Adrese:</span>
                    Vaļņu iela 1, Rīga, LV-1050, Latvija
                </li>
            </ul>
        </div>

        <!-- Kontaktforma -->
        <div>
            <h2 class="text-3xl font-medium mb-4 mt-0">Kontaktforma</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block font-medium">Vārds</label>
                    <input type="text" id="name" name="name" required
                        class="block w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary focus:border-primary">
                </div>
                <div>
                    <label for="email" class="block font-medium">E-pasts</label>
                    <input type="email" id="email" name="email" required
                        class="block w-full px-4 py-2 border border-gray-300 bg-gray-50 rounded-lg focus:ring-primary focus:border-primary">
                </div>
                <div>
                    <label for="message" class="block font-medium">Ziņojums</label>
                    <textarea id="message" name="message" rows="5" required
                        class="block w-full px-4 py-2 border border-gray-300 bg-gray-50 rounded-lg focus:ring-primary focus:border-primary"></textarea>
                </div>
                <div>
                    <button type="submit"
                        class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-primary-light font-medium rounded-lg px-10 py-2">
                        Sūtīt
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection