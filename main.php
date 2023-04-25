<?php
session_start();

require 'PHPMailer/PHPMailerAutoload.php';

include 'connection.php';

$uploads_dir = 'Uploads';

$file_name =$_FILES['img']['name'];
$tmp_file = $_FILES['img']['tmp_name'];

$destination_location = "$uploads_dir/$file_name";

move_uploaded_file($tmp_file, $destination_location);

$fname=$_REQUEST['nam'];
$lname=$_REQUEST['nam2'];
$email=$_REQUEST['email'];
$dob=$_REQUEST['ag'];
$address=$_REQUEST['add'];
$pass=$_REQUEST['psw'];

$insertsql = "insert into details values('','$fname','$lname','$email','$pass','$address','$dob','$destination_location','Active')";
$result=mysqli_query($connection,$insertsql);

print_r($_FILES_);

$mail = new PHPMailer(true);
$mail->isSMTP();                                                //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                           //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                       //Enable SMTP authentication
$mail->Username   = 'fallenone721@gmail.com';                    //SMTP username
$mail->Password   = 'devilangel#1234';                             //SMTP password
$mail->SMTPSecure = 'tls';                                      //Enable implicit TLS encryption
$mail->Port       = 587;                                        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

$mail->setFrom('fallenone721@gmail.com','Sanket');
$mail->addAddress('mnyk446@gmail.com','Mukul');        //Add a recipient
$mail->addReplyTo('fallenone721@gmail.com','Sanket');

$mail->isHTML(true);                                            //Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
header("Location: table.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    </head>
    <style>
        p{
                color: green;
                font-family: "Audiowide", sans-serif;
                font-size: 45px;
                text-align: center;
                padding-top: 250px;
            }
    </style>
</html>