<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump([
    date_default_timezone_get(),
    date(DATE_W3C),
    date("d-m/Y H:i:s"),
]);

define("DATE_AO", "d/m/Y H:i:s");
//define("DATE_TIMEZONE", "Pacific/Apia");
define("DATE_TIMEZONE", "Africa/Luanda");

date_default_timezone_set(DATE_TIMEZONE);
var_dump([
    date_default_timezone_get(),
    date(DATE_AO),
]);

var_dump(getdate());
echo "<p>Hoje é dia ", getdate()['mday'],"! </p>";


/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);
/*string to time strtotime */
var_dump([
    "strtotime NOW" => strtotime("now"),
    "time" => time(),
    "strtotime+10days"=>strtotime("+10days") ,
    "date DATE_AO" => date(DATE_AO),
    "date +10days" => date(DATE_AO, strtotime("+10days")),
    "date -10days" => date(DATE_AO, strtotime("-10days")),
    "date +1years" => date(DATE_AO, strtotime("+1years")),
    "date +1year" => date(DATE_AO, strtotime("+1year")),
]);

/*string format time strftime */
$format = "%d/%m/%Y %Hh%M minutos";
echo "<p> A data de hoje é ", strftime($format), "</p>";
echo strftime("<p> Hoje é dia %d de %m de %Y às %H horas e %M minutos</p>");