
<?php 
//Efeitos colaterais (side effects):

/*
Você pode (incluir um arquivo, conectar a um serviço, gerar uma saída) ou
(declarar uma classe, criar uma função, definir uma constate).
Mas nunca faça ambos no mesmo arquivo.
*/


require "config.php"; //Arquivo com Constantes
require "functions.php"; //Arquivo de Funções
echo HELLO;
useMyFunction();


DEFINE("HELLO", "ola mundo!");//esta se declara uma constate
mySecondeFunction(){//declarando uma funcao
	//Function Body
}

?>