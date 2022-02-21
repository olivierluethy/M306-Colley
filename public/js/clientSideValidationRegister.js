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
                document.getElementById('email_register_error').innerHTML = "Bitte gib eine E-Mail Adresse ein.";
                errors = true;
            } else {
                document.getElementById('email_register_error').innerHTML = "";
            }
        }

        if (document.querySelector('#passwort_register') != null) {
            if (document.querySelector('#passwort_register').value.trim() === '') {
                document.getElementById('passwort_register_error').innerHTML = "Bitte gib ein Passwort ein.";
                errors = true;
            } else if (document.querySelector('#passwort_register').value.length < 6) {
                document.getElementById('passwort_register_error').innerHTML = "Das Passwort muss mindestens 6 Zeichen enthalten";
                errors = true;
            } else {
                document.getElementById('passwort_register_error').innerHTML = "";
            }
        }

        if (document.querySelector('#passwort_verify') != null) {
            if (document.querySelector('#passwort_verify').value.trim() === '') {
                document.getElementById('passwortverify_register_error').innerHTML = "Bitte gib das Passwort noch einmal ein.";
                errors = true;
            } else if (document.querySelector('#passwort_register').value != document.querySelector('#passwort_verify').value) {
                document.getElementById('passwortverify_register_error').innerHTML = "Bitte gib das gleiche Passswort wie oben ein.";
                errors = true;
            } else {
                document.getElementById('passwortverify_register_error').innerHTML = "";
            }
        }

        if (errors) {
            evt.preventDefault();
        }
    });
});