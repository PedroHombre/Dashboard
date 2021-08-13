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
    console.log('callback - particles.js config loaded');
});

// LOGO ANIMATIOB
let logoCharacters = document.querySelectorAll(".title span:not(.dot)");
for(let i = 0; i < logoCharacters.length; i++){
    logoCharacters[i].addEventListener('mouseenter', ()=>{
        // console.log(`Element przed: ${logoCharacters[i-1]} | Element hover: ${logoCharacters[i]} | Element po: ${logoCharacters[i+1]}`)
        if(logoCharacters[i-1]){
            logoCharacters[i-1].classList.add("active");
        }
        if (logoCharacters[i+1]) {
            logoCharacters[i+1].classList.add("active");
        }
        if (logoCharacters[i - 2]) {
            logoCharacters[i - 2].classList.add("active2");
        }
        if (logoCharacters[i + 2]) {
            logoCharacters[i + 2].classList.add("active2");
        }
    })
    logoCharacters[i].addEventListener('mouseleave', () => {
        // console.log(`Element przed: ${logoCharacters[i-1]} | Element hover: ${logoCharacters[i]} | Element po: ${logoCharacters[i+1]}`)
        if (logoCharacters[i-1]) {
            logoCharacters[i-1].classList.remove("active");
        }
        if (logoCharacters[i+1]) {
            logoCharacters[i+1].classList.remove("active");
        }
        if (logoCharacters[i - 2]) {
            logoCharacters[i - 2].classList.remove("active2");
        }
        if (logoCharacters[i + 2]) {
            logoCharacters[i + 2].classList.remove("active2");
        }
    })
}