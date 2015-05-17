function anchorCounter() {
	var anchors = document.anchors.length;
    document.getElementById("anchors").innerHTML = "Na tej stronie jest " + anchors + " anchors.";
}

window.addEventListener("load", anchorCounter, false);