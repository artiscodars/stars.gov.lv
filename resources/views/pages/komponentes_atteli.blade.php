@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>
    <p>Attēli ir būtisks vizuālās komunikācijas elements, kas palīdz labāk izprast un uztvert informāciju. Tie var
        uzlabot lietotāja pieredzi, pievienot estētisku vērtību un skaidri ilustrēt noteiktus punktus vai idejas.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Ilustrācija un vizualizācija:</strong> Attēli palīdz vizuāli parādīt sarežģītus jēdzienus vai
            procesus, padarot tos vieglāk saprotamus.</li>
        <li><strong>Emocionālā piesaiste:</strong> Labi izvēlēti attēli var radīt emocionālu saikni ar lietotāju,
            pastiprinot vēstījumu vai zīmola identitāti.</li>
        <li><strong>Produkta prezentācija:</strong> Attēli ir nepieciešami, lai prezentētu produktus vai pakalpojumus,
            ļaujot lietotājiem labāk izprast to īpašības un priekšrocības.</li>
    </ul>


    <example class="not-prose">



        <figure class="max-w-lg">
            <img class="h-auto max-w-full rounded-lg" src="/images/pieauguso_izglitiba.png" alt="image description">
            <figcaption class="mt-2 text-sm text-start text-gray-500 dark:text-gray-400">Attēla paraksts
            </figcaption>
        </figure>



    </example>
</div>
@endsection