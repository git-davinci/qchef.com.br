<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Dicas</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
  <?php require_once 'dicas_menu.php' ?>
  <div class="titulo1" style="float:right; width: 460px;">
    <p>Conservacao<br />
      <br />
    <span class="texto_marrom"><strong>Como conservar Presunto</strong></span></p>
    <p class="texto_marrom">Se as fatias de presunto estiverem secas, deixe-as respusr em leite durante mais ou menos 30 minutos.<br />
      Passando esse tempo, enxugue com papel absorvente antes de servir.<br />
      Desta forma elas voltarão a ficar macias.</p>
    <p class="texto_marrom"><strong>Como conservar Azeite</strong></p>
    <p class="texto_marrom">Para conservar Azeite por mais tempo e em boas condições, evite expô-lo em contato com a luz direta do sol. Guarde-o em latas resguardando da claridade.<br />
      <br />
    </p>
<p class="texto_marrom">&nbsp;</p>
<p>&nbsp;</p>
  </div>
  <div style="clear:both; padding:0; margin:0"></div>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>