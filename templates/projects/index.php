<?php
/**
 * User: kweku
 * Date: 9/18/2016
 * Time: 4:42 PM
 */

error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");

// setup the autoloading
//require_once 'vendor/autoload.php';

// setup Propel
require_once 'config/config.php';

$resultArray = Array();

//means we can add new suit
$newProject = new Clubinfo();
$newProjectAcc = new Clubinfo();
$newProjectUi = new Clubinfo();

//first we add project account
try{$newDefendant->setClubname("moses");}catch (Exception $x){}
try{$newDefendant->setPresident("moses");}catch (Exception $x){}
try{$newDefendant->setCountry("moses");}catch (Exception $x){}
try{$newDefendant->setCity("moses");}catch (Exception $x){}
try{$newDefendant->setDistrict("moses");}catch (Exception $x){}
try{$newDefendant->setContact1(34);}catch (Exception $x){}
try{$newDefendant->setSponsor("moses");}catch (Exception $x){}
try{$newDefendant->setCountrycode("moses");}catch (Exception $x){}

try{$newDefendant->setCreated(time());}catch (Exception $x){}
try{$newDefendant->setModified(time());}catch (Exception $x){}
$newDefendant->save();

$item = Array();
$item["message"] = "Save Successfull";
$resultArray["meta"] = $item;

echo json_encode($resultArray,JSON_PRETTY_PRINT);

//echo json_encode($resultArray,JSON_PRETTY_PRINT);

