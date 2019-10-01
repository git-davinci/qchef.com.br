<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Orçamento</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 20px auto 20px auto;">
  <?php
	  $result = @$_GET['result'];
	  if ($result != "send") {
  ?>
  <form id="form1" name="form1" method="post" action="modules/form/orcamento_send.php">
    <table width="650" border="0" cellpadding="3" cellspacing="1" class="texto_marrom">
      <tr>
        <td width="111" align="left" valign="top">Nome:</td>
        <td width="524"><span id="valida_nome">
          <label for="nome"></label>
          <input style="width: 400px" type="text" name="nome" id="nome" />
        <span class="textfieldRequiredMsg"><br />
        Informe seu nome.</span></span></td>
      </tr>
      <tr>
        <td align="left" valign="top">Email:</td>
        <td><span id="valida_email">
        <label for="email"></label>
        <input style="width: 400px" type="text" name="email" id="email" />
        <br />
        <span class="textfieldRequiredMsg">Informe seu e-mail.</span><span class="textfieldInvalidFormatMsg">Informe um e-mail válido.</span></span></td>
      </tr>
      <tr>
      	<td align="left" valign="top">Telefone:</td>
      	<td>
      		<input style="width: 400px" type="text" name="telefone" id="telefone" />
      	</td>
      	</tr>
      <tr>
      	<td align="left" valign="top">Tipo de evento:</td>
      	<td>
      		<input style="width: 400px" type="text" name="tipo" id="tipo" />
      	</td>
      	</tr>
      <tr>
      	<td align="left" valign="top">Quantidade de pessoas estimada:</td>
      	<td>
      		<input style="width: 400px" type="text" name="quantidade" id="quantidade" />
      	</td>
      	</tr>
      <tr>
      	<td align="left" valign="top">Data do evento:</td>
      	<td>
      		<label for="tipo"></label>
      		<input style="width: 170px" type="text" name="data" id="data" />
      		, Hora:
      		<input style="width: 170px" type="text" name="hora" id="hora" />
      	</td>
      	</tr>
      <tr>
      	<td align="left" valign="top">Mensagem:</td>
      	<td><label for="mensagem"></label>
      		<textarea style="width: 400px"  name="mensagem" id="mensagem" cols="45" rows="5"></textarea></td>
      	</tr>
      <tr>
        <td height="40" colspan="2" align="center" valign="middle" bgcolor="#FFF2DF"><input type="submit" name="button" id="button" value="Enviar" /></td>
      </tr>
    </table>
  </form>
  <div style="text-align:center; padding:40px 0 0 0">
    <div>Aceitamos cartões de crédito</div>
    <br>
    <img src="imagens/cartoes.jpg" > </div>
  <?php } else { ?>
  	Pedido de orçamento enviado com sucesso!<br />
  <?php } ?>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("valida_nome");
var sprytextfield2 = new Spry.Widget.ValidationTextField("valida_email", "email");
</script>
