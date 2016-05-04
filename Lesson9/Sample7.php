<?php
require_once('../common/CreateTable.php');
CreateHeader('sample');
$titles = array('pattern','string','match');
$ptr = array('[012]','[0-3]','[^012]');
$str = array('0','1','2','3');
CreateTableHeader(3, $titles);
foreach ($ptr as $valueptr) {
    foreach ($str as $valuestr) {
        BeginTableRow();
        OutputTableData($valueptr);
        OutputTableData($valuestr);
        OutputTableData(preg_match('/'.$valueptr.'/', $valuestr) ? 'o':'x');
        EndTableRow();
    }
}
CreateFooter();