<?php

	//require_once '../../plugins/phpmailer_5.1/class.phpmailer.php'; // Chama a class phpmailer


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../plugins/PHPMailer/src/Exception.php';
require '../../plugins/PHPMailer/src/PHPMailer.php';
require '../../plugins/PHPMailer/src/SMTP.php';
require '../../plugins/PHPMailer/language/phpmailer.lang-pt.php';

	function body()
	{
		$body_html = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
td img {
	display: block;
}
</style>
</head>
<body bgcolor="#ffffff">
<table width="450" border="0" cellpadding="2" cellspacing="0">
	<tr>
		<td colspan="2" class="texto">' . @$_POST['nome'] . ' entrou em contato com a Qchef</td>
	</tr>
	<tr>
		<td class="texto">&nbsp;</td>
		<td class="texto">&nbsp;</td>
	</tr>
	<tr>
		<td width="19%" class="texto">Nome:</td>
		<td width="81%" class="texto">' . @$_POST['nome'] . ' </td>
	</tr>
	<tr>
		<td class="texto">E-mail:</td>
		<td class="texto">' . @$_POST['email'] . '</td>
	</tr>
	<tr>
		<td class="texto">Assunto:</td>
		<td class="texto">' . @$_POST['assunto'] . '</td>
	</tr>
	<tr>
		<td valign="top" class="texto">Mensagem: </td>
		<td class="texto">&nbsp;</td>
	</tr>
	<tr>
		<td height="10" colspan="2" valign="top" class="texto">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" valign="top" class="texto">' . @$_POST['mensagem'] . ' </td>
	</tr>
</table>
</body>
</html>

';
		return $body_html;
	}


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                        // Set mailer to use SMTP
    $mail->CharSet = "utf-8";                               // Define a codificação
    $mail->setLanguage('pt', '/plugins/PHPMailer/language/phpmailer.lang-pt.php');

    $mail->Host = 'mail.davinciartes.com.br';                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                 // Enable SMTP authentication
    $mail->Username = 'qchef@davinciartes.com.br';                 // SMTP username
    $mail->Password = ')mpLA5+ZztB#';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to

    //Recipients
    $mail->setFrom('qchef@davinciartes.com.br', 'Qchef');
    $mail->addAddress('adm@qchef.com.br', 'Qchef');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('adm@qchef.com.br', 'Qchef');
    //$mail->addCC('sergiius@gmail.com');
    //$mail->addBCC('sergiius@live.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Contato Qchef";
    $mail->Body    = body();
    $mail->AltBody = body();

    $mail->send();

    echo "<script>location.href='/contato.php?result=send';</script>";

} catch (Exception $e) {

    $erro = "Erro, contact o administrador, verifique as configurações de e-mail no painel de controle.<br><b>" . $mail->ErrorInfo . "</b>";
    //echo "<script>location.href='?pag=$filename&warning=$erro';</script>";


    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

    exit;
}
