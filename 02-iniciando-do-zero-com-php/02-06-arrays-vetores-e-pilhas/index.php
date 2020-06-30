<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);
$arrA = array(1,2,3);/*Antiga forma de declarar array.Um array começa do key(index) zero por defalut*/
$arrA = [0,1,2,3];/*Nova forma de declarar array*/
var_dump($arrA);

$arrayIndex = [
	"Brian",
	"Angus",
	"Malcolm"
];
$arrayIndex[] = "Cliff";/*acrescentado valor sem ter que rescreve-lo*/
$arrayIndex[] = "Phil";/*acrescentado valor */
var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);
/*este tipo de array, voce é que mando qual que ou seja nomeias as indexação*/
/*OBS:No array quando coloca um mesmo index ou key, so considera um */
$arrayAssoc = [
	"vocal" => "fDDD",
	"vocal" => "Brian",
	"solo_guitar" => "Angus",
	"base_guitar" => "Malcolm",
	"bass_guitar" => "Cliff",

];
$arrayAssoc ["drums"] = "Phil";/*acrescentado o key e valor */
$arrayAssoc ["rock_band"] = "AC/DC";/*acrescentado o key e valor */

var_dump($arrayAssoc);
/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);
$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "intrument" => "Guitar"];
$instruments = [
	$brian,
	$angus
];

var_dump($instruments);

var_dump([
	"brian" =>$brian,
	"angus" =>$angus
]);

/*
OBS: Quandofor trabalhar com array multidimensional procure trabalhar com um unico padrao de array(associativo ou indexado). Mas o mais indicado é o array associativo para se trabalhar.
Um dos exemplo que nao cumpriu com esta recomedacao eh este exemploacima desta escrita.
brian eh indexado e angus eh asoociativo
*/
/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);
/*formas de acessar e interpretar os array*/

$acdc = [
	"Band" => "AD/DC",
	"vocal" => "Brian",
	"solo_guitar" => "Angus",
	"base_guitar" => "Malcolm",
	"bass_guitar" => "Cliff",
	"drums" => "Phil",

];



echo "<p>O vocal da banda AC/DC é {$acdc["vocal"]}, e junto com {$acdc["solo_guitar"]}< fazem um ótimo show de rock!</p>";

$pearl = [
	"Band" => "Pearl_Jam",
	"vocal" => "Eddie",
	"solo_guitar" => "Mikie",
	"base_guitar" => "Stone",
	"bass_guitar" => "Jeff",
	"drums" => "Jack",
];


$rockBands = [
	"acdc" => $acdc,
	"pearl_jam" => $pearl
];

var_dump($rockBands);

echo "<p>{$rockBands["pearl_jam"]["vocal"]}</p>";

foreach ($acdc as $item) { //este item e o valor
	echo "<p>{$item}</p>";
}
foreach ($acdc as $key => $value) { //este item e o valor
	echo "<p>{$value} is a {$key} of band</p>";
}

foreach ($rockBands as $rockBand) {
	$art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
	vprintf($art, $rockBand);
}