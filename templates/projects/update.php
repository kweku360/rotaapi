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

switch ($data["vars"]["table"]) {
    case "info":
        updateInfoTable($data);
        break;
    case "display":
        updateDisplayTable($data);
        break;
    case "account":
        updateAccountTable($data);
        break;
}

function updateInfoTable($data)
{
    $project = ProjectQuery::create()->findOneByUuid($data["id"]);
    if ($project == "") {
        $item = Array();
        $item["message"] = "Unable to Save - Wrong id";
        $item["code"] = "400";
        $resultArray["meta"] = $item;
    } else {
          if(isset($data["vars"]["name"])){
            $project->setName($data["vars"]["name"]);
        }   
         // name
          if(isset($data["vars"]["urlcode"])){
            $project->seturlcode($data["vars"]["urlcode"]);
        }   
         // urlcode
          if(isset($data["vars"]["status"])){
            $project->setstatus($data["vars"]["status"]);
        }   
         // status
          if(isset($data["vars"]["country"])){
              $countryData = explode("-",$data["vars"]["country"]);
            $project->setCountry($countryData[0]);
              $project->setCountrycode($countryData[1]);
           
        } // country - code

          if(isset($data["vars"]["city"])){
            $project->setCity($data["vars"]["city"]);
           
        } // city
          if(isset($data["vars"]["fundstart"])){
            $project->setStartdate($data["vars"]["fundstart"]);
          
        } // fundstart date
          if(isset($data["vars"]["fundend"])){
            $project->setenddate($data["vars"]["fundend"]);
           
        } // fundend date

        $project->setModified(time());
        $project->save();
    }


}

function updateDisplayTable($data)
{
    $projectdis = ProjectdisplayQuery::create()->findOneByProjectUuid($data["id"]);
    if ($projectdis == "") {
        $item = Array();
        $item["message"] = "Unable to Save - Wrong id";
        $item["code"] = "400";
        $resultArray["meta"] = $item;
    } else {
        if(isset($data["vars"]["tagline"])) {
            $projectdis->setTagline($data["vars"]["tagline"]);
        } // tagline

        if(isset($data["vars"]["description"])) {
            $projectdis->setdescription($data["vars"]["description"]);
        } // description

          if(isset($data["vars"]["category"])){
            $projectdis->setCategory($data["vars"]["category"]);
        }   
         // category
          if(isset($data["vars"]["tags"])){
            $projectdis->setTags($data["vars"]["tags"]);
        }   
        // tags
          if(isset($data["vars"]["sociallinks"])){
            $projectdis->setSociallinks($data["vars"]["sociallinks"]);
        } // social link

        $projectdis->setModified(time());
        $projectdis->save();
    }
}

function updateAccountTable($data){
    $projectacc = ProjectaccountQuery::create()->findOneByProjectUuid( $data["id"]);
    if ($projectacc == "") {
        $item = Array();
        $item["message"] = "Unable to Save - Wrong id";
        $item["code"] = "400";
        $resultArray["meta"] = $item;
    } else {
          if(isset($data["vars"]["targetamt"])){
            $projectacc->setTargetamt($data["vars"]["targetamt"]);
        }   
     // target amt
          if(isset($data["vars"]["totaltargetamt"])){
            $projectacc->setTotalTargetamt($data["vars"]["totaltargetamt"]);
        }   
         //total target amt
          if(isset($data["vars"]["amtoffsite"])){
            $projectacc->setAmtoffsite($data["vars"]["amtoffsite"]);
        }   
         // amt offsite
          if(isset($data["vars"]["amtraised"])){
            $projectacc->setAmtraised($data["vars"]["amtraised"]);
        }
        $projectacc->setModified(time());

        $projectacc->save();
    }
}

$item = Array();
$item["message"] = "Update Successful";
$resultArray["meta"] = $item;

echo json_encode($resultArray, JSON_PRETTY_PRINT);

//
//
