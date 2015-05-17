var teams = ["Los Angeles Clippers",
			"Cleveland Cavaliers",
			"Miami Heat",
			"Los Angeles Lakers",
			"Oklahoma City Thunder"];


function swapStyleSheet(sheet){
	document.getElementById('pagestyle').setAttribute('href', sheet);
}

function randomteam() {
	var team=Math.floor(Math.random()*5);
	switch(team) {
	case 0: window.location.href='../clippers.php'; window.alert("Wylosowałeś " + teams[0]); break;
	case 1: window.location.href='../cavaliers.php'; window.alert("Wylosowałeś " + teams[1]); break;
	case 2: window.location.href='../heat.php'; window.alert("Wylosowałeś " + teams[2]); break;
	case 3: window.location.href='../lakers.php'; window.alert("Wylosowałeś " + teams[3]); break;
	case 4: window.location.href='../thunder.php'; window.alert("Wylosowałeś " + teams[4]); break;
	default:  window.location.href='../teams.php'; window.alert("Nic nie wylosowałeś :("); break;
	}
}