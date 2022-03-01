<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <title>Passwort zurücksetzen</title>
</head>

<body>

<div class="passwortZuruecksetzen">
<h1>Bitte geben Sie hier ihre Email Adresse ein</h1>
    <form action="email_versenden" method="POST">
        <label for="fname">Email:</label><br>
        <input type="text" id="fname" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</div>

</body>

</html>