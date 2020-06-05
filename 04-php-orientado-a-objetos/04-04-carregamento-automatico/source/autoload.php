<?php 

spl_autoload_register(function($class){
    $prefix = "Source\\";
    $baseDir = __DIR__."/";
    $len = strlen($prefix);

    //var_dump($class);
    //var_dump(strncmp($prefix, $class,$len));
    if (strncmp($prefix, $class,$len) !== 0 ) {
        return;
    }

    $relativeClass = substr($class, $len);
    //var_dump($relativeClass);

    $file = $baseDir.str_replace("\\", "/", $relativeClass).".php";
    //var_dump($file);

    if (file_exists($file)) {
        require $file;
    }

    /*var_dump(
        $class,
        $prefix,
        $baseDir
    );*/
});