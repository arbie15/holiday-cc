<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require 'connect.php';

ob_start();

error_reporting(0);

session_start();

$http_referer = @$_SERVER['HTTP_REFERER'];

function loggedin()

{

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{
return true;
}else{

return false;
}
}

function getuserfield($field)

{

global $conn;

$row = $_SESSION['user_id'];

$id = $row['id'];

$query = "SELECT $field FROM t1 WHERE id = $id";

if($query_run = mysqli_query($conn,$query))

{

if($row = mysqli_fetch_assoc($query_run))

{

$count = $row[$field];

return $count;

}

}

}

function email_send($email,$username,$password)
{
	$mail = new PHPMailer(true); 
                             
try {
   
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      

	$mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;          
    $mail->Username = 'nature@gmail.com';                 
    $mail->Password = 'nature123@';                           
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = '465';                                    
    $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true  )  );
    $mail->setFrom('nature@gmail.com', 'Nature Resort ');
	$mail->addAddress($email); 
    $mail->AddReplyTo('nature@gmail.com');
    $mail->isHTML(true);                                 
    $mail->Subject = 'Signup | Verification';
    $mail->Body    = '<html>
	<body> <br><br>
		DELETING DATA
	<br><br> 
------------------------<br>
Username: '.$username.'<br>
Email: '.$email.'<br>
Password: '.$password.'<br><br>
------------------------<br>
 <br><br>
Please Go to this link to reply and choose this credentials:
192.168.1.3/iah/decision.php
 <br><br>
 </body>
 </html>

';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.<br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

	
}

function email_feedback($email,$subject,$message)
{
	
	$mail = new PHPMailer(true); 
                             
try {
   
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      

	$mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;          
    $mail->Username = 'iahteam17@gmail.com';                 
    $mail->Password = 'wgpcgr@43';                           
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = '465';                                    
    $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true  )  );
    $mail->setFrom($email);
	$mail->addAddress('iahteam17@gmail.com', 'IAH software'); 
    $mail->AddReplyTo($email);
    $mail->isHTML(true);                                 
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.<br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

	
}



?>