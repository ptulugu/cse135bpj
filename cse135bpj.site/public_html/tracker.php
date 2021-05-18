<?php
    if(!isset($_COOKIE["user"])) {
      $cookie_name = "user";
      $cookie_value = rand();
      setcookie($cookie_name, $cookie_value, "/");
    } else {
      $cookie_value = $_COOKIE["user"];
    }

  // Create some random text-encoded data for a line chart.
  header('content-type: image/png');
  $url = 'https://cse135bpj.site/api/static/';

  // Add data, chart type, chart size, and scale to params.
  $chart = array(
    'id' => $cookie_value,
    'UserJS' => "false");

  // Send the request, and print out the returned bytes.
  $context = stream_context_create(
    array('http' => array(
      'method' => 'POST',
      'content' => http_build_query($chart))));
  fpassthru(fopen($url, 'r', false, $context));
?>