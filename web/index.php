<?php
     class Person
    {
        const AVG_LIFE_SPAN = 79;
        public $firstName = "Samel";
        public $lastName = "Clemens";
        public $yearBorn = "1988";

        public function getFirstName()
        {
            return $this->firstName;
        }
        public function setFirstName($tempName)
        {
            $this->firstName = $tempName;
        }
    }
    $myObject = new Person();
    $myObject->setFirstName("Sam");
    echo $myObject->getFirstName();
    ?>
