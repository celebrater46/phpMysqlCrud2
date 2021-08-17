<?php

if($_POST["json"] === "ON") {
//    $json = file_get_contents("php://input"); // POSTされたJSON文字列を取り出し
//    $contents = json_decode($json, true); // JSON文字列をobjectに変換（第2引数をtrueにしないとハマるので注意）
//    var_dump($contents);
    echo "Json is ON";
    $json = json_encode($_POST);
} else {
    var_dump($_POST);
}

//if(!array_key_exists("Name", $_POST)) {
//    echo “名前を入力してください。” . PHP_EOL;
//} elseif(!array_key_exists("Age", $_POST)) {
//    echo “年齢を入力してください。” . PHP_EOL;
//} elseif(!array_key_exists("HireDate", $_POST)) {
//    echo “雇用年月日を入力してください。” . PHP_EOL;
//} else {
//    postData($_POST);
//    getData();
//}
//
//var_dump($_POST);