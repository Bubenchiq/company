<?php
const SERVER_NAME = 'localhost';
const DB_USER_NAME = 'root';
const DB_PASSWORD = 'root';
const DB_NAME = 'company';
const TABLE_NAME = 'leads';

/**
 * @return PDO
 */
function connPDO()
{
    return new PDO('mysql:host=' . SERVER_NAME . ';dbname=' . DB_NAME, DB_USER_NAME, DB_PASSWORD);
}

$pdo = connPDO();
$count = $pdo->query('SELECT COUNT(*) FROM leads')->fetchColumn();

$sum = $pdo->query('SELECT sum(payment) FROM leads')->fetchColumn();





