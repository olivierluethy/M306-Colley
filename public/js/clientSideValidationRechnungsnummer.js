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

        if (document.querySelector('#rechnungsnummer') != null) {
            if (document.querySelector('#rechnungsnummer').value.trim() === '') {
                document.getElementById('rechnungsnummer_rechnungsnummer_error').innerHTML = "Bitte gib eine Rechnungsnummer ein.";
                document.querySelector("#rechnungsnummer").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else {
                document.getElementById('rechnungsnummer_rechnungsnummer_error').innerHTML = "";
                document.querySelector("#rechnungsnummer").style = "border: 5px solid #ccc";
            }
        }

        if (document.querySelector('#journalnummer') != null) {
            if (document.querySelector('#journalnummer').value.trim() === '') {
                document.getElementById('journalnummer_rechnungsnummer_error').innerHTML = "Bitte gib eine Journalnummer ein.";
                document.querySelector("#journalnummer").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else {
                document.getElementById('journalnummer_rechnungsnummer_error').innerHTML = "";
                document.querySelector("#journalnummer").style = "border: 5px solid #ccc";
            }
        }

        if (document.getElementById("rechnung").value == "") {
            document.getElementById('rechnung_rechnungsnummer_error').innerHTML = "Bitte lade eine Rechnung hoch.";
            document.getElementById("rechnung").style = "border: 5px solid #ff4d4d";
            errors = true;
        } else {
            document.getElementById('rechnung_rechnungsnummer_error').innerHTML = "";
            document.querySelector("#rechnung").style = "border: 5px solid #ccc";
        }

        if (errors) {
            evt.preventDefault();
        }

    });
});