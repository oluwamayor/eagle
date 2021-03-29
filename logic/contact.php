<?php

	use PHPMailer\PHPMailer\PHPMailer;
    require_once 'PHPMailer/Exception.php';
    require_once 'PHPMailer/PHPMailer.php';
    require_once 'PHPMailer/SMTP.php';

     $mail = new PHPMailer(true); 

	if (isset($_POST['contactbtn'])) {
	
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
        $email = $_POST['email'];
		$msg   = $_POST['msg'];
      
		// Check fields are empty or not
		if($fname == '' || $lname == '' || $phone == ''   || $email == '' || $msg== '')
		{
			
            echo "
            <script type=\"text/javascript\">
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Fill all fields!!'
              
            })
            </script>
        ";
		}
		
			elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	
              echo "
              <script type=\"text/javascript\">
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Invalid Email!'
                
              })
              </script>
          ";
		  	
		}
      
			elseif (strlen($phone) < 11 || strlen($phone) > 11 ) {
              echo "
              <script type=\"text/javascript\">
              Swal.fire({
                icon: 'error',
                title: 'not possible...',
                text: 'phone number must be 11 digits'
                
              })
              </script>
          ";
		  	
		}
	
        else{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'demot342@gmail.com'; // Gmail address which you want to use as SMTP server
            $mail->Password = 'demot_$$78'; // Gmail address Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = '587';
        
            $mail->setFrom('demot342@gmail.com'); // Gmail address which you used as SMTP server
            $mail->addAddress('princemayor96@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
        
            $mail->isHTML(true);
            $mail->Subject = 'Message Received (Contact Page)';
            $mail->Body = "<h3>First Name : $name <br> Last Name : $lname <br> Email: $email <br>Phone Number : $phone <br> Message : $msg</h3>";
        
            $mail->send();
            echo "
            <script type=\"text/javascript\">
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Message Sent! Thank you for contacting us',
            showConfirmButton: false,
            timer: 3500
                     })
            </script>
        ";
          }
	}
?>





