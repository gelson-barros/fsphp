<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);
define("DATE_AO", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1993-08-28");//colocar no formato deles (ingles)
$dateStatic = DateTime::createFromFormat(DATE_AO, "10/03/2019 12:00:00");//Tem que coincidir com formato da constante 
var_dump(
    $dateNow,
    //get_class_methods($dateNow),//funcoes e metedos prontas para manipular
    $dateBirth,
    $dateStatic
);

var_dump([
    $dateNow->format(DATE_AO),
    $dateNow->format("d")
]);

echo "<p> Hoje é dia {$dateNow->format('d')} do {$dateNow->format('m')} de {$dateNow->format('Y')} </p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    $newTimeZone,
    $newDateTime,
    $dateNow
]);

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M");//P-periodo T-tempo
var_dump([
    $dateInterval,
    //get_class_methods($dateInterval),
]);

$dateTime = new DateTime("now");
//$dateTime->add($dateInterval);
$dateTime->sub($dateInterval);
var_dump($dateTime);

$birth = new DateTime(date("Y")."-08-28");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth);
var_dump($birth, $diff);

if($diff->invert){
    echo "<p> Seu aniversário foi a {$diff->days} dias.</p>";
}else{
    echo "<p> Faltam {$diff->days} dias para o meu aniversário.</p>";
}
$dateResources = new DateTime();

var_dump([
    $dateResources->format(DATE_AO),
    $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_AO),
    $dateResources->add(DateInterval::createFromDateString("20days"))->format(DATE_AO),
]);

/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start =  new DateTime("now");
$interval = new DateInterval("P6M");
$end = New DateTime("2021-12-27");

$period = new DatePeriod($start,$interval,$end);
var_dump([
    $start->format(DATE_AO),
    $interval,
    $end->format(DATE_AO),
],$period,get_class_methods($period));

echo "<h1> Sua Assinatura:</h1>";
foreach ($period as $recurrences){
    //var_dump($recurrences);
    //die;
    echo "<p> Proximo vecimento {$recurrences->format(DATE_AO)}</p>";
}