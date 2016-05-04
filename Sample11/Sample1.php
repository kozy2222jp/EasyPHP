<?php
require_once '../Common/CreateTable.php';

CreateHeader('sample');
$db = new SQLite3('pdb.db');
$db->exec('DROP TABLE IF EXISTS product');
$query = "CREATE TABLE product (id INTEGER PRIMARY KEY,"
         . "name STRING,price INTEGER)";
$db->exec($query);
$qry = array(
    "INSERT INTO product (name, price) VALUES('鉛筆', 80)",
    "INSERT INTO product (name, price) VALUES('消しゴム', 50)",
    "INSERT INTO product (name, price) VALUES('定規', 200)",
    "INSERT INTO product (name, price) VALUES('コンパス', 300)",
    "INSERT INTO product (name, price) VALUES('ボールペン', 100)"
);
foreach ($qry as $value) {
    $db->exec($value);
}

$query = "SELECT * FROM product";
$data = $db->query($query);

$titles = array('No','Product Name','Unit Price');
CreateTableHeader(3, $titles);
while($value = $data->fetchArray()) {
    $id = $value['id'];
    $name = $value['name'];
    $price = $value['price'];
    BeginTableRow();
    OutputTableData($id);
    OutputTableData($name);
    OutputTableData($price);
    EndTableRow();
}
$db->close();
