<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<h3>Olá Mundo</h3>";
echo "<p>Olá Mundo!","","<span class='tag'>#BoraProgramar!</span>","</p>";
$hello = "Olá Mundo!";
$code = "<span class='tag'>#BoraProgramar!</span>";
echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = "dia";
echo "<p>Falta 1 $day para o evento!</p>";
echo "<p>Falta 2 {$day}s para o evento!</p>";//Protegendo as variaveis

//boas pratica protegendo as variaveis
echo "<h3>{$hello}</h3>";
echo "<h3>{$hello} {$code}</h3>";

//Outras forma eh a concatenacao
echo "<h3>".$hello." ".$code."</h3>";
?>
<h4><?= $hello?> <?= $code?></h4>
<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);
/*
*comando de saida print eh semelhante
*ao echo so nao reconhece a virgula
*/
//print $hello, $code;

print $hello;
print $code;

print "<h3>{$hello} {$code}</h3>";
/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);
// serve para exibir um vector ou array
$array = [
	"campany" => "UpInside",
	"course" => "FSPH",
	"class" => "Comandos de saída"
];
//print $array; vai dar erro
print_r($array);
echo "<pre>", print_r($array, true), "</pre>";//formatacao

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);
// serve para dar saida numa variavel formatada

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
printf($article, $title, $subtitle);
sprintf($article, $title, $subtitle);//sprintf armazena numa variavel

echo sprintf($article, $title, $subtitle);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);
//faz a mesma coisa que o printf so que utiliza um array como substituicao
$company = "<article><h1>Escola %s </h1><p>Curso <b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company,$array);
vsprintf($company, $array); //vsprintf armazena numa variavel
echo vsprintf($company, $array);
/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);
//serve para debugar o nosso codigo
var_dump(
	$array,
	$hello,
	$company
);