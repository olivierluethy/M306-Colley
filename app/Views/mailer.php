<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/mail.css">
    <title>Passwort zurücksetzen</title>
</head>

<body>
    <?php

require 'mailer/PHPMailer.php';
require 'mailer/Exception.php';
require 'mailer/OAuth.php';
require 'mailer/POP3.php';
require 'mailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Dies ist eine Funktion
 * @author Hans
 * @param result hfjdghd
 * @return hdsuhfds
 */
function sendMail($emailDirection)
{

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'mail.gmx.ch';
        $mail->SMTPAuth = true;
        $mail->Username = "colley@gmx.ch";
        $mail->Password = "Salade1357ol@colley";
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ),
        );

        /* Hier wird der Betreff hinzugefügt */
        $mail->setFrom("colley@gmx.ch", 'Colley Support');
        /* An wem soll das Mail verschickt werden */
        $rec = $_SESSION["emailDirection"];
        $mail->addAddress($rec);

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        /* Hier kommt der Betreff */
        $mail->Subject = "Passwort zurücksetzen - Bitte keine Antwort versenden";
        /* Hier kommt die Nachricht */
        /* https://github.com/PHPMailer/PHPMailer/issues/1119 */
        $mail->Body = "
        <html>
        <head>
            <title>Email</title>
        </head>
        <body>
        <style>
        body {
            margin: 0;
            padding: 0;
            text-align: center;
            font-family: Arial;
            background-color: lightgray;
        }
        .container {
            background-color: white;
            border-radius: 3px;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        h2 {
            padding-top: 2rem;
        }
        p:nth-child(4) {
            padding-bottom: 2rem;
        }
        button {
            background-color: royalblue;
            border: 1px solid royalblue;
            color: white;
            width: 50%;
            padding: 16px 32px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition: 0.5s ease;
            text-decoration: none;
            cursor: pointer;
        }
        button:hover {
            transition: 0.5s ease;
            color: royalblue;
            background-color: white;
            cursor: pointer;
        }
        input[type=text]{
            display: none;
        }
        </style>
        <h1>Colley</h1>
            <div class='container'>
                <h2>Passwort zurücksetzen</h2>
                <p>Falls Sie ihr Passwort vergessen haben, verwenden Sie bitte den Link unten um es zurücksetzen zu können.</p>
                <form action='http://localhost/M306-Colley/passwort_zuruecksetzen' method='POST'>
                    <input type='text' name='email' id='email' value='$rec'>
                    <button type='submit'>Setzen Sie ihr Passwort zurück</button>
                </form>
                <p>Falls sie ihr Passwort nicht zurücksetzen wollen, können sie diese email ignorieren. Nur eine Person die zugriff auf ihre Email-Adresse hat, kann ihr Passwort zurücksetzen.</p>
            </div>
        </body>
        </html>";
        $mail->AltBody = 'Sie verwenden einen alten Email-Klient. Daher kann der Inhalt nicht dargestellt werden.';
        $mail->send();
        echo "<div class='emailSended'>
                <h2>Email wurde gesendet</h2>
                <a href='loginRegister'><button class='back'>Zurück</button></a>
                <p>Falls Sie keine Email erhalten haben, schauen sie bitte in ihrem Spam Ordner nach!</p>
            <div>";
    } catch (Exception $e) {
        echo "Fehler: " . $e;
        return "Auftrag wurde aktualisiert, aber die Email konnte nicht gesendet werden.";
    }
}
?>
</body>

</html>