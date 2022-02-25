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
                errors = true;
            } else {
                document.getElementById('rechnungsnummer_rechnungsnummer_error').innerHTML = "";
            }
        }

        if (document.querySelector('#journalnummer') != null) {
            if (document.querySelector('#journalnummer').value.trim() === '') {
                document.getElementById('journalnummer_rechnungsnummer_error').innerHTML = "Bitte gib eine Journalnummer ein.";
                errors = true;
            } else {
                document.getElementById('journalnummer_rechnungsnummer_error').innerHTML = "";
            }
        }

        if (document.getElementById("rechnung").value == "") {
            document.getElementById('rechnung_rechnungsnummer_error').innerHTML = "Bitte lade eine Rechnung hoch.";
            errors = true;
        } else {
            document.getElementById('rechnung_rechnungsnummer_error').innerHTML = "Bitte lade eine Rechnung hoch.";
        }

        if (errors) {
            evt.preventDefault();
        }

    });
});