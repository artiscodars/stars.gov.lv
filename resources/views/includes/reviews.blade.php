<div class="relative w-full bg-warning py-8">
    <div class="container mx-auto px-20 relative">
        <!-- Left Arrow -->
        <button
            class="absolute left-8 top-1/2 transform -translate-y-1/2 bg-beige opacity-80 hover:opacity-100 text-red-600 rounded-md w-8 h-8 z-10"
            onclick="moveToPrev()">❮</button>

        <!-- Carousel Container -->
        <div class="overflow-hidden">
            <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                <!-- Slide 1 -->
                <div class="w-full flex-shrink-0 p-8 flex items-center justify-center">
                    <div class="w-[600px] max-w-[90%] ">
                        <h4 class="text-xl md:text-3xl font-medium pb-4 text-primary">“Kopš mācību laika esmu
                            nomainījis dažādus
                            amatus, un
                            katru
                            reizi
                            tie bija arvien augstāki ar lielāku atalgojumu. ”</h4>
                        <div class="flex items-center justify-between ">
                            <div class="flex items">
                                <img src="{{ asset('images/avatar.png') }}" alt="Image" class="w-12 h-12 rounded-full">
                                <div class="ml-4">
                                    <div class="font-bold text-primary">John Doe</div>
                                    <p class="text-sm text-primary">CEO, Company Name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="w-full flex-shrink-0 p-8 flex items-center justify-center">
                    <div class="w-[600px] max-w-[90%] ">
                        <h4 class="text-xl md:text-3xl font-medium pb-4 text-primary">“Kopš mācību laika esmu
                            nomainījis dažādus
                            amatus, un
                            katru
                            reizi
                            tie bija arvien augstāki ar lielāku atalgojumu. ”</h4>
                        <div class="flex items-center justify-between ">
                            <div class="flex items">
                                <img src="{{ asset('images/avatar.png') }}" alt="Image" class="w-12 h-12 rounded-full">
                                <div class="ml-4">
                                    <div class="font-bold text-primary">John Doe</div>
                                    <p class="text-sm text-primary">CEO, Company Name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="w-full flex-shrink-0 p-8 flex items-center justify-center">
                    <div class="w-[600px] max-w-[90%] ">
                        <h4 class="text-xl md:text-3xl font-medium pb-4 text-primary">“Kopš mācību laika esmu
                            nomainījis dažādus
                            amatus, un
                            katru
                            reizi
                            tie bija arvien augstāki ar lielāku atalgojumu. ”</h4>
                        <div class="flex items-center justify-between ">
                            <div class="flex items">
                                <img src="{{ asset('images/avatar.png') }}" alt="Image" class="w-12 h-12 rounded-full">
                                <div class="ml-4">
                                    <div class="font-bold text-primary">John Doe</div>
                                    <p class="text-sm text-primary">CEO, Company Name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="w-full flex-shrink-0 p-8 flex items-center justify-center">
                    <div class="w-[600px] max-w-[90%] ">
                        <h4 class="text-xl md:text-3xl font-medium pb-4 text-primary">“Kopš mācību laika esmu
                            nomainījis dažādus
                            amatus, un
                            katru
                            reizi
                            tie bija arvien augstāki ar lielāku atalgojumu. ”</h4>
                        <div class="flex items-center justify-between ">
                            <div class="flex items">
                                <img src="{{ asset('images/avatar.png') }}" alt="Image" class="w-12 h-12 rounded-full">
                                <div class="ml-4">
                                    <div class="font-bold text-primary">John Doe</div>
                                    <p class="text-sm text-primary">CEO, Company Name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Arrow -->
        <button
            class="absolute right-8 top-1/2 transform -translate-y-1/2  bg-beige opacity-80 hover:opacity-100 text-red-600 rounded-md  w-8 h-8  z-10"
            onclick="moveToNext()">❯</button>
    </div>
</div>

<script>
const carousel = document.getElementById('carousel');
const items = Array.from(carousel.children);
let isAnimating = false;

function updateOrder(direction) {
    if (direction === 'next') {
        // Move the first item to the end of the array
        const firstItem = items.shift();
        items.push(firstItem);
    } else if (direction === 'prev') {
        // Move the last item to the beginning of the array
        const lastItem = items.pop();
        items.unshift(lastItem);
    }

    // Update the order dynamically
    items.forEach((item, index) => {
        item.style.order = index;
    });
}

function moveToNext() {
    if (isAnimating) return;
    isAnimating = true;

    // Slide to the next item
    carousel.style.transition = "transform 0.5s ease-in-out";
    carousel.style.transform = `translateX(-100%)`;

    // Reorder after transition ends
    carousel.addEventListener("transitionend", () => {
        carousel.style.transition = "none";
        carousel.style.transform = "translateX(0)";
        updateOrder('next');
        isAnimating = false;
    }, {
        once: true
    });
}

function moveToPrev() {
    if (isAnimating) return;
    isAnimating = true;

    // Reorder items first
    updateOrder('prev');
    carousel.style.transition = "none";
    carousel.style.transform = "translateX(-100%)";

    // Slide back into place
    setTimeout(() => {
        carousel.style.transition = "transform 0.5s ease-in-out";
        carousel.style.transform = "translateX(0)";
        isAnimating = false;
    }, 10);
}
</script>
