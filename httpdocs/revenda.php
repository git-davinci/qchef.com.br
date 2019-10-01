<?php ob_start();
$master_page = "master.php"; ?>
    <link href="css/layout.css" rel="stylesheet" type="text/css">

    <div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
        <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
            Revenda
        </div>
    </div>
    <div class="texto_marrom" style="width: 650px; margin: 20px auto 20px auto;">
        <p class="titulo1">Seja uma <span class="titulo">Revenda Autorizada Qchef.</span><br/>
            Agende visita por telefone <span class="titulo">3391-5595</span>. </p>
        <p class="titulo1">Pedidos:</p>
        <p>Segunda-Feira a Sexta- feira das
            8:00 as 17:00 h<br/>
            <br/>
            Sábado das
            8:00 ás 12:00 h </p>
        <p class="texto_marrom">71 3391-5595 ,71 3287-2827, Whatssap 71 99298-5278 <br/>
            Entregamos de segunda a sábado <br/>
            horário a ser estabelecido antes do fornecimento </p>
        <p>Os pedidos poderão ser feitos diariamente pelo cliente <br/>
            ou através de uma programação [ pedidos automáticos ]</p>
        <p class="titulo1">Faturamento</p>
        <p> O pagamento é através de boleto bancário semanal</p>
        <p class="titulo1">&nbsp;</p>
    </div>
<?php
$page_content = ob_get_contents();
ob_end_clean();
require_once("$master_page");
?>