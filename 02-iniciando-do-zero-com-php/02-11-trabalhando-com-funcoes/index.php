<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
/*cumprindo boa pratica de programação que as funções devem estar num arquivo separado*/
require __DIR__."/functions.php";
var_dump(functionName("Pearl Jam", "AC\DC", "Alter Bridge"));
//var_dump(functionName("Robson", "Kaue", "Gustavo"));

/*
chamada de uma função com argumentos opcional que cumpri com as PSRs
os primeiros argumentos devem ser obrigatorio, os proximos argumentos são os importantes(ja vem preenchido com valores padrão) e os ultimos argumentos são opcionais(não precisam ser preechidos)
*/
var_dump(optionArgs("Robson"));
var_dump(optionArgs("Robson","Kaue"));
var_dump(optionArgs("Robson","Kaue" , "Gustavo"));


/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);
/*estou a ignorar aquele acesso de escopo protegido
começo a dizer que existe alguns dados que podem entrar de fora da função para dentro */
/*se apagar esta variaveis aqui, lá na função que utiliza esta variaveis globais devem ter uma estrutura de controlo. Boa pratica */
$weight = 86;
$height = 1.83;
echo calcImc();
/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);
$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);
echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Kaue", "Gustavo", "Gah", "João"));
