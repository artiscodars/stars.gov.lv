@extends('layout')

@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <p>
        Kopš 2017. gada iespēju nokārtot eksāmenu, iegūt kvalifikāciju un saņemt izmaksu kompensāciju VIAA īstenotajā
        Eiropas Sociālā fonda projektā “Nodarbināto personu profesionālās kompetences pilnveide” izmantojuši jau vairāk
        nekā 1600 nodarbināto. Visvairāk  pieteikumu saņemts tādās nozarēs kā veselība un sociālā aprūpe, metālapstrāde,
        mašīnbūve un mašīnzinības, kā arī reglamentētajās profesijās.
    </p>

    <div class="pb-9">
        <a href="#">Lasīt vairāk</a>
    </div>

    <button type="submit"
        class="text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Pildīt
        testu</button>

</div>

@endsection
