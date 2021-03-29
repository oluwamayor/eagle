<?php
	$mine = "princemayor96@gmail.com";
	use PHPMailer\PHPMailer\PHPMailer;

	if (isset($_POST['cmt'])) {
		$con = new mysqli("localhost","eaglhwox_user",";e3k..6-#63_","eaglhwox_datas");

		$fname = $con -> real_escape_string($_POST['fname']);
    $email = $con -> real_escape_string($_POST['email']);
		$phone = $con -> real_escape_string($_POST['phone']);
		$msg   = $con -> real_escape_string($_POST['msg']);
      	
		$isValid = true;

		// Check fields are empty or not
		if($fname == '' || $email == '' || $phone == '' ||  $msg == '' )
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
			
		
	
				$con->query("INSERT INTO contact (fname,email,phone,msg )
					VALUES ('$fname','$email','$phone', '$msg' );
				");
             
               	   include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer();
                $mail->setFrom('contact@eaglevisionltd.com');
                $mail->addAddress($mine);
                $mail->Subject = "Message From Contact Page";
                $mail->isHTML(true);
                $mail->Body = "
               <strong> Full Name:</strong>     $fname<br>
               <strong> Phone Number:</strong>   $phone<br>
               <strong> Email:       </strong>   $email<br>
               <strong> Message:     </strong>   $msg
                
                ";

                if ($mail->send())
                          echo "
            <script type=\"text/javascript\">
            Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your appointment has been booked',
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





