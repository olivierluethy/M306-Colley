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
                document.querySelector('#email_login').insertAdjacentHTML("afterend", "<label class=\"warning\"> Bitte gib eine E-Mail Adresse ein.</label>");
                errors = true;
            }
        }

        if (document.querySelector('#passwort_login') != null) {
            if (document.querySelector('#passwort_login').value.trim() === '') {
                document.querySelector('#passwort_login').insertAdjacentHTML("afterend", "<label class=\"warning\"> Bitte gib ein Passwort ein.</label>");
                errors = true;
            }
        }

        if (errors) {
            evt.preventDefault();
        }

    });
});