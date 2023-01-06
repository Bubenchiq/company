<?php
const SERVER_NAME = 'localhost';
const DB_USER_NAME = 'root';
const DB_PASSWORD = 'root';
const DB_NAME = 'company';
const TABLE_NAME = 'leads';


try {
    saveData();
} catch (Exception $exception) {
    header('HTTP/1.1 500 Internal server error');
    $exception->getMessage();
    exit();
}

/**
 * @return PDO
 */
function connPDO()
{
    return new PDO('mysql:host=' . SERVER_NAME . ';dbname=' . DB_NAME, DB_USER_NAME, DB_PASSWORD);
}

/**
 *
 */
function saveData()
{
    $db = connPDO();
    $db->exec("set names utf8");
    $data = [
        'nickname' => $_POST['nickname'],
        'name' => $_POST['name'],
        'lastname' => $_POST['lastname'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'card_number' => $_POST['card_number'],
        'card_date' => $_POST['card_date'],
        'card_code' => $_POST['card_code'],
        'payment' => $_POST['payment']
    ];
    $unitedKeys = implode(",", array_keys($data));

    var_dump("INSERT INTO " . TABLE_NAME . " ($unitedKeys) VALUES (?,?,?,?,?,?,?,?,?)", get_defined_vars());
    $query = $db->prepare("INSERT INTO " . TABLE_NAME . " ($unitedKeys) VALUES (?,?,?,?,?,?,?,?,?)");
    $query->execute(array_values($data));

}
