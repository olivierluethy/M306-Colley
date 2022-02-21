// Clientside Validierung
window.addEventListener("load", function() {

    document.getElementById("formLogin").addEventListener("submit", function(evt) {

        var errors = false;
        var warnings = document.querySelectorAll(".warning");
        if (warnings != null) {
            warnings.forEach(element => {
                element.remove();
            });
        }

        if (document.querySelector('#email_login') != null) {
            if (document.querySelector('#email_login').value.trim() === '') {
                document.getElementById('email_login_error').innerHTML = "Bitte gib eine E-Mail Adresse ein.";
                errors = true;
            } else {
                document.getElementById('email_login_error').innerHTML = "";
            }
        }

        if (document.querySelector('#passwort_login') != null) {
            if (document.querySelector('#passwort_login').value.trim() === '') {
                document.getElementById('passwort_login_error').innerHTML = "Bitte gib ein Passwort ein.";
                errors = true;
            } else if (document.querySelector('#passwort_login').value.length < 6) {
                document.getElementById('passwort_login_error').innerHTML = "Das Passwort muss mindestens 6 Zeichen enthalten";
                errors = true;
            } else {
                document.getElementById('passwort_login_error').innerHTML = "";
            }
        }

        if (errors) {
            evt.preventDefault();
        }

    });
});