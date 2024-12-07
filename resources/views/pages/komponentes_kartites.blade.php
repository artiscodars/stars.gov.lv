@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>Satura kartītes ir noderīgas, lai organizētu un parādītu informāciju par strukturētā un vizuāli pievilcīgā veidā.
        Tās palīdz lietotājiem ātri iegūt svarīgāko informāciju, piemēram, par piedāvātajām programmām, piemēram,
        līmeni, cenu, ilgumu un aprakstu.</p>

    <h3>Pielietojuma gadījumi</h3>
    <ul>
        <li><strong>Satura prezentācija:</strong> Satura kartītes ļauj efektīvi prezentēt ierakstus ar svarīgu
            informāciju, piemēram, nosaukumu, cenu, ilgumu un īsu aprakstu, kas palīdz lietotājiem ātri izvēlēties
            piemērotāko.</li>
        <li><strong>Salīdzinājums un izvēle:</strong> Kartītes nodrošina skaidru un strukturētu veidu, kā lietotāji var
            salīdzināt dažādus ieraksus, lai pieņemtu informētu lēmumu.</li>
        <li><strong>Viegla navigācija:</strong> Ar pogām un saitēm, piemēram, "Pieteikties" un "Uzzināt vairāk,"
            lietotāji var ātri pāriet uz sīkāku informāciju vai izvēleties piemērotāko.</li>
        <li><strong>Estētiskā pievilcība:</strong> Kartītes ar vizuālajiem akcentiem un organizētu saturu uzlabo
            lietotāja pieredzi, padarot lapu pievilcīgāku un vieglāk lietojamu.</li>
    </ul>


    <h3>Izglītības programmas</h3>

    <example class="not-prose">




        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            @include('includes.card-programma', [
            'severity' => 'primary',
            'veids' => 'Klātienē',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])

            @include('includes.card-programma', [
            'severity' => 'secondary',
            'veids' => 'Klātienē',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])

            @include('includes.card-programma', [
            'severity' => 'third',
            'veids' => 'Klātienē',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])

            @include('includes.card-programma', [
            'severity' => 'success',
            'veids' => 'Klātienē',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])
            @include('includes.card-programma', [
            'severity' => 'success-dark',
            'veids' => 'Klātienē',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])
            @include('includes.card-programma', [
            'severity' => 'warning',
            'veids' => 'Attēlināti',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])

            @include('includes.card-programma', [
            'severity' => 'error',
            'veids' => 'Klātienē',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])
        </div>
    </example>


    <example class="not-prose">




        <div class="grid grid-cols-1 gap-4">

            @include('includes.card-programma-list', [
            'severity' => 'primary',
            'veids' => 'Attālināti',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])

            @include('includes.card-programma-list', [
            'severity' => 'secondary',
            'veids' => 'Attālināti',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])

            @include('includes.card-programma-list', [
            'severity' => 'third',
            'veids' => 'Klātienē',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])

            @include('includes.card-programma-list', [
            'severity' => 'success',
            'veids' => 'Attālināti',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])
            @include('includes.card-programma-list', [
            'severity' => 'success-dark',
            'veids' => 'Klātienē',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])
            @include('includes.card-programma-list', [
            'severity' => 'warning',
            'veids' => 'Klātienē',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])

            @include('includes.card-programma-list', [
            'severity' => 'error',
            'veids' => 'Attālināti',
            'title' => '2.līmenis “Pamata digitālās pašapkalpošanās prasmes” (tālmācības programma)'
            ])
        </div>
    </example>


    <h3>Iestādes</h3>

    <example class="not-prose">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @include('includes.card-iestade', [
            'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)',
            'stars' => 5,
            'kosultants' => 'Anna Kalniņa'
            ])

            @include('includes.card-iestade', [
            'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)',
            'stars' => 3,
            'kosultants' => 'Jānis Bērziņš'
            ])

            @include('includes.card-iestade', [
            'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)',
            'stars' => 5,
            'kosultants' => 'Anna kalniņa'
            ])



        </div>

    </example>

    <h3>Testi</h3>


    <example class="not-prose">
        <div class="grid grid-cols-1 gap-4">
            @include('includes.card-tests', [
            'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
            ])

            @include('includes.card-tests', [
            'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
            ])

            @include('includes.card-tests', [
            'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
            ])

            @include('includes.card-tests', [
            'title' => 'Latvijas valsts mācību centrs "Studijas centrs" (tālmācības programma)'
            ])
        </div>
    </example>

</div>




@endsection
