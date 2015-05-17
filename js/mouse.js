
function bigImg() {
    document.getElementById("photo").style.height = "570px";
    document.getElementById("photo").style.width = "830px";
}

function normalImg(){
    document.getElementById("photo").style.height = "420px";
    document.getElementById("photo").style.width = "630px";
}
function listener() {
    var img=document.getElementById("photo");
    img.addEventListener("mouseover", bigImg, false);
    img.addEventListener("mouseout", normalImg, false);
}

window.addEventListener("load", listener, false);

//mousemove, mousedown, mouseover, mouseout
