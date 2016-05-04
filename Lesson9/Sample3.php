<?php
require_once('../common/CreateTable.php');

CreateHeader('sample');

$titles = array('文字列','大文字','小文字','逆順','略称');
$ary = array('Hello','GoodBye','Thankyou');

CreateTableHeader(5, $titles);

foreach ($ary as $value) {
    BeginTableRow();
    OutputTableData($value);
    OutputTableData(strtoupper($value));
    OutputTableData(strtolower($value));
    OutputTableData(strrev($value));
    OutputTableData(substr($value, 0, 3));
    EndTableRow();
}
EndBody();
