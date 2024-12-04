<div class=" p-4 bg-[#f5f5f5]  rounded-lg flex flex-col md:flex-row gap-4">


    <div class="w-full md:w-[250px]"><img src="/images/7.avif" class="m-0 rounded-md w-full"></div>
    <div class="flex-1">
        <h5 class="mb-2 text-2xl font-medium tracking-tight text-primary dark:text-white leading-6">{{ $title }}</h5>

        <div class="pb-3 pt-3 flex gap-2">
            @include('includes.stars', ['stars' => $stars ?? 5])

        </div>



        <div class="font-normal text-[#8A8A8A] text-md pb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing
            elit,
            sed diam
            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>

        <button type="button"
            class="text-white bg-primary hover:opacity-70 focus:ring-4 focus:ring-third font-medium rounded-md text-sm px-10 py-2.5 ">Pildīt
            testu</button>



    </div>




</div>