@extends('layout')


@section('content')
<div>
    <h1 class="text-4xl font-medium mb-4 mt-0">{{ $pageTitle }}</h1>

    <div class="space-y-16">
        <!-- Typography Overview -->
        <section class="space-y-4">

            <div class="bg-gray-100 p-6 rounded-md flex items-center justify-between">
                <div class="space-y-2">
                    <p>Source Sans 3</p>
                    <div class="flex space-x-4">
                        <span>Regular</span>
                        <span class="font-medium">Medium</span>
                        <span class="font-semibold">Semibold</span>
                        <span class="font-bold">Bold</span>
                    </div>
                    <p>Mauris arcu eros, molestie id arcu et, pulvinar placerat metus.</p>
                </div>
                <div class="text-8xl">Aa</div>
            </div>
            <div class="bg-gray-100 p-6 rounded-md flex items-center justify-between font-serif">
                <div class="space-y-2">
                    <p>Source Serif 4</p>
                    <div class="flex space-x-4 f">
                        <span>Regular</span>
                        <span class="font-medium text">Medium</span>
                        <span class="font-semibold">Semibold</span>
                        <span class="font-bold">Bold</span>
                    </div>
                    <p>Mauris arcu eros, molestie id arcu et, pulvinar placerat metus.</p>
                </div>
                <div class="text-8xl">Aa</div>
            </div>
        </section>



        <!-- Style: H1 -->
        <section class="space-y-4">
            <div class="flex items-center justify-between mb-2">
                <p>H1</p>

            </div>
            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
        </section>

        <!-- Style: H2 -->
        <section class="space-y-4">
            <div class="flex items-center justify-between mb-2">
                <p>H2</p>

            </div>
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
        </section>

        <!-- Style: H3 -->
        <section class="space-y-4">
            <div class="flex items-center justify-between mb-2">
                <p>H3</p>

            </div>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        </section>

        <!-- Style: H4 -->
        <section class="space-y-4">
            <div class="flex items-center justify-between mb-2">
                <p>H4</p>

            </div>
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
        </section>

        <!-- Style: H5 -->
        <section class="space-y-4">
            <div class="flex items-center justify-between mb-2">
                <p>H5</p>

            </div>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
        </section>

        <!-- Style: Body 1 -->
        <section class="space-y-4">
            <div class="flex items-center justify-between mb-2">
                <p>Body</p>

            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id vehicula metus. Nullam sed nunc lorem.
                Duis placerat tempus nisl, eu commodo arcu imperdiet at. Aenean mattis, felis sit amet finibus lacinia,
                orci sapien porttitor odio, sed egestas lacus odio nec est. Duis facilisis facilisis venenatis. Lorem
                ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, mi aliquam auctor tristique, odio
                libero tempor ipsum, quis vestibulum mauris dui id urna. Duis consequat suscipit ullamcorper. Maecenas
                condimentum congue pulvinar. Curabitur sollicitudin posuere turpis et egestas. Etiam nec elementum
                velit. Maecenas eleifend, velit a tincidunt lacinia, lorem turpis mattis lectus, ut interdum orci neque
                nec velit. Morbi pulvinar leo ac quam euismod sagittis. In ac nibh non neque vehicula tempor sed vitae
                massa.</p>
        </section>

        <!-- Style: Blockquote -->
        <section class="space-y-4">
            <div class="flex items-center justify-between mb-2">
                <p>Blockquote</p>
            </div>
            <div class="pl-36">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id vehicula metus. Nullam sed nunc
                    lorem.
                    Duis placerat tempus nisl, eu commodo arcu imperdiet at. Aenean mattis, felis sit amet finibus
                    lacinia,
                    orci sapien porttitor odio, sed egestas lacus odio nec est. Duis facilisis facilisis venenatis.
                    Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, mi aliquam auctor tristique,
                    odio
                    libero tempor ipsum, quis vestibulum mauris dui id urna. Duis consequat suscipit ullamcorper.
                    Maecenas
                    condimentum congue pulvinar. Curabitur sollicitudin posuere turpis et egestas. Etiam nec elementum
                    velit. Maecenas eleifend, velit a tincidunt lacinia, lorem turpis mattis lectus, ut interdum orci
                    neque
                    nec velit. Morbi pulvinar leo ac quam euismod sagittis. In ac nibh non neque vehicula tempor sed
                    vitae
                    massa.</p>
                <blockquote class="border-l-4 border-primary pl-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id vehicula metus. Nullam sed nunc
                    lorem. Duis placerat tempus nisl, eu commodo arcu imperdiet at. Aenean mattis, felis sit amet
                    finibus
                    lacinia, orci sapien porttitor odio, sed egestas lacus odio nec est. Duis facilisis facilisis
                    venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, mi aliquam
                    auctor tristique, odio libero tempor ipsum, quis vestibulum mauris dui id urna. Duis consequat
                    suscipit ullamcorper. Maecenas condimentum congue pulvinar. Curabitur sollicitudin posuere turpis et
                    egestas. Etiam nec elementum velit. Maecenas eleifend, velit a tincidunt lacinia, lorem turpis
                    mattis
                    lectus, ut interdum orci neque nec velit. Morbi pulvinar leo ac quam euismod sagittis. In ac nibh
                    non
                    neque vehicula tempor sed vitae massa.
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id vehicula metus. Nullam sed nunc
                    lorem.
                    Duis placerat tempus nisl, eu commodo arcu imperdiet at. Aenean mattis, felis sit amet finibus
                    lacinia,
                    orci sapien porttitor odio, sed egestas lacus odio nec est. Duis facilisis facilisis venenatis.
                    Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, mi aliquam auctor tristique,
                    odio
                    libero tempor ipsum, quis vestibulum mauris dui id urna. Duis consequat suscipit ullamcorper.
                    Maecenas
                    condimentum congue pulvinar. Curabitur sollicitudin posuere turpis et egestas. Etiam nec elementum
                    velit. Maecenas eleifend, velit a tincidunt lacinia, lorem turpis mattis lectus, ut interdum orci
                    neque
                    nec velit. Morbi pulvinar leo ac quam euismod sagittis. In ac nibh non neque vehicula tempor sed
                    vitae
                    massa.</p>
            </div>
        </section>


    </div>




</div>
@endsection