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

        if (document.querySelector('#kontoNr') != null) {
            if (document.querySelector('#kontoNr').value.trim() === '') {
                document.getElementById('kontoNrError').innerHTML = "Bitte geben Sie eine Kontonummer ein.";
                errors = true;
            } else {
                document.getElementById('kontoNrError').innerHTML = "";
            }
        }

        if (document.querySelector('#kontoName') != null) {
            if (document.querySelector('#kontoName').value.trim() === '') {
                document.getElementById('kontoNameError').innerHTML = "Bitte geben Sie einen Titel ein.";
                errors = true;
            } else {

            }
        }
        if (document.querySelector('#kontoZweck').value.length < 6) {
            document.getElementById('kontoZweckError').innerHTML = "Bitte geben Sie einen Verwendungszweck ein.";
            errors = true;
        } else {
            document.getElementById('kontoZweckError').innerHTML = "";
        }

        if (errors) {
            evt.preventDefault();
        }

    });
});

function FormPruefung()

var allesAusgefuellt = true;
{
    if(document.getElementById('kontoNr').value == '')
    {
        allesAusgefuellt = false;
    }
}