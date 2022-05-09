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
                document.getElementById('email_register_error').innerHTML = "Bitte E-Mail Adresse eingeben.";
                document.querySelector("#email_register").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else {
                document.getElementById('email_register_error').innerHTML = "";
                document.querySelector("#passwort_login").style = "border: 1px solid #ccc";
            }
        }

        if (document.querySelector('#passwort_register') != null) {
            if (document.querySelector('#passwort_register').value.trim() === '') {
                document.getElementById('passwort_register_error').innerHTML = "Bitte Passwort eingeben.";
                document.querySelector("#passwort_register").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else if (document.querySelector('#passwort_register').value.length < 6) {
                document.getElementById('passwort_register_error').innerHTML = "Passwort muss mindestens 6 Zeichen enthalten";
                errors = true;
            } else {
                document.getElementById('passwort_register_error').innerHTML = "";
                document.querySelector("#passwort_register").style = "border: 1px solid #ccc";
            }
        }

        if (document.querySelector('#passwort_verify') != null) {
            if (document.querySelector('#passwort_verify').value.trim() === '') {
                document.getElementById('passwortverify_register_error').innerHTML = "Bitte Passwort erneut eingeben.";
                document.querySelector("#passwort_verify").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else if (document.querySelector('#passwort_register').value != document.querySelector('#passwort_verify').value) {
                document.getElementById('passwortverify_register_error').innerHTML = "Nicht das gleiche Passwort.";
                errors = true;
            } else {
                document.getElementById('passwortverify_register_error').innerHTML = "";
                document.querySelector("#passwort_verify").style = "border: 1px solid #ccc";
            }
        }

        if (errors) {
            evt.preventDefault();
        }
    });
});