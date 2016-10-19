<?php

/**
 * Created by PhpStorm.
 * User: kweku
 * Date: 10/3/2016
 * Time: 5:57 PM
 */
class ProjectData
{
    function createProjectInfo($data){
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

    }
    
    function update($data)
    {

    }
    
    function show($id){
        
    }
}