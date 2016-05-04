<?php
require_once '../common/CreateTable.php';

CreateHeader('sample');

$pattern = array('Apple','GoodBye','Thankyou');
$string = array('Hello','GoodBye','Thankyou');

$titles = array('pattern','string','match');

CreateTableHeader(3, $titles);

foreach ($pattern as $valueptr) {
    foreach ($string as $valuestr) {
        BeginTableRow();
        OutputTableData($valueptr);
        OutputTableData($valuestr);
        OutputTableData(preg_match('/' . $valueptr . '/', $valuestr) ? 'o' : 'x');
        EndTableRow();
    }
}

EndTable();
EndBody();
