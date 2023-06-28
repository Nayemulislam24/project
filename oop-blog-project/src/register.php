<?php

namespace Appp;

// require __DIR__ . '/vendor/autoload.php';

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
    public $table;

    public function __construct()
    {
        $this->db = new database();
        $this->formet = new formet();
    }

    public function addUser($data)
    {
        // $this->table->string('image')->nullable();

        function sendemailVarification($name, $email, $v_token)
        {
            function clean_string($string)
            {
                $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                return str_replace($bad, "", $string);
            }
            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                $mail->Host  = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'nayemtp@gmail.com';
                $mail->Password = '922129ma#python';
                $mail->SMTPSecure = 'tls';
                $mail->Port  = 587;

                $mail->setFrom('nayemtp@gmail.com', $name);
                $mail->addAddress($email);
                // $mail->addAddress('***********', 'Name');

                $mail->isHTML(true);
                $mail->Subject = 'The verification code';
                // $mail->Body = 'HTML message body in <b>bold</b> ';
                // $mail->AltBody = 'Body in plain text for non-HTML mail clients';

                $email_tamplate = "<h2>You have register with web master</h2>
                <h5>verify your email address to login pleace click the link blow</h5>
                <a href='http://localhost/project/oop-blog-project/admin/verifi-email.php?token=$v_token'>click Here</a>";
                $mail->Body = $email_tamplate;
                $mail->send();
                echo "Mail has been sent successfully!";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }



















            // $mail = new PHPMailer(true);
            // try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            // $mail->isSMTP();                                            //Send using SMTP
            // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            // $mail->Username   = 'nayemtp@gmail.com';                     //SMTP username
            // $mail->Password   = '922129ma#python';                               //SMTP password
            // $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            // $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            // $mail->setFrom('nayemtp@gmail.com', $name);
            // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            // $mail->addAddress($email);               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            // $mail->isHTML(true);                                  //Set email format to HTML
            // $mail->Subject = 'The verification code';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            //     $email_tamplate = "<h2>You have register with web master</h2>
            //     <h5>verify your email address to login pleace click the link blow</h5>
            //     <a href='http://localhost/project/oop-blog-project/admin/verifi-email.php?token=$v_token'>click Here</a>";
            //     $mail->Body = $email_tamplate;


            //     $mail->send();
            //     echo 'Message has been sent';
            // } catch (Exception $e) {
            //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // }
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
            if ($result_query->num_rows > 0) {
                $error = "This Email is alrady Exisit";
                return $error;
                header("location:register-form.php");
            } else {
                $insert_query = "INSERT INTO tbl_user(username, email, phone, password, v_token) VALUES('$name','$email','$phone','$password','$v_token')";
                $insert_row = $this->db->insert($insert_query);
                if ($insert_row) {
                    sendemailVarification($name, $email, $v_token);
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
