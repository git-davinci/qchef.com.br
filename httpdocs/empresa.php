<?php ob_start(); $master_page = "master.php"; ?>
<link href="css/layout.css" rel="stylesheet" type="text/css">

<div style="height: 58px; margin-top: 40px; background:url(imagens/bg_titulo.png) repeat-x; ">
  <div class="titulo" style="width: 650px; margin: auto; line-height: 58px">
    A Empresa</div>
</div>
<div class="texto_marrom" style="width: 650px; margin: 20px auto 20px auto;">
  <p>No início de 1994 três amigos reunem-se em torno da idéia de atuar no ramo de fornecimento de tortas e salgados com um perfil profissional. Nascia a Qdelícia! Diante da impossibilidade de registrar a antiga marca no INPI, em 2000 a Qdelícia transforma-se em Qchef e ganha uma nova sede com cerca de 500m² de área construída, especialmente projetada para a produção de alimentos.</p>
  <p>Desde a sua formação, a empresa está em constante aperfeiçoamento, seja pela reformulação da estrutura física, adoção do PCP - Programa de Controle de Produção, aquisição de vários equipamentos ou agregando profissionais especializados à sua equipe. O alto índice de aceitação de seus produtos comprova o sucesso da proposta de atender aos clientes com qualidade, segurança, higiene e organização. Grande parte desse sucesso deve-se à politica de treinamento constante de pessoal, da realização periódica de exames médicos específicos para manipuladores de alimentos e da introdução de novos produtos.</p>
</div>
<?php
$page_content = ob_get_contents(); ob_end_clean();
require_once("$master_page");
?>