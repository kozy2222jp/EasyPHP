<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
            $data[0] = array(
                "Tokyo",32,25,
            );
            $data[1] = array(
                "Nagoya",28,21,
            );
            $data[2] = array(
                "Osaka",27,20,
            );
            $data[3] = array(
                "Kyoto",26,19,
            );
            $data[4] = array(
                "Fukuoka",27,22,
            );
        ?>
        
        <table border="2">
            <tr style="background-color:#AAAAAA;">
                <th>都市名</th><th>最高気温</th><th>最低気温</th>
            </tr>
            <?php
                    for ($i = 0; $i < count($data); $i++){
                        echo '<tr>';
                        for ($j=0; $j < count($data[$i]); $j++){
                            echo "<td>{$data[$i][$j]}</td>";
                        }
                        echo '</tr>';
                    }
            ?>
        </table>
    </body>
</html>