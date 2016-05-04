<?php
require_once '../common/CreateTable.php';
CreateHeader('sample');
$titles = array('Region','Product');

CreateTableHeader(2, $titles);
$fp = fopen('Sample.csv', 'r');
while(!feof($fp)) {
    $str = fgetcsv($fp);
    BeginTableRow();
    foreach ($str as $value) {
        OutputTableData($value);
    }
    EndTableRow();
}
fclose($fp);
EndTable();
CreateFooter();