// When the user scrolls the page, execute scrollFunction
window.onscroll = function() {
    scrollFunction();
};

// Get the navbar
let navigation = document.getElementById("navigation-bar");

// Get the offset position of the navbar
/* var sticky = navigation.offsetTop; */
let sticky = navigation.offsetHeight;
console.log(sticky);

let mediaQuery = window.matchMedia("(max-width: 991px)");

window.addEventListener("load", navBarSticky());

function navBarSticky() {
    if (mediaQuery.matches) {
        navigation.classList.remove("sticky");
    }
}

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function scrollFunction() {
    if (window.pageYOffset >= 510) {
        navigation.classList.add("sticky");
    } else {
        navigation.classList.remove("sticky");
    }
}
