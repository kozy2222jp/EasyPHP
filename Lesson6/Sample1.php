<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php 
            $product[0] = 'pencil';
            $product[1] = 'eraser';
            $product[2] = 'ruler';
            $product[3] = 'compass';
            $product[4] = 'ballpoint pen';
        ?>
        <table border="2">
            <tr bgcolor="#AAAAAA"><th>PRODUCTS</th></tr>
            <?php
                for($i = 0; $i < count($product); $i++){
                    echo "<tr><td>$product[$i]</td></tr>";
                }
            ?>
        </table>
    </body>
</html>