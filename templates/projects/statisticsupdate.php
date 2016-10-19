<?php
/**
 * Developer: kweku Kankam <kwekukankam@gmail.com>
 * App: Rotaraise Api <php>
 * Description: Store Club info into Database
 **/
error_reporting(-1); // reports all errors
error_reporting( error_reporting() & ~E_NOTICE );
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");


$resultArray = Array();

// setup the autoloading
require_once 'vendor/autoload.php';
// setup Propel
require_once 'config/config.php';
//var_dump($data["vars"]);

$projectStats = new ProjectStatistics();

$projectStats->update($data);

$item = Array();
$item["message"] = "Update Successful";
$resultArray["meta"] = $item;

echo json_encode($resultArray, JSON_PRETTY_PRINT);

//
//
