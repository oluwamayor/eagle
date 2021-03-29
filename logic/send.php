




<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # FIX: Replace this email with recipient email
        $mail_to = "princemayor96@gmail.com";
        
        # Sender Data
        $subject = trim($_POST["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $message = trim($_POST["msg"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($subject) OR empty($message) || strlen($phone) < 11 || strlen($phone) > 11  ) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "
            <script type=\"text/javascript\">
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please complete form details properly'
              
            })
            </script>
            ";
            exit;
        }
        
        # Mail Content
        $content = "Name: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Phone: $phone\n";
        $content .= "Message:\n$message\n";

        # email headers.
        $headers = "From: $name <$email>";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
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
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "
            <script type=\"text/javascript\">
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong'
              
            })
            </script>
            ";
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "
        <script type=\"text/javascript\">
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'There was a problem with your submission'
          
        })
        </script>
        ";
    }

?>