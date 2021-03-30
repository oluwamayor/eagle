<?php
	$msg = "";
	use PHPMailer\PHPMailer\PHPMailer;

	if (isset($_POST['register'])) {
		$con = new mysqli("localhost","eaglhwox_user",";e3k..6-#63_","eaglhwox_datas");

		$title = $con -> real_escape_string($_POST['title']);
		$fname = $con -> real_escape_string($_POST['fname']);
		$phone = $con -> real_escape_string($_POST['phone']);
        $email = $con -> real_escape_string($_POST['email']);
		$hadd  = $con -> real_escape_string($_POST['hadd']);
        $oadd  = $con -> real_escape_string($_POST['oadd']);
		$job   = $con -> real_escape_string($_POST['job']);
        $msg   = $con -> real_escape_string($_POST['msg']);
        $sql   = $con->query("SELECT id FROM reg WHERE email='$email'");
	
		$isValid = true;

		// Check fields are empty or not
		if($title == '' || $fname == '' || $phone == ''   || $email == '' || $hadd == '' || $oadd == '' || $job == '' )
		{
			$isValid = false;
            echo "
            <script type=\"text/javascript\">
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Fill all required fields!!'
              
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

elseif ($sql->num_rows > 0) {
    echo "
    <script type=\"text/javascript\">
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Email already exist in database'
      
    })
    </script>
    ";
}	
		else {
			
		
	
				$con->query("INSERT INTO reg (title,fname,phone,email,hadd,oadd,job,msg )
					VALUES ('$title','$fname','$phone','$email','$hadd','$oadd','$job','$msg' );
				");
             
               	   include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer();
                $mail->setFrom('no-reply@eaglevisionltd.com');
                $mail->addAddress($email);
                $mail->Subject = "Member Registration";
                $mail->isHTML(true);
                $mail->Body = "
                  <img src='https://eaglevisionltd.com/staging/images/log2.png'><br>
                    Congratulations $title $fname,<br>
                    We welcome you to Eaglevision Eye Care Center. <br>
                    We are the best eye care center in Nigeria and we promise to take care of you and your
                    family with the uttermost care and professionalism.
                    <p>
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
  title: 'Registration Complete',
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





