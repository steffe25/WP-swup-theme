/*
let lastScrollTop = 0; // Store the last scroll position
function handleScroll() {
    var header = document.querySelector('.navbar');
    var currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    // Check if at the top of the page
    if (currentScroll <= 0) {
        header.classList.add('at-top');
        header.classList.remove('scrolled-down');
        header.classList.remove('scrolled-up');
    } else {
        header.classList.remove('at-top');
        if (currentScroll > lastScrollTop) {
            // Scrolling down
            header.classList.add('scrolled-down');
            header.classList.remove('scrolled-up');
        } else if (currentScroll < lastScrollTop) {
            // Scrolling up, but not at the top
            header.classList.remove('scrolled-down');
            header.classList.add('scrolled-up');
        }
    }
    lastScrollTop = currentScroll; // Update the last scroll position
}
// Call handleScroll on page load
handleScroll();
// Attach handleScroll to scroll event
window.addEventListener('scroll', handleScroll, false);
*/
// Function to toggle mobile menu
function toggleMobileMenu() {
    var mobileMenu = document.getElementById("mobileMenu");
    mobileMenu.classList.toggle("show");
}
// Function to toggle navigation icon
function toggleNavIcon4() {
    var navIcon4 = document.getElementById("nav-icon4");
    navIcon4.classList.toggle("open");
}
/*
function handleTopBarScroll() {
    var topBar = document.querySelector('.very-top-bar');
    var currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    if (currentScroll > 0) {
        // Hide the top bar when not at the top
        topBar.classList.add('hide');
    } else {
        // Show the top bar when at the top
        topBar.classList.remove('hide');
    }
}
// Call handleTopBarScroll on page load
handleTopBarScroll();
// Attach handleTopBarScroll to scroll event
window.addEventListener('scroll', handleTopBarScroll, false);
// Swup.js integration (if you're using Swup.js)
document.addEventListener('swup:contentReplaced', function() {
    handleScroll();
    handleTopBarScroll();
    // Reattach other event listeners if necessary
});
*/
