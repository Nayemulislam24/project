<?php

namespace Appp;

require_once __DIR__ . '../../vendor/autoload.php';

// use Appp\database;

use Appp\database;
use Appp\formet;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// use Appp\formet\formet as FormetFormet;

class register
{
    public $db;
    public $formet;
    public function __construct()
    {
        $this->db = new database();
        $this->formet = new formet();
    }

    public function addUser($data)
    {
        function sendemailVarification($name, $email, $v_token)
        {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'user@example.com';                     //SMTP username
                $mail->Password   = 'secret';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('from@example.com', 'Mailer');
                $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
                $mail->addAddress('ellen@example.com');               //Name is optional
                $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com');

                //Attachments
                $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        $name = $this->formet->validation($data['name']);
        $phone = $this->formet->validation($data['phone']);
        $email = $this->formet->validation($data['email']);
        $password = $this->formet->validation($data['password']);
        $v_token = md5(rand());

        if (empty($name) || empty($phone) || empty($email) || empty($password)) {
            $error = "Fild Must Not Be Empty";
            return $error;
        } else {
            $check_email_query = "SELECT * FROM tbl_user Where email = '$email'";
            $result_query = $this->db->select($check_email_query);
            if ($result_query > 0) {
                $error = "This Email is alrady Exisit";
                return $error;
                header("location:register-form.php");
            } else {
                $insert_query = "INSERT INTO tbl_user(username, email, phone, password, v_token) VALUES('$name','$email','$phone','$password','$v_token')";
                $insert_row = $this->db->insert($insert_query);
                if ($insert_row) {
                    $sendemailVarification($name, $email, $v_token);
                    $success = "Registration Successfull. Pleace chck your email inbox for varifi email";
                    return $success;
                } else {
                    $error = "Registration faild";
                    return $error;
                }
            }
        }
    }
}
