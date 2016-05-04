<?php
require_once('../common/CreateTable.php');

CreateHeader();

$titles = array('pattern','string','match');
$ptr = array('(PHP)+','PHP|HPH');
$str = array('PH','PHP','HPH','PHPHP');

CreateTableHeader(3, $titles);
foreach ($ptr as $valueptr) {
    foreach ($str as $valuestr) {
        BeginTableRow();
        OutputTableData($valueptr);
        OutputTableData($valuestr);
        OutputTableData(preg_match('/'.$valueptr.'/',$valuestr) ? 'o' : 'x' );
        EndTableRow();
    }
}
EndTable();
CreateFooter();