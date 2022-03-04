// Clientside Validierung
window.addEventListener("load", function() {

    document.querySelector("form").addEventListener('submit', function(evt) {

        var errors = false;
        var warnings = document.querySelectorAll(".warning");
        if (warnings != null) {
            warnings.forEach(element => {
                element.remove();
            });
        }

        if (document.querySelector('#code') != null) {
            if (document.querySelector('#code').value.trim() === '') {
                errors = true;
                document.getElementById("mailer_code_error").innerHTML = "Bitte geben Sie den geschickten Code ein";
            } else {
                document.getElementById("mailer_code_error").innerHTML = "";
            }
        }

        if (errors) {
            evt.preventDefault();
        }
    });
});