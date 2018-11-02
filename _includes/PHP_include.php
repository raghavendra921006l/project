<?php
$alert_id = 0;
$alert_message = "";
$alert_class = "";
$alert_strong = "";
if (isset($_POST['submit_forget_password'])) {
    $emailid = $_POST['email'];
    $login_control = new Login_Control();
    $result = $login_control->getForget_Password($emailid);
    $count = sizeof($result);
    if ($count <= 0) {
        $alert_id = 1;
        $alert_message = "Email DoesNot Exists";
        $alert_class = "alert alert-danger";
        $alert_strong = "Danger!!";
    } else {
        if ($result[0]->status != 1) {
            $alert_id = 1;
            $alert_message = "Please Verify Account First";
            $alert_class = "alert alert-warning";
            $alert_strong = "Warning!!";
        } else {
            $password = $result[0]->pwd;
            $message = " Your email id is:  " . $emailid . "password is :  " . $password;
            //email send code
            require_once "../_pluggins/PhpMailer/PHPMailerAutoload.php";
            $to = $emailid;

            $body = $message;
            $subject = 'E Learning Portal Account Password Recover';
            $mail = new PHPMailer();
            $mail->isSMTP();

            $mail->Debugoutput = 'html';
            //Set the hostname of the mail server
            $mail->Host       = "server18.hostingraja.in";
            //Set the SMTP port number - likely to be 25, 465 or 587
            $mail->Port       = 25;
            //Whether to use SMTP authentication
            $mail->SMTPAuth   = true;
            //Username to use for SMTP authentication
            $mail->Username   = "notifier@provoid.com";
            //Password to use for SMTP authentication
            $mail->Password   = "provoid@123";

            $mail->From = 'notifier@provoid.com';
            $mail->FromName = 'E Learning Portal'; //sender name
            $mail->addReplyTo('notifier@provoid.com', 'Reply Address');
            $mail->addAddress($to, 'E Learning Portal User'); //receipt email
            $mail->isHTML(true); //for sending html in email
            //$mail->addAttachment('images/logo.png','Elearning.png');
            $mail->Subject = $subject;
            $mail->Body = '<div style="background-color:#e0e6eb;width:400px;border:1px solid #3d84e6;padding:25px;margin:25px; color:black;"><h2 style="background-color:#3d84e6;color:white;">E Learning Portal Password Recovery</h2><br>Your Email Id is:- ' . $emailid . '<br>Password is: ' . $password . '</div>';
            $mail->AltBody = 'This is Alt Body';
            if ($mail->send()) {
                $alert_id = 1;
                $alert_message = "Email Send!!Check Your EmailID For Password";
                $alert_class = "alert alert-success";
                $alert_strong = "Success!!";
            } else {
                echo $mail->ErrorInfo;
            }
            //end of email send code
        }
    }
}
if (isset($_POST['submit_register'])) {
    try {
        $fstname = $_POST['firstname'];
        $lstname = $_POST['lastname'];
        $emailid = $_POST['emailid'];
        $pass = $_POST['password'];
        $newuser = new NewUser();
        $result = $newuser->getEmailExist($emailid);
        $alrdy_registered_Count = sizeof($result);
        if ($alrdy_registered_Count > 0) {
            $alert_id = 1;
            $alert_message = "EmailId Already Registered";
            $alert_class = "alert alert-warning";
            $alert_strong = "Warning! ";
        } else {
            $confirmationcode = rand();
            //write mail code here php mailer
            $message = "Verify Your Account By Click The Link Below " .  SITE_URL . "_view/emailconfirm.php?email=" . $emailid . "&code=" . $confirmationcode;
            //send email by gmail stmp setting here
            $to = $emailid;
            $body = $message;
            require_once "../_pluggins/PhpMailer/PHPMailerAutoload.php";
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;
            $mail->IsSMTP();
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug  = 0;
            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';
            //Set the hostname of the mail server
            $mail->Host       = "server18.hostingraja.in";
            //Set the SMTP port number - likely to be 25, 465 or 587
            $mail->Port       = 25;
            //Whether to use SMTP authentication
            $mail->SMTPAuth   = true;
            //Username to use for SMTP authentication
            $mail->Username   = "notifier@provoid.com";
            //Password to use for SMTP authentication
            $mail->Password   = "provoid@123";
            //Set who the message is to be sent from
            $mail->SetFrom('notifier@provoid.com', 'New Query for provoid');
            //Set an alternative reply-to address
            $mail->AddReplyTo("notifier@provoid.com", "No Replies");
            $mail->addAddress($to, 'Shyam'); //receipt email
            $mail->isHTML(true); //for sending html in email
            $mail->Subject = "E Learning Portal Email Verification";
            $mail->Body = '<div style="background-color:#e0e6eb;width:400px;border:1px solid #3d84e6;padding:25px;margin:25px; color:black;"><h2 style="background-color:#3d84e6;color:white;">E Learning Portal-Email Verification</h2>' . '<br>' . $message . '<h3>Thanks for Visiting E Learning Portal!!</h3>' . '</div>';
            $mail->AltBody = 'E Learning Portal SignUp ALt Body Text';
            if ($mail->send()) {
                $result = $newuser->setUser($fstname, $lstname, $emailid, $pass, $confirmationcode);
                $alert_id = 1;
                $alert_message = "Please Check Your Email and Verify Account";
                $alert_class = "alert alert-success";
                $alert_strong = "Success!! ";
            } else {
                $alert_id = 1;
                $alert_message = "Something Went Wrong..Please Register Again Later";
                $alert_class = "alert alert-danger";
                $alert_strong = "Danger!! ";
            }
            //end code for email verification
            //end of mail code here
        }


    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
if (isset($_POST['submit_contact_form'])) {
    $name = $_POST['fullname'];
    $email_address = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    require_once "../_pluggins/PhpMailer/PHPMailerAutoload.php";
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    $mail->Host = 'server18.hostingraja.in';
    $mail->Username = 'notifier@provoid.com';
    $mail->Password = 'provoid@123';
    $mail->Port = 25;
    $mail->From = 'notifier@provoid.com';
    $mail->FromName = 'E Learning Portal'; //sender name
    $mail->addReplyTo('notifier@provoid.com', 'Reply Address');
    $mail->addAddress('raghavendra921006l@gmail.com', 'User'); //receipt email
    $mail->isHTML(true); //for sending html in email
    $mail->Subject = $subject;
    $mail->Body = '<div style="background-color:#e0e6eb;width:400px;border:1px solid #3d84e6;padding:25px;margin:25px; color:black;"><h2 style="background-color:#3d84e6;color:white;">E Learning Portal-Contact Us</h2><br>' . $name . ' Contacted You<br>Email ID: ' . $email_address . '<br>Subject: ' . $subject . '<br>Message: ' . $message . '<h3>Thanks for Contacting E Learning Portal!!</h3>' . '</div>';
    $mail->AltBody = 'E Learning Portal Contact Us ALt Body Text';
    if ($mail->send()) {
        $alert_id = 1;
        $alert_message = "Thanks For Contacting E Learning Portal";
        $alert_class = "alert alert-success";
        $alert_strong = "Success!! ";
    } else {
        $alert_id = 1;
        $alert_message = "Something Went Wrong..Please Try Again Later";
        $alert_class = "alert alert-danger";
        $alert_strong = "Danger!! ";
    }
}
if (isset($_POST['submit_login'])) {
    try {
        $emailid = $_POST['email'];
        $pass = $_POST['password'];
        $login_control = new Login_Control();
        $result = $login_control->getLogin($emailid, $pass);
        $count = sizeof($result);
        if ($count <= 0) {
            header("Location:".SITE_URL);
        } else {

            if ($result[0]->status != 1) {
                $notverified = true;;
            } else {
                $dbusername = $result[0]->firstname . " " . $result[0]->lastname;
                $dbemail = $result[0]->email;
                $dbpassword = $result[0]->pwd;
                if ($emailid == $result[0]->email && $result[0]->is_admin == 0) {
                    session_start();
                    $_SESSION['sess_user'] = $emailid;
                    $_SESSION['name'] = $dbusername;
                    if (isset($_SESSION["sess_user"]) && isset($_SESSION["name"])) {
                        header("Location: ".SITE_URL."admin_panel/index");
                    }
                }
            }
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->POSTMessage();
    }
    $conn = null;
}
if(isset($_POST['btn_login_admin']))
{
    try
    {
        $email= $_POST['admin_email'];
        $pass= $_POST['admin_password'];
        $loginControl = new Login_Control();
        $result=$loginControl->getLogin($email,$pass);
        $count=sizeof($result);

        if($count>0)
        {        if($result[0]->email==$email && $result[0]->is_admin==1)
        {
            session_start();
            $_SESSION['sess_user']=$email;
            $_SESSION['name']=$result[0]->firstname." ".$result[0]->lastname;
            if(isset($_SESSION["sess_user"]) && isset($_SESSION["name"])) {
                if($result[0]->is_admin=='1' && $pass==$result[0]->pwd)
                    header("Location: ".SITE_URL."admin_panel/index");
            }
        }
        }
    }

    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->POSTMessage();
    }

    $conn = null;

}