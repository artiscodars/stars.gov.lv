// Toggle Lightbox Visibility
function toggleLightbox(show) {
    const lightbox = document.getElementById('lightbox');
    if (lightbox) {
        if (show) {
            lightbox.classList.remove('hidden');
        } else {
            lightbox.classList.add('hidden');
        }
    } else {
        console.error('Lightbox element not found.');
    }
}

// Immediately execute the event listener logic since the script is loaded after the DOM
const openLightboxButton = document.getElementById('openLightbox');
const openLightboxDeskButton = document.getElementById('openLightbox_desk');

// Debugging: Log elements
console.log('Open Lightbox Desk Button:', openLightboxDeskButton);

// Open Lightbox for Desk Button
if (openLightboxDeskButton) {
    openLightboxDeskButton.addEventListener('click', () => {
        console.log('Open Lightbox Desk button clicked');
        toggleLightbox(true);
    });
} else {
    console.error('Error: Open Lightbox Desk Button not found.');
}
const closeLightboxButton = document.getElementById('closeLightbox');
const lightbox = document.getElementById('lightbox');

// Debugging: Log elements
console.log('Open Lightbox Button:', openLightboxButton);
console.log('Close Lightbox Button:', closeLightboxButton);
console.log('Lightbox Container:', lightbox);

// Open Lightbox
if (openLightboxButton) {
    openLightboxButton.addEventListener('click', () => {
        console.log('Open Lightbox button clicked');
        toggleLightbox(true);
    });
} else {
    console.error('Error: Open Lightbox Button not found.');
}

// Close Lightbox
if (closeLightboxButton) {
    closeLightboxButton.addEventListener('click', () => {
        console.log('Close Lightbox button clicked');
        toggleLightbox(false);
    });
} else {
    console.error('Error: Close Lightbox Button not found.');
}

// Close lightbox when clicking outside content
if (lightbox) {
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            console.log('Clicked outside lightbox content');
            toggleLightbox(false);
        }
    });
} else {
    console.error('Error: Lightbox container not found.');
}
