<?php
/*escopo diferentes 
declaração de variavel ou array dentro e fora de uma funcao, esta declaracao sao diferentes 
exemplo 

$variavel = 4;

function functionEscopo(){
	echo $variavel;
}
*/
function functionName($arg1, $arg2, $arg3){
	$body =[$arg1, $arg2, $arg3];
	return $body;
}

/*cumprindo com as PSRs*/
/*funções com opções de argumentos devem seguir  recomendação 
os primeiros argumentos devem ser obrigatorio, os proximos argumentos são os importantes(ja vem preenchido com valores padrão) e os ultimos argumentos são opcionais(não precisam ser preechidos)*/
function optionArgs($arg1, $arg2 = true, $arg3 = null){
	$body =[$arg1, $arg2, $arg3];
	return $body;
}

/*Quando  voce permite acesso global, voce aplicar algumas estrutura de controlo dentro da função para controlar as variaveis globais*/
function calcImc(){
	global $weight;
	global $height;
	return $weight/($height * $height);
}

function payTotal($price){
	static $total;/*é um atributo que estou a  criar desta função, ele é dá propria função  toda vex que executar esta função o valor dele vai estar atribuido*/
	$total += $price;/*$total = $total + $price; */
	return "<p>O total a pagar eh  ". number_format($total, "2", ",",".") ."Kz</p>";
}

function myTeam(){
	$teamNames = func_get_args();
	$teamCount = func_num_args();
	return ["members" => $teamNames, "count" => $teamCount];
}