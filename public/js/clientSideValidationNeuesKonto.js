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

        if (document.querySelector('#kontonummer') != null) {
            if (document.querySelector('#kontonummer').value.trim() === '') {
                document.getElementById('kontonummer_konto_error').innerHTML = "Bitte gib eine Kontonummer ein.";
                errors = true;
            } else {
                document.getElementById('kontonummer_konto_error').innerHTML = "";
            }
        }

        if (document.querySelector('#titel') != null) {
            if (document.querySelector('#titel').value.trim() === '') {
                document.getElementById('titel_konto_error').innerHTML = "Bitte gib einen Titel ein.";
                errors = true;
            } else {

            }
        }
        if (document.querySelector('#verwendungszweck').value.length < 6) {
            document.getElementById('verwendungszweck_konto_error').innerHTML = "Bitte gib einen Verwendungszweck ein.";
            errors = true;
        } else {
            document.getElementById('verwendungszweck_konto_error').innerHTML = "";
        }

        if (errors) {
            evt.preventDefault();
        }

    });
});