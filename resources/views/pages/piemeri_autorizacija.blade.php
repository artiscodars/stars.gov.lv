@extends('layout')

@section('content')
<div class="container mx-auto px-6 pb-10">



    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">

            <h2 class="text-center text-3xl font-semibold leading-9 tracking-tight mb-6">Pieslēgties
                platformai</h2>
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">

            <form action="#" method="POST">
                <div class="pb-4">
                    <label for="email">E-pasta adrese</label>
                    <div>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 py-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block">Parole</label>

                        <a href="#" class=" text-blue-600 hover:text-blue-500">Aizmirsi paroli?</a>
                    </div>
                </div>
                <div class="pb-4">
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="block w-full rounded-md border-0 py-2  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                </div>


                <div>
                    <button type="submit"
                        class="flex justify-center rounded-md bg-warning px-10 py-2 text-md  leading-6 text-primary shadow-sm hover:bg-opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-warning">Aiziet</button>
                </div>

            </form>
        </div>



    </div>

</div>


@endsection