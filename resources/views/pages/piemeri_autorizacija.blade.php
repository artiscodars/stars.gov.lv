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
                            class="bg-gray-50 border border-gray-300 text-primary  rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                            placeholder="john.doe@company.com" required />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block">Parole</label>

                        <a href="#" class=" text-third ">Aizmirsi paroli?</a>
                    </div>
                </div>
                <div class="pb-4">
                    <input type="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-primary  rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                        placeholder="•••••••••" required />
                </div>


                <div>
                    <button type="submit"
                        class="text-white bg-primary hover:opacity-70  focus:ring-4 focus:outline-none focus:ring-warning font-medium rounded-lg  w-full sm:w-auto px-10 py-2 text-center ">Aiziet</button>
                </div>

            </form>
        </div>



    </div>

</div>




@endsection