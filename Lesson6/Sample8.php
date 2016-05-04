<?php require_once '/../common/CreateTable.php'; ?>
<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
           
            $city = array(
                'Tokyo',
                'Nagoya',
                'Kyoto',
                'Osaka',
                'Fukuoka',
            );
            
            array_push($city, 'Nagasaki','Kagoshima');
            array_pop($city); //remove Kagoshima
            array_unshift($city, 'Sapporo', 'Sendai');
            unset($city[2]);
            
            CreateTable('Number', 'City',$city);
        ?>
    </body>
</html>