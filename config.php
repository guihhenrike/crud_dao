<?php
$db_name = 'crud_com_dao';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try{
    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
} catch (Exception $e) {
    echo "Erro no banco de dados -> ". $e->getMessage();
}
