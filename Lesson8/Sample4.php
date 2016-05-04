<html>
    <head>
        <title>Sample</title>
    </head>
    <body>
        <?php
            $person = array(
                new Person('Sato',55),
                new Person('Suzuki',25),
            );
        ?>
        
        <table border="2">
            <tr style="background-color:#CCCCCC;">
                <td>名前</td><td>年齢</td>
            </tr>
            <?php
            for($i = 0; $i < count($person); $i++){
                echo '<tr><td>';
                echo $person[$i]->getName();
                echo '</td><td>';
                echo $person[$i]->getAge();
                echo '</td></tr>';
            }
            ?>
        </table>

        
        <?php
            class Person
            {
                private $name;
                private $age;
                public static $count = 0;
                public function __construct($name,$age)
                {
                    $this->name = $name;
                    $this->age = $age;
                    self::$count++;
                }
                public function setName($name)
                {
                    $this->name = $name;
                }
                public function setAge($age)
                {
                    $this->age = $age;
                }
                public function getName(){return $this->name;}
                public function getAge(){return $this->age;}
            }
        ?>
    </body>
</html>
