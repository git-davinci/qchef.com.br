<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Kit Festa</div>
</div>

<div class="texto_marrom" style="width: 650px; margin: 20px auto 20px auto;">
<div class="titulo1" style="clear:both; margin-bottom: 15px; padding-top: 30px; width: 650px">
	Escolha uma das opções abaixo ou ligue e monte um kit personalizado!
</div> 
  <div class="titulo1" style="clear:both; margin-bottom: 15px; width: 650px">Kit 01 - Rendimento: 10 Pessoas</div>
        <div style="float:left; width: 350px">
        <img src="imagens/kit_festa/kit-01.jpg" width="350" height="207" />
        </div>
        <div style="float:left; margin-left: 30px; width: 250px">100 Salgados<br />
01 Refrigerante<br />
50 Copos<br />
01 Pacote de guardanapos </div>
    <div class="titulo1" style="clear:both; margin-bottom: 15px; padding-top: 30px; width: 650px">Kit 02 - Rendimento: 10 a 15 Pessoas</div>
        <div style="float:left; width: 350px">
        <img src="imagens/kit_festa/kit-02.jpg" width="350" height="301" />
        </div>
        <div style="float:left; margin-left: 30px; width: 250px">
        	<p>100 Salgados<br />
01 Torta<br />
02 Refrigerante. 2 lts<br />
50 Copos<br />
01 Pacote de guardanapos<br />
20 Pratos<br />
20 Garfos<br />
01 Vela</p>
</div>
     <div class="titulo1" style="clear:both; margin-bottom: 15px; padding-top: 30px; width: 650px">Kit 03 - Rendimento: 20 a 25 Pessoas</div>
        <div style="float:left; width: 350px">
        <img src="imagens/kit_festa/kit-3.jpg" width="350" height="263" />
        </div>
        <div style="float:left; margin-left: 30px; width: 250px">100 Salgados<br />
          50 Doces<br />
          01 Torta<br />
          02 Refrigerante. 2 lts<br />
          50 Copos<br />
          01 Pacote de guardanapos<br />
          30 Pratos<br />
          30 Garfos<br />
        01 Vela</div>
     <div class="titulo1" style="clear:both; margin-bottom: 15px; padding-top: 30px; width: 650px">Kit 04 - <span class="titulo1" style="clear:both; margin-bottom: 15px; padding-top: 30px; width: 650px">Rendimento: 25 a 30 Pessoas</span></div>
        <div style="float:left; width: 350px">
        <img src="imagens/kit_festa/kit-4.jpg" width="350" height="263" />
        </div>
        <div style="float:left; margin-left: 30px; width: 250px">150 Salgados<br />
          50 Doces<br />
          01 Torta<br />
          03 Refrigerante. 2 lts<br />
          100 Copos<br />
          02 Pacote de guardanapos<br />
          30 Pratos<br />
          30 Garfos<br />
        01 Vela</div>
     <div class="titulo1" style="clear:both; margin-bottom: 15px; padding-top: 30px; width: 650px">Kit 05 -<span class="titulo1" style="clear:both; margin-bottom: 15px; padding-top: 30px; width: 650px"> <span class="titulo1" style="clear:both; margin-bottom: 15px; padding-top: 30px; width: 650px">Rendimento: 30 a 35 Pessoas</span></span></div>
        <div style="float:left; width: 350px">
        <img src="imagens/kit_festa/kit-5.jpg" width="350" height="278" />
        </div>
        <div style="float:left; margin-left: 30px; width: 250px">200 Salgados<br />
          100 Doces<br />
          01 Torta<br />
          04 Refrigerante. 2 lts<br />
          100 Copos<br />
          02 Pacote de guardanapos<br />
          30 Pratos<br />
          30 Garfos<br />
        01 Vela</div>
	<div style="clear:both">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
    </div>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>