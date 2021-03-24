<?php
	$msg = "";
	use PHPMailer\PHPMailer\PHPMailer;

	if (isset($_POST['btnsignup'])) {
		$con = new mysqli("localhost","eaglhwox_user",";e3k..6-#63_","eaglhwox_datas");

		$fname = $con -> real_escape_string($_POST['fname']);
		$lname = $con -> real_escape_string($_POST['lname']);
		$phone = $con -> real_escape_string($_POST['phone']);
        $email = $con -> real_escape_string($_POST['email']);
		$a_time= $con -> real_escape_string($_POST['a_time']);
        $a_date= $con -> real_escape_string($_POST['a_date']);
		$msg =   $con -> real_escape_string($_POST['msg']);
        $fixed_time = date("g:ia", strtotime($a_time));
        $fixed_date = date("jS F, Y", strtotime($a_date));
        $date_now = new DateTime();
        $date2    = new DateTime($a_date);
        $apt_time = strtotime($a_time);
 
	
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
      	elseif ($date2 < $date_now) {
		  	$isValid = false;
              echo "
              <script type=\"text/javascript\">
              Swal.fire({
                icon: 'error',
                title: 'not possible...',
                text: 'you can't book an appointment in the past'
                
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
		       elseif ($apt_time >= strtotime('1:00:00') && $apt_time <= strtotime('8:00:00')) {
        echo "
              <script type=\"text/javascript\">
              Swal.fire({
                icon: 'error',
                title: 'not possible...',
                text: 'you can't book an appointment for such time'
                
              })
              </script>
          ";
}
		
		else {
			
		
	
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
                  <img src='https://eaglevisionltd.com/staging/images/log2.png'><br>
                    Dear $fname,<br>
                    We look forward to welcoming you to Eaglevision 
                    Eye Care Centre on:  <strong>$fixed_date at $fixed_time </strong><br>
                   
                    You’ve booked an Appointment with Dr Karen.<br>
                    <p>
                    If, for any reason, you can’t make the appointment, please let us know as soon as possible either by giving us a call on +234 9090 055 448 or sending us a mail to info@eaglevisionltd.com
                    </p>
                   
                    
                    <p>
                    Kind Regards,<br>
                    Eaglevision Eye Care Centre Team.
                    <address>
                    Plot 1A, Block 124,<br>
                    T.F Kuboye Street Alternative Route,<br>
                    Oniru, Lekki, Lagos.
                    </address>

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





