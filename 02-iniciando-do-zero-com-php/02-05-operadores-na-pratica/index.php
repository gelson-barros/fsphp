<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);
$operatorA = 5;
$operators = [
	"a += 5" => ($operatorA += 5),/*$operatorA = $operatorA + 5*/
	"a -= 5" => ($operatorA -= 5),/*$operatorA = $operatorA - 5*/
	"a *= 5" => ($operatorA *= 5),/*$operatorA = $operatorA * 5*/
	"a /= 5" => ($operatorA /= 5)/*$operatorA = $operatorA dividir 5*/
];
var_dump($operators);

echo "<br>";


$incrementA = 5;
$incrementB = 5;
$inDecrement = [
	"pos-incremento" => $incrementA++,
	"res-incremento" => $incrementA,
	"pre-incremento" => ++$incrementA,
	"pos-decremento" => $incrementB--,
	"res-decremento" => $incrementB,
	"pre-decremento" => --$incrementB,
];

var_dump($inDecrement);
/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);
$relatedA = 5;
$relatedB = "5";
$relatedC = 10;
$related = [
	"a == b" => ($relatedA == $relatedB),
	"a === b" => ($relatedA === $relatedB),
	"a != b" => ($relatedA == $relatedB),
	"a !== b" => ($relatedA !== $relatedB),
	"a !== b" => ($relatedA !== $relatedB),
	"a > c" => ($relatedA > $relatedC),
	"a < c" => ($relatedA > $relatedC),
	"a >= b" => ($relatedA >= $relatedB),
	"a >= c" => ($relatedA >= $relatedC),
	"a <= c" => ($relatedA <= $relatedC),
];
var_dump($related);


/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);
/*Quando temos valores nulos e brancos, eles sao valores tambem false */
$logicA = true;
$logicB = false;
$logic = [
	"a && b" => ($logicA && $logicB),
	"a || b" => ($logicA || $logicB),/*|-> paipi(pip)*/
	"a" => ($logicA),
	"! a" => (!$logicA),
	"! b" => (!$logicB),
];

var_dump($logic);
/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);
$calcA = 5;
$calcB = 10;
$calc = [
	"a + b" => ($calcA + $calcB),
	"a - b" => ($calcA - $calcB),
	"a * b" => ($calcA * $calcB),
	"a / b" => ($calcA / $calcB),
	"a % b" => ($calcA % $calcB),
];
var_dump($calc);