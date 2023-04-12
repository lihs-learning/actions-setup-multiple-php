<?php
namespace lihsai0\Demo;

class Demo
{
  public function fetch($url)
  {
    // Initialize cURL session
    $curl = curl_init();

    // Set cURL options
    curl_setopt($curl, CURLOPT_URL, $url); // Set the URL
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the response as a string

    // Send the request and get the response
    $response = curl_exec($curl);

    $err = null;

    // Check for errors
    if(curl_errno($curl)) {
      $err = curl_error($curl);
    }

    // Close the cURL session
    curl_close($curl);


    return array($response, null);
  }
}

