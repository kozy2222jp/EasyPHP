<?php
require_once('../common/CreateTable.php');

CreateHeader('sample');

$pattern = array('PHP','^PHP','PHP$','^PHP$');

$string = array('PHP','PHPP','PHPPP','PPHP');

$titles = array('pattern','string','match');

CreateTableHeader(3, $titles);
foreach ($pattern as $valueptr) {
    foreach ($string as $valuestr) {
        BeginTableRow();
        OutputTableData($valueptr);
        OutputTableData($valuestr);
        OutputTableData(preg_match('/' . $valueptr . '/',$valuestr) ? 'o' : 'x');
        EndTableRow();
    }    
}
EndTable();
CreateFooter();