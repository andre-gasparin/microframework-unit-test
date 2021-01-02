<?php

include 'andre-autoloader.php';

foreach (new DirectoryIterator(__DIR__ . '/tests') as $file) {

    $fileName = $file->getFilename();
 
    if (substr( $fileName, -8) !== 'Test.php') {
       continue;
    }   

    $className = substr($file->getFilename(), 0, -4);
    $testClass = new $className();

    $methods = get_class_methods($testClass);
    foreach ($methods as $method) 
    {
        $testClass->$method();
    }
}
