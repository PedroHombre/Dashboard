// INITIALIZE SCROLL REVEAL SETTINGS
const sr = ScrollReveal({
    origin: 'left',
    distance: '30px',
    duration: 2000,
    reset: false
});

sr.reveal(`.account-profile-img, .links-wrapper a, .logout-btn a, .homescreen-info .account-name-wrapper h1, .homescreen-info .account-name-wrapper h2`, {
    interval: 200
});