<?php
/**
 * Developer: kweku Kankam <kwekukankam@gmail.com>
 * App: Rotaraise Api <php>
 * Description: Sinfo into how club by uuid Database
 **/
error_reporting(-1); // reports all errors
//error_reporting( error_reporting() & ~E_NOTICE );
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");


$resultArray = Array();

// setup the autoloading
require_once 'vendor/autoload.php';
// setup Propel
require_once 'config/config.php';

////    //we find clubinfo
    $clubinfo = ClubinfoQuery::create()->findOneByUseruuid($data["id"]);
    if($clubinfo != "") {
        $item = Array();
        $item["id"] = $clubinfo->getId();

        $item["clubname"] = $clubinfo->getClubname();
        $item["president"] = $clubinfo->getPresident();
        $item["country"] = $clubinfo->getCountry();
        $item["countrycode"] = $clubinfo->getCountrycode();
        $item["location"] = $clubinfo->getLocation();
        $item["city"] = $clubinfo->getCity();
        $item["district"] = $clubinfo->getDistrict();
        $item["contact1"] = $clubinfo->getContact2();
        $item["contact2"] = $clubinfo->getContact2();
        $item["sponsor"] = $clubinfo->getSponsor();
        $item["useruuid"] = $clubinfo->getUseruuid();
        $item["intro"] = $clubinfo->getIntro();

        $item["created"] = $clubinfo->getCreated();
        $item["modified"] = $clubinfo->getModified();
        $resultArray["clubinfo"]= $item;
    }
$resultArray["meta"] = $item;

echo json_encode($resultArray,JSON_PRETTY_PRINT);



