<%@LANGUAGE="VBSCRIPT" CODEPAGE="1252"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>QChef :: Tortas Geladas</title>
<style type="text/css">
<!--
body {
	margin: 0;
	padding: 0;
	background: #FC0 url(/bitmap/cardapio/bg_tortas_tradicionais.jpg) no-repeat;
}
p {
	position:absolute;
	left:28px;
	top:374px;
	width:349px;
	font: bold 13px Verdana, Arial, Helvetica, sans-serif;
	color: #663300;
	text-align: center;
}
img {
	position: absolute;
	left: 40px;
	top:85px;
}
-->
</style>
</head>

<body>
	<%
		Dim foto
		Dim nome
		foto = Request.QueryString("id")
		nome = Request.QueryString("nome")
	%>
	
	<img src="/bitmap/cardapio/tortas/<% Response.Write(foto) %>.png" width="320" height="250" />
    <p><% Response.Write(nome) %></p>
	
	
    
</body>
</html>
