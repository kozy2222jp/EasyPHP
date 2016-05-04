<?php
require_once '../common/CreateTable.php';
CreateHeader('sample');
$titles = array('content');
$curdir = opendir('.');

CreateTableHeader(1, $titles);
while($name = readdir($curdir)) {
    BeginTableRow();
    OutputTableData($name);
    EndTableRow();
}
EndTable();
closedir($curdir);
CreateFooter();