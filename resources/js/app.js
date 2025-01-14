import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';  // Import AOS CSS
import Rellax from 'rellax';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1500,  // Set duration for animation
        easing: 'ease-in-out',  // Choose easing function
        once: true,  // Animation happens only once
    });  // Initialize AOS
}); 

document.addEventListener('DOMContentLoaded', function () {
  // Initialize Rellax.js for elements with the class .rellax
  const rellax = new Rellax('.rellax');
});