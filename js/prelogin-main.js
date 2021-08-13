// SCROLL REVEAL
const sr = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 2000,
    reset: true
});

sr.reveal(`.wrapper, .title`, {
    interval: 200
});

// PARTICLES.JS
particlesJS.load('particles-js', '/assets/prelogin/particles.json', function () {
    particlesJS.color.value = "#ff0000"
    console.log('callback - particles.js config loaded');
});