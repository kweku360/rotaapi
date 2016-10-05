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

//lets create a new clubinfo item

$projects = ProjectQuery::create()->findByClubuuid($data["id"]);
//$defendants = PlaintiffsQuery::create()->findBySuitnumber("A1220");


foreach($projects as $project) {
    $outerarr = array();

    $item = Array();
    $item["id"] = $project->getId();
    $item["uuid"] = $project->getUuid();
    $item["name"] = $project->getName();
    $item["urlcode"] = $project->geturlcode();
    $item["status"] = $project->getstatus();
    $item["countrycode"] = $project->getCountrycode();
    $item["country"] = $project->getCountry();
    $item["city"] = $project->getCity();
    $item["startdate"] = $project->getStartdate();
    $item["enddate"] = $project->getenddate();
    $item["clubuuid"] = $project->getClubuuid();
    $item["created"] = $project->getCreated();
    $item["modified"] = $project->getModified();
    $outerarr["info"] = $item;

    //we find clubinfo
    $clubinfo = ClubinfoQuery::create()->findOneByUseruuid( $project->getClubuuid());
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
        $outerarr["clubinfo"] = $item;

    }
    //we find all images
    $mediastore = MediastoreQuery::create()->findByUuid( $project->geturlcode());
    foreach($mediastore as $mediaitem) {
        $mediaouterarr = array();
        $item = Array();
        $item["id"] = $mediaitem->getId();
        $item["title"] = $mediaitem->getTitle();
        $item["description"] = $mediaitem->getDescription();
        $item["type"] = $mediaitem->getType();
        $item["filename"] = $mediaitem->getFilename();
        $item["ext"] = $mediaitem->getExt();
        $item["uuid"] = $mediaitem->getUuid();
        $item["mime"] = $mediaitem->getMime();
        $item["size"] = $mediaitem->getSize();
        $item["created"] = $mediaitem->getCreated();
        $item["modified"] = $mediaitem->getModified();
        $mediaouterarr[] = $item;
        $outerarr["media"] = $mediaouterarr;
    }

    //we find project display
    $projectdisplay = ProjectdisplayQuery::create()->findOneByProjectUuid( $project->getUuid());
    if($projectdisplay != "") {

        $item = Array();
        $item["id"] = $projectdisplay->getId();
        $item["uuid"] = $projectdisplay->getUuid();
        $item["tagline"] = $projectdisplay->getTagline();
        $item["description"] = $projectdisplay->getdescription();
        $item["category"] = $projectdisplay->getCategory();
        $item["sociallinks"] = $projectdisplay->getSociallinks();
        $item["projectuuid"] = $projectdisplay->getProjectUuid();
        $item["clubuuid"] = $projectdisplay->getClubuuid();
        $item["created"] = $projectdisplay->getCreated();
        $item["modified"] = $projectdisplay->getModified();
        $outerarr["display"] = $item;
    }
    //we find project account
    $projectaccount = ProjectaccountQuery::create()->findOneByProjectUuid( $project->getUuid());
    if($projectaccount != ""){
        $item = Array();
        $item["id"] = $projectaccount->getId();
        $item["uuid"] = $projectaccount->getUuid();
        $item["targetamt"] = $projectaccount->getTargetamt();
        $item["Totaltargetamt"] = $projectaccount->getTotalTargetamt();
        $item["amtoffsite"] = $projectaccount->getAmtoffsite();
        $item["amtraised"] = $projectaccount->getAmtraised();
        $item["donorcount"] = $projectaccount->getDonorcount();
        $item["projectuuid"] = $projectaccount->getProjectUuid();
        $item["clubuuid"] = $projectaccount->getClubuuid();
        $item["created"] = $projectaccount->getCreated();
        $item["modified"] = $projectaccount->getModified();

        $outerarr["account"] = $item;
    }
    $resultArray["projects"][] = $outerarr;
}

$resultArray["meta"] = Array(
    "total" => $projects->count()
);

echo json_encode($resultArray,JSON_PRETTY_PRINT);
