<?php

$module_path = dirname(__FILE__);

$loader =  $module_path . '/vendor/altumo/source/php/loader.php';

// check loader file exists
if ( ! file_exists($loader)) throw new \Exception(
	sprintf("Altumo loader file %s not found", $loader)
);

// include loader
require_once $loader;

