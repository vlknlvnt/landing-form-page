<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';


    if ( $_POST ) {

        /* header() call has to be occured before messages are written out to overwrite the STMP.php */
        header("Location: http://localhost/procell?success=1");

        /* every input element in form */
        $adi_soyadi = $_POST['adi_soyadi'];    
        $telefon = $_POST['telefon'];  
        $email = $_POST['email'];  
        $soru_1 = $_POST['soru_1'];   
        $soru_2 = $_POST['soru_2'];   
        $soru_3 = $_POST['soru_3'];   
        $soru_4 = $_POST['soru_4'];   
        $soru_5 = $_POST['soru_5'];   
        $soru_6 = $_POST['soru_6'];   
        $soru_7 = $_POST['soru_7'];   

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        /* Mail body starts here */
        $mail_icerik = "Merhabalar, form üzerinden yeni bir başvuru gelmiştir. Başvuru bilgileri aşağıdaki gibidir: <br>";
        $mail_icerik .= "<br>";   
        $mail_icerik .= "Ad Soyad: $adi_soyadi <br>";
        $mail_icerik .= "Telefon: $telefon <br>";
        $mail_icerik .= "Eposta adresi: $email <br>";
        $mail_icerik .= "<br>";   
        $mail_icerik .= "Kaç Yıl Yurtdışında Bulundunuz? <br>";
        $mail_icerik .= "$soru_1 <br>";
        $mail_icerik .= "Almancayı Nerede Öğrendiniz? <br>";
        $mail_icerik .= "$soru_2 <br>";
        $mail_icerik .= "Daha Önce Home Office Çalıştınız Mı? <br>";
        $mail_icerik .= "$soru_3 <br>";
        $mail_icerik .= "Satış Yaptınız Mı? Hangi Projelerde? <br>";
        $mail_icerik .= "$soru_4 <br>";
        $mail_icerik .= "Evinizde Bilgisayar Var Mı? <br>";
        $mail_icerik .= "$soru_5 <br>";
        $mail_icerik .= "Sizi Hangi Saatlerde Arayabiliriz? <br>";
        $mail_icerik .= "$soru_6 <br>";
        $mail_icerik .= "Evden Çalışmaya Engel Durumunuz Var Mı? <br>";
        $mail_icerik .= "$soru_7 <br>";
        /* Mail body ends here */


    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'levent.soylu@gmail.com';                     //SMTP username
        $mail->Password   = 'kdqdcpdiybnommnr';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);

        //Recipients
        $mail->setFrom('form-application@gmail.com', 'Volkan Levent Soylu'); // Sender name & adress
        $mail->addAddress('levent.soylu@gmail.com', 'Volkan Levent Soylu');     // Add a recipient

        //Content
        $mail->isHTML(true);   
        $mail->CharSet = 'UTF-8';                               // Set email format to HTML and Turkish charset
        $mail->Subject = 'İş başvurusu';                        // Mail subject
        $mail->Body    = $mail_icerik;                          // Mail body
        $mail->AltBody = $mail_icerik;                          // Mail body

        $mail->send();
        echo 'Message has been sent';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        die();
    }


}

?>