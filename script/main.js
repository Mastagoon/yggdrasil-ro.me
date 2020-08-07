// hamburger menu

/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
/*
function mobileNav() {
    var x = document.getElementById("main.nav");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
$(function() {
    var navbar = document.getElementById("main-nav");
    let height = navbar.offsetHeight;
    $("#main-nav").stickyNavbar({
        activeClass: "active", // Class to be added to highlight nav elements
        sectionSelector: "scrollto", // Class of the section that is interconnected with nav links
        animDuration: 350, // Duration of jQuery animation as well as jQuery scrolling duration
        startAt: 100, // Stick the menu at XXXpx from the top of the this() (nav container)
        easing: "swing", // Easing type if jqueryEffects = true, use jQuery Easing plugin to extend easing types - gsgd.co.uk/sandbox/jquery/easing
        animateCSS: false, // AnimateCSS effect on/off
        animateCSSRepeat: false, // Repeat animation everytime user scrolls
        cssAnimation: "fadeInDown", // AnimateCSS class that will be added to selector
        jqueryEffects: false, // jQuery animation on/off
        jqueryAnim: "slideDown", // jQuery animation type: fadeIn, show or slideDown
        selector: "a", // Selector to which activeClass will be added, either "a" or "li"
        mobile: false, // If false, nav will not stick under viewport width of 480px (default) or user defined mobileWidth
        mobileWidth: 480, // The viewport width (without scrollbar) under which stickyNavbar will not be applied (due user usability on mobile)
        zindex: 9999, // The zindex value to apply to the element: default 9999, other option is "auto"
        stickyModeClass: "sticky", // Class that will be applied to 'this' in sticky mode
        unstickyModeClass: "unsticky", // Class that will be applied to 'this' in non-sticky mode
    });
});

/*
// When the user scrolls the page, execute myFunction
window.onscroll = function() {
    stickey();
};

// Get the navbar
var navbar = document.getElementById("main-nav");

// Get the offset position of the navbar
var sticky = navbar.offsetHeight;
console.log(sticky);

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickey() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}*/