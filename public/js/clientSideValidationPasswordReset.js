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

        if (document.querySelector('#password') != null) {
            if (document.querySelector('#password').value.trim() === '') {
                document.getElementById('password_error').innerHTML = "Bitte Passwort eingeben.";
                document.querySelector("#password").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else if (document.querySelector('#password').value.length < 6) {
                document.getElementById('password_error').innerHTML = "Passwort muss mindestens 6 Zeichen enthalten";
                document.querySelector("#password").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else {
                document.getElementById('password_error').innerHTML = "";
                document.querySelector("#password").style = "border: 5px solid #ccc";
            }
        }

        if (document.querySelector('#passwort_again') != null) {
            if (document.querySelector('#passwort_again').value.trim() === '') {
                document.getElementById('passwortverify_again_error').innerHTML = "Bitte Passwort erneut eingeben.";
                document.querySelector("#passwort_again").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else if (document.querySelector('#password').value != document.querySelector('#password_again').value) {
                document.getElementById('password_again_error').innerHTML = "Nicht das gleiche Passwort.";
                document.querySelector("#password").style = "border: 5px solid #ff4d4d";
                document.querySelector("#password_again").style = "border: 5px solid #ff4d4d";
                errors = true;
            } else {
                document.getElementById('password_again_error').innerHTML = "";
                document.querySelector("#password").style = "border: 5px solid #ccc";
            }
        }

        if (errors) {
            evt.preventDefault();
        } else {
            alert('es hat geklappt!');
        }
    });
});