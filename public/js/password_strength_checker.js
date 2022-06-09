const indicator = document.querySelector(".indicator");
const input = document.getElementById("passwort_register");
const weak = document.querySelector(".weak");
const medium = document.querySelector(".medium");
const strong = document.querySelector(".strong");
const text = document.querySelector(".text");

function trigger() {
    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

    if (strongRegex.test(input.value)) {
        document.querySelector(".weak").style.backgroundColor = "white";
        document.querySelector(".medium").style.backgroundColor = "white";
        document.querySelector(".strong").style.backgroundColor = "green";
        document.querySelector(".text").innerHTML = "Your Password Is Strong";
    } else if (mediumRegex.test(input.value)) {
        document.querySelector(".weak").style.backgroundColor = "white";
        document.querySelector(".medium").style.backgroundColor = "orange";
        document.querySelector(".strong").style.backgroundColor = "white";
        document.querySelector(".text").innerHTML = "Your Password Is Medium";
    } else if (input.value.length == 0) {
        document.querySelector(".text").innerHTML = "Enter A Password";
        document.querySelector(".weak").style.backgroundColor = "white";
        document.querySelector(".medium").style.backgroundColor = "white";
        document.querySelector(".strong").style.backgroundColor = "white";
    } else {
        document.querySelector(".weak").style.backgroundColor = "red";
        document.querySelector(".medium").style.backgroundColor = "white";
        document.querySelector(".strong").style.backgroundColor = "white";
        document.querySelector(".text").innerHTML = "Your Password Is Weak";
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