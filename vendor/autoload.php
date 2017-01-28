<?php
define('SF_DEBUG', 0xA);


spl_autoload_register(function ($class) {

// project-specific namespace prefix
//$prefix = 'Foo\\Bar\\';

// base directory for the namespace prefix
$base_dir = __DIR__ . '/';
$explode=explode('\\',$class);
    
        $file = $base_dir . str_replace(array('\\','/','_'), DIRECTORY_SEPARATOR, $class) . '.php';
    

// get the relative class name

// replace the namespace prefix with the base directory, replace namespace
// separators with directory separators in the relative class name, append
// with .php


// if the file exists, require it
if (file_exists($file)) {
    require $file;
}
else{
    var_dump($file);
}
});
?>
