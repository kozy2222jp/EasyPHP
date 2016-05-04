<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
            $stock = array(
                'apple' => 80,
                'strawberry' => 60,
                'apple' => 22,
                'peach' => 50,
                'chestnut' => 57,
            );
        ?>
        <table border="2">
            <tr style="background-color:#999999">
                <td>Name Of Fruits</td><td>Inventory Figures</td>
            </tr>
            <?php
                    foreach ($stock as $product => $inventory) {
                        echo "<tr><td>$product</td><td>$inventory</td></tr>";
                    }
            ?>
        </table>
    </body>
</html>