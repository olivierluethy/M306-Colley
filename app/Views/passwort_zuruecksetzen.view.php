<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <title>Passwort zurücksetzen</title>
</head>
<body>
    <h1>Setzen sie hier ihr Passwort zurück</h1>

    <p id="password_error"></p>
    <p id="password_again_error"></p>
    <p id="password_not_equal"></p>
    <p id="password_again_error"></p>
    
    <form action="password_zuruecksetzen" method="POST">
        <label for="Passwort">Passwort:</label>
        <input type="password" name="password" id="password">

        <label for="Passwort">Passwort bestätigen:</label>
        <input type="password" name="password_again" id="password_again">
        <button type="submit">Enter</button>
    </form>
    <script src="public/js/clientSidePasswordReset.js"></script>
</body>
</html>