<?php

    //include required phpmailer files
    require 'includes/PHPMailer/PHPMailer.php';
    require 'includes/PHPMailer/SMTP.php';
    require 'includes/PHPMailer/Exception.php';

    //definie name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\ExceptionPMailer;

    $result = "";
    
    

    if(isset($_POST['submit'])){
     
    $host = "192.3.190.242";
    $username = "peterob2_dpx";
    $password = "1Digital$";
    $database = "peterob2_dpx";

    $con = mysqli_connect("$host", "$username", "$password", "$database");
    
    if(!$con){
        echo "true";
    }
    
   

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $date = date('Y-m-d');

    $sql = "INSERT INTO contact (name, email, phone, subject, message, date) VALUES ('$name', '$email', '$phone', '$subject', '$message', '$date')";
    
		$result = mysqli_query($con,$sql);
    if($result){
      $result = '<div class="alert alert-success" role="alert">
    Thank You <strong>' .$name. '</strong>. We Will Respond Shortly! You can send us a message on <a href="https://api.whatsapp.com/send?phone=2348128977744">Whatsapp</a>
    </div>';
    
    
        //create instance of phpmailer
        $mail = new PHPMailer();

        //set mailer to use smtp
        //$mail -> SMTPDebug = 2;
        $mail -> isSMTP();

        //define smtp host
        //$mail -> Host = 'smtp.zoho.in';
        $mail -> Host = 'info@digitalplanetx.tech';

        //enable smtp authentication
        $mail -> SMTPAuth = true;

        //set smtp encryption type (ssl/tls)
        $mail -> SMTPSecure = "tls";

        //port to connect smtp
        $mail -> Port = 587;

        //set username
        $mail -> Username = "info@digitalplanetx.tech";

        //set gmail password
        $mail -> Password = "q]4jUX~8~8Ny";

        //email subject
        $mail -> Subject = 'SWITCH';

        $mail -> setFrom('info@digitalplanetx.tech
        ', 'Digital Planet X');

        //enable html
        $mail -> isHTML(true);

       
        
        $mail -> Body = 'HI ' .$name .', Thank you for sending us a message, we will respond to you shortly.     <br> You can also send us a get to us on whatsapp
        <a href="https://api.whatsapp.com/send?phone=2348128977744"><h3> WHATSAPP CHAT</h3> </a>
        <br>
        Cheers...
    ';
    //add recipient
    $mail -> addAddress($email);
  } else { 
    echo 'error';
    }
    
     //closing smtp connection
        $mail ->smtpClose();
  }
   

  
        //create instance of phpmailer
        $mail = new PHPMailer();

        //set mailer to use smtp
        //$mail -> SMTPDebug = 2;
        $mail -> isSMTP();

        //define smtp host
        //$mail -> Host = 'smtp.zoho.in';
        $mail -> Host = 'info@digitalplanetx.tech';

        //enable smtp authentication
        $mail -> SMTPAuth = true;

        //set smtp encryption type (ssl/tls)
        $mail -> SMTPSecure = "tls";

        //port to connect smtp
        $mail -> Port = 587;

        //set username
        $mail -> Username = "info@digitalplanetx.tech";

        //set gmail password
        $mail -> Password = "q]4jUX~8~8Ny";

        //email subject
        $mail -> Subject = 'SWITCH';

        $mail -> setFrom('info@digitalplanetx.tech
        ', 'Digital Planet X');

        //enable html
        $mail -> isHTML(true);

       


        //email body
//      $mail -> Body = 'HI ' .$_POST['fname'] .', This is a test mail for SWITCH Conference registration...';
        $mail -> Body = 'Hi ';
        $mail -> addAddress('greatfoaventures@gmail.com');
        
        

        //finally send email
        // if ($mail -> send()) {
        //    echo "great!";
        // } else {
        //     echo "not again!";
        // }

        // //closing smtp connection
        // $mail ->smtpClose();
    
?>


<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Contact</span>
                <h2 class="mb-4">Contact Us</h2>
                <p>We are available, and ready to meet your every need. <br> Let's hear from you soon, we'd be glad to
                    respond</p>
            </div>
        </div>
        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-4">Address</h3>
                    <p>Office CM82, Karu Shopping Complex, Karu Abuja</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel:+2348128977744">+234 812 8977 744</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="info@digitalplanetx.tech">info@digitalplanetx.tech</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <h3 class="mb-4">Website</h3>
                    <p><a href="digitalplanetx.tech">Digitalplanetx.tech</a></p>
                </div>
            </div>
        </div>
        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">

                <form action=""  method="POST" class="bg-light p-5 contact-form">
                    <h5 class="text-center text-success"><?= $result; ?></h5>
                    </h1>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" minlength="3"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="4" class="form-control" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d15760.258525375433!2d7.4922513!3d9.0578695!3m2!1i1024!2i768!4f13.1!2m1!1sjboc%20foundation!5e0!3m2!1sen!2sng!4v1664475136650!5m2!1sen!2sng"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>