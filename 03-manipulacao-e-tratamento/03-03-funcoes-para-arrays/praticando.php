<?php 

$index =[
    "Kalibrados",
    "O2",
    "SSP",
];

$assoc = [
  "band_1" => "Kalibrados",
  "band_2" => "O2",
  "band_3" => "SSP",  
];

/******manipulação ********/
//acrecentar valores no array no princípio
array_unshift($index,  "Forca Suprema", "");// array indexado
$assoc = ["band_4" => "Forca Suprema", "band_5" => ""] + $assoc;// array associativo

//acrecentar valores no array no final
array_push($index, "");// array indexado
$assoc = $assoc + [ "band_6" => ""] ;// array associativo

//remover valores no array no princípio
array_shift($index);// array indexado
array_shift($assoc);// array associativo

//remover valores no array no final
array_pop($index);// array indexado
array_pop($assoc);// array associativo

//array_unshift($index, "");// array indexado

//fazem os filtro de indice que não tem valores
$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump(
    $index,
    $assoc
);
//-----------------------------------------------------------------------------
echo "<hr>";
/******ordenação ********/
//revertendo a ordenação
$index = array_reverse($index);
$assoc = array_reverse($assoc);

//revertendo a ordenação só nos valores sem mexer no indice 
asort($index); //leva em consideração o alfabetico 
asort($assoc);


//revertendo a ordenação só nos indice sem mexer no valores 
ksort($index);
krsort($index);

sort($index);

var_dump(
    $index,
    $assoc
);
//-------------------------------------------------------------------------------
echo "<hr>";
/******Verificação ********/
var_dump(
    [
        array_keys($assoc),
        array_values($assoc)
    ]
);

if (in_array("O2",$assoc)) {
    echo "<p>Musica Preferida<p>";
}

$arrToString = implode(", ", $assoc);//colocar como um string
echo "<p>Eu curto {$arrToString} e muitas outras<p>";
echo "<p>{$arrToString}<p>";

var_dump(explode(", ", $arrToString));//colocar como um array
//------------------------------------------------------------------------------
echo "<hr>";
/******Em Pratica ********/

$profile = [
    "name" => "Robson",
    "company" => "Upinside",
    "mail" => "curso@upinside.com.br"
];


$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}<br><a href="mailto:{{mail}}" title="Enviar email para{{email}}">Enviar E-mail</a></p>
    </article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile),array_values($profile),$template
);

$replaces = "{{".implode("}}&{{", array_keys($profile))."}}";
echo $replaces;

//var_dump(explode("&", $replaces));

echo str_replace(
    explode("&", $replaces), array_values($profile),$template
);