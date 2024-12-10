<?php

require_once 'languages.php';

header("Content-type: application/json; charset=utf-8");


/**
 *   You can change bellow this line
 */

 define('REMOTEX_SECRET','930913');
 define('REMOTEX_UNITS', 'KB');
 define('REMOTEX_LOCALE','enUS');





/**
 *   You can't change anything bellow this line
 */


$method = $_SERVER['REQUEST_METHOD'];




