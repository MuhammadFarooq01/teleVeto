// navbar.js
// Select the elements for the mobile menu and dropdown
const menuButton = document.getElementById("menuButton");
const closeMenuButton = document.getElementById("closeMenuButton");
const mobileMenu = document.getElementById("mobileMenu");
const backdrop = document.getElementById("backdrop");
const dropdownTrigger = document.getElementById('dropdownTrigger');
const dropdownMenu = document.getElementById('dropdownMenu');
const dropdownIcon = document.getElementById('dropdownIcon');

const dropdownTrigger2 = document.getElementById('dropdownTrigger2');
const dropdownMenu2 = document.getElementById('dropdownMenu2');
const dropdownIcon2 = document.getElementById('dropdownIcon2');

// Mobile Menu Toggle
menuButton.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
    backdrop.classList.remove("hidden");

    // Add classes to trigger the translate animation
    setTimeout(() => {
        mobileMenu.classList.remove("-translate-x-full");
    }, 10);
});

// Close the mobile menu and backdrop when the close button is clicked
closeMenuButton.addEventListener("click", () => {
    mobileMenu.classList.add("-translate-x-full");
    backdrop.classList.add("hidden");

    // Hide menu after animation
    setTimeout(() => {
        mobileMenu.classList.add("hidden");
    }, 500); // Match the duration of the animation
});

// Dropdown Toggle
dropdownTrigger.addEventListener('click', function () {
    // Toggle the dropdown visibility and animation
    const isOpen = dropdownMenu.classList.contains('opacity-100');

    if (isOpen) {
        // Close the dropdown with animation
        dropdownMenu.classList.remove('opacity-100', 'scale-y-100');
        dropdownMenu.classList.add('opacity-0', 'scale-y-0');
        dropdownIcon.classList.remove('rotate-180'); // Rotate icon back to original
    } else {
        // Open the dropdown with animation
        dropdownMenu.classList.remove('opacity-0', 'scale-y-0');
        dropdownMenu.classList.add('opacity-100', 'scale-y-100');
        dropdownIcon.classList.add('rotate-180'); // Rotate icon to indicate dropdown is open
    }
});
// Dropdown2 Toggle 
dropdownTrigger2.addEventListener('click', function (event) {
    // Prevent the click event from propagating to the document click listener
    event.stopPropagation();

    // Toggle the dropdown visibility and animation
    const isOpen = dropdownMenu2.classList.contains('opacity-100');

    if (isOpen) {
        // Close the dropdown with animation
        dropdownMenu2.classList.remove('opacity-100', 'scale-y-100');
        dropdownMenu2.classList.add('opacity-0', 'scale-y-0');
        dropdownIcon2.classList.remove('rotate-180'); // Rotate icon back to original
    } else {
        // Open the dropdown with animation
        dropdownMenu2.classList.remove('opacity-0', 'scale-y-0');
        dropdownMenu2.classList.add('opacity-100', 'scale-y-100');
        dropdownIcon2.classList.add('rotate-180'); // Rotate icon to indicate dropdown is open
    }
});

// Close dropdown if clicked outside
document.addEventListener('click', function (event) {
    if (!dropdownTrigger.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.remove('opacity-100', 'scale-y-100');
        dropdownMenu.classList.add('opacity-0', 'scale-y-0');
        dropdownIcon.classList.remove('rotate-180'); // Reset the icon rotation
    }
});

// Close dropdown2 if clicked outside
document.addEventListener('click', function (event) {
    if (!dropdownTrigger2.contains(event.target) && !dropdownMenu2.contains(event.target)) {
        dropdownMenu2.classList.remove('opacity-100', 'scale-y-100');
        dropdownMenu2.classList.add('opacity-0', 'scale-y-0');
        dropdownIcon2.classList.remove('rotate-180'); // Reset the icon rotation
    }
});


// Language Change Logic
const languageLinks = document.querySelectorAll('#dropdownMenu .flex.items-center');
const languageLinks2 = document.querySelectorAll('#dropdownMenu2 .flex.items-center');

languageLinks.forEach(link => {
    link.addEventListener('click', function () {
        const language = this.getAttribute('data-lang');
        if (language) {
            changeLanguage(language);
        }
    });
});

languageLinks2.forEach(link => {
    link.addEventListener('click', function () {
        const language = this.getAttribute('data-lang');
        if (language) {
            changeLanguage(language);
        }
    });
});

function changeLanguage(language) {
    // Get the current path without the language prefix
    let currentPath = window.location.pathname;

    // If we're on the homepage (just '/')
    if (currentPath === '/') {
        window.location.href = `/${language}`;
        return;
    }

    // Remove existing language prefix if it exists
    const pathParts = currentPath.split('/').filter(part => part);
    if (['en', 'fr', 'de', 'it'].includes(pathParts[0])) {
        pathParts.shift();
    }

    // Construct the new URL with the selected language
    const newPath = pathParts.length > 0 ? `/${language}/${pathParts.join('/')}` : `/${language}`;

    // Redirect to the new URL
    window.location.href = newPath;
}