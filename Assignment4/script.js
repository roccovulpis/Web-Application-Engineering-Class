document.addEventListener('DOMContentLoaded', function() {

    document.getElementById('image-options-form').addEventListener('submit', function(event) {
        event.preventDefault();

        var valueSelected = document.getElementById('image-selection').value;
        var webpageContainer = document.getElementsByClassName('container')[0];

        if (valueSelected === 'Rollover') {
            window.location.href = "./rollover.html";

        }

        if (valueSelected === 'Preview') {
            window.location.href = "./preview.html";

        }

        if (valueSelected === 'Slideshow') {
            window.location.href = "./slideshow.html";

        }

    });
});

function changePic(imgsrc)
{
document.getElementById("pic").src = imgsrc
}

function readMore() {
    alert("You have the following choices: 1. Image Rollover 2. Image Preview 3. Image Slideshow. Choose the option from the form below.");
}