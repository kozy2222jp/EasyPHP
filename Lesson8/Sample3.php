<html>
    <head>
        <title>Sample</title>
    </head>
    <body>
        <?php
            $person = new Person;
            $person->setName('Sato');
            $person->setAge(55);
        ?>
        
        <table border="2">
            <tr style="background-color:#CCCCCC;">
                <td>名前</td><td>年齢</td>
            </tr>
            <tr>
                <td><?php echo $person->getName() ?></td>
                <td><?php echo $person->getAge() ?></td>
            </tr>
        </table>

        
        <?php
            class Person
            {
                private $name = '姓名';
                private $age = 20;
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
