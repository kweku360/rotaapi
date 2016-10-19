<?php
/**
 * Developer: kweku Kankam <kwekukankam@gmail.com>
 * App: Rotaraise Api <php>
 * Description: Store Club info into Database
**/
error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");


$resultArray = Array();

// setup the autoloading
require_once 'vendor/autoload.php';
// setup Propel
require_once 'config/config.php';
//var_dump($data["vars"]);
////lets create a new project item
$project = new Project();

try{$project->setUuid(uniqid());}catch (Exception $x){} // uuid
try{$project->setName($data["vars"]["name"]);}catch (Exception $x){} // name
try{$project->seturlcode($data["vars"]["urlcode"]);}catch (Exception $x){} // urlcode
try{$project->setstatus("pending");}catch (Exception $x){} // status
try{$project->setCountry($data["vars"]["country"]);}catch (Exception $x){} // country
try{$project->setCountrycode($data["vars"]["countrycode"]);}catch (Exception $x){} // countrycode
try{$project->setCity($data["vars"]["city"]);}catch (Exception $x){} // city
try{$project->setStartdate($data["vars"]["fundstart"]);}catch (Exception $x){} // fundstart date
try{$project->setenddate($data["vars"]["fundend"]);}catch (Exception $x){} // fundend date
try{$project->setClubuuid($data["vars"]["clubuuid"]);}catch (Exception $x){} // club uuid
try{$project->setCreated(time());}catch (Exception $x){}
try{$project->setModified(time());}catch (Exception $x){}
$project->save();

//lets create a new projectaccount  item
$projectacc = new Projectaccount();

try{$projectacc->setUuid(uniqid());}catch (Exception $x){} // uuid
try{$projectacc->setTargetamt($data["vars"]["targetamt"]);}catch (Exception $x){} // target amt
try{$projectacc->setTotalTargetamt(0);}catch (Exception $x){} //total target amt
try{$projectacc->setCurrency($data["vars"]["currency"]);}catch (Exception $x){} //currency
try{$projectacc->setAmtoffsite(0);}catch (Exception $x){} // amt offsite
try{$projectacc->setAmtraised(0);}catch (Exception $x){} // amt raised
try{$projectacc->setClubuuid($data["vars"]["clubuuid"]);}catch (Exception $x){} // club uuid
try{$projectacc->setProjectUuid($project->getUuid());}catch (Exception $x){} // project uuid
try{$projectacc->setCreated(time());}catch (Exception $x){}
try{$projectacc->setModified(time());}catch (Exception $x){}
$projectacc->save();

//lets create a new project display  item
$projectdis = new Projectdisplay();

try{$projectdis->setUuid(uniqid());}catch (Exception $x){} // uuid
try{$projectdis->setTagline($data["vars"]["tagline"]);}catch (Exception $x){} // tagline
try{$projectdis->setdescription($data["vars"]["description"]);}catch (Exception $x){} // description
try{$projectdis->setCategory($data["vars"]["category"]);}catch (Exception $x){} // category
try{$projectdis->setTags($data["vars"]["tags"]);}catch (Exception $x){} // tags
try{$projectdis->setSociallinks("");}catch (Exception $x){} // social link
try{$projectdis->setClubuuid($data["vars"]["clubuuid"]);}catch (Exception $x){} // club uuid
try{$projectdis->setProjectUuid($project->getUuid());}catch (Exception $x){} // project uuid
try{$projectdis->setCreated(time());}catch (Exception $x){}
try{$projectdis->setModified(time());}catch (Exception $x){}
$projectdis->save();

//lets create an empty project stats field for the particular project
$projectStats = new ProjectStatistics();

$projectStats->create($project->getUuid(),$project->getenddate());

$item = Array();
$item["message"] = "Save Successful";
$resultArray["meta"] = $item;

echo json_encode($resultArray,JSON_PRETTY_PRINT);

//
//
