<?php

// 送信データ
$data = [
    "Name" => "hideru",
    "Age" => "28",
    "HireDate" => "2018-06-28T00:00:00",
];

// JSONに変換
$data = json_encode($data);

// ストリームコンテクストオプションを作成し、HTTPコンテクストオプションをセット
$options = [
    'http' => [
        'method'=> 'POST',
        'header'=> 'Content-type: application/json; charset=UTF-8',
        'content' => $data
    ]
];

// ストリームコンテキストの作成
$context = stream_context_create($options);

// POST
$contents = file_get_contents('http://localhost:8080/index.php', false, $context);
//$contents = file_get_contents('http://localhost/index.php', false, $context);
//$contents = file_get_contents('http://enin-world.sakura.ne.jp/test_php/json/receive.php', false, $context);

// receive.php のレスポンスを表示
echo $contents;