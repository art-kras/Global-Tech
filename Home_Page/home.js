var i = 0;
var imgArray = [
    "Pics/lenovo-laptop.png",
    "Pics/router.png",
    "Pics/flipper.png",
    "Pics/server.png",
    "Pics/accesories.png"
];

// Preload images
function preloadImages() {
    for (var j = 0; j < imgArray.length; j++) {
        var img = new Image();
        img.src = imgArray[j];
    }
}

var timer; // Declare timer variable

function ndrroImg() {
    document.getElementById('slideshow').style.opacity = 0; // Fade out
    setTimeout(function () {
        document.getElementById('slideshow').src = imgArray[i];
        document.getElementById('slideshow').style.opacity = 1; // Fade in
        i = (i + 1) % imgArray.length; // Loop through images
        timer = setTimeout(ndrroImg, 2600); // Set timeout for next image change
    }, 800); // Wait for fade out before changing image
}

// Start the slideshow when the window loads
window.onload = function () {
    preloadImages(); // Preload images
    ndrroImg(); // Start the slideshow
};

// function pauseImg() {
//     document.getElementById('slideshow').style.opacity = 1; // Keep current image visible
//     clearTimeout(timer); // Pause the timer
// }

// function resumeImg() {
//     document.getElementById('slideshow').style.opacity = 1; // Make sure image is visible
//     ndrroImg(); // Start/resume the slideshow
// }

// document.getElementById('slideshow').addEventListener('mouseenter', pauseImg);
// document.getElementById('slideshow').addEventListener('mouseleave', resumeImg);