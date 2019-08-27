<?php

$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
echo "http://" . $host . $url;
echo '<br><br><br>';

?>