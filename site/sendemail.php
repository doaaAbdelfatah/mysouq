<?php
require_once('class.phpmailer.php');
function sendemail($toname,$to ,$fromname ,$from ,$subject ,$body )
{
    $mail = new PHPMailer(true);  // the true param means it will throw exceptions on errors, which we need to catch
    $mail->IsSMTP();  // telling the class to use SMTP
	$mail->CharSet = 'UTF-8';
    try{

        // from mailtrap
          $mail->Host       = "smtp.mailtrap.io";  // SMTP server for the GMAIL server
          $mail->Port       = 2525;                    // SMTP port for the GMAIL server
          $mail->Username   = "e92929e1b39028";  // GMAIL username
          $mail->Password   = "16cc69416b0e2e";             // GMAIL password
          $mail->SMTPDebug  = 1;        // 1 to enables SMTP debug (for testing), 0 to disable debug (for production)
          $mail->SMTPAuth   = true;    // enable SMTP authentication
          $mail->SMTPSecure = "tls";  // ssl required for Gmail
            
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