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
    <p>Tortas Tradicionais
      <br />
      <span class="texto_marrom">Receitas desenvolvida por t&eacute;cnicos especializados buscando a melhor sintonia entre ingredientes, sabor e apar&ecirc;ncia.</span></p>
    <table width="395" border="0" cellpadding="4" cellspacing="4">
      <tr>
        <td width="70"><a name="Ameixa" id="Ameixa"></a><a href="#Ameixa"><img src="imagens/cardapio/produtos/thumb24.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('fotos_tortas_tradicionais.asp?id=24&amp;nome=Ameixa','','width=400,height=420')" /></a></td>
        <td width="297" class="texto_marrom"><p><b>Ameixa</b> <br />
        	Bolo branco com recheio  cremoso de ameixa, decorada com chantily, ameixas e xerém castanha na lateral.</p>
        </td>
      </tr>
      <tr>
        <td><p><a name="BabaDeMoca" id="BabaDeMoca"></a><a href="#BabaDeMoca"><img src="imagens/cardapio/produtos/thumb23.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('fotos_tortas_tradicionais.asp?id=23&amp;nome=Baba de Moça','','width=400,height=420')" /></a></p></td>
        <td class="texto_marrom"><b>Baba de mo&ccedil;a<br />
        </b>Bolo branco, recheio de  baba de moça com cobertura de chantily decorada com beijinhos e castanhas na  lateral.</td>
      </tr>
      <tr>
        <td><a name="DosAnjos" id="DosAnjos"></a><a href="#DosAnjos"><img src="imagens/cardapio/produtos/thumb30.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('fotos_tortas_tradicionais.asp?id=30&amp;nome=Dos Anjos','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><p><b>Dos anjos<br />
        </b>Bolo branco com uma camada  de recheio cremoso de ameixa e outra camada de baba de moça com passas ao rum,  decorada com chantily, calda de baba de moça e ameixa.</p>
        </td>
      </tr>
      <tr>
        <td><a name="RomeuJulieta" id="RomeuJulieta"></a><a href="#RomeuJulieta"><img src="imagens/cardapio/produtos/thumb26.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('fotos_tortas_tradicionais.asp?id=26&amp;nome=Romeu e Julieta','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><b>Romeu e Julieta<br />
        </b>Bolo branco com recheio de  goiabada e requeijão cremoso,decorada com chantily e goiabada.</td>
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