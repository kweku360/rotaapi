<?php

/**
 * Created by PhpStorm.
 * User: kweku
 * Date: 10/3/2016
 * Time: 5:57 PM
 */
class ProjectStatistics
{
    function create($uuid,$enddate){
//        we create a table
        $projectstatistics = new Projectstat();
        try{$projectstatistics->setUuid(uniqid());}catch (Exception $x){} // uuid
        try{$projectstatistics->setDonorcount(0);}catch (Exception $x){} // donorcount
        try{$projectstatistics->setviews(0);}catch (Exception $x){} // views
        try{$projectstatistics->setLikes(0);}catch (Exception $x){} // likes
        try{$projectstatistics->setShares(0);}catch (Exception $x){} // shares
        try{$projectstatistics->setUpdatecount(0);}catch (Exception $x){} // update count
        try{$projectstatistics->setCommentscount(0);}catch (Exception $x){} // comment count
        try{$projectstatistics->setFundedpercent(0);}catch (Exception $x){} // fund percent
        try{$projectstatistics->setenddate($enddate);}catch (Exception $x){} // end date
        try{$projectstatistics->setProjectUuid($uuid);}catch (Exception $x){} // project uuid
        try{$projectstatistics->setCreated(time());}catch (Exception $x){} // project created
        $projectstatistics->save();
    }
    
    function update($data)
    {
        var_dump($data);
        $StatsQuery = ProjectstatQuery::create()->findOneByProjectUuid($data["id"]);

        if ($StatsQuery == "") {
            echo "empty";
        } else {
            if (isset($data["vars"]["donorcount"])) {
                $StatsQuery->setDonorcount($data["vars"]["donorcount"]);
            }
            if (isset($data["vars"]["views"])) {
                $StatsQuery->setviews($data["vars"]["views"]);
            }
            if (isset($data["vars"]["likes"])) {
                $StatsQuery->setLikes($data["vars"]["likes"]);
                //we build a triger for most popular
            }
            if (isset($data["vars"]["shares"])) {
                $StatsQuery->setShares($data["vars"]["shares"]);
            }  
            if (isset($data["vars"]["updatecount"])) {
                $StatsQuery->setUpdatecount($data["vars"]["updatecount"]);
            }
            if (isset($data["vars"]["commentcount"])) {
                $StatsQuery->setCommentscount($data["vars"]["commentcount"]);
            }
             if (isset($data["vars"]["fundedpercent"])) {
                $StatsQuery->setFundedpercent($data["vars"]["fundedpercent"]);
            }
            if (isset($data["vars"]["enddate"])) {
                $StatsQuery->setenddate($data["vars"]["enddate"]);
            }

            $StatsQuery->save();
            
        }
    }
    
    function show($id){
        
    }
}