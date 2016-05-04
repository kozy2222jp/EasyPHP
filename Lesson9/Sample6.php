<?php
require_once('../common/CreateTable.php');

CreateHeader('sample');

$titles = array('pattern','string','match');

$ptr = array('PHP.','PHP..','.PHP','..PHP');

$str = array('PHP','PHPP','PHPPP','PPHP','PPPHP');

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
CreateFooter();