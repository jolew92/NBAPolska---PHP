function addlistener() {
    var form = document.getElementById("formjs");
    form.addEventListener("submit", function (event) {
        var x = Math.floor(Math.random() * 20);
        var y = Math.floor(Math.random() * 20);
        var sum = parseInt(window.prompt("Aby udowodnić, że nie jesteś botem podaj wynik działania: " + x + " + " + y));
        if (sum != x + y) {
            event.preventDefault();
            window.alert("Wszystko wskazuje na to że jesteś botem!");
            return false;
        }
    }, false);
}
window.addEventListener("load", addlistener, false);

