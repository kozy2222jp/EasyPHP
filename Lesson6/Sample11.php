<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
            require_once '/../common/CreateTable.php';
            
            $test = array(22,80,75,60,50);
            
            sort($test);
            echo "<h3>Accending</h3><br/>";
            CreateTable('Index', 'Number',$test);
            rsort($test);
            echo '<h3>Desccending</h3><br/>';
            CreateTable('Index', 'Number', $test);
        ?>
    </body>
</html>