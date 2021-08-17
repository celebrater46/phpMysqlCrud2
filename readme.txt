##############################
　DBの初期設定について
##############################

・phpMysqlCrud2 ディレクトリ下で docker-compose up -d を実行（新たにコンテナを作り直す時は --build 追加）
docker exec -it mysql_host /bin/bash
mysql -u root -p

・パスワードを聞かれるので入力。

・下記SQL文を実行すると、テーブルが作成される。
create table IF not exists `test_table` (`id` INT(20) AUTO_INCREMENT, `name` VARCHAR(20) NOT NULL, `age` INT(20) NOT NULL, `hire_date` VARCHAR(20) NOT NULL, `created_at` Datetime DEFAULT NULL, `updated_at` Datetime DEFAULT NULL, PRIMARY KEY (`id`)) DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

・MySQL 8.0 は認証方式が代わってそのままSQL文をPDOで送ると2054エラーを吐くので、以下を実施（参照：https://motomotosukiyaki.com/mysql-from-php-server-requested-authentication-method-unknown-to-the-client）
alter user 'docker' identified with mysql_native_password by 'docker';