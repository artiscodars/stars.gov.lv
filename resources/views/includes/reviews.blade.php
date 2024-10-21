<div class="w-full max-w-4xl mx-auto px-4">
    <div class="relative flex items-center">
        <!-- Left Arrow -->
        <button id="prev" class="absolute left-0 bg-yellow-300 rounded p-2 hover:bg-yellow-500">
            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <!-- Slider Container -->
        <div class="overflow-hidden w-full">
            <div id="slider" class="flex">
                <!-- Slide 1 -->
                <div class="review-slide p-8 bg-yellow-400 flex flex-col items-center justify-center text-center">
                    <blockquote class="text-3xl font-bold text-purple-900">
                        “Kopš mācību laika esmu nomainījis dažādus amatus, un katru reizi tie bija arvien augstāki ar
                        lielāku atalgojumu.”
                    </blockquote>
                    <div class="flex items-center mt-6">
                        <img src="https://via.placeholder.com/50" alt="Reviewer" class="w-12 h-12 rounded-full mr-4">
                        <div class="text-left">
                            <p class="font-semibold text-purple-900">Kaspars Kalniņš</p>
                            <p class="text-gray-700 text-sm">Izgājis VARAM kursus</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="review-slide p-8 bg-yellow-400 flex flex-col items-center justify-center text-center">
                    <blockquote class="text-3xl font-bold text-purple-900">
                        “Citi kursi palīdzēja man attīstīt jaunas prasmes un atrast labāku darbu.”
                    </blockquote>
                    <div class="flex items-center mt-6">
                        <img src="https://via.placeholder.com/50" alt="Reviewer" class="w-12 h-12 rounded-full mr-4">
                        <div class="text-left">
                            <p class="font-semibold text-purple-900">Ilze Bērziņa</p>
                            <p class="text-gray-700 text-sm">Izgājusi programmēšanas kursus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Arrow -->
        <button id="next" class="absolute right-0 bg-yellow-300 rounded p-2 hover:bg-yellow-500">
            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>


<!-- JavaScript for Swiping Functionality -->
<script>
const slider = document.getElementById('slider');
const slides = document.querySelectorAll('.review-slide');
let currentIndex = 0;

document.getElementById('prev').addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = slides.length - 1;
    }
    updateSlider();
});

document.getElementById('next').addEventListener('click', () => {
    if (currentIndex < slides.length - 1) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    updateSlider();
});

function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}
</script>