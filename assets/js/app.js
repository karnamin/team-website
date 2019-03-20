// When the user scrolls the page, execute myFunction
window.onscroll = function() {
    myFunction();
};

// Get the navbar
var navigation = document.getElementById("navigation-bar");

// Get the offset position of the navbar
/* var sticky = navigation.offsetTop; */
var sticky = navigation.offsetHeight;
console.log(sticky);

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= 510) {
        navigation.classList.add("sticky");
    } else {
        navigation.classList.remove("sticky");
    }
}
