<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__."/classes/app/Template.php";
require __DIR__."/classes/web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump(
    $appTemplate,
    $webTemplate
);

use App\Template;
use Web\Template AS webTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new webTemplate();

var_dump(
    $appUseTemplate,
    $webUseTemplate
);


/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__."/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

//$user->firstName = "Robson";
//$user->lastName = "Leite";

//$user->setFirstName("Robson");
//$user->setLastName("Leite");


var_dump( 
    $user,
    get_class_methods($user)
);

echo "<p> O e-mail de {$user->getFirstName()} é {$user->getEmail()}";
/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$robson = $user->setUser(
    "Robson",
    "Leite",
    "cursos@upinside.com.br"
);

if (!$robson) {
    echo "<p class='trigger error'>{$user->getError()}";
}

$kaue = new \Source\Qualifield\User();
$kaue->setUser(
    "Kaue",
    "Cardoso",
    "cursos@upinside.com.br"

);

$gelson = new \Source\Qualifield\User();
$gelson->setUser(
    "Gelson",
    "Ferreira",
    "cursos@upinside.com.br"

);

var_dump(
    $user,
    $kaue,
    $gelson
);