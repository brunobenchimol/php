<?php

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://ezab:8080/ezab.php?target=autoscale%3A8080%2Findex.php&n=40000&c=200',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);

if(!$resp){
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}

// print the response
echo $resp; 

// Close request to clear up some resources
curl_close($curl);


?>
