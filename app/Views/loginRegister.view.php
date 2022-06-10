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
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <title>Login / Register</title>
</head>

<body>
    <div class="title">
        <h1>Colley</h1>
    </div>
    <table class="logintable margin-auto">
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>
                <div class="login">
                    <p id="passwort_login_error"></p>
                    <p id="email_login_error"></p>

                    <h2>Login</h2>
                    <p>Willkommen zurück bei Colley.</p>
                    <p>Bitte melden Sie sich an.</p>
                    <form id="formLogin" action="login" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="email">E-mail:</label>
                                </td>
                                <td>
                                    <?php
                                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                                            echo "<input type='email' id='email_login' name='email_login' placeholder='E-Mail-Adresse' value=". $_POST["email"] .">";
                                        }else{
                                            echo "<input type='email' id='email_login' name='email_login' placeholder='E-Mail-Adresse'>";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="passwort">Passwort:</label>
                                </td>
                                <td>
                                    <input type="password" id="passwort_login" name="passwort_login"
                                        placeholder="Passwort">
                                </td>
                            </tr>
                        </table>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </td>
            <td>
                <div class="divider"></div>
            </td>
            <td>
                <div class="newAccount">
                    <p id="email_register_error"></p>
                    <p id="passwort_register_error"></p>
                    <p id="password_strength_error"></p>
                    <p id="passwortverify_register_error"></p>

                    <h2>Neuer Account</h2>
                    <p>Willkommen bei Colley.</p>
                    <p>Noch kein Konto? Kein Problem.</p>
                    <p>Bitte erstellen Sie ein Konto.</p>

                    <form id="formRegister" action="register" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="email">E-mail:</label>
                                </td>
                                <td>
                                    <input type="email" id="email_register" name="email_register"
                                        placeholder="E-Mail-Adresse">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="passwort">Passwort:</label>
                                </td>
                                <td>
                                    <input onkeyup="trigger()" type="password" id="passwort_register"
                                        name="passwort_register" placeholder="Passwort">
                                </td>
                                <td>
                                <div class="showBtn" title="Show Password By Clicking On It">SHOW</div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="password_strength_area">
                                        <div class="indicator">
                                            <span class="weak"></span>
                                            <span class="medium"></span>
                                            <span class="strong"></span>
                                        </div>
                                        <div class="text">Enter A Password</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="passwort_verify">Passwort:</label>
                                </td>
                                <td>
                                    <input type="password" id="passwort_verify" name="passwort_verify"
                                        placeholder="Passwort erneut eingeben">
                                </td>
                                <td></td>
                            </tr>
                        </table>
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
            </td>
        </tr>
    </table>

    <script src="public/js/password_strength_checker.js"></script>
    <script src="public/js/clientSideValidationRegister.js"></script>
    <script src="public/js/clientSideValidationLogin.js"></script>
</body>

</html>