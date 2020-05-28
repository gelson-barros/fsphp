<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);
$form = new stdClass();
$form->name = "Um nome";
$form->mail = "um@email.com";

var_dump($_REQUEST);
$form->method = "get";
$form->method = "post";
include __DIR__."/form.php";

/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

var_dump($_POST);
$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump([
    $post,
    $postArray
]);
if ($postArray) {
    if (in_array("",$postArray)) {
        echo "<p class='trigger warning'> Preencha todos os campos! </p>";
    }elseif(!filter_var($postArray['mail'], FILTER_VALIDATE_EMAIL)){
        echo "<p class='trigger warning'> E-mail informado não é valido! </p>";
    }else{
        $saveStrip = array_map("strip_tags", $postArray);
        $save = array_map("trim", $saveStrip);
        var_dump($save);
        echo "<p class='trigger accept'> Cadastro com sucesso! </p>";
    }
}
$form->method = "post";
include __DIR__."/form.php";

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);

var_dump($_GET);
$get = filter_input(INPUT_GET, "mail", FILTER_DEFAULT);
$getArray = filter_input(INPUT_GET, FILTER_DEFAULT);

var_dump($getArray);

$form->method = "get";
include __DIR__."/form.php";

/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);

var_dump(
    filter_list(),
    [
        filter_id("validate_email"),
        FILTER_VALIDATE_EMAIL,
        filter_id("string"),
        FILTER_SANITIZE_STRING
    ]
);

$filterForm = [
    "name" => FILTER_SANITIZE_STRIPPED,
    "mail" => FILTER_VALIDATE_EMAIL
];

$getForm = filter_input_array(INPUT_GET, $filterForm);
var_dump($getForm);

$email = "curso@upinside.com.br";
var_dump(
    [
        filter_var($email, FILTER_VALIDATE_EMAIL)
    ],
    filter_var_array($getForm, $filterForm)
);