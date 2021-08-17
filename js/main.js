// CHECK FOR HOVER ON LOGO CHARACTERS
let logoCharacters = document.querySelectorAll(".title span:not(.dot)");
for (let i = 0; i < logoCharacters.length; i++) {
    // ADD CLASS ON MOUSE ENTER
    logoCharacters[i].addEventListener('mouseenter', () => {
        if (logoCharacters[i - 1]) {
            logoCharacters[i - 1].classList.add("active");
        }
        if (logoCharacters[i + 1]) {
            logoCharacters[i + 1].classList.add("active");
        }
        if (logoCharacters[i - 2]) {
            logoCharacters[i - 2].classList.add("active2");
        }
        if (logoCharacters[i + 2]) {
            logoCharacters[i + 2].classList.add("active2");
        }
    })
    // REMOVE CLASS ON MOUSE LEAVE
    logoCharacters[i].addEventListener('mouseleave', () => {
        if (logoCharacters[i - 1]) {
            logoCharacters[i - 1].classList.remove("active");
        }
        if (logoCharacters[i + 1]) {
            logoCharacters[i + 1].classList.remove("active");
        }
        if (logoCharacters[i - 2]) {
            logoCharacters[i - 2].classList.remove("active2");
        }
        if (logoCharacters[i + 2]) {
            logoCharacters[i + 2].classList.remove("active2");
        }
    })
}