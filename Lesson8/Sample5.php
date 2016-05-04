<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
        $usr1 = new User('鈴木',56,'mmm@nnn.nn.jp','03-xxx-xxxx');
        ?>
        
        <table border="2">
            <tr style="background-color:#CCCCCC;">
                <th>氏名</th><th>年齢</th><th>アドレス</th><th>電話</th>
            </tr>
            <tr>
                <td><?php echo $usr1->getName(); ?></td>
                <td><?php echo $usr1->getAge(); ?></td>
                <td><?php echo $usr1->getAdr(); ?></td>
                <td><?php echo $usr1->getTel(); ?></td>
            </tr>
        </table>

        <?php
            class Person{
                protected $name = '姓名';
                protected $age = 20;
                
                public function __construct($nm, $ag) {
                    $this->name = $nm;
                    if($ag >= 20 && $ag <= 60){
                        $this->age = $ag;
                    } else {
                        $this->age = -1;
                    }
                }
                public function getName(){return $this->name;}
                public function getAge(){return $this->age;}
            }
            
            class User extends Person{
                private $adr = 'xxx@xxx.xx.xx';
                private $tel = 'xx-xxx-xxxx';
                
                public function __construct($nm, $ag, $ad, $tl) {
                    parent::__construct($nm, $ag);
                    $this->adr = $ad;
                    $this->tel = $tl;
                }
                public function getName() {return '会員：' . $this->name;}
                public function getAdr(){return $this->adr;}
                public function getTel(){return $this->tel;}
            }
        ?>
    </body>
</html>
