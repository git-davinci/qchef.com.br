<?php
function anti_injection($sqlinject) 
{
	// remove palavras que contenham sintaxe sql
	$sqlinject = preg_replace ('/\'/', '&acute;', $sqlinject);
	$sqlinject = preg_replace ('/\"/', '&quot;', $sqlinject);
	$sqlinject = preg_replace(sql_regcase('/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/'),'',$sqlinject);
	$sqlinject = trim($sqlinject); //limpa espaços vazio
	$sqlinject = strip_tags($sqlinject);//tira tags html e php
	$sqlinject = addslashes($sqlinject); //Adiciona barras invertidas a uma string
	//$sqlinject = get_magic_quotes_gpc() == 0 ? mysql_real_escape_string($sqlinject) : $sqlinject;
return $sqlinject;
}
function url_protect($sqlinject) 
{
	// remove palavras que contenham sintaxe sql
	$sqlinject = preg_replace ('/\'|\"|/', '', $sqlinject);
	$sqlinject = trim($sqlinject); //limpa espaços vazio
	$sqlinject = strip_tags($sqlinject);//tira tags html e php
	$sqlinject = addslashes($sqlinject); //Adiciona barras invertidas a uma string
	//$sqlinject = get_magic_quotes_gpc() == 0 ? mysql_real_escape_string($sqlinject) : $sqlinject;
return $sqlinject;
}
function box_protect($sqlinject) 
{
	$sqlinject = preg_replace ('/\'/', '&acute;', $sqlinject);
	return $sqlinject;
}
function amigaveis($url_amigaveis) 
{
	//desconvertendo do padrão entitie (tipo &aacute; para á)
	$url_amigaveis = html_entity_decode($url_amigaveis);
	
	//tirando os acentos	
	$url_amigaveis = preg_replace('![aáàãâäAÁÀÂÃÄ]+!u','a',$url_amigaveis);
	$url_amigaveis = preg_replace('![eéèêëEÉÈÊË]+!u','e',$url_amigaveis);
	$url_amigaveis = preg_replace('![iíìîïIÍÌÎÏ]+!u','i',$url_amigaveis);
	$url_amigaveis = preg_replace('![oóòõôöOÓÒÔÕÖ]+!u','o',$url_amigaveis);
	$url_amigaveis = preg_replace('![uúùûüUÚÙÛÜ]+!u','u',$url_amigaveis);
	//parte que tira o cedilha e o ñ
	$url_amigaveis = preg_replace('![çÇ]+!u','c',$url_amigaveis);
	$url_amigaveis = preg_replace('![ñÑ]+!u','n',$url_amigaveis);
	//trocando espaço em branco por underline
	$url_amigaveis = preg_replace ('/\ /', '-', $url_amigaveis);
	//trocando duplo espaço (hifen) por 1 hifen só
	$url_amigaveis = preg_replace ('/\--/', '-', $url_amigaveis);
	//convertendo em minusculas
	$url_amigaveis = strtolower($url_amigaveis);

return $url_amigaveis;
}
function desamigaveis($url_amigaveis) 
{
	//desconvertendo do padrão entitie (tipo &aacute; para á)
	$url_amigaveis = html_entity_decode($url_amigaveis);	
	//tirando os acentos	
	$url_amigaveis = preg_replace('![aáàãâäAÁÀÂÃÄ]+!u','a',$url_amigaveis);
	$url_amigaveis = preg_replace('![eéèêëEÉÈÊË]+!u','e',$url_amigaveis);
	$url_amigaveis = preg_replace('![iíìîïIÍÌÎÏ]+!u','i',$url_amigaveis);
	$url_amigaveis = preg_replace('![oóòõôöOÓÒÔÕÖ]+!u','o',$url_amigaveis);
	$url_amigaveis = preg_replace('![uúùûüUÚÙÛÜ]+!u','u',$url_amigaveis);
	//parte que tira o cedilha e o ñ
	$url_amigaveis = preg_replace('![çÇ]+!u','c',$url_amigaveis);
	$url_amigaveis = preg_replace('![ñÑ]+!u','n',$url_amigaveis);
	//trocando espaço em branco por underline
	$url_amigaveis = preg_replace ('/\-/', ' ', $url_amigaveis);
	//convertendo em minusculas
	$url_amigaveis = strtolower($url_amigaveis);

return $url_amigaveis;
}
?>