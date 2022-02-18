<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginRegister");
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Colley - Homepage</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

<nav>
    <h1>Colley</h1>
</nav>

<script src="public/js/app.js"></script>
</body>
</html>
