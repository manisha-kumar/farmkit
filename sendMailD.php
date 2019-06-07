<?php
class sendMailD
{	

	private $conn;
	
	
	
	function sendMail($email,$message,$subject)
	{						
		require_once('mailer/class.phpmailer.php');
		$mail = new PHPMailer();
		
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;

        // But you can comment from here
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->CharSet = "UTF-8";
        $mail->addAddress($email);
        // To here. 'cause default secure is TLS.

        $mail->setFrom("farmkit18@gmail.com");
        $mail->Username = "farmkit18@gmail.com";
        $mail->Password = "subwaysurf23";

        $mail->Subject = $subject;
        $mail->msgHTML($message);

        $mail->isSMTP();
        
		if(!$mail->send()) {
			  return "FAIL";
		} else {
  				return "OK";
		}

	}	
}

?>
