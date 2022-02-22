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
                errors = true;
            } else {
                document.getElementById('datum_error').innerHTML = "";
            }
        }

        if (document.getElementById("haben").value == "") {
            document.getElementById("haben_error").innerHTML = "Bitte wähle etwas aus dem haben Bereich aus.";
            errors = true;
        } else {
            document.getElementById('haben_error').innerHTML = "";
        }

        if (document.getElementById("soll").value == "") {
            document.getElementById("soll_error").innerHTML = "Bitte wähle etwas aus dem soll Bereich aus.";
            errors = true;
        } else {
            document.getElementById('soll_error').innerHTML = "";
        }

        if (document.getElementById("betrag").value == "") {
            document.getElementById("betrag_error").innerHTML = "Bitte gib ein Betrag an.";
            errors = true;
        } else {
            document.getElementById('betrag_error').innerHTML = "";
        }

        if (errors) {
            evt.preventDefault();
        }

    });
});