<?php
require_once('class.phpmailer.php');
require_once("../config.php");
function sendemail($toname,$to ,$fromname ,$from ,$subject ,$body )
{
    $mail = new PHPMailer(true);  // the true param means it will throw exceptions on errors, which we need to catch
    $mail->IsSMTP();  // telling the class to use SMTP
	$mail->CharSet = 'UTF-8'; // arabic 
    try{

        // from mailtrap
          $mail->Host       = EMAIL_HOST;  // SMTP server for the GMAIL server
          $mail->Port       = EMAIL_PORT;                    // SMTP port for the GMAIL server
          $mail->Username   = EMAIL_UN;  // GMAIL username
          $mail->Password   = EMAIL_PW;             // GMAIL password
          $mail->SMTPDebug  = 1;        // 1 to enables SMTP debug (for testing), 0 to disable debug (for production)
          $mail->SMTPAuth   = true;    // enable SMTP authentication
          $mail->SMTPSecure = EMAIL_SECURE;  // ssl required for Gmail
            
          //////////////////////////////


 		  $mail->ContentType = 'text/html';
          $mail->SetFrom($from,$fromname);
          //$mail->AddReplyTo($reply_to, $reply_to_name);
         	// connection 
			// query 			
			//while(fetch){
				// email
		  $mail->AddAddress($to, $toname);
			//}
			
          $mail->Subject    = $subject;
          $mail->MsgHTML($body);
 
          $mail->Send();
    }
    catch (phpmailerException $e) {
	
       echo $e->errorMessage();  //Pretty error messages from PHPMailer
    }
    catch (Exception $e) {
          echo $e->getMessage();  //Boring error messages from anything else!
    }
	}

?>