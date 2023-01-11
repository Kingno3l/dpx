<?php

    //include required phpmailer files
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';

    //definie name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\ExceptionPMailer;
    
  

  
  
    //else{
      //  echo 'Data Not Inserted';
    //}
    
	
        //create instance of phpmailer
        $mail = new PHPMailer();

        //set mailer to use smtp
        //$mail -> SMTPDebug = 2;
        $mail -> isSMTP();

        //define smtp host
        //$mail -> Host = 'smtp.zoho.in';
        $mail -> Host = 'smtp.gmail.com';

        //enable smtp authentication
        $mail -> SMTPAuth = true;

        //set smtp encryption type (ssl/tls)
        $mail -> SMTPSecure = "tls";

        //port to connect smtp
        $mail -> Port = 587;

        //set username
        $mail -> Username = "nuelluiz@gmail.com";

        //set gmail password
        $mail -> Password = "jpgyjkrjdctmsjwg";

        //email subject
        $mail -> Subject = 'SWITCH';

        $mail -> setFrom('nuelluiz@gmail.com', 'Team SWITCH');

        //enable html
        $mail -> isHTML(true);

       


        //email body
//      $mail -> Body = 'HI ' .$_POST['fname'] .', This is a test mail for SWITCH Conference registration...';
        $mail -> Body = 'Hi ';
        $mail -> addAddress('greatfoaventures@gmail.com');
        
        

        //finally send email
        if ($mail -> send()) {
           echo "great!";
        } else {
            $result = "not again!";
        }

        //closing smtp connection
        $mail ->smtpClose();
    
?>
