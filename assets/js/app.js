// Get the navbar
const navigation = document.getElementById("navigation-bar");

// Get the offset position of the navbar
/* var sticky = navigation.offsetTop; */
const sticky = navigation.offsetHeight;
console.log(sticky);

const smallDevices = window.matchMedia("(max-width: 991px)");

const bigDevices = window.matchMedia("(min-width: 992px)");

window.addEventListener("load", navBarSticky());

// When the user scrolls the page, execute scrollFunction
window.onscroll = function() {
    scrollFunction();
};

function navBarSticky() {
    if (smallDevices.matches) {
        navigation.classList.remove("sticky");
    }
}

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function scrollFunction() {
    if (bigDevices.matches && window.pageYOffset >= 510) {
        navigation.classList.add("sticky");
    } else {
        navigation.classList.remove("sticky");
    }
}
