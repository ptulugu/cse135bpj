<?php

echo 'HTTP Protocol: ';
echo $_SERVER['SERVER_PROTOCOL'];
echo '</br>';
echo 'HTTP Method: ';
echo $_SERVER['REQUEST_METHOD'];
echo '</br>';
echo 'Query String: ';
echo $_SERVER['QUERY_STRING'];

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';


?>