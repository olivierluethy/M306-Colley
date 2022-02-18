// Clientside Validierung
window.addEventListener("load", function() {

    document.getElementById("formRegister").addEventListener('submit', function(evt) {

        var errors = false;
        var warnings = document.querySelectorAll(".warning");
        if (warnings != null) {
            warnings.forEach(element => {
                element.remove();
            });
        }

        if (document.querySelector('#email_register') != null) {
            if (document.querySelector('#email_register').value.trim() === '') {
                document.querySelector('#email_register').insertAdjacentHTML("afterend", "<label class=\"warning\"> Bitte gib eine E-Mail Adresse ein.</label>");
                errors = true;
            }
        }

        if (document.querySelector('#passwort_register') != null) {
            if (document.querySelector('#passwort_register').value.trim() === '') {
                document.querySelector('#passwort_register').insertAdjacentHTML("afterend", "<label class=\"warning\"> Bitte gib ein Passwort ein.</label>");
                errors = true;
            }
        }

        if (document.querySelector('#passwort_verify') != null) {
            if (document.querySelector('#passwort_verify').value.trim() === '') {
                document.querySelector('#passwort_verify').insertAdjacentHTML("afterend", "<label class=\"warning\"> Bitte gib das Passwort noch einmal ein.</label>");
                errors = true;
            }
        }

        if (errors) {
            evt.preventDefault();
        }
    });
});