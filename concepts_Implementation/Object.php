<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Object Data Type</title>
</head>
<body>
    <h1 style="text-align:center;">OOPS  Implementation in php </h1>
    <?php
    class Car{
        public $color;
        public $model;
        public function __construct($color,$model){
            $this->color=$color;
            $this->model=$model;    
        }
        public function info(){
            return "My car is a ".$this->color." ".$this->model."!";
        }
    }
    $mycar=new car("red","Volvo");
    echo $mycar->info();
    echo "<br>";
    $mynewcar=new car("red","BMW");
    echo $mynewcar->info();
    ?>
    
</body>
</html>