<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Error Page</title>
</head>

<body>
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
}else if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header("location: loginRegister");
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if email is empty
    if (empty(trim($_POST["email_login"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email_login"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["passwort_login"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["passwort_login"]);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = $email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if email exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;

                            // Redirect user to index page
                            header("location: home");
                        } else {
                            // Display an error message if password is not valid
                            echo "<h2>The password you entered was not valid.</h2>";
                            echo "<a href='loginRegister'><button class='back'>Try again</button></a>";
                        }
                    }
                } else {
                    // Display an error message if email doesn't exist
                    echo "<h2>No account found with that email.</h2>";
                    echo "<a href='loginRegister'><button class='back'>Try again</button></a>";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>
</body>

</html>