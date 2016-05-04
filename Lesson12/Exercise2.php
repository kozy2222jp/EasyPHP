<?php
require_once '../common/CreateTable.php';
CreateHeader('sample');
$fp = fopen('Sample2.php', 'r');
while(!feof($fp)) {
    $size = strlen(fgets($fp));
    for($i = 0; $i < $size; $i++) {
        echo '*';
    }
    echo $size;
    echo '<br/>';
}
fclose($fp);
CreateFooter();