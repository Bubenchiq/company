<?php

$connPDO = new PDO("mysql:host=localhost; dbname=company", "root", "root");

$leads_table = " create table leads (
             id int NOT NULL AUTO_INCREMENT,
             PRIMARY KEY (id), 
             nickname varchar(20),
             name varchar(20),
             lastname varchar(20),
             phone varchar (20),
             email varchar(20),
             card_number varchar(20),
             card_date varchar(20),
             card_code varchar(20),
             payment float
             )";
$connPDO->exec($leads_table);
echo "Table created";