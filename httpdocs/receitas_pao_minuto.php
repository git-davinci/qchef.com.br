<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Receitas</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
  <?php require_once 'receitas_menu.php' ?>
  <div class="titulo1" style="float:right; width: 460px;">
    <p>Pão de Minuto<br />
      <br />
      <span class="texto_marrom">Ingredientes:</span></p>
    <p class="texto_marrom">1 xícara de chá de leite<br />
      1 xícara de chá de óleo<br />
      2 xícaras de chá e farinha de trigo<br />
      300g de queijo minas curado <br />
      3 Ovos<br />
      Sal a gosto<br />
  <br />
      Preparo: </p>
    <p class="texto_marrom">Bata tudo no liquidificador, até a massa ficar 			homogênea, despeje a massa em forminhas  de empada (3,5 cm de 			altura por 6 cm de diâmetro) untadas com óleo, deixando 1 cm de 			borda.<br />
      Coloque em assadeira e asse em forno moderado, pré-aquecido por 30 			minutos ate dourar.<br />
  <br />
    </p>
<p>&nbsp;</p>
  </div>
  <div style="clear:both; padding:0; margin:0"></div>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>