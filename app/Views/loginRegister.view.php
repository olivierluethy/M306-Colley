<?php
// Initialize the session
session_start();
session_destroy();
session_start();
$_SESSION['email'] = "";

// Check if the user is already logged in, if yes then redirect him to index page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/loginRegister.css">
    <title>Login / Register</title>
</head>
<body>
    <h1>Colley</h1>
    <div class="area">
        <div class="login">
            <h2>Login</h2>
            <p>Willkommen zurück bei Colley.</p>
            <p>Bitte melden Sie sich an.</p>
            <form id="formLogin" action="login" method="POST">
                <label for="email">E-mail:</label>
                <input type="email" id="email_login" name="email_login"><br><br>
                <label for="passwort">Passwort:</label>
                <input type="password" id="passwort_login" name="passwort_login"><br><br>
                <button class="login" type="submit">Login</button>
            </form>
        </div>
        <div class="divider"></div>
        <div class="newAccount">
            <h2>neuer Account</h2>
            <p>Willkommen bei Colley.</p>
            <p>Noch kein Konto? Kein Problem. Bitte erstellen Sie in Konto.</p>
            <form id="formRegister" action="register" method="POST">
                <label for="email">E-mail:</label>
                <input type="email" id="email_register" name="email_register"><br><br>
                <label for="passwort">Passwort:</label>
                <input type="password" id="passwort_register" name="passwort_register"><br><br>
                <label for="passwort_verify">Passwort:</label>
                <input type="password" id="passwort_verify" name="passwort_verify"><br><br>
                <button class="newAccount" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <script src="../public/js/clientSideValidationRegister.js"></script>
    <script src="../public/js/clientSideValidationLogin.js"></script>
</body>
</html>