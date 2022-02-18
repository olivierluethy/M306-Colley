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
            <form action="/action_page.php">
  <label for="fname">E-mail:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Passwort:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Login">
</form>
        </div>
        <div class="divider"></div>
        <div class="newAccount">
            <h2>neuer Account</h2>
            <p>Willkommen bei Colley.</p>
            <p>Noch kein Konto? Kein Problem. Bitte erstellen Sie in Konto.</p>
            <form action="/action_page.php">
  <label for="fname">E-mail:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Passwort:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="lname">Passwort:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Sign Up">
</form>
        </div>
    </div>
</body>
</html>