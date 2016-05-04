<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
            $product[] = 'pencil';
            $product[] = 'eraser';
            $product[] = 'ruler';
            $product[] = 'compass';
            $product[] = 'ballpoint pen';
        ?>
        <table border="2">
            <tr style="background-color:#AAAAAA;">
                <td>Number</td><td>Products</td>
            </tr>
            <?php
                    foreach ($product as $id => $value) {
                        echo "<tr><td>$id</td><td>$value</td>";
                    }
            ?>
        </table>
    </body>
</html>