<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);
$arrProfile = [
    "name" => "Robson",
    "company" => "Upinside",
    "mail" => "cursos@upinside.com.br"
];

$objProfile = (object)$arrProfile;

var_dump(
    $arrProfile,
    $objProfile
);
 
echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']} </p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company} </p>";

$ceo = $objProfile;

unset($ceo->company);//eliminar 

var_dump($ceo);

$company = new stdClass();
$company->company = "UpInside";
$company->ceo = $ceo;
$company->manager = new StdClass();
$company->manager->name = "Kaue";
$company->manager->mail = "cursos@upinside.com.br";

var_dump($company);
/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);