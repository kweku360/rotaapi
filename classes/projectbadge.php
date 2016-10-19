<?php

/**
 * Created by PhpStorm.
 * User: kweku
 * Date: 10/18/2016
 * Time: 10:17 AM
 */
class Badge
{
    function create($data)
    {
//        we create a project badge field
        $projectBadge = new Projectbadge();

        try{$projectBadge->setUuid(uniqid());}catch (Exception $x){} // uuid
        try{$projectBadge->setBadgeid($data);}catch (Exception $x){} // badgeId
        try{$projectBadge->setBadgename($data);}catch (Exception $x){} // badgeName
        try{$projectBadge->setExpiry($data);}catch (Exception $x){} // expiry
        try{$projectBadge->setNotes($data);}catch (Exception $x){} // notes
        try{$projectBadge->setProjectUuid($data);}catch (Exception $x){} // project uuid
        
        try{$projectBadge->setCreated(time());}catch (Exception $x){} // 
        
        $projectBadge->save();
    }
}