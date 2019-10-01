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
    <p>Tortas Geladas
      <br />
      <span class="texto_marrom">A combinação de levíssimos mousses com delicados pães-de-ló<br />
      servem de base para compor verdadeiras sinfonias geladas. </span></p>
    <table width="452" border="0" cellpadding="4" cellspacing="4" class="texto_marrom">
      <tr>
        <td width="70"><a name="MousseChocBranco" id="MousseChocBranco"></a><a href="#MousseChocBranco"><img src="imagens/cardapio/produtos/thumb10.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_g.asp?id=10&amp;nome=Mousse de Chocolate Branco','','width=400,height=420')" /></a><a href="#Mousseb"></a></td>
        <td width="297" class="texto_pad"><strong>Mousse de chocolate Branco<br />
        </strong>Pão de ló branco, mousse de  chocolate branco e raspas de chocolate branco.</td>
      </tr>
      <tr>
        <td><a name="MousseChocolate" id="MousseChocolate"></a><a href="#MousseChocolate"><img src="imagens/cardapio/produtos/thumb13.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_g.asp?id=13&amp;nome=Mousse de Chocolate','','width=400,height=420')" /></a><a href="#moussechoco"></a></td>
        <td class="texto_pad"><strong>Mousse de chocolate<br />
        </strong>Pão de ló de chocolate, um  delicioso mousse de chocolate ao leite, decorado com raspas de chocolate.</td>
      </tr>
      <tr>
        <td><a name="MouseMaracuja" id="MouseMaracuja"></a><a href="#MousseMaracuja"><img src="imagens/cardapio/produtos/thumb20.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_g.asp?id=20&amp;nome=Mousse de Maracujá','','width=400,height=420')" /></a></td>
        <td class="texto_pad"><b>Mousse de maracuj&aacute;<br />
        </b>Pão de ló branco, e um  delicioso mousse cremoso de maracujá com leite condensado.</td>
      </tr>
      <tr>
        <td><a name="Profiteroles" id="Profiteroles"></a><a href="#Profiteroles"><img src="imagens/cardapio/produtos/thumb08.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_g.asp?id=08&amp;nome=Profiteroles','','width=400,height=420')" /></a><a href="#Profiteroles"></a></td>
        <td class="texto_pad"><b>Profiteroles<br />
        </b>Mousse assada de chocolate,  mousse cremosa de chocolate meio amargo, raspas de chocolate meio amargo,  carolinas recheadas com ganache branca.</td>
      </tr>
      <tr>
        <td><a name="Crocante" id="Crocante"></a><a href="#Crocante"><img src="imagens/cardapio/produtos/thumb09.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_g.asp?id=09&amp;nome=Crocante','','width=400,height=420')" /></a></td>
        <td class="texto_pad"><b>Crocante<br />
        </b>Pão de ló de chocolate com  a 1ª camada de recheio de praliné de castanhas.2ª camada de creme paris com  chantilly com cobertura de praliné.</td>
      </tr>
      <tr>
        <td><a name="MousseLimaoChoc" id="MousseLimaoChoc"></a><a href="#MousseLimaoChoc"><img src="imagens/cardapio/produtos/thumb25.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_g.asp?id=25&amp;nome=Mousse de Limão com Chocolate','','width=400,height=420')" /></a></td>
        <td class="texto_pad"><p><b>Mousse de Lim&atilde;o com chocolate<br />
        </b>Pão de ló branco, mousse de  limão siciliano,mousse de chocolate branco, decorado com raspas de limão e  chocolate branco.</p>
        </td>
      </tr>
      <tr>
        <td><a name="DoppioLatte" id="DoppioLatte"></a><a href="#DoppioLatte"><img src="imagens/cardapio/produtos/thumb12.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_g.asp?id=12&amp;nome=Doppio Latte','','width=400,height=420')" /></a></td>
        <td class="texto_pad"><b>Doppio Latte</b><br />
        	Pão de ló, mousse de  chocolate meio amargo, mousse de chocolate ao leite.</td>
      </tr>
      <tr>
        <td><a name="MouseMaracujaChoc" id="MouseMaracujaChoc"></a><a href="#MousseMaracujaChoc"><img src="imagens/cardapio/produtos/thumb11.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_g.asp?id=11&amp;nome=Mousse de Maracujá com Chocolate','','width=400,height=420')" /></a><a href="#Maracujacom"></a></td>
        <td class="texto_pad"><b>Mousse de Maracuj&aacute; com chocolate</b><br />
        	Pão de ló de chocolate,  mousse cremosa de maracujá com pedaços de chocolate meio amargo, cobertura de  raspas de chocolate meio amargo.</td>
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