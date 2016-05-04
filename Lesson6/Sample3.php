<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
            $stock['orange'] = 80;
            $stock['strawberry'] = 60;
            $stock['apple'] = 22;
            $stock['peach'] = 50;
            $stock['chestnul'] = 75; //chestnut…栗
        ?>
        <table border="2">
            <tr style="background-color:#AAAAAA;">
                <td>Name of products</td><td>Inventory figures</td>
            </tr>
            <?php
                    foreach ($stock as $name => $value) {
                        echo "<tr><td>{$name}</td><td>{$value}個</td></tr>";
                    }
            ?>
        </table>
    </body>
</html>