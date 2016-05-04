<?php require_once 'Exercise1_Class.php'; ?>
<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
            $vehicle = array(
                new Vehicle(1234,20.5),
                new Vehicle(2242,50.3),
            );
        ?>
        <table border="2">
            <tr style="background-color:#CCCCCC;">
                <td>ナンバー</td>
                <td>ガソリン</td>
            </tr>
            <?php
                    foreach ($vehicle as $value) {
                        echo '<tr><td>';
                        echo $value->getNumber();
                        echo '</td><td>';
                        echo $value->getGusQuantity();
                        echo '</td></tr>';
                    }
            ?>
        </table>
    </body>
</html>
