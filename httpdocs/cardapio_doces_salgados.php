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
			<p>Doces e Salgados</p>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="texto_marrom">
				<tr>
					<td width="53%" valign="top" class="titulo_a"><strong class="menu_lateral">Salgados</strong></td>
					<td width="47%" valign="top" class="titulo_a">
						<span class="menu_lateral"><strong>Doces</strong></span><strong><br/> <br/> </strong></td>
				</tr>
				<tr>
					<td valign="top" class="texto_pad">

						<p><span class="menu_lateral"><strong>Salgados Tradicionais </strong></span></p>

						<p> Bolinho de peixe<br/>
						    Boliviano de frango<br/>
						    Boliviano de carne<br/>
						    Bolinho de charque<br/>
						    Coxinha simples<br/>
						    Coxinha catupiry<br/>
						    Empada de frango<br/>
						    Empada de queijo<br/>
						    Empada camarão<br/>
						    Empada frango c/ requeijão<br/>
						    Kibe<br/>
						    Pastel de F. bacalhau<br/>
							Pastel de F. camarão<br/>
							Pastel de F. de queijo<br/>
							Pastel de F. de frango<br/>
							Rissole de bacalhau<br/>
							Rissole de camarão<br/>
							Rissole de p. de peru<br/>
							Rissole de palmito<br/>
							Salteña de carne<br/>
							Salteña de frango
						</p>

						<p class="menu_lateral"><strong> Salgados Especiais</strong></p>

						<p>Barquete de camarão<br/> Barquete de peito de peru<br/> Croissant queijo e presunto<br/>
							Empada palmito<br/> Folhados<br/> Strudel Misto<br/> Empada de Bacalhau<br/> Bolinho de
							queijo<br/> Croquete de bacalhau<br/> Croquete de camarão<br/> Camarão Encapotado<br/>
							Trouxinha de frango defumado </p>
						<p class="menu_lateral"><strong>Pãezinhos/Frios</strong></p>
                        <p>Bandeja de frios <br>
                          Pãozinho s/ recheio<br>
                          Pãozinho c/ recheio alho <br>
                          Pãozinho c/ recheio atum <br>
                          Pãozinho c/ recheio côco <br>
                          Pãozinho c/ recheio queijo <br>
                          Pãozinho c/ recheio presunto<br>
                          Pãozinho c/ recheio frango c/ requeijão  <br>
                          Pãozinho c/ recheio Romeu e Julieta<br>
                        Pãozinho c/ recheio peito de peru</p>
                        <p>&nbsp;</p>
					</td>
					<td valign="top" class="texto_pad"><p><span class="menu_lateral">
								<strong>Tortas Tradicionais</strong></span></p>

						<p>Africana<br/> Ameixa<br/> Baba de moça<br/> Brigadeiro<br/> Dos Anjos<br/> Romeu e Julieta
						</p>

						<p class="menu_lateral"><strong> Tortas Especiais </strong></p>

						<p>Aspem<br/> Floresta Negra<br/> Húngara<br/> Nozes<br/> Croquito<br/> Dois amores<br/>
							Prestigio<br/> Black White<br/> Francesa<br/> Moka<br/> Zuppa Tropical<br/> Solemio<br/>
							Bombom<br/> Tapioca<br/> Damasco<br/> Trufada Branca<br/> Morango c/Chocolate<br/>
							Trufada<br/> Nutella com Mashmelow</p>

						<p class="menu_lateral"><strong> Tortas Geladas </strong></p>

						<p>Mousse Chocolate<br/> Mousse Maracujá<br/> Mousse Choco branco<br/> Mousse limão c/ choco
							branco.<br/> Profiterolles<br/> Maracujá c/ chocolate<br/> Crocante<br/> Doppio Lattte</p>

						<p class="menu_lateral"><strong> Doces Tradicionais</strong></p>

						<p>
							Brigadeiro<br/>
							Brigadeiro Romeo e Julieta<br>
						    Casadinho<br/>
						    Olho de sogra<br/>
						    Cajuzinho<br/>
						    Beijinho<br/>
						</p>

						<p class="menu_lateral"><strong>Doces Finos</strong></p>

						<p>Bombom côco c/ cereja<br/>
                            Brigadeiro de morango<br>
                            Brigadeiro de banana<br>
                            Delicia de uva<br>
                            Trufas<br/>
                            Camafeu de Nozes<br/>
                            Sonho de Valsa<br/>
							Crespinho<br/>
                            Bombom de Morango</p>


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