<?php 
	$error_message = "";$success_message = "";

	// Register user
	if(isset($_POST['btnsignup'])){
		$fname = $mysqli -> real_escape_string($_POST['fname']);
		$lname = $mysqli -> real_escape_string($_POST['lname']);
		$phone = $mysqli -> real_escape_string($_POST['phone']);
        $email = $mysqli -> real_escape_string($_POST['email']);
		$a_time= $mysqli -> real_escape_string($_POST['a_time']);
        $a_date= $mysqli -> real_escape_string($_POST['a_date']);
		$msg =   $mysqli -> real_escape_string($_POST['msg']);
		
		
		

		$isValid = true;

		// Check fields are empty or not
		if($fname == '' || $lname == '' || $phone == ''   || $email == '' || $a_time == '' || $a_date == '' || $msg == '' ){
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

	

		// Check if Email-ID is valid or not
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
      
        if ($isValid && (strlen($phone) < 11) || (strlen($phone) > 11 )) {
            $isValid = false;
            echo "
            <script type=\"text/javascript\">
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Phone number can't be less or greater than 11 characters'
              
            })
            </script>
        ";
            
      }

        

	

		// Insert records
		if($isValid){
			$insertSQL = "INSERT INTO appointment(fname,lname,phone,email,a_time,a_date,msg ) values(?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($insertSQL);
			$stmt->bind_param("sssssss",$fname,$lname,$phone,$email,$a_time,$a_date,$msg);
			$stmt->execute();
			$stmt->close();
            ini_set("SMTP", "smtpout.secureserver.net");//confirm smtp
            $to = "$email";
            $subject = "Eaglevision Eye Care Center Appointment";
            $message = "Congratulations,$fname. Your appointment has been set for $a_date at $a_time";
            $from = "djangodave62@gmail.com";
            $headers = "From: $from";
            mail($to,$subject,$message,$headers);
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
		}
	}
	?>