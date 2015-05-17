var currentTeam; //wybrana dru¿yna nazwa
var team; //ostatnia dru¿yna

function startPick() {
	setTeam();
}

function setTeam() {
	currentTeam=$("#teamChoice option:selected").text();
}

function allNode() {
	if(event.altKey) {
		insertTop();
	} else if(event.ctrlKey) {
		replace();
	} else if(event.shiftKey) {
		removeTeam();
	} else {
		insert();
	}	
}

function insert() {
	var node = document.createElement("LI");                 // Create a <li> node
	var textnode = document.createTextNode(currentTeam);         // Create a text node
	node.appendChild(textnode);                              // Append the text to <li>
	document.getElementById("teamlist").appendChild(node);
	team=node;
}

function insertTop() {
	var node = document.createElement("LI");                
	var textnode = document.createTextNode(currentTeam);       
	node.appendChild(textnode); 
	var list = document.getElementById("teamlist");                      
	list.insertBefore(node,list.childNodes[0]);
}

function replace() {
	var node = document.createElement("LI");                 
	var textnode = document.createTextNode(currentTeam);        
	node.appendChild(textnode);                              
	document.getElementById("teamlist").replaceChild(node,team);
	team=node;
}

function removeTeam() {
	if(team.parentNode.children.length==0) {
		window.alert("Nie masz nic do usuniecia");
	}
	else {
		var oldNode = team;
		team = team.previousSibling;
		document.getElementById("teamlist").removeChild(oldNode);
}
}


window.addEventListener("load", startPick, false);