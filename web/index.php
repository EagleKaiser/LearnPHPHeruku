<?php
    class Person
    {
        const AVG_LIFE_SPAN = 79;
        private $firstName;
        private $lastNamens;
        private $yearBorn;
        function __construct($tempFirst = "", $tempLast = "", $tempBorn = "")
        {
            echo "Person Constructor<br>";
            $this->firstName = $tempFirst;
            $this->lastName = $tempLast;
            $this->yearBorn = $tempBorn;
        }
        private function getFirstName()
        {
            return $this->firstName;
        }
        private function setFirstName($tempName)
        {
            $this->firstName = $tempName;
        }
        private function getFullName()
        {
            echo "Person->getFullName()<br>";
            return $this->firstName." ".$this->lastName."<br>";
        }
    }
    class Author extends Person
    {
        protected $penName = "Mark Twain";
        public function getPenName()
        {
            return $this->penName."<br>";
        }
        public function getFullName()
        {
            echo "Author->getCompleteName()<br>";
            //access protected properties through this public method
            return $this->firstName." ".$this->lastName."a.k.a. ".$this->penName."<br>";
        }
    }
    $newAuthor = new Author("Samuel Langhorne", "Clemns", 1899);
    echo $newAuthor->getFullName();
    //output
    //Person Constructor
    //Author->getCompleteNme()
    //Samuel Langhorne Clemnsa.k.a. Mark Twain    
    ?>

    