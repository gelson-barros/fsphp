<?php 
$array = [
    "name" => "Gelson Ferreira",
    "company" => "Núcleo Tecnológico",
    "mail" => "gef-faa@faa.com.ao"
];

$objecto = (object)$array;
var_dump(
    $array,
    $objecto
);

echo "O {$array['name']} é um dos integrantes do {$array['company']}.";
echo "<br>";
echo "O {$objecto->name} é um dos integrantes do {$objecto->company}.";

$integrante = $objecto;

unset($integrante->company);//eliminar dados do objecto

var_dump($integrante);

$company = new stdClass();
$company->company = "Núcleo Tecnológico";
$company->mail = "nucleo-tecnologico-faa@faa.com.ao";
$company->ceo = new stdClass();
$company->ceo->name = "Inocéncio Ângelo";
$company->ceo->mail = "pandanegra-faa@faa.com.ao";
$company->integrante = $integrante;
$company->colaborador = new stdClass();
$company->colaborador->name = "ITA-Tecnologia";
$company->colaborador->mail = "ita-comercio@ita.com.ao";


var_dump($company);