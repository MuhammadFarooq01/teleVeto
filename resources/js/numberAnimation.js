// Function to animate the number count
function animateNumber(id, start, end, duration) {
    let element = document.getElementById(id);
    let startTime = null;

    // This function performs the animation
    function animate(time) {
        if (!startTime) startTime = time;
        let progress = time - startTime;
        let value = Math.min(start + (end - start) * (progress / duration), end);
        element.innerText = Math.floor(value);
        if (progress < duration) {
            requestAnimationFrame(animate);
        } else {
            element.innerText = end;
        }
    }

    requestAnimationFrame(animate);
}

// Check if the element is in the viewport and start the animation only once
function checkInViewAndAnimate() {
    const targets = document.querySelectorAll("[id^='yearsOfExperience'], [id^='veterinaryCount'], [id^='casesCompleted'], [id^='happyClients']");

    targets.forEach(target => {
        // Check if the target element is in the viewport
        const rect = target.getBoundingClientRect();

        // Only animate if the element is in view and the animation hasn't been triggered before
        if (rect.top >= 0 && rect.bottom <= window.innerHeight && !target.classList.contains('animated')) {
            target.classList.add('animated'); // Add the class to mark it as animated

            // Trigger animations for each section
            if (target.id === 'yearsOfExperience') {
                animateNumber(target.id, 0, 10, 2000); // Animate 0 to 10 over 2 seconds
            } else if (target.id === 'veterinaryCount') {
                animateNumber(target.id, 0, 500, 2000); // Animate 0 to 500 over 2 seconds
            } else if (target.id === 'casesCompleted') {
                animateNumber(target.id, 0, 5026, 2000); // Animate 0 to 5026 over 2 seconds
            } else if (target.id === 'happyClients') {
                animateNumber(target.id, 0, 5026, 2000); // Animate 0 to 5026 over 2 seconds
            }
        }
    });
}

// Trigger number animation when the user scrolls
window.addEventListener("scroll", checkInViewAndAnimate);
// Initial check when the page loads
window.addEventListener("load", checkInViewAndAnimate);
