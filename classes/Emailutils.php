<?php

/**
 * Created by PhpStorm.
 * User: kweku
 * Date: 10/3/2016
 * Time: 5:57 PM
 */
class Emailutils
{
    function testData(){
        echo "konumfun";
    }

    function sendMailgun(){
        $api_key = 'key-d8c134570b2f62fd7446fc2be0a5c4de';
        $api_domain = 'sandbox4ec47b4091a4441f9ba91016f46d6df9.mailgun.org';
        $send_to = 'biggiebims@yahoo.co.uk';

        $name = "kankam";
        $senderemail = 'Mailgun Sandbox <postmaster@sandbox4ec47b4091a4441f9ba91016f46d6df9.mailgun.org>';
        $receiveremail = "kweku360@gmail.com";
        // $content = $data['message'];

        //$messageBody = "Contact: $name ($email)\n\nMessage: $content";

        $config = array();
        $config['api_key'] = $api_key;
        $config['api_url'] = 'https://api.mailgun.net/v2/'.$api_domain.'/messages';

        $message = array();
        $message['from'] = $senderemail;
        $message['to'] = $receiveremail;
        $message['h:Reply-To'] = $senderemail;
        $message['subject'] = 'Confirm Abooker Account';
        $message['text'] = "Please Confirm your Email On Abooker";

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $config['api_url']);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, "api:{$config['api_key']}");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS,$message);

        $result = curl_exec($curl);

        curl_close($curl);
        return $result;
    }
}