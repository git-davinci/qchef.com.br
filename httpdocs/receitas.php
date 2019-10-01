<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Receitas</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
  <?php require_once 'receitas_menu.php' ?>
  <div class="titulo1" style="float:right; width: 460px;">
    <p>Musse de Maracujá<br />
      <span class="texto_marrom">Organize sua festa na medida certa</span></p>
    <p class="texto_marrom"><strong>Ingredientes</strong></p>
    <p class="texto_marrom">1 lata de leite condensado<br />
      1 lata de creme de leite tradicional<br />
      A mesma medida de suco de maracujá concentrado<br />
      (pode ser o suco industrializado ou o suco de 3 maracujás)<br />
      1 colher de sopa de gelatina em pó sem sabor</p>
    <p class="texto_marrom"><strong>Preparo</strong></p>
    <p class="texto_marrom">Bata o maracujá peneire e reserve um pouco de caroço para decorar.<br />
      Dissolva a gelatina em dois dedos de água e aqueça em banho maria ate ela ficar liquida.<br />
      Coloque o leite condensado, o creme de leite e o suco de maracujá no liquidificador, bata por 1 minuto até emulsifica, e ainda batendo adiciona a gelatina derretida.</p>
    <p class="texto_marrom">Pode-se usar esse musse em porções individuais (rendimento de 9 a 12 porções) ou para fazer torta musse, intercalando com pão em pó (nesse caso aumenta a gelatina do musse para dar mais consistência e não molhar o pão de ló)</p>
    <p class="texto_marrom">Decore com o carocinho de maracujá. </p>
<p>&nbsp;</p>
  </div>
  <div style="clear:both; padding:0; margin:0"></div>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>