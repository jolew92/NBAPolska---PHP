var hidden=false;
var imageList = document.images;

function hideshow() {

    if (hidden == false) {
        for (var i = 1; i < imageList.length; i++) {
            var currentImage = imageList.item(i);
            currentImage.style.display = "none";
        }

        document.getElementById("art1").style.display = "none";
        document.getElementById("art2").style.display = "none";
        document.getElementById("hideBtn").value="Pokaz obrazki";
        hidden=true;
    } else {
        for (var i = 1; i < imageList.length; i++) {
            var currentImage = imageList.item(i);
            currentImage.style.display = "";
        }

        document.getElementById("art1").style.display = "";
        document.getElementById("art2").style.display = "";
        document.getElementById("hideBtn").value="Ukryj obrazki";
        hidden=false;
    }

}

function listener() {
    var btn = document.getElementById("hideBtn");
    btn.addEventListener("click", hideshow, false);
}

window.addEventListener("load", listener, false);