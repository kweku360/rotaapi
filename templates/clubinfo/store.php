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

//lets create a new clubinfo item
$clubInfo = new Clubinfo();

try{$clubInfo->setClubname($data["vars"]["clubname"]);}catch (Exception $x){} // clubname
try{$clubInfo->setPresident($data["vars"]["president"]);}catch (Exception $x){} //president
try{$clubInfo->setCity($data["vars"]["city"]);}catch (Exception $x){}//city
try{$clubInfo->setLocation("");}catch (Exception $x){}//location
try{$clubInfo->setCountry($data["vars"]["country"]);}catch (Exception $x){}//country
try{$clubInfo->setCountrycode($data["vars"]["countrycode"]);}catch (Exception $x){}//country code
try{$clubInfo->setDistrict($data["vars"]["district"]);}catch (Exception $x){}//district
try{$clubInfo->setSponsor($data["vars"]["sponsor"]);}catch (Exception $x){}//sponsor
try{$clubInfo->setIntro($data["vars"]["intro"]);}catch (Exception $x){}//intro
try{$clubInfo->setUseruuid($data["vars"]["useruuid"]);}catch (Exception $x){}//useruuid
try{$clubInfo->setContact1($data["vars"]["contact1"]);}catch (Exception $x){}//contact 1
try{$clubInfo->setContact2($data["vars"]["contact2"]);}catch (Exception $x){}//contact 2

try{$clubInfo->setCreated(time());}catch (Exception $x){}
try{$clubInfo->setModified(time());}catch (Exception $x){}
$clubInfo->save();

$item = Array();
$item["message"] = "Save Successful";
$resultArray["meta"] = $item;

echo json_encode($resultArray,JSON_PRETTY_PRINT);



