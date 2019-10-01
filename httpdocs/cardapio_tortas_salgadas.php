<?php ob_start();
$master_page = "master.php"; ?>
	<link href="css/layout.css" rel="stylesheet" type="text/css">

	<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
		<div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
			Cardápio
		</div>
	</div>
	<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
		<?php require_once 'cardapio_menu.php' ?>
		<div class="titulo1" style="float:right; width: 460px; margin-top: 20px">
			<p>Tortas Salgadas</p>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="texto_marrom">

				<tr>
					<td class="texto_pad" style="height: 350px; vertical-align: top">

						<p style="padding: 0; margin: 0">
							Alho poro com calabresa<br>
							Bacalhau<br/>
							<!-- Pãozinho c/ recheio queijo<br/>
							Pãozinho
							s/ recheio<br/>
							Pãozinho c/ recheios (Presunto,Peito de Peru,alho,atum e frango)<br/> -->
							Bandeja de Frios<br>
							Bacalhau com frango<br>
							Camarão<br/>
							Frango C/ Catupiry<br/>
							Nordestina<br>
						</p>
					</td>
				</tr>
			</table>
		</div>
		<div style="clear:both; padding:0; margin:0"></div>
	</div>
<?php
$page_content = ob_get_contents();
ob_end_clean();
require_once("$master_page");