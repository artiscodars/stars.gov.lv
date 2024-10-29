<div class="block max-w-sm p-6 bg-[#f5f5f5]  rounded-lg ">

    <h5 class="mb-2 text-lg font-medium tracking-tight text-primary dark:text-white leading-6">{{ $title }}</h5>
    <div class="py-3 flex gap-2">
        @include('includes.stars', ['stars' => $stars])

    </div>

    <div class="text-third pb-4 text-sm">Konsultants: {{ $kosultants }}</div>
    <p class="font-normal text-primary text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing
        elit,
        sed diam
        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>

    <div class="flex justify-between items-center pt-4">
        <button type="button"
            class="text-white bg-primary hover:opacity-80 focus:ring-4 focus:ring-third font-medium rounded-md text-sm px-10 py-2.5 ">Atvērt</button>
        <a href="#" class="text-gray-500 hover:opacity-80 underline font-medium rounded-md text-sm ">Uzzināt
            vairāk</a>
    </div>
</div>