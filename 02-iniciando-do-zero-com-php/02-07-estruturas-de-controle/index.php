<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);
/*
if, elseif, if servem para testar aplicações 
eu poderia testar se usuario esta logado,
se o usuario informo bem seu email
se a agente esta na tela correcta de acordo com a navegação do nosso usuario
esse teste e feito dentro da aplicação ou dentro da camada de aplicação do nosso ssitema
*/
$test = true;
if($test){
	var_dump(true);
}else{
	var_dump(false);
}

$age = 28;
if($age < 20){
	var_dump("Bandas Coloridas");
}elseif ($age > 20 && $age < 50) {
	var_dump("Otimas Bandas");
}else{
	var_dump("Rock and Roll Raiz");
}

$hour = 3;

if ($hour >= 4 && $hour < 23) {
	if ($hour < 7) {
		var_dump("Bob Marley");
	}else{
		var_dump("After Bridge");
	}
}else{
	var_dump("ZzzzzzzzZZZZZ");
}

/*(Recomendação) OBS: nas estruturas de controle com if é sempre  bom terminar com else, se os teste anterior na derem certo deve terminar nesta.
exemplo if(){}elseif(){}elseif(){}else{}*/

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);
$rock = "";
if (isset($rock)) {/*se a variavel existe*/
	var_dump("Rock and Roll");
}else{
	var_dump("die");
}

$rockAndRoll = "Nirvana";
if (!empty($rockAndRoll)) {/*se a variavel existe e esta vazia*/
	var_dump("Rock existe e toca{$rockAndRoll}");
}else{
	var_dump("Não existe ou não esta tocando!");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);
$payment = "credit_card";
switch ($payment){
	case "billet_printed":
		var_dump("Boleto Impresso!");
		break;
	case "canceled":
		var_dump("Pagamento cancelado");
		break;
	case "past_due":
	case "pending":
		var_dump("Aguardando pagamento");
		break;
	case "approved":
	case "completed":
		var_dump("Pagamento aprovado");
		break;
	default:
		var_dump("Erro ao processar pagamento");
		break;
};





