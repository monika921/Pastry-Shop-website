<?php
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $visitor_email = $_POST["email"];
        $message = $_POST["message"];

        /*$email_from = '#';*/
        $to = "devimonika1118@gmail.com";   /*<!---- Add your email*/
        $email_subject = "New Form Submission";
        $email_body = "User Name: ".$name. "\n".
                            "User Email: ".$visitor_email. "\n".
                                "User Message: ".$message. "\n";
        $headers = "From: ".$visitor_email;   //this is the headers   
        if(mail($to, $email_subject, $email_body, $headers)) //the mail function
        {
            echo "Email has been sent! Thank you"." ".$name; 
        }
        else
        {
            "Something went wrong";
        }
    }      
?>
<!---- $headers .= "Reply-To: $visitor_email \r\n";
        header("location: Contact.html"); ---->