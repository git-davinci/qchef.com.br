<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Cardápio</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
  <?php require_once 'cardapio_menu.php' ?>
  <div class="titulo1" style="float:right; width: 460px; margin-top: 20px">
    <p>Tortas Promoção dia das Mães
      </p>
    <table width="449" border="0" cellpadding="4" cellspacing="4">
      <tr>
        <td class="texto_marrom">&nbsp;</td>
        <td class="texto_marrom"><b><b>Torta real de coco </b></b></td>
      </tr>
      <tr>
        <td class="texto_marrom"><p>&nbsp;</p>
        </td>
        <td class="texto_marrom"><b>Torta suflay</b></td>
      </tr>
      <tr>
        <td width="70" align="right"><a name="DoisAmores" id="DoisAmores"></a><a href="#DoisAmores"><img src="imagens/cardapio/produtos/torta_dois_amores.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=dois_amoes&amp;nome=Dois Amores','','width=400,height=420')" /></a><a href="#Mousseb"></a></td>
        <td width="351" class="texto_marrom"><b>Dois Amores<br />
        </b>Bolo de chocolate com uma  camada de recheio de brigadeiro e a outra camada de recheio de beijinho coberto  com ganache branco e ganache preto e decorado com casadinho.<br /></td>
      </tr>
      <tr>
        <td><a href="#Moka"><img src="imagens/cardapio/torta_esp_moran_choco.gif" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=31&amp;nome=Morango com chocolate','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><b>Morango com chocolate<br />
        </b>Bolo de chocolate, recheio  de brigadeiro  e pedaços de morangos, decorada  com morangos e raspas de chocolate.</td>
      </tr>
      <tr>
        <td><a name="Nozes" id="Nozes"></a><a href="#Nozes"><img src="imagens/cardapio/produtos/thumb05.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=05&amp;nome=Nozes','','width=400,height=420')" /></a><a href="#Nozes"></a></td>
        <td class="texto_marrom"><p><b>Nozes</b> <br />
          Bolo branco, com recheio de  leite condensado com nozes, cobertura de ganache preto, ganache branca, decorada  com canudinhos de chocolate e nozes inteiras.</p></td>
      </tr>
      <tr>
        <td><a name="Croquito" id="Croquito"></a><a href="#Croquito"><img src="imagens/cardapio/produtos/torta_croquito.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=croquito&amp;nome=Croquito','','width=400,height=420')" /></a><a href="#moussechoco"></a></td>
        <td class="texto_marrom"><b> Croquito<br />
        </b>Bolo de chocolate,recheio  de chocolate com crocante,cobertura de chocolate com flocos decorado com raspas  de chocolate ao leite e bombom de flocos.</td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
  <div style="clear:both; padding:0; margin:0"></div>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>