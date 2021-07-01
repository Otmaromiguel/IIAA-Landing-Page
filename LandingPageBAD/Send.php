<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Sent by " . $Name . ",\r\n";
$mensaje .= "Email: " . $Email . " \r\n";
$mensaje .= "Subject: " . $Subject . " \r\n";
$mensaje .= "Message: " . $_POST['Message'] . " \r\n";
$mensaje .= "Date Sent " . date('m/d/Y h:i:sa', time());

$para = 'Info@otmaromiguel.com';
$asunto .= "Form subject: " . $Subject . " \r\n";

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>