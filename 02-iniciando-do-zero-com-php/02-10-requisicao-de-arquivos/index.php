<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);
/*ja o include é só incluir indepedentemente se existe ou nao */
/*Para arquivos voce precisa mas não sao essecial na tua aplicacao*/
//include "file.php";
//echo "<p>Continue</p>";


//include "header.php";
include __DIR__."/header.php";//recomendacao o DIR traz o caminho absoluto
$profile = new stdClass(); /*objecto dinamico ele funciona como vector de dados ou seja posso armazenar algumas entradas e valores neste objecto*/
$profile->name = "Robson";
$profile->company = "UpInside";
$profile->email = "curso@upinside.com.br";
//var_dump($profile);
include __DIR__."/profile.php"; 


$profile->name = "Kaue";
$profile->company = "UpInside";
$profile->email = "curso@upinside.com.br";
//var_dump($profile);
include __DIR__."/profile.php";
//include_once __DIR__."/profile.php"; 
/*Quando se utilizar once tanto no require_once ou include_once, estamos a dizer no php olha se você ainda não inclui este arquivo anteriormente faça isto agora*/
/*Sempre que voce precisar incluir apenas uma vez, e Isto é valido para configurações por exemplo, se utiliza o once para garantir a singularidade*/
/*Agora se queres incluir mais de uma vez entao utiliza sem o once*/

/* 
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);
/*require é como se tivesse a dizer eu preciso deste documento, sem ele a minha aplicacao ou arquivo não vai rodar*/

/*Para arquivos que são necessário na nossa aplicação*/
//require "file.php";
//echo "<p>Continue</p>";
require __DIR__."/config.php";

echo "<h1>".COURSE."</h1>";/*As constantes não é interpretada dentro das aspas*/
//require __DIR__."/config.php"; /*nao  pode ser repetido o mais viavel é once*/
require_once __DIR__."/config.php";

//var_dump(require_once __DIR__."/config.php");

/*
Gesto de conclusão nos temos include que serve para importar um recurso de outro arquivo ou um trecho de codigo
Temos o require que serve para importar uma configuração, uma dependencia do seu projecto, um função que seja necessaria na sua aplicação  
Temos o once para evitar importar duas um arquivo gerando imcompatibilidade na execução deste codigo*/