<?php
// Initialize the session
session_destroy();
session_start();
$_SESSION['email'] = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/loginRegister.css">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <title>Login / Register</title>
</head>

<body>
    <div class="title">
        <h1>Colley</h1>
    </div>
    <table class="logintable">
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>
                <div class="login">
                    <h2>Login</h2>
                    <p>Willkommen zurück bei Colley.</p>
                    <p>Bitte melden Sie sich an.</p>
                    <form id="formLogin" action="login" method="POST">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email_login" name="email_login">
                        <p id="email_login_error"></p>
                        <label for="passwort">Passwort:</label>
                        <input type="password" id="passwort_login" name="passwort_login">
                        <p id="passwort_login_error"></p>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </td>
            <td>
                <div class="divider"></div>
            </td>
            <td>
                <div class="newAccount">
                    <h2>neuer Account</h2>
                    <p>Willkommen bei Colley.</p>
                    <p>Noch kein Konto? Kein Problem.</p>
                    <p>Bitte erstellen Sie ein Konto.</p>
                    <form id="formRegister" action="register" method="POST">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email_register" name="email_register">
                        <p id="email_register_error"></p>
                        <label for="passwort">Passwort:</label>
                        <input type="password" id="passwort_register" name="passwort_register">
                        <p id="passwort_register_error"></p>
                        <label for="passwort_verify">Passwort:</label>
                        <input type="password" id="passwort_verify" name="passwort_verify">
                        <p id="passwortverify_register_error"></p>
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
            </td>
        </tr>
    </table>

    <script src="public/js/clientSideValidationRegister.js"></script>
    <script src="public/js/clientSideValidationLogin.js"></script>
</body>

</html>