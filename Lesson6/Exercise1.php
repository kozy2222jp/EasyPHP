<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
            require_once '/../common/CreateTable.php';
            $score = array(10,45,70,32,78,20);
            CreateTable('Index', 'Score', $score);
            $max = 0;
            foreach ($score as $value) {
                if($value >= $max){
                    $max = $value;
                }
            }
            echo "最高得点の人の点数は、{$max}点です。<br/>";
        ?>
    </body>
</html>