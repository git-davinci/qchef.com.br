<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Cardápio</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 0 auto 20px auto; background:url(imagens/linha.png) left repeat-y; ">
  <?php require_once 'cardapio_menu.php' ?>
  <div class="titulo1" style="float:right; width: 460px; margin-top: 20px">
    <p>Lanches Salgados</p>
    <table width="395" border="0" cellpadding="2" cellspacing="2" class="texto_marrom">
      <tr>
        <td colspan="2"><p class="titulo_b"><strong class="menu_lateral">Forno</strong></p></td>
      </tr>
      <tr>
        <td width="70" valign="top"><img src="imagens/cardapio/salgados_forno.jpg" alt="" width="70" height="70" /></td>
        <td class="texto_pad"><ul>
          <li><b>Bauru</b></li>
          <li><b> Croissant Misto</b></li>
          <li><b> Esfiha</b></li>
          <li><b> P&atilde;es de batata recheado</b></li>
          <li><b> P&atilde;ozinho</b></li>
          <li><b> Past&eacute;is (frango, camar&atilde;o e queijo) </b></li>
          <li><b>Rissole de Peito de Peru</b></li>
          <li><b> Saltenha (carne) </b></li>
        </ul></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><strong class="menu_lateral">Fritos</strong></td>
      </tr>
      <tr>
        <td valign="top"><img src="imagens/cardapio/salgados_fritos.jpg" alt="" width="70" height="70" /></td>
        <td class="texto_pad"><ul class="texto_pad">
          <li><b>Coxinha</b></li>
          <li><b>Coxinha c/ Requeijão Cremoso </b></li>
          <li><strong>Empada de Frango c/ Requeijão </strong></li>
          <li><b>Rissole de Camar&atilde;o</b></li>
          <li><b>Rissole de Bacalhau</b></li>
          <li><b>Quibe</b></li>
          <li><strong>Strudell Misto</strong></li>
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