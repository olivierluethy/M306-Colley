<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <title>Error Page</title>
</head>

<body>
    <?php
    // Check if the user is already logged in, if yes then redirect him to index page
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: home");
        exit;
    }else if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header("location: loginRegister");
    }else if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Include config file
        require_once "config.php";
    
        // Define variables and initialize with empty values
        $username = $password = $confirm_password = "";
        $username_err = $password_err = $confirm_password_err = "";
    
        // Processing form data when form is submitted
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["email_register"]);

            // Close statement
            unset($stmt);
        }
        
        // Validate password
        if(empty(trim($_POST["passwort_register"]))){
            $password_err = "Please enter a password.";     
        } elseif(strlen(trim($_POST["passwort_register"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST["passwort_register"]);
        }
        
        // Validate confirm password
        if(empty(trim($_POST["passwort_verify"]))){
            $confirm_password_err = "Please confirm password.";     
        } else{
            $confirm_password = trim($_POST["passwort_verify"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
        }
    
        // Check input errors before inserting in database
        if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){  
            // Prepare an insert statement
            $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
            
            if($stmt = $pdo->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
                $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
                
                // Set parameters
                $param_email = $param_email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    
                    // Prepare a select statement
                    $sql = "SELECT id, email, password FROM users WHERE email = :email";

                    if($stmt = $pdo->prepare($sql)){
                        // Bind variables to the prepared statement as parameters
                        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                        
                        // Set parameters
                        $email = $param_email;
                        
                        // Attempt to execute the prepared statement
                        if($stmt->execute()){
                            // After register is successful, auto login
                            if($stmt->rowCount() == 1){
                                if($row = $stmt->fetch()){
                                    $id = $row["id"];
                                    $email = $row["email"];
                                    $hashed_password = $row["password"];
                                    if(password_verify($password, $hashed_password)){
                                        // Password is correct, so start a new session
                                        session_start();
            
                                        // Store data in session variables
                                        $_SESSION["loggedin"] = true;
                                        $_SESSION["id"] = $id;
                                        $_SESSION["email"] = $email;
            
                                        // Redirect user to index page
                                        header("location: home");
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
                        unset($stmt);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                unset($stmt);
            }
        }
        // Close connection
        unset($pdo);
    }    
?>
</body>

</html>