<?php
require_once '../common/CreateTable.php';

CreateHeader('sample');
$index = array(
    'SERVER_NAME',
    'SERVER_ADDR',
    'SERVER_SOFTWARE',
    'SERVER_PORT',
    'DOCUMENT_ROOT',
    'PHP_SELF',
    );
$titles = array('Server Information', 'Index');

CreateTableHeader(2, $titles);
foreach ($index as $value) {
    BeginTableRow();
    OutputTableData($value);
    OutputTableData($_SERVER[$value]);
    EndTableRow();
}
EndTable();

CreateFooter();