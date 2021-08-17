<?php
try {
//    https://qiita.com/fujitak/items/b56122e2ecd94022a7b6
    # hostには「docker-compose.yml」で指定したコンテナ名を記載
    $dsn = "mysql:host=mysql_host;dbname=test_database;";
//    $db = new PDO($dsn, 'docker', 'docker');
    $db = new PDO($dsn, 'docker', 'docker');
//    $db = new PDO($dsn, 'root', 'root');

//    $sql = "SELECT * FROM test_table";
    // insert into [table-name] (column1, column2 … ) values(value1, value2 … );
//    $sql = "insert into `test_table` (`name`, `age`, `hire_date`) values(`StoneSwamp`, `58`, `2018-06-28T00:00:00`)";
    $sql = "insert into test_table (name, age, hire_date) values ('StoneSwamp', 58, '2018-06-28T00:00:00')";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
    echo "Hello world 2302" . PHP_EOL;
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
