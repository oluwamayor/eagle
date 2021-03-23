<?php
	$msg = "";
	use PHPMailer\PHPMailer\PHPMailer;

	if (isset($_POST['submit'])) {
		$con = new mysqli("localhost","eaglhwox_user",";e3k..6-#63_","eaglhwox_datas");

		$fname = $con -> real_escape_string($_POST['fname']);
		$lname = $con -> real_escape_string($_POST['lname']);
		$phone = $con -> real_escape_string($_POST['phone']);
        $email = $con -> real_escape_string($_POST['email']);
		$a_time= $con -> real_escape_string($_POST['a_time']);
        $a_date= $con -> real_escape_string($_POST['a_date']);
		$msg =   $con -> real_escape_string($_POST['msg']);

	
		$isValid = true;

		// Check fields are empty or not
		if($fname == '' || $lname == '' || $phone == ''   || $email == '' || $a_time == '' || $a_date == '' || $msg == '' )
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
		
			if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
      
		if($isValid) {
			
		
	
				$con->query("INSERT INTO appointment (fname,lname,phone,email,a_time,a_date,msg )
					VALUES ('$fname','$lname','$phone','$email','$a_time','$a_date','$msg' );
				");

               	   include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer();
                $mail->setFrom('no-reply@eaglevisionltd.com');
                $mail->addAddress($email, $fname);
                $mail->Subject = "Your Appointment at Eaglevision Eye Care Centre is Confirmed";
                $mail->isHTML(true);
                $mail->Body = "
                    Dear $fname,<br>
                    We look forward to welcoming you to Eaglevision 
                    Eye Care Centre on:  <strong>$a_date at $a_time.</strong><br>
                   
                    You’ve booked an Appointment with Dr Karen A.<br>
                    <p>
                    If, for any reason, you can’t make the appointment, please let us know as soon as possible either by giving us a call on +234 9090 055 448 or sending us a mail to info@eaglevisionltd.com
                    </p>
                   
                    
                    <p>
                    Kind Regards,<br>
                    Eaglevision Eye Care Centre Team.

                    </p>
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





