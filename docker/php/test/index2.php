<?php

// https://gray-code.com/php/insert-data-by-using-pdo/

ini_set('display_errors', "On");

//$dsn = "mysql:host=mysql_host;dbname=test_database;";
define("DSN", "mysql:host=mysql_host;dbname=test_database;");

function pdo($sql, $isPost, $data) {
    try {
        $pdo = new PDO(DSN, 'docker', 'docker');
        $stmt = $pdo->prepare($sql);
        if($isPost) {
            $stmt->bindParam( ':name', $data["name"], PDO::PARAM_STR);
            $stmt->bindParam( ':age', $data["age"], PDO::PARAM_STR);
            $stmt->bindParam( ':hire', $data["hire"], PDO::PARAM_STR);
        }
        $stmt->execute();
        $pdo = null; // DB接続解除
        if(!$isPost) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo "POST succeeded!" . PHP_EOL;
            var_dump($result);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

function postData() {
    $data = [
        "name" => "Miyabi",
        "age" => 23,
        "hire" => "2018-06-28T00:00:00"
    ];
//    $name = 'Miyon';
//    $age = 28;
//    $hire = '2018-06-28T00:00:00';
    $sql = "INSERT INTO test_table (name, age, hire_date) VALUES (:name, :age, :hire)";
    pdo($sql, true, $data);
}

function getData() {
    $sql = "SELECT * FROM test_table";
    pdo($sql, false, null);
}

postData();
getData();

//try {
//    // POST
//    $name = 'Miyon';
//    $age = 28;
//    $hire = '2018-06-28T00:00:00';
//    $sql = "INSERT INTO test_table (name, age, hire_date) VALUES (:name, :age, :hire)";
//    $pdo = new PDO(DSN, 'docker', 'docker');
//    $stmt = $pdo->prepare($sql);
//    $stmt->bindParam( ':name', $name, PDO::PARAM_STR);
//    $stmt->bindParam( ':age', $age, PDO::PARAM_STR);
//    $stmt->bindParam( ':hire', $hire, PDO::PARAM_STR);
//    $res = $stmt->execute();
//    // データベースの接続解除
//    $pdo = null;
//
//    // GET
//    $sql2 = "SELECT * FROM test_table";
//    $pdo2 = new PDO(DSN, 'docker', 'docker');
//    $stmt2 = $pdo2->prepare($sql2);
//    $stmt2->execute();
//    $res2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
//    echo "POST succeeded!" . PHP_EOL;
//    var_dump($res2);
//} catch (PDOException $e) {
//
//}

