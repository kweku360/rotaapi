<?php
/**
 * Created by PhpStorm.
 * User: kweku
 * Date: 10/3/2016
 * Time: 6:00 PM
 */

// setup the autoloading
require_once 'vendor/autoload.php';

$emailutils = new Emailutils();

$res = $emailutils->sendMailgun();
echo $res;
