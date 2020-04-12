<?php

    

    session_start();

    

    include 'error_suppress.php';



    function validateData($data) 

    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    

    $name=validateData($_POST["name"]);

    $phno=validateData($_POST["phno"]);

    $email=validateData($_POST["email"]);   

    $message=validateData($_POST["message"]);        

    

     if (!preg_match("/^[a-zA-Z. ]*$/",$name))

     {

         $_SESSION['isSuccessfull']='INVALID';

     }

     else if(!preg_match("/^[a-zA-Z0-9!. ]*$/",$message))

     {

         $_SESSION['isSuccessfull']='INVALID';		        

     }

     

     else

     {

        $toemail = "support@nssinfotech.com";

    

        $message_to_send="New Enquiry !!\nDetails are listed below :-\n\n"

            . "Enquirer : ".$name."\n"

            . "Contact Number : ".$phno."\n"

            . "Email Id : ".$email."\n\n"

            . "Enquiry Message : ".$message;

        if(mail($toemail, 'New Enquiry', $message_to_send)) 

        {

            $_SESSION['isSuccessfull']='OK';

        }

        else 

        {

            $_SESSION['isSuccessfull']='FAIL';

        }

     }

     

     /*Page Redirection*/

     echo "<script type=\"text/javascript\">window.location = \"contactUs\";</script>";     

?>

