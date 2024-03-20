<?php

    class Car {
        // public, private, protected
        public $brand;
        public $color;

        function getBrand() {
            return $this->brand;
        }
    }

    $rubicon = new Car();
    $tesla = new Car();

    $rubicon->brand = "Rubicon";
    $tesla->brand = "Tesla";

    echo $rubicon->getBrand();
    echo '<br>';
    echo $tesla->getBrand();
   
?>