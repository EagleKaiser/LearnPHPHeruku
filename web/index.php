<?php
    class Person
    {
        public $firstName = "Samel";
        public $lastName = "Clemens";
        public $yearBorn = "1988";
    }
    $myObject = new Person();
    echo $myObject->firstName."<br>";
    $myObject->firstName = "S.L";
    echo $myObject->firstName;
    ?>