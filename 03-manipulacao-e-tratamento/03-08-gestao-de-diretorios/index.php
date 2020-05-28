<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);

$folder = __DIR__."/uploads";
if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0755);
}else{
    var_dump(Scandir($folder));
}

/*
 * [ copiar e renomear ] copy | rename
 */
fullStackPHPClassSession("copiar e renomear", __LINE__);
$file =__DIR__."/file.txt";
//mkdir(__DIR__."/tmp");

var_dump(
    pathinfo($file),
    scandir($folder),
    scandir(__DIR__),
);
if(!file_exists($file) || !is_file($file)) {
    fopen($file, "w");
}else{
    //var_dump(filemtime($file), filemtime(__DIR__."/uploads/file.txt"));
    //copy($file, $folder."/".basename($file));
    //rename(__DIR__."/uploads/file.txt", __DIR__."/uploads/".time().".".pathinfo($file)["extension"]);
    rename($file, __DIR__."/uploads/".time().".".pathinfo($file)["extension"]);
}


/*
 * [ remover e deletar ] unlink | rmdir
 */
fullStackPHPClassSession("remover e deletar", __LINE__);

//mkdir("remove", 0755);

$dirRemove = __DIR__."/remove";
$dirFiles = array_diff(scandir($dirRemove), ['.', '..']);
$dirCount =count($dirFiles);

var_dump($dirFiles,$dirCount);

if ($dirCount >= 1) {
    echo "<h2>Clear...</h2>";
    foreach (scandir($dirRemove) as $fileItem) {
        $fileItem = __DIR__."/remove/{$fileItem}";
        if (file_exists($fileItem) && is_file($fileItem)) {
            //var_dump($fileItem);
            unlink($fileItem);
        }
        
    }
}else{
    rmdir($dirRemove);
}