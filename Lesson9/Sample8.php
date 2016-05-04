<?php
require_once('../common/CreateTable.php');

CreateHeader('sample');

$titles = array('pattern','string','match');
$ptr = array('P*','P+','P?','P{3}');
$str = array('H','PP','PPP','PPPP');

CreateTableHeader(3, $titles);
foreach ($ptr as $valueptr) {
    foreach ($str as $valuestr) {
        BeginTableRow();
        OutputTableData($valueptr);
        OutputTableData($valuestr);
        OutputTableData(preg_match('/'.$valueptr.'/', $valuestr) ? 'o' : 'x');
        EndTableRow();
    }
}
EndTable();
CreateFooter();