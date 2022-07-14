function mobileMenu() {
    var mobileMenuIcon = document.getElementById("mobile-menu-icon");
    var menu = document.getElementById("main-menu");

    if (mobileMenuIcon) {
        mobileMenuIcon.addEventListener("click", function () {
            menu.classList.toggle("opened");
            mobileMenuIcon.classList.toggle("opened");
        })
    }
}

mobileMenu();

var images = new Array();

function preloadImages(){

    for (i=0; i < preloadImages.arguments.length; i++){

         images[i] = new Image();

        images[i].src = preloadImages.arguments[i];

    }

}

preloadImages("pexels-sonny-sixteen-7784957.jpg");


