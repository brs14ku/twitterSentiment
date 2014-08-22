<?php
//header('Content-Type: application/json');
require_once('twitteroauth.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "805407475-gECUuCtDQyWbvCxMBlMyBwTLl2u21HioNtd4UQC7",
    'oauth_access_token_secret' => "nXNZGk7m0y5jmWWQasd0qTqrtzGtUbq80Jm5VP58ELA",
    'consumer_key' => "SWzvQHRsIqwNzpxbSwQkDQ",
    'consumer_secret' => "zdaegYbSrx9Mhd5g09u9fvzx3N1lWnES3eyfGcSdgs"
);

$twitter = new TwitterOAuth('SWzvQHRsIqwNzpxbSwQkDQ','zdaegYbSrx9Mhd5g09u9fvzx3N1lWnES3eyfGcSdgs', '805407475-gECUuCtDQyWbvCxMBlMyBwTLl2u21HioNtd4UQC7','nXNZGk7m0y5jmWWQasd0qTqrtzGtUbq80Jm5VP58ELA');

$query = array(
    "q" => 'kaepernick'
);
$results = $twitter->get('search/tweets', $query);
foreach($results->statuses as $result){
    echo $result->created_at;
    echo $result->text;
    echo "<br><br>";

}
