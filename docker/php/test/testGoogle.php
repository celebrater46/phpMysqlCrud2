<?php

$url = "https://www.google.com/";
$json = file_get_contents($url);
echo $json;