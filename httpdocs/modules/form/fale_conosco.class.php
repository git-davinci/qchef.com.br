<?php

function body() {

$body_html ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<p><img src="http://www.edza.com.br/admin/images/master/logo.png" alt="" width="172" height="90"></p>
<table width="450" border="0" cellpadding="2" cellspacing="0">
	<tr>
		<td colspan="2" class="texto">'.@$_POST['nome'].' entrou em contato com a EDZA</td>
	</tr>
	<tr>
		<td class="texto">&nbsp;</td>
		<td class="texto">&nbsp;</td>
	</tr>
	<tr>
		<td width="19%" class="texto">Nome:</td>
		<td width="81%" class="texto">'.@$_POST['nome'].' </td>
	</tr>
	<tr>
		<td class="texto">E-mail:</td>
		<td class="texto">'.@$_POST['email'].'</td>
	</tr>
	<tr>
		<td class="texto">Telefone:</td>
		<td class="texto">'.@$_POST['telefone'].'</td>
	</tr>
	<tr>
		<td class="texto">Cidade:</td>
		<td class="texto">'.@$_POST['cidade'].'</td>
	</tr>
	<tr>
		<td class="texto">Assunto:</td>
		<td class="texto">'.@$_POST['assunto'].'</td>
	</tr>
	<tr>
		<td valign="top" class="texto">Mensagem: </td>
		<td class="texto">&nbsp;</td>
	</tr>
	<tr>
		<td height="10" colspan="2" valign="top" class="texto">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" valign="top" class="texto">'.@$_POST['msg'].' </td>
	</tr>
</table>
</body>
</html>
';
	return $body_html;	
}
