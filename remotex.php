<?php

use RecursiveDirectoryIterator as RDI;
use RecursiveIteratorIterator as RII;

require_once 'languages.php'; // language file

header("Content-type: application/json; charset=utf-8");


/**
 *   You can change bellow this line
 */

define('REMOTEX_SECRET', '930913');
define('REMOTEX_UNITS', 'KB');
define('REMOTEX_LOCALE', 'enUS');



/**
 *   You can't change anything bellow this line
 */


$method = $_SERVER['REQUEST_METHOD'];


function loadArchives($directory)
{
    try {
 
        $recursiveIterator = new RDI($directory, FilesystemIterator::SKIP_DOTS);
        $iterator = new RII($recursiveIterator);


        foreach ($iterator as $file) {
            if ($file->isFile() && $file->getExtension() === 'zip') {
                echo $file->getPathname() . PHP_EOL;
            }
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}




loadArchives(__DIR__);