const indicator = document.querySelector(".indicator");
const input = document.getElementById("passwort_register");
const weak = document.querySelector(".weak").style;
const medium = document.querySelector(".medium").style;
const strong = document.querySelector(".strong").style;
const text = document.querySelector(".text");
const feedback = document.getElementById("password_feedback");
let isPasswordReady = false;

feedback.innerHTML = "Dein Passwort muss enthalten:<br>" +
    "× Mindestens 6 Zeichen<br>" +
    "× Grossbuchstaben<br>" +
    "× Kleinbuchstaben<br>" +
    "× Ein Sonderzeichen<br>" +
    "× Zahlen";

function trigger() {
    /* Für Passwort-Feedback*/
    var hasNumber = new RegExp("(?=.*[0-9])");
    var hasCapitalLetter = new RegExp("(?=.*[A-Z])");
    var hasLowerCaseLetter = new RegExp("(?=.*[a-z])");
    var hasSpecialCharacter = new RegExp("(?=.*[^A-Za-z0-9])");
    var hasEightCharacters = new RegExp("(?=.{8,})");
    feedback.innerHTML = "";

    /* Enthält Zahl */
    if (hasNumber.test(input.value)) {
        feedback.innerHTML += "✓ Zahlen<br>";
    } else {
        feedback.innerHTML += "× Zahlen<br>";
    }

    /* Enthält Grossbuchstaben */
    if (hasCapitalLetter.test(input.value)) {
        feedback.innerHTML += "✓ Grossbuchstaben<br>";
    } else {
        feedback.innerHTML += "× Grossbuchstaben<br>";
    }

    /* Enthält Kleinbuchstaben */
    if (hasLowerCaseLetter.test(input.value)) {
        feedback.innerHTML += "✓ Kleinbuchstaben<br>";
    } else {
        feedback.innerHTML += "× Kleinbuchstaben<br>";
    }

    /* Enthält Sonderzeichen */
    if (hasSpecialCharacter.test(input.value)) {
        feedback.innerHTML += "✓ Sonderzeichen<br>";
    } else {
        feedback.innerHTML += "× Sonderzeichen<br>";
    }

    /* Enthält mindestens acht Zeichen */
    if (hasEightCharacters.test(input.value)) {
        feedback.innerHTML += "✓ Mindestens 8 Zeichen<br>";
    } else {
        feedback.innerHTML += "× Mindestens 8 Zeichen<br>";
    }

    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

    if (strongRegex.test(input.value)) {
        weak.backgroundColor = "white";
        medium.backgroundColor = "white";
        strong.backgroundColor = "green";
        isPasswordReady = true;
        text.innerHTML = "Your Password Is Strong";
    } else if (mediumRegex.test(input.value)) {
        weak.backgroundColor = "white";
        medium.backgroundColor = "orange";
        strong.backgroundColor = "white";
        isPasswordReady = false;
        text.innerHTML = "Your Password Is Medium";
    } else if (input.value.length == 0) {
        text.innerHTML = "Enter A Password";
        weak.backgroundColor = "white";
        medium.backgroundColor = "white";
        strong.backgroundColor = "white";
        isPasswordReady = false;
    } else {
        weak.backgroundColor = "red";
        medium.backgroundColor = "white";
        strong.backgroundColor = "white";
        text.innerHTML = "Your Password Is Weak";
        isPasswordReady = false;
    }
}

document.querySelector(".showBtn").addEventListener("mousedown", function() {
    var x = document.getElementById("passwort_register");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
})

document.querySelector(".showBtn").addEventListener("mouseup", function() {
    var x = document.getElementById("passwort_register");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
})