var teams = ["Los Angeles Clippers",
			"Cleveland Cavaliers",
			"Miami Heat",
			"Los Angeles Lakers",
			"Oklahoma City Thunder"];
			
var generate;
var link;
var team;
var rand;

function generateteam() {
	team=Math.floor(Math.random()*5);
	rand=Math.floor(Math.random()*5);
	loop();		
}	

function loop(){
	switch(rand) {
		case 0:  document.getElementById("teamgenerator").innerHTML = teams[0]; break;
		case 1:  document.getElementById("teamgenerator").innerHTML = teams[1]; break;
		case 2:  document.getElementById("teamgenerator").innerHTML = teams[2]; break;
		case 3:  document.getElementById("teamgenerator").innerHTML = teams[3]; break;
		case 4:  document.getElementById("teamgenerator").innerHTML = teams[4]; break;
		default: window.alert("Wystąpił błąd"); break;	
	}			
	setTimeout(function(){
		if(rand!=team){
			rand = Math.floor(Math.random()*5);
			loop();
		}}, 200);
}

function redirect() {
	switch(team) {
	case 0: window.location.href='../clippers.php'; break;
	case 1: window.location.href='../cavaliers.php'; break;
	case 2: window.location.href='../heat.php'; break;
	case 3: window.location.href='../lakers.php'; break;
	case 4: window.location.href='../thunder.php'; break;
	default:  window.location.href='../teams.php'; break;
	}
}
