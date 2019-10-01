<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Cardápio</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
  <?php require_once 'cardapio_menu.php' ?>
  <div class="titulo1" style="float:right; width: 460px; margin-top: 20px">
    <p>Doces e Salgados</p>
    <table width="395" border="0" cellpadding="2" cellspacing="2" class="texto_marrom">
      <tr>
        <td colspan="2"><p class="menu_lateral"><strong>Doce de Colher</strong></p></td>
      </tr>
      <tr>
        <td valign="top"><img src="imagens/cardapio/doce_colher.jpg" alt="" width="70" height="70" /></td>
        <td align="left" valign="top"><ul>
          <li>Brigadeiro</li>
          <li>Casadinho</li>
          <li>Beijinho</li>
          <li>Cajuzinho</li>
          <li>Morangunho</li>
        </ul></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><p class="menu_lateral"><strong>Tradicionais</strong></p></td>
      </tr>
      <tr>
        <td width="70" valign="top"><img src="imagens/cardapio/doce_morango.jpg" alt="" width="70" height="70" /></td>
        <td align="left" valign="top"><ul>
          <li>Brigadeiro</li>
          <li>Cajuzinho</li>
          <li>Olho de sogra</li>
          <li>Beijinho</li>
          <li>Casadinho</li>
        </ul></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><strong class="menu_lateral">Especiais</strong></td>
      </tr>
      <tr>
        <td valign="top"><img src="imagens/cardapio/bobons.jpg" alt="" width="70" height="70" /></td>
        <td align="left" valign="top"><ul>
          <li>Bombons Finos</li>
          <li>Trufass</li>
          <li>Crocante</li>
        </ul></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><strong class="menu_lateral">Folheados</strong></td>
      </tr>
      <tr>
        <td valign="top"><img src="imagens/cardapio/folheado.jpg" alt="" width="70" height="70" /></td>
        <td align="left" valign="top"><ul>
          <li>Goiaba</li>
        </ul></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><strong class="menu_lateral">Strudel</strong></td>
      </tr>
      <tr>
        <td valign="top"><img src="imagens/cardapio/strudel.jpg" alt="" width="70" height="70" /></td>
        <td align="left" valign="top"><ul>
          <li>Banana</li>
          <li>Ma&ccedil;&atilde;</li>
          <li>Chocolate</li>
        </ul></td>
      </tr>
      <tr>
        <td height="30" colspan="2">&nbsp;</td>
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