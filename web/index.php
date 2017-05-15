<?php
     class Person
    {
        const AVG_LIFE_SPAN = 79;
        public $firstName;
        public $lastNamens;
        public $yearBorn;

        function __construct()
        {
            echo "I'm in the constructor";
            $this->$firstName = "Samel";
            $this->$lastName = "Clemens";
            $this->$yearBorn = "1988";
        }

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
    echo $myObject->getFirstName()."<br>";
    $myObject->setFirstName("Sam");
    echo $myObject->getFirstName();
    //output: Sam
    ?>