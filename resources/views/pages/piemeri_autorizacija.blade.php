@extends('layout')

@section('content')
<div>



    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">

            <h2 class="text-center text-3xl font-medium leading-9 tracking-tight mb-6">Pieslēgties
                platformai</h2>
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">

            <form action="#" method="POST">
                <div class="pb-4">
                    <label for="email">E-pasta adrese</label>
                    <div>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="john.doe@company.com" required />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block">Parole</label>

                        <a href="#" class=" text-blue-600 hover:text-blue-500">Aizmirsi paroli?</a>
                    </div>
                </div>
                <div class="pb-4">
                    <input type="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="•••••••••" required />
                </div>


                <div>
                    <button type="submit"
                        class="text-primary bg-warning hover:bg-opacity-80  focus:ring-4 focus:outline-none focus:ring-warning font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Aiziet</button>
                </div>

            </form>
        </div>



    </div>

</div>




@endsection