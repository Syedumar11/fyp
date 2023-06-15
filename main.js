
// navbar start
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $("nav").addClass("small-nav");
    } else {
        $("nav").removeClass("small-nav");
    }
}

        // navbar end
