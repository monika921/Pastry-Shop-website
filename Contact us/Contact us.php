<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ConForm</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Qahiri&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="container">
                <form method="POST">
                    <h1>SAY HELLO</h1>
                    <h2>WE ARE ALWAYS READY TO SERVE</h2>
                    <input type="text" placeholder="Name" name="Name" class="form-control">&nbsp;<br>
                    <input type="email" placeholder="E-mail" name="Email" class="form-control">&nbsp;<br>
                    <textarea rows="3" placeholder="Message" name="Message" class="form-control"></textarea>&nbsp;<br>
                    <button type="submit" name="Login">SEND</button>
                </form>            
            </div>
            <!--<div class="image">
                <img src="#">
            </div>-->
        </div>
        <?php
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            require('PHPMailer/Exception.php');
            require('PHPMailer/SMTP.php');
            require('PHPMailer/PHPMailer.php');
            if(isset($_POST['Login']))
            {
                $name = $_POST['Name'];
                $email = $_POST['Email'];
                $message = $_POST['Message'];

                $mail = new PHPMailer(true);
                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'devimonika1118@gmail.com';                     //SMTP username
                    $mail->Password   = 'samhmonika@2003';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption - ::ENCRYPTION_SMTPS - 465
                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                    //Recipients
                    $mail->setFrom('devimonika1118@gmail.com', 'Monika Devi');
                    $mail->addAddress('devimonika1118@gmail.com');     //Add a recipient
                    /*$mail->addAddress('ellen@example.com');               //Name is optional
                    $mail->addReplyTo('info@example.com', 'Information');
                    $mail->addCC('cc@example.com');
                    $mail->addBCC('bcc@example.com');*/
                
                    //Attachments
                    /*$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name */
                
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Contact us';
                    $mail->Body    = "Name: $name <br> Email: $email <br> Message: $message";
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                
                    $mail->send();
                    echo "<script>alert('Message has been sent')</script>";
                    } catch (Exception $e) {
                    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
                    }
                
            }
        ?>
    </body>

</html>