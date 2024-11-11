@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>


    <h3>Piemērs</h3>

    <example class="not-prose">

        <div class=" inset-x-0  flex flex-col items-center justify-center bg-beige text-primary p-4 sm:p-6 lg:p-8">
            <p class=" text-center mb-4">
                Mēs izmantojam sīkfailus un citas izsekošanas tehnoloģijas, lai uzlabotu jūsu pārlūkošanas pieredzi mūsu
                vietnē, rādītu jums personalizētu saturu un mērķētas reklāmas, analizētu mūsu vietnes trafiku un
                saprastu, no kurienes nāk mūsu apmeklētāji.
            </p>
            <div class="flex flex-col md:flex-row gap-2">
                <button
                    class="bg-warning w-full min-w-[200px] hover:opacity-70 px-4 py-2  rounded-lg mb-2 md:mb-0 font-medium">
                    Piekrītu
                </button>
                <button class="bg-primary w-full min-w-[200px] hover:opacity-70 px-4 py-2  text-white rounded-lg">
                    Noraidu
                </button>
            </div>

        </div>


        </examp l e>


</div>@endsection