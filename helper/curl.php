<?php

function makeAPICall($url){

        
    $handle = curl_init();

     
    // Set the url
    curl_setopt($handle, CURLOPT_URL, $url);
    // Set the result output to be a string.
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
     
    $output = curl_exec($handle);
     
    curl_close($handle);
     
return $output;
}