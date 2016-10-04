<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 9/7/15
 * Time: 3:52 AM
 */
error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");

//where all files will be stored for now - later move to
//cloud server
$target_path  = "uploads/";
$backup_path = "backup/";

$randnum = rand(11111,99999);//generate random number for file name-merges with projectuuid for uniqueness
//get extension
$ext = get_file_extension($_FILES['file']['name']);
//generate filename
$filename = substr($_REQUEST["uuid"], 0, 4);
$fName = $filename.$randnum;
//path where file is saved
$target_path = $target_path . $fName.".".$ext;

$resultArray = Array();
$result = 0;

$resultArray = Array();
//var_dump($_FILES['file']);
//var_dump($_REQUEST);
// setup the autoloading
require_once 'vendor/autoload.php';
// setup Propel
require_once 'config/config.php';

try{
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {

       $b_path = $backup_path.basename($_FILES['file']['name']);
        copy($target_path,$b_path);
        
//        now we save file info to db and return the code
       $mediaStore = new Mediastore();
       try{$mediaStore->setTitle($_REQUEST["title"]);}catch (Exception $x){} // title
       try{$mediaStore->setDescription($_REQUEST["description"]);}catch (Exception $x){} // description
       try{$mediaStore->setType($_REQUEST["type"]);}catch (Exception $x){} // type
       try{$mediaStore->setFilename($fName);}catch (Exception $x){} // filename TODO
        try{$mediaStore->setExt($ext);}catch (Exception $x){} // extension
        try{$mediaStore->setUuid($_REQUEST["uuid"]);}catch (Exception $x){} // uuid
        try{$mediaStore->setMime($_REQUEST["mime"]);}catch (Exception $x){} // mime
        try{$mediaStore->setSize($_FILES['file']['size']);}catch (Exception $x){} // mime

        try{$mediaStore->setCreated(time());}catch (Exception $x){}
        try{$mediaStore->setModified(time());}catch (Exception $x){}
        $mediaStore->save();



//        $item = Array();
//        $item["message"] = "Save Successfull";
//        $item["code"] = $fName;
//        $resultArray["meta"] = $item;

        $result = 200;
    } else {
        $item = Array();
        $item["message"] = "Unable to Upload Document";
        $item["code"] = 401;
        $resultArray["meta"] = $item;

        $result = 200;
    }
}
catch (Exception $x){
    $item["message"] = "Unable to Upload Document";
    $item = Array();
    $item["code"] = 401;
    $resultArray["meta"] = $item;
    $result = 400;
}

echo $result;

function get_file_extension($file_name) {
    return substr(strrchr($file_name,'.'),1);
}

//echo json_encode($resultArray);
//if (is_uploaded_file($_FILES['uploadedfile']['tmp_name']))
//{
//
//    $name = $_FILES['uploadedfile']['name'];
//    $params = explode(".",$name);
//
//    $token = $params[1];
//    $userid = $params[0];
//    $filename = substr($userid,0,8).".jpg";
//    $tmpfile = $_FILES['uploadedfile']['tmp_name'];
//
//    // $sendfileresult = sendFile($token,$userid,$filename,$tmpfile);
//    // echo $sendfileresult;
//
//    echo "The file " .$params[0]. " and".$params[1]. " has been uploaded";
////  //now lets curl to usergrid
//// // print_r($HTTP_RAW_POST_DATA);
//// //print_r($_FILES['uploadedfile']);
//
//
////}
//else
//{
//    echo "There was an error uploading the file, please try again!";
//}