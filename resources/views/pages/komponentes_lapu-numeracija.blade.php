@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4">{{ $pageTitle }}</h1>

    <p>Lapu numerācija ir lietotāja interfeisa elements, kas tiek izmantots, lai organizētu un pārlūkot daudzlappušu
        saturu, sadalot to mazākās, viegli pārvaldāmās daļās. Tas ļauj lietotājiem ātri pārvietoties starp dažādām
        satura lapām vai datu kopām.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Gari satura saraksti:</strong> Lapu numerācija ir noderīga, lai sadalītu garus sarakstus, piemēram,
            produktu katalogus, meklēšanas rezultātus vai ziņu rakstus, uz vairākām lapām, padarot tos vieglāk
            pārlūkojamus.</li>
        <li><strong>Datu tabulas:</strong> Lielu datu kopu pārvaldībā lapu numerācija palīdz lietotājiem ātri atrast
            konkrētu informāciju, pārvietojoties starp tabulas lapām.</li>
        <li><strong>Forumi un komentāru sadaļas:</strong> Lapu numerācija bieži tiek izmantota, lai organizētu forumu
            tēmas vai komentārus zem rakstiem, sadalot tos vairākās lapās, lai uzlabotu lasāmību un navigāciju.</li>
        <li><strong>Lietotāja pieredzes uzlabošana:</strong> Tā nodrošina vienkāršu un intuitīvu veidu, kā lietotāji var
            pārvietoties pa lieliem satura kopumiem, nepārslogojot lietotāja interfeisu ar pārāk daudz informācijas
            vienā lapā.</li>
    </ul>

    <example class="not-prose">



        <div class="flex items-center gap-4">
            <!-- Previous Button -->
            <a href="#" class="flex items-center justify-center ">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>


            </a>
            <div class="w-[100px] text-center">
                1 NO 10
            </div>
            <a href="#" class="flex items-center justify-center ">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>


            </a>
        </div>


    </example>


</div>
@endsection