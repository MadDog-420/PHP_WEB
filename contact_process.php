<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	if(isset($_POST["contact"])){

		if( !empty($_POST['text']) && !empty($_POST['name']) &&
		!empty($_POST['email']) && !empty($_POST['subject'])){
			$message=$_POST['text'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$subject=$_POST['subject'];

			// Load Composer's autoloader
			require 'vendor/autoload.php';
			
			// Instantiation and passing `true` enables exceptions
			$mail = new PHPMailer(true);

				//Server settings
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
				$mail->isSMTP();                                            // Send using SMTP
				$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
				$mail->Username   = 'brunostreet12@gmail.com';                     // SMTP username
				$mail->Password   = 'Lam1borg1hini1';                               // SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
				$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
			
				//Recipients
				$mail->setFrom($email, $name);
				$mail->addAddress('brunostreet12@gmail.com', 'Bruno Calle');     // Add a recipient
				$mail->addAddress('brunostreet12@gmail.com');               // Name is optional
				
				/*$mail->addReplyTo('info@example.com', 'Information');
				$mail->addCC('cc@example.com');
				$mail->addBCC('bcc@example.com');*/
			
				// Attachments
				/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				$mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/   // Optional name
			
				// Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = $subject;
				$mail->Body    = $message;
				
				//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if($mail->send()){
					echo "<script>console.log('enviado')</script>";
					echo "<script>var form=$('#contactForm');form.reset();form.innerHTML = '<h1>Listo!</h1><p class='success-message'>Trataremos de responderte lo más pronto posible</p>';</script>";
				}
		
		}
	}

	
	
	
	
?>