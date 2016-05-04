<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
        
        $product = array(
            array(100,5),
            array(20,16),
            array(25,40),
        );
        ?>
        
        <table border="2">
            <tr style="background-color:#CCCCCC;">
                <td>unit price</td><td>number</td><td>total price</td>
            </tr>
            <?php
            for($i = 0; $i < count($product); $i++){
                $p = $product[$i][0];
                $n = $product[$i][1];
                $t = total($p, $n);
                echo "<tr><td>{$p}</td><td>{$n}</td><td>{$t}</td></tr>\n";
            }
            ?>
        </table>
        
        <?php
        
        function total($pr,$n){
            return $pr*$n;
        }
        ?>
    </body>
</html>
