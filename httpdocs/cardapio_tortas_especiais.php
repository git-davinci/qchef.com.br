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
    <p>Tortas Especiais
      <br />
      <span class="texto_marrom">Se o chocolate traduz refinamento pela delicadeza e paladar marcante, imagine as receitas das tortas Qchef com mais este ingrediente! </span></p>
    <table width="449" border="0" cellpadding="4" cellspacing="4">
      <tr>
        <td align="right"><a name="Africana" id="Africana"></a><a href="#Africana"><img src="imagens/cardapio/produtos/thumb16.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=16&amp;nome=Africana','','width=400,height=420')" /></a><a href="#Africana"></a></td>
        <td class="texto_marrom"><b><b>Africana<br />
        </b></b>Bolo de chocolate com  recheio de chocolate ao leite e creme de leite, decorada com chantily e raspas  de chocolate.</td>
      </tr>
      <tr>
        <td width="70"><a name="Aspen" id="Aspen"></a><a href="#Aspen"><img src="imagens/cardapio/produtos/thumb02.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=02&amp;nome=Aspen','','width=400,height=420')" /></a></td>
        <td width="297" class="texto_marrom"><b>Aspen</b><br />
        	Bolo branco com recheio de  castanhas do Pará,cobertura de chantily e castanha do Pará.</td>
      </tr>
      <tr>
        <td><a name="BlackWhite" id="BlackWhite"></a><a href="#BlackWhite"><img src="imagens/cardapio/produtos/thumb01.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=01&amp;nome=Black White','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><p><b>Black White</b><br />
        	Bolo branco e bolo de  chocolate intercalados com recheio trufado de chocolate e chocolate branco com  cobertura de chantilly e ganache,decorada com discos de chocolate negro e  chocolate branco.</p>
        </td>
      </tr>
      <tr>
        <td><a name="Bombom" id="Bombom"></a><a href="#Bombom"><img src="imagens/cardapio/produtos/thumb22.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=22&amp;nome=Bombom','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><b>Bombom</b><br />
        	Três camadas finas e  delicadas de bolo de chocolate intercaladas com recheio cremoso de chocolate e  bombons sonho de valsa inteiros.</td>
      </tr>
      <tr>
        <td><a name="Brigadeiro" id="Brigadeiro"></a><a href="#Brigadeiro"><img src="imagens/cardapio/produtos/thumb14.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=14&amp;nome=Brigadeiro','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><b>Brigadeiro<br />
          Bolo de chocolate com recheio de brigadeiro mole, decorada com pitangas  de chantily, brigadeiro e granulado.</b></td>
      </tr>
      <tr>
        <td><a name="Croquito" id="Croquito"></a><a href="#Croquito"><img src="imagens/cardapio/produtos/torta_croquito.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=croquito&amp;nome=Croquito','','width=400,height=420')" /></a><a href="#moussechoco"></a></td>
        <td class="texto_marrom"><b> Croquito<br />
          </b>Bolo de chocolate,recheio  de chocolate com crocante,cobertura de chocolate com flocos decorado com raspas  de chocolate ao leite e bombom de flocos.</td>
      </tr>
      <tr>
        <td><a name="Damasco" id="Damasco"></a><a href="#Damasco"><img src="imagens/cardapio/torta_esp_damasco.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=Damasco&nome=Damasco','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><p><b>Damasco</b><br />
        	Bolo branco, com recheio de  geléia de damasco com creme de leite, cobertura de ganache branca decorada com  flores de damascos.</p>
        </td>
      </tr>
      <tr>
        <td align="right"><a name="DoisAmores" id="DoisAmores"></a><a href="#DoisAmores"><img src="imagens/cardapio/produtos/torta_dois_amores.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=dois_amoes&amp;nome=Dois Amores','','width=400,height=420')" /></a><a href="#Mousseb"></a></td>
        <td class="texto_marrom"><b>Dois Amores<br />
        </b>Bolo de chocolate com uma  camada de recheio de brigadeiro e a outra camada de recheio de beijinho coberto  com ganache branco e ganache preto e decorado com casadinho.<br /></td>
      </tr>

      <tr>
        <td><a name="Francesa" id="Francesa"></a><a href="#Francesa"><img src="imagens/cardapio/produtos/thumb07.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=07&amp;nome=Francesa','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><b>Francesa</b><br />
        	Bolo branco recheio trufado  de chocolate branco,pedaços de chocolate branco, cobertura trufada de chocolate  ao leite e raspas de chocolate branco.</td>
      </tr>
      <tr>
        <td><a name="FlorestaNegra" id="FlorestaNegra"></a><a href="#FlorestaNegra"><img src="imagens/cardapio/produtos/thumb15.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=15&amp;nome=Floresta Negra','','width=400,height=420')" /></a><a href="#Floresta"></a></td>
        <td class="texto_marrom"><p align="left"><b>Floresta negra</b><br />
        	Bolo de chocolate, com  recheio de chocolate branco, creme de chantily  e cerejas com cobertura de chocolate ao leite  e cerejas.</p>
        </td>
      </tr>
      <tr>
        <td><a name="Moka" id="Moka"></a><a href="#Moka"><img src="imagens/cardapio/produtos/thumb04.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=04&amp;nome=Moka','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><b>Moka<br />
        </b>Bolo de chocolate com café,  cobertura de creme de café, decorada com grãos de café.</td>
      </tr>
      <tr>
        <td><a href="#Moka"><img src="imagens/cardapio/torta_esp_moran_choco.gif" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=31&amp;nome=Morango com chocolate','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><b>Morango com chocolate<br />
        </b>Bolo de chocolate, recheio  de brigadeiro  e pedaços de morangos, decorada  com morangos e raspas de chocolate.</td>
      </tr>
      <tr>
        <td><a name="Nozes" id="Nozes"></a><a href="#Nozes"><img src="imagens/cardapio/produtos/thumb05.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=05&amp;nome=Nozes','','width=400,height=420')" /></a><a href="#Nozes"></a></td>
        <td class="texto_marrom"><p><b>Nozes</b> <br />
        	Bolo branco, com recheio de  leite condensado com nozes, cobertura de ganache preto, ganache branca, decorada  com canudinhos de chocolate e nozes inteiras.</p>
        </td>
      </tr>
      <tr>
        <td><a href="#"><img onclick="MM_openBrWindow('mostrafoto_e.asp?id=torta_nutela&amp;nome=Nutela com marshmalow','','width=400,height=420')"  src="imagens/cardapio/produtos/nutela.jpg" alt="" width="70" height="70" border="0" /></a></td>
        <td valign="top" class="texto_marrom"><strong>Nutela com marshmalow<br />
        </strong>Bolo de chocolate umedecido  com calda de leite condensado, com duas camadas de recheio  de creme de avelã(Nutela) e pedaços de avelã  com marshmallow e chocolate meio amargo com  pedaços de avelã. Na cobertura ganache de  chocolate meio amargo, decorada com avelã e discos de chocolate. </td>
      </tr>
      <tr>
        <td><a name="Prestigio" id="Prestigio"></a><a href="#Prestigio"><img src="imagens/cardapio/produtos/thumb19.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=19&amp;nome=Prestigio','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><b>Prestigio</b> <br />
        	Bolo de chocolate com  recheio de leite condensado e coco ralado, decorada com chantily e raspas de  chocolate branco.</td>
      </tr>
      <tr>
        <td><a name="Hungara" id="Hungara"></a><a href="#Hungara"><img src="imagens/cardapio/produtos/thumb03.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=03&amp;nome=Húngara','','width=400,height=420')" /></a></td>
        <td class="texto_marrom"><b>H&uacute;ngara</b><br />
        	Brownie de chocolate  coberto com recheio cremoso de avelã, cobertura de suspiros e avelã</td>
      </tr>
      <tr>
        <td><a name="Solemio" id="Solemio"></a><a href="#Solemio"><img src="imagens/cardapio/produtos/thumb06.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=06&amp;nome=Solemio','','width=400,height=420')" /></a><a href="#Solemio"></a></td>
        <td class="texto_marrom"><p><b>Solemio<br />
        </b>Bolo branco e bolo de  chocolate com uma camada de recheio de ganache branca e passas ao rum e a outra  de ganache negra com pedaços de chocolate com a cobertura de leite condensado e  chocolate ao leite. </p>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="texto_marrom"><b>Torta Real de Côco<br>
        </b>
          Bbolo branco, recheio de prestígio, cobertura de marshmallow, decorado com cerecereja<b>          </b></td>
      </tr>
      <tr>
        <td><a name="Trufada" id="Trufada"></a><a href="#Trufada"><img src="imagens/cardapio/produtos/thumb21.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=21&amp;nome=Trufada','','width=400,height=420')" /></a><a href="#Trufada"></a></td>
        <td class="texto_marrom"><b>Trufada</b><br />
        	Bolo fino e delicado de  chocolate, umedecido com calda de leite condensado e chocolate em pó com  recheio de chocolate ao leite creme de leite e rum,decorado com trufas.</td>
      </tr>
      <tr>
        <td><a href="#"><img onclick="MM_openBrWindow('mostrafoto_e.asp?id=torta_trufada&amp;nome=Trufada branca','','width=400,height=420')" src="imagens/cardapio/produtos/trufada_branca.jpg" alt="" width="70" height="70" border="0" /></a></td>
        <td valign="top" class="texto_marrom"><strong>Trufada branca</strong><br />
        	Bolo de chocolate com  recheio trufado de chocolate branco e pralinê de castanhas, na cobertura  ganache branca e raspas de chocolate marfim, pedaços de pralinê e trufas de castanhas.</td>
      </tr>
      <tr>
        <td><a name="Tapioca" id="Tapioca"></a><a href="#Tapioca"><img src="imagens/cardapio/produtos/thumb18.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=18&amp;nome=Tapioca','','width=400,height=420')" /></a><a href="#Tapioca"></a></td>
        <td class="texto_marrom"><p><b>Tapioca</b><br />
        	Bolo de tapioca, com  recheio e cobertura de doce de leite condensado.</p>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="texto_marrom"><b>Sufaly<br>
        </b>
          
        Bolo de chocolate, recheio de requeijão cremoso e licor de chocolate, cobertura de ganache negra, decorado com cerecereja<b>          </b></td>
      </tr>
      <tr>
      	<td><a name="ZuppaTropical" id="ZuppaTropical"></a><a href="#ZuppaTropical"><img src="imagens/cardapio/produtos/thumb17.jpg" alt="" width="70" height="70" border="0" onclick="MM_openBrWindow('mostrafoto_e.asp?id=17&amp;nome=Zuppa Tropical','','width=400,height=420')" /></a></td>
      	<td class="texto_marrom"><b>Zuppa Tropical<br />
      		</b>Bolo branco com sabor de  abacaxi,recheado com creme de leite condensado e pedaços de abacaxi, cobertura  de creme de abacaxi e chocolate branco.</td>
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