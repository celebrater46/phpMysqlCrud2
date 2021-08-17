<?php

//define("URL", "http://localhost/index.php");
define("URL", "http://localhost/controller.php");

if($_POST["json"] === "ON") {
    $data = [
        "Name" => $_POST["Name"],
        "Age" => $_POST["Age"],
        "HireDate" => $_POST["HireDate"],
    ];
    $json = json_encode($data);
    $context = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => implode("\r\n", array('Content-Type: application/json',)),
            'content' => $json,
        )
    );
    $html = file_get_contents(URL, false, stream_context_create($context));
    echo $html;
} else {
    $context = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
            'content' => http_build_query($_POST),
        )
    );
    $html = file_get_contents(URL, false, stream_context_create($context));
    echo $html;
}