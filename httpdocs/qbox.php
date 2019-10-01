<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    Qbox</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 20px auto 20px auto;">
  <p><img src="imagens/qbox.jpg" width="200" height="149" align="right" />A Qchef vem sempre inovando para você. Por isso criamos o Qbox. Juntamos o sabor e a praticidade para que sua festa fique muito mais gostosa.<br />
  O Qbox é uma forma prática e elegante de servir salgados em reuniões informais, jogos e bate-papos com amigos.</p>
  <p>Agora você não precisa de um bom motivo para festejar.<br />
  Peça hoje o seu e confira.</p>
  <p>&nbsp;</p>
  <p align="center"><img src="imagens/qbox_ligue.jpg" width="367" height="35" align="middle" /></p>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>