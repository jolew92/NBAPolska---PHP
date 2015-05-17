function listener(){
    document.getElementById("text").addEventListener("mousemove", points, false);
    document.getElementById("text").addEventListener("mouseout", points2, false);
	document.getElementById("text").addEventListener("mousedown", noCopy, false);
}
function points() {
    var cX = event.clientX;
    var sX = event.screenX;
    var cY = event.clientY;
    var sY = event.screenY;
    var coords1 = "client - X: " + cX + ", Y: " + cY;
    var coords2 = "screen - X: " + sX + ", Y: " + sY;

    document.getElementById("coords").innerHTML = coords1 + "<br><br>" + coords2;
}

function points2() {
    var cX = 0;
    var sX =0;
    var cY = 0;
    var sY = 0;
    var coords1 = "client - X: " + cX + ", Y: " + cY;
    var coords2 = "screen - X: " + sX + ", Y: " + sY;

    document.getElementById("coords").innerHTML = coords1 + "<br><br>" + coords2;
}

function noCopy() { 
	window.alert("Nie można kopiować!"); 
}


window.addEventListener("load", listener, false);
//mousemove, mousedown, mouseover, mouseout