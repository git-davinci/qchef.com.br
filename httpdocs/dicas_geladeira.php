<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Dicas</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
  <?php require_once 'dicas_menu.php' ?>
  <div class="titulo1" style="float:right; width: 460px;">
    <p>Organização da Geladeira</p>
    <ul>
      <li class="texto_marrom">Armazene as verduras e legumes nas gavetas e eles reservadas</li>
      <li class="texto_marrom">Não encha as prateleiras, para que o ar circule nas melhores consições</li>
      <li class="texto_marrom">Não guarde alimentos quentes, para que não aumente a temperadura     da geladeira</li>
      <li class="texto_marrom">Nunca coloque alimentos cozidos ou carne e peixe crus destampados      junto a outros alimentos</li>
    </ul>
<p class="texto_marrom">&nbsp;</p>
<p>&nbsp;</p>
  </div>
  <div style="clear:both; padding:0; margin:0"></div>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>