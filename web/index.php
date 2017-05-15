<?php   
     class Person
    {
        const AVG_LIFE_SPAN = 79;
        protected $firstName;
        protected $lastNamens;
        protected $yearBorn;
        function __construct($tempFirst = "", $tempLast = "", $tempBorn = "")
        {
            echo "Person Constructor<br>";
            $this->firstName = $tempFirst;
            $this->lastName = $tempLast;
            $this->yearBorn = $tempBorn;
        }
        protected function getFirstName()
        {
            return $this->firstName;
        }
        protected function setFirstName($tempName)
        {
            $this->firstName = $tempName;
        }
        protected function getFullName()
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
            echo "Author->getCompleteNme()<br>";
            return $this->firstName." ".$this->lastName."a.k.a. ".$this->penName."<br>";
        }
    }
    $newAuthor = new Author("Samuel Langhorne", "Clemns", 1899);
    echo $newAuthor->getFullName();