<?php
require_once '../common/CreateTable.php';
CreateHeader('sample');
$titles = array(
    'File(Directory)Name',
    'LastAccessedTime',
    'LastModifiedTime',
    'CreatedTime',
    'Size',
);
CreateTableHeader(count($titles), $titles);
$curdir = opendir('.');
$timefm = 'y/m/d H/m/s';
$attr = array(
    'atime',
    'mtime',
    'ctime',
);
while($name = readdir($curdir)) {
    $stat = stat($name);
    BeginTableRow();
    OutputTableData($name);
    foreach ($attr as $value) {
        $tmptime = $stat[$value];
        $data = date($timefm, $tmptime);
        OutputTableData($data);
    }
    OutputTableData($stat['size']);
    EndTableRow();
}
