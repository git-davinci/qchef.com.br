<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Receitas</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
  <?php require_once 'receitas_menu.php' ?>
  <div class="titulo1" style="float:right; width: 460px;">
    <p>Chocolate Quente<br />
      <br />
    <span class="texto_marrom">Ingredientes:</span></p>
    <p><span class="texto_marrom">200g de chocolate ao leite em barra<br />
      1 litro de leite açúcar a gosto<br />
      Modo de preparo<br />
      Derreta a barra de chocolate em banho maria.<br />
      Misture o leite bem quente, mexendo sempre.<br />
      Adoce a gosto. <br />
    </span> <br />
    </p>
<p>&nbsp;</p>
  </div>
  <div style="clear:both; padding:0; margin:0"></div>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>