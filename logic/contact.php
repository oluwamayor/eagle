<?php

	use PHPMailer\PHPMailer\PHPMailer;

	if (isset($_POST['contactbtn'])) {
	
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
        $email = $_POST['email'];
		$msg   = $_POST['msg'];
      
		// Check fields are empty or not
		if($fname == '' || $lname == '' || $phone == ''   || $email == '' || $msg== '')
		{
			$isValid = false;
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
		
			elseif ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	$isValid = false;
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
	
		else {
			
		     
               	   include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer();
                $mail->setFrom($email);
                $mail->addAddress('princemayor96@gmail.com');
                $mail->Subject = "Message Received (Contact Page)";
                $mail->isHTML(true);
                $mail->Body = "<h3>First Name : $fname <br>Last Name : $lname <br Email: $email <br>Contact : $phone <br Message : $msg</h3>";

                if ($mail->send())
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
                else
                           echo "
              <script type=\"text/javascript\">
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something Happened. Try again!!'
                
              })
              </script>
          ";
			
		}
	}
?>





