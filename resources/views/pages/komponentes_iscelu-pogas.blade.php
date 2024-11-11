@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>
    <p>Īsceļu poga ir domāta, lai apvienotu zem vienas izvēlenes vairākas darbības vai vienu. Šī poga ir novietojama
        ekrānu apakšējā labajā sturī. Īsceļu pogas ikona var tik mainīta pēc nepieciešamības, lai precīzāk atspoguļotu
        veicamo darbību.

    </p>
    <example class="not-prose relative">
        <div class="relative group">
            <!-- Main FAB -->
            <button
                class="w-14 h-14 rounded-full bg-primary text-white flex items-center justify-center shadow-lg hover:bg-primary-dark focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </button>

            <!-- Sub-buttons -->
            <div
                class="absolute bottom-14 p-1 pb-3 flex flex-col items-center space-y-3 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 transition-all duration-300 ease-in-out pointer-events-none group-hover:pointer-events-auto">
                <button
                    class="w-12 h-12 rounded-full bg-warning text-white flex items-center justify-center shadow-lg hover:bg-yellow-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
                <button
                    class="w-12 h-12 rounded-full bg-success text-white flex items-center justify-center shadow-lg hover:bg-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
                <button
                    class="w-12 h-12 rounded-full bg-third text-white flex items-center justify-center shadow-lg hover:bg-purple-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
        </div>




        </examp le>
</div>
@endsection