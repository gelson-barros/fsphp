<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
/*Seguindo boa prática de programação as constantes não devem ser criada neste arquivo. recomendado é num arquivo separado que é config.php

Mas vamos fazer aqui a titulo de exemplo*/

/*a diferenca entre os duas constante eh que o define esta runtime da aplicacao ja o const esta em compaioTime*/
define("COURSE", "Full Stack PHP");
const AUTHOR  = "Robson";

/*recomendação as constante são escrita com todas letras maiuscula,e se precisa separar entao com underScore*/

$formation = true;
if ($formation) {
	define("COURSE_TYPE", "Formação");
	//const TEST = "teste";/*nao executa dentro de uma runtime ou rotina*/
}else{
	define("COURSE_TYPE", "Curso");
}
echo "<p>COURSE_TYPE COURSE AUTHOR</p>";
echo "<p>{COURSE_TYPE} {COURSE} {AUTHOR}</p>";
echo "<p>",COURSE_TYPE," ",COURSE, "de ", AUTHOR,"</p>";
echo "<p>".COURSE_TYPE." ".COURSE."de ".AUTHOR."</p>";

/*const sao otimas ao utilizar na class onde nao se consegue utilizar define*/
class Config{/*Nao eh boa pratica ter classe no mesmo arquivo, eh so a titulo de estudo*/
	const USER = "root";
	const HOST = "localhost";
}

echo "<p>",Config::HOST, "</p>";
echo "<p>",Config::USER, "</p>";

//var_dump(get_defined_constants(true));/*vamos ter todas constantes definidas pelo PHP*/
var_dump(get_defined_constants(true)["user"]);/*colocando user, busca as constantes definida pelo o usuario*/

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);
/*As constantes magicas eles sempre utilizam underline underline para que estejam isoladas, ou seja para que voce cria uma constante e acaba de criar conflito com ela.
Num cria esse padrao de nomecaltura de constante.
*/
var_dump([
	__LINE__,
	__FILE__,
	__DIR__
]);

function fullStackPHP(){
	return __FUNCTION__;
}
var_dump(fullStackPHP());

trait MyTrait{
	public $traitName = __TRAIT__;
}
class FsPHP{
	use MyTrait;
	public $className = __CLASS__;
}
var_dump(new FsPHP());

require __DIR__."/Myclass.php";
var_dump(new \Source\MyClass());
var_dump(\Source\MyClass::class);