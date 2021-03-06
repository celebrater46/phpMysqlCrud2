<?php

// https://qiita.com/okdyy75/items/d21eb95f01b28f945cc6 PHP POST送信について
// https://qiita.com/yousan/items/dc2cc789dcb0f07a61dc PHPの外部への接続でSSLのエラーが出てしまう@KUSANAGI PHP7.2
// API: DB_Ope_API

ini_set('display_errors', "On");

$url = 'http://localhost/index.php';
//$url = 'http://localhost:44395/api/members';

$data = array(
    'Name' => 'Sally',
    'Age' => '34',
    'HireDate' => '2018-06-28T00:00:00',
);

$data = json_encode($data); // JSONに変換

$context = array(
    'http' => array(
//    'ssl' => array(
        'method'  => 'POST',
//        'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
        'header'  => implode("\r\n", array('Content-Type: application/json',)),
//        'header'  => 'Content-Type: application/json',
//        'content' => http_build_query($data),
        'content' => $data,
//        'verify_peer' => false,
//        'verify_peer_name' => false,
    )
);

$html = file_get_contents($url, false, stream_context_create($context));

var_dump($http_response_header);
//var_dump($context);
//echo $html;
