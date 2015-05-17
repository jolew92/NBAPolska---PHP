//Wykorzystać w formularzach zdarzenia focus i blur do wyświetlania tekstów pomocy oraz zdarzenia submit i reset do wyzwalania okien potwierdzających.
var helpArray = [ "Podaj swoje imię. Nie bądź anonimowy.",
    "Podaj swój adres email user@domain.",
    "Masz stronę www? Podziel się nią z nami.",
    "Wybiesz z listy swoją ulubioną drużynę.",
    "Ustaw jak bardzo lubisz drużynę od trochę do <br> uwielbiam.",
    "Niewstydz się. Napisz dlaczego lubisz <br> akurat tą drużynę. Chętnie poczytamy.",
    "Pamiętasz od kiedy jesteś fanem? <br> Nie jest to pole obowiązkowe",
    "Chcesz otrzymywać aktualności o tej drużynie?",
    "Masz ochotę podać swój ulubiony kolor <br> dla celów statystycznych?",
    "Wyszukaj coś na stronie.", "" ];

var helpText;

function init() {
    helpText = document.getElementById( "helpText" );
    var elementArray = [document.getElementById("imie"),document.getElementById("email"),document.getElementById("www"),document.getElementById("team"),document.getElementById("like"),
        document.getElementById("whyteam"),document.getElementById("fromwhen"),document.getElementById("wantinfo"),document.getElementById("color"),document.getElementById("search")];

    for(var i =0; i<elementArray.length; i++) {
        registerListeners(elementArray[i], i);
    }


    var myForm = document.getElementById( "formjs" );
    myForm.addEventListener( "submit", function(event){ if(confirm( "Na pewno chcesz wysłać formularz?" )==false) event.preventDefault();}, false );
    myForm.addEventListener( "reset", function(event){ if(confirm( "Na pewno chcesz zresetować formularz?" )==false)event.preventDefault();}, false );
}

function registerListeners(object, messageNumber) {
    object.addEventListener("focus", function() { helpText.innerHTML = helpArray[messageNumber]; }, false );
    object.addEventListener("blur", function() { helpText.innerHTML = helpArray[10]; }, false );
}

window.addEventListener( "load", init, false );
