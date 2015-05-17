function changeBackground() {
	var color = document.getElementById("colorpicker").value;
	document.body.setAttribute( "style", "background: " +color );
}

function changeTextColor() {
	var color = document.getElementById("colorpicker2").value;
	document.getElementById("label1").setAttribute( "style", "color: " +color );
	document.getElementById("label2").setAttribute( "style", "color: " +color );
	document.getElementById("hcolor").setAttribute( "style", "color: " +color );
}

function fontchange() {
	var font =$("#fontchanger option:selected").text();
	document.getElementById("label1").setAttribute( "style", "font-family: " + "\"" + font + "\"");
	document.getElementById("label2").setAttribute( "style", "font-family: " + "\"" + font + "\"");
	document.getElementById("hcolor").setAttribute( "style", "font-family: " + "\"" + font + "\"");
}