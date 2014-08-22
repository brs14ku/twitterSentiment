<?php
/**
 * Created by PhpStorm.
 * User: bschultz
 * Date: 8/21/14
 * Time: 5:46 PM
 */
$callString= 'https://api.twitter.com/1.1/search/tweets.json?q=kaepernick&src=typd';
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $callString
));
$result = curl_exec($curl);
curl_close($curl);
print_r(json_decode($result));
