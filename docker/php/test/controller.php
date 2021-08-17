<?php

//echo "JSON:" . PHP_EOL;
$json = file_get_contents("php://input"); // POSTされたJSON文字列を取り出し
$contents = json_decode($json, true); // JSON文字列をobjectに変換（第2引数をtrueにしないとハマるので注意）
if(!array_key_exists("Name", $contents)) {
//    echo "Not JSON";
//    var_dump($_POST);
    $contents = $_POST;
} else {
//    echo "JSON";
}

    var_dump($contents);

