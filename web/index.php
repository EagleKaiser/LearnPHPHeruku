<?php
    class Person
    {
        const AVG_LIFE_SPAN = 79;
        public $firstName = "Samel";
        public $lastName = "Clemens";
        public $yearBorn = "1988";
    }
    $myObject = new Person();
    echo $myObject::AVG_LIFE_SPAN."<br>";
    echo Person::AVG_LIFE_SPAN;
    ?>