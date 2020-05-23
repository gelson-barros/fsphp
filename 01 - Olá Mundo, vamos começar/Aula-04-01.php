<?php 
/* O que não deve fazer:
Vejamos algumas práticas a serem evitadas:
*/
/*************Exemplo 01*********************/

/*O que não deve fazer*/
echo "<header>
	//header content...
	</header>";
/*Uma boa prática*/
require "header.php";
/**************Exemplo 02**********************/
/*O que não deve fazer*/
function showName($name){
	return "<p>{$name}</p>";
}
echo showName("Gelson Ferreira");

/*Uma boa prática*/
require "functions.php";
echo showName("Gelson Ferreira");
/**************Exemplo 03**********************/
/*O que não deve fazer*/
$q = $pdo->query("SELECT * FROM users");
foreach ($q->fetchAll() as $r){
	//results looping for SQL query
}

/*Uma boa prática*/
foreach ($user->listAll() as $r){
	//results looping for UserModel
}

?>