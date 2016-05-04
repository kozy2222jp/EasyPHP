<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
        require_once '/../common/CreateTable.php';
        $score = array(80,60,22,50,75,33,100,99);
        $number = 0;
        CreateTable('Number', 'Score', $score);
        foreach ($score as $value) {
            if($value >= 70){
                $number++;
            }
        }
        echo "点数が70点以上の人は、{$number}人です。";
        ?>
    </body>
</html>