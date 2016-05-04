<?php
require_once '../common/CreateTable.php';
$titles = array('name','directory','writable','readble');
$curdir = opendir('../Lesson9');

CreateTableHeader(4, $titles);
while($name = readdir($curdir)) {
    $isd = is_dir($name) ? 'Directory' : 'File';
    $isw = is_writable($name) ? '○' : '×';
    $isr = is_readable($name) ? '○' : '×';
    BeginTableRow();
    OutputTableData($name);
    OutputTableData($isd);
    OutputTableData($isw);
    OutputTableData($isr);
    EndTableRow();
}
EndTable();
closedir($curdir);
CreateFooter();