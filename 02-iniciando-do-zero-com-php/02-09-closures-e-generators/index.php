<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);
/*closures são funções anónimas que serve para executar um certo trecho de código que podem ser repetidos na nossa aplicação, que não é um codigo que precisa viram uma função ou ser uma interface.Por vezes para evitar repetição você de utilizar eles(closures)*/

/*escopo de uma função que está numa variável, por isso é uma função anónima
esta função só é valida durante este arquivo, ela pode ser facilmente rescrita e  eliminada*/
$myAge = function($year){
	$age = date("Y") - $year;
	return "<h5> Voce tem {$age} anos!</h5>";
};

echo $myAge(1993);
echo $myAge(2001);

/*manutencao centralizada na aplicacao 
Tambem pode te ajudar na formatacao de numeros
*/

$priceBrl = function($price){
	return number_format($price, 0, "", ".");
};

echo "<p>O projecto custa {$priceBrl(360000)}";

$myCart = [];
$myCart ["totalPrice"] = 0;
/*use (&$myCart) utilizo como referencia $myCart ["totalPrice"]  dentro da funcoa closures, porque estao em escopo diferentes*/
$cardAdd = function($item, $qtd, $price) use (&$myCart){
	$myCart [$item] = $qtd * $price;
	$myCart["totalPrice"]+= $myCart[$item];
};

$cardAdd("HTML5", 1, 497);
$cardAdd("JQuery", 2, 423);
$cardAdd("CSS", 3, 423);
//var_dump($myCart, $cardAdd);/*para ver clousere*/
var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);
/*Nós dá uma forma fácil de iterar(reptir ou tornar a fazer) com qualquer objecto sem utilizar recurso de memória(RAM) no nosso servidor, para que possa percorrer dados quando tem uma aplicação muito grande.
Exemplo tens uma tabela na BD de log que tem quatro milhões de registos.
Colocar isto em memoria ou seja salvar isto numa variavel ou fazer um foreach padrao com isto, vai ocupar muita memoria(RAM),talvez o teu servidor não tem este memória.
Uma forma de resolvar isto é com generators fazendo essa interação(Reptição) não passar pela memória, mas sim pelo processamento escalar da aplicação.
*/

$iterator = 4000000;

/*Se seguir as PSRs uma função nao pode ser declarada, só estamos fazer a título de exemplo*/
function showDates($days){
	$saveDate = [];
	for ($day = 1; $day < $days; $day++) { 
		$saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
	}
	return $saveDate;
}

/*
echo "<div style='text-align:center'>";
	foreach (showDates($iterator) as $date) {
		echo "<small class='tag'>{$date}</small>".PHP_EOL;//PHP_EOl quebra de linha do php
	}
echo "</div>";
*/

/*fazer o generator*/

function generatorDate($days){
	for ($day = 1; $day < $days; $day++) { 
		yield date("d/m/Y", strtotime("+{$day}days"));
	}
}

echo "<div style='text-align:center'>";
	foreach (generatorDate($iterator) as $date) {
		echo "<small class='tag'>{$date}</small>".PHP_EOL;//PHP_EOl quebra de linha do php
	}
echo "</div>";