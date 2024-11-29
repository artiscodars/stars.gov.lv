<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    @for ($i = 0; $i < 12; $i++) <div>
        <a href="#" class="gallery-item" data-index="{{ $i }}">
            <img class="h-auto max-w-full rounded-lg object-cover aspect-[4/3]" src="/images/{{ $i + 1 }}.avif"
                alt="Galerijas attēls {{ $i + 1 }}">
        </a>
        <p class="image-title text-sm text-gray-600 mt-2">Attēla apraksts {{ $i + 1 }}</p>
</div>
@endfor
</div>

<!-- Lightbox Modal -->
<div id="lightbox-modal"
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 hidden z-[2000000000] p-16">
    <button id="lightbox-close"
        class="absolute top-2 right-2 w-8 h-8 leading-8 flex justify-center rounded-full bg-third text-white text-3xl">&times;</button>
    <div class="relative ">


        <img id="lightbox-image" src="" alt="" class="max-w-full max-h-[80vh] mx-auto rounded-lg border-8 border-white">
        <p id="lightbox-title" class="text-center text-white mt-4"></p>
    </div>
    <button id="lightbox-prev" class="absolute left-2 top-1/2 transform -translate-y-1/2 text-white text-3xl">
        <svg class="w-10 h-10 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                d="M13.729 5.575c1.304-1.074 3.27-.146 3.27 1.544v9.762c0 1.69-1.966 2.618-3.27 1.544l-5.927-4.881a2 2 0 0 1 0-3.088l5.927-4.88Z"
                clip-rule="evenodd" />
        </svg>

    </button>
    <button id="lightbox-next" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white text-3xl">
        <svg class="w-10 h-10 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                d="M10.271 5.575C8.967 4.501 7 5.43 7 7.12v9.762c0 1.69 1.967 2.618 3.271 1.544l5.927-4.881a2 2 0 0 0 0-3.088l-5.927-4.88Z"
                clip-rule="evenodd" />
        </svg>

    </button>
</div>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.getElementById('lightbox-modal');
    const modalImage = document.getElementById('lightbox-image');
    const modalTitle = document.getElementById('lightbox-title');
    const closeButton = document.getElementById('lightbox-close');
    const prevButton = document.getElementById('lightbox-prev');
    const nextButton = document.getElementById('lightbox-next');

    let currentIndex = 0;
    const images = [];
    const titles = [];

    galleryItems.forEach(function(item, index) {
        const img = item.querySelector('img');
        const titleElement = item.parentElement.querySelector('.image-title');
        images.push(img.src);
        titles.push(titleElement ? titleElement.textContent : 'Attēla apraksts');
        item.addEventListener('click', function(e) {
            e.preventDefault();
            currentIndex = index;
            openModal();
        });
    });

    function openModal() {
        modal.classList.remove('hidden');
        updateModalContent();
    }

    function closeModal() {
        modal.classList.add('hidden');
    }

    function updateModalContent() {
        modalImage.src = images[currentIndex];
        modalTitle.textContent = titles[currentIndex];
    }

    function showNext() {
        currentIndex = (currentIndex + 1) % images.length;
        updateModalContent();
    }

    function showPrev() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateModalContent();
    }

    closeButton.addEventListener('click', closeModal);
    nextButton.addEventListener('click', showNext);
    prevButton.addEventListener('click', showPrev);

    // Close modal when clicking outside the image
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }

    });
});
</script>
