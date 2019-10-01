<?php ob_start();
	$master_page = "master.php"; ?>
	<link href="css/layout.css" rel="stylesheet" type="text/css">

	<div style="width: 680px; height: 227px; margin: auto; background:#CCC; margin-top: 40px; margin-bottom: 35px">
		<img src="imagens/campanha/banner_padrao.jpg" width="680" height="227"><br>
	</div>
	<div style="position:absolute; background:url(imagens/menino.png) no-repeat left bottom; height: 350px; width: 305px"></div>
	<div style="height: 58px; background:url(imagens/bg_titulo.png) repeat-x; ">
		<div class="titulo" style="margin-left: 280px; line-height: 58px">
			Destaque
		</div>
	</div>
	<div class="texto_marrom" style="width: 430px; min-height: 252px; margin: 20px 0 20px 280px;">
		<p class="titulo1">Programe sua ceia de fim de ano</p>

		<p><strong>Kits de Natal:</strong></p>
		<p> Kit Ouro ( 30 a 40 pessoas) <br> 
		Kit Prata (15 a 20 pessoas)<br> 
		Kit Bronze (10 a 15 pessoas)</p>
	  <p>Para mais detalhes fale com uma de nossas atendentes<br>
	  </p>

	</div>
<?php
	$page_content = ob_get_contents();
	ob_end_clean();
	require_once("$master_page");