<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
            $product1 = array('pencil','eraser','ruler');
            $product2 = array('pen','eraser','rubber');
        ?>
        
        <table border="2">
            <tr style="background-color:#CCCCCC;">
                <th>商品名１</th>
                <th>長さ</th>
                <th>商品名２</th>
                <th>長さ</th>
                <th>一致</th>
            </tr>

        <?php
        
        foreach ($product1 as $value1) {
            foreach ($product2 as $value2) {
                echo"<tr><td>{$value1}</td><td>";
                echo strlen($value1);
                echo "</td><td>{$value2}</td><td>";
                echo strlen($value2);
                echo '</td>';
                
                if(strcmp($value1, $value2) == 0){
                    $mt = '○';
                } else {
                    $mt = '×';
                }
                echo "<td>{$mt}</td></tr>";
            }
        }
        ?>
        
        </table>
    </body>
</html>
