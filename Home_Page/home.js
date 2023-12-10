var i = 0;
var imgArray = [
    "Pics/lenovo-laptop.png",
    "Pics/router.png",
    "Pics/flipper.png",
    "Pics/server.png",
    "Pics/accesories.png"
];


function preloadImages() {
    for (var j = 0; j < imgArray.length; j++) {
        var img = new Image();
        img.src = imgArray[j];
    }
}

var timer; 

function ndrroImg() {
    document.getElementById('slideshow').style.opacity = 0; 
    setTimeout(function () {
        document.getElementById('slideshow').src = imgArray[i];
        document.getElementById('slideshow').style.opacity = 1; 
        i = (i + 1) % imgArray.length; 
        timer = setTimeout(ndrroImg, 2600); 
    }, 800); 
}

// Start the slideshow when the window loads
window.onload = function () {
    preloadImages(); // Preload images
    ndrroImg(); // Start the slideshow
};

