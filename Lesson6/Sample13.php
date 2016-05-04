<?php
function CreateTd($data){
    echo "<tr><td>$data</td></tr>";
}

?>

<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
            require_once '/../common/CreateTable.php';
            $city = array(
                'Tokyo',
                'Nagoya',
                'Kyoto',
                'Osaka',
                'Fukuoka',
            );
            
            extract($city, EXTR_PREFIX_ALL, 'c');
            
        ?>
        <h3>Display by variable</h3>
        <table border="2">
            <tr style="background-color:#666666;"><td>city name</td></tr>
            <?php
                    CreateTd($c_0);
                    CreateTd($c_1);
                    CreateTd($c_2);
                    CreateTd($c_3);
                    CreateTd($c_4);
            ?>
        </table>
        
        <?php
            $world = compact('c_0', 'c_1','c_2','c_3','c_4');
            echo '<h3>Display by Array</h3>';
            CreateTable('VariableName', 'Values', $world);
        ?>
    </body>
</html>
    
    