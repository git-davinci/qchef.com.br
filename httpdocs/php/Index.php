<?php
include('SMTPconfig.php');
include('SMTPClass.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$to = "teste_telium@qchef.com.br";
$from = $_POST['from'];
$subject = $_POST['sub'];
$body = $_POST['message'];
$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
$SMTPChat = $SMTPMail->SendMail();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<table width="500px">
<tr><td>From :</td><td><input type='text' name="from" /></td></tr>
<tr><td>Subject :</td><td><input type='text' name="sub" /></td></tr>
<tr><td>Message :</td><td><textarea name="message"></textarea></td></tr>
<tr><td></td><td><input type="submit" value=" Send " /></td></tr>
</table>
</form>
</body>
</html>