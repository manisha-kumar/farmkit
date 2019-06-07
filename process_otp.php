<?php
$u_email = $_GET["q"];

session_start();

require_once 'checkmail.php';
$check = new checkMailD();
$status = $check->checkMail($u_email);
if ($status == "Email already taken"){
    echo "Email already taken";
}

else if ($status == "valid email"){
	
    require_once 'sendMailD.php';
    $mailF = new sendMailD();


    try
    {
		$userOtpRCode = rand(100000, 999999);
        $_SESSION["otp"] = $userOtpRCode;
		$userEmail = $u_email; //email id of recevr


        $message= "
                   Hello , $userEmail
                   <br /><br />
                   We got request to register your email id for.If you have requested  then use the one time verfification code to verify your email id, if not just ignore this email,
                   <br /><br />
                   Your one time verification code is  $userOtpRCode
                   <br /><br />

                   <br /><br />
                   Thank you 
                   <br /><br />
                   PCE 
                   ";
                $subject = "User verification";

                $retv = $mailF->sendMail($userEmail,$message,$subject);

                if($retv == "OK"){

                    echo "Mail sent!";


                }
                else {
                   echo "Mail not sent!";
                }


    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
        
    
}


?>