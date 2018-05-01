<?php
//$fname3=$_GET["fname2"];
//date_default_timezone_set('Asia/Calcutta');


require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
//$mail->SMTPDebug = 3;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'rathnam137@gmail.com';
$mail->Password = 'R212193021672';
$mail->setFrom('rathnam137@gmail.com');
$mail->addAddress('rathnam137@gmail.com');
$mail->addAddress('ramuanuganti@gmail.com');


$mail->Subject = 'Rathnam @ paul';
$mail->Body ='Yo YO';
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
	echo '<center><span style="color:darkgreen;">Succesfully Completed Your Order..!!<br/><br/>Visit Again.</span></center>';
    //echo '<center><p color="darkgreen">EMAIL Sended Sucessfully..!!<br/><br/>To Pricipal.</p></center>';
}