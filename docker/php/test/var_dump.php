<?php

//var_dump($_POST);
//var_dump($_SERVER);

$name = $_POST["Name"];
$age = $_POST["Age"];
$hire = $_POST["HireDate"];
echo $name . ", " . $age . ", " . $hire . PHP_EOL;