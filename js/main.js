// INITIALIZE SCROLL REVEAL SETTINGS
const sr = ScrollReveal({
    origin: 'left',
    distance: '30px',
    duration: 2000,
    reset: false
});

sr.reveal(`.links-wrapper a, .logout-btn a`, {
    interval: 200
});