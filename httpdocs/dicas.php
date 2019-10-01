<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Dicas</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
  <?php require_once 'dicas_menu.php' ?>
  <div class="titulo1" style="float:right; width: 460px;">
    <p>Não erre nas contas<br />
      <span class="texto_marrom">Organize sua festa na medida certa</span></p>
    <p class="texto_marrom"><strong>Salgados</strong></p>
    <p class="texto_marrom">Festa Rápida - 8 a 10 por pessoa<br />
      Festa Longa - 10 a 15 por pessoa</p>
    <p class="texto_marrom"><strong>Doces</strong></p>
    <p class="texto_marrom">5 Por pessoa<br />
      Pãozinho<br />
      3 Por pessoa</p>
    <p class="texto_marrom"><strong>Frios</strong></p>
    <p class="texto_marrom">50 Grs Por pessoa</p>
    <p class="texto_marrom">&nbsp;</p>
<p>&nbsp;</p>
  </div>
  <div style="clear:both; padding:0; margin:0"></div>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>