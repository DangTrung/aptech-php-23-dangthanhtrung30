<?php
    class Fruit {
        //properties
        public $name;
        public $color;

        //method
        function set_Name($name){
            $this->name= $name;
        }
        function get_Name(){
            return $this->name;
        }
    }
    $apple =new Fruit();
    $Banana = new Fruit();
    $apple->set_Name('Apple');
    $Banana->set_Name('Banana');
    echo $apple->get_Name();

    ?>