<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.10 - Upload de arquivos");

/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
fullStackPHPClassSession("upload", __LINE__);

$folder = __DIR__."/uploads";

if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0755);
}
//configuração do servidor PHP quanto ao tamanho
var_dump([
    "filesizes" => ini_get("upload_max_filesize"),
    "postsize" => ini_get("post_max_size")
]);

//que não podemos aceitar no nosso servidor
var_dump([
    filetype(__DIR__."/index.php"),
    mime_content_type(__DIR__."/index.php")
]);


$getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
//var_dump($_FILES);

//validação
if ($_FILES && !empty($_FILES['file']['name'])) {
    //var_dump($_FILES);
    $fileUpload = $_FILES['file'];
    //var_dump($fileUploads);

    $allowedTypes = [
        "image/jpg",
        "image/jpeg",
        "image/png",
        "application/pdf"
    ];

    $newFilename = time().mb_strstr($fileUpload['name'], ".");
    //var_dump($newFilename);
    if (in_array($fileUpload['type'], $allowedTypes)) {
        if (move_uploaded_file($fileUpload['tmp_name'], __DIR__."/uploads/{$newFilename}")) {
            echo "<p class='trigger accept'>Arquivo enviado com sucesso!</p>"; 
        }else{
            echo "<p class='trigger error'>Erro inesperado!</p>";
        }
    }else{
        echo "<p class='trigger error'>Tipo de arquivo não permitido!</p>";
    }
}elseif($getPost){//se estourar limite
    echo "<p class='trigger warning'>OOPS, Parece que o arquivo é muito grande!</p>";

}else{//não existe postagem
    if ($_FILES) {
        echo "<p class='trigger warning'>Selecione um arquivo antes de enviar!</p>";
    }

}
include __DIR__."/form.php";
var_dump(scandir(__DIR__."/uploads"));//debugando
