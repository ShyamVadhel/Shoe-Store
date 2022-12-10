
<?php
extract($_POST);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shoestoreguni@gmail.com';                     //SMTP username
    $mail->Password   = 'hucaatfvhgkyozfr';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set 

    //Recipients
    $mail->setFrom('shoestoreguni@gmail.com', 'SHOE STORE');
    $mail->addAddress($email, $name);  //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here your order derail';
    $mail->Body = 'Hello,</b> '.$name.'<br>'.'Your order-Successfully placed</b> <br>'.'Mobile Number, <br>' .$mobile.'<br>'.'Address, <br>'.$address.'<br>' ;

    $mail->send();
    //echo 'Message has been sent';
    header("location: thanks/succsess.html");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
		
?>



                               