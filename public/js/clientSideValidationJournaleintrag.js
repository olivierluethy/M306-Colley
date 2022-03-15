// Clientside Validierung
window.addEventListener("load", function() {

    document.querySelector("form").addEventListener("submit", function(evt) {

        var errors = false;
        var warnings = document.querySelectorAll(".warning");
        if (warnings != null) {
            warnings.forEach(element => {
                element.remove();
            });
        }

        if (document.querySelector('#date') != null) {
            if (document.querySelector('#date').value.trim() === '') {
                document.getElementById('datum_error').innerHTML = "Bitte gib ein Datum ein.";
                document.querySelector("#date").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else {
                document.getElementById('datum_error').innerHTML = "";
                document.querySelector("#date").style = "border: 1px solid #ccc";
            }
        }

        if (document.getElementById("haben").value == "") {
            document.getElementById("haben_error").innerHTML = "Bitte wähle etwas aus dem haben Bereich aus.";
            document.querySelector("#haben").style = "border: 5px solid #ff4d4d";
            errors = true;
        } else {
            document.getElementById('haben_error').innerHTML = "";
            document.querySelector("#haben").style = "border: 1px solid #ccc";
        }

        if (document.getElementById("soll").value == "") {
            document.getElementById("soll_error").innerHTML = "Bitte wähle etwas aus dem soll Bereich aus.";
            document.querySelector("#soll").style = "border: 5px solid #ff4d4d";
            errors = true;
        } else {
            document.getElementById('soll_error').innerHTML = "";
            document.querySelector("#soll").style = "border: 1px solid #ccc";
        }

        if (document.getElementById("betrag").value == "") {
            document.getElementById("betrag_error").innerHTML = "Bitte gib ein Betrag an.";
            document.querySelector("#betrag").style = "border: 5px solid #ff4d4d";
            errors = true;
        } else {
            document.getElementById('betrag_error').innerHTML = "";
            document.querySelector("#betrag").style = "border: 1px solid #ccc";
        }

        if (errors) {
            evt.preventDefault();
        }

    });
});