 <?php
   
     class Person
    {
        const AVG_LIFE_SPAN = 79;
        public $firstName;
        public $lastNamens;
        public $yearBorn;
        function __construct($tempFirst = "", $tempLast = "", $tempBorn = "")
        {
            echo "Person Constructor<br>";
            $this->firstName = $tempFirst;
            $this->lastName = $tempLast;
            $this->yearBorn = $tempBorn;
        }
        public function getFirstName()
        {
            return $this->firstName;
        }
        public function setFirstName($tempName)
        {
            $this->firstName = $tempName;
        }
        public function getFullName()
        {
            echo "Person->getFullName()".PHP_EOL;
            return $this->firstName." ".$this->lastName.PHP_EOL;
        }
    }
    class Author extends Person
    {
        public $penName = "Mark Twain";
        public function getPenName()
        {
            return $this->penName.PHP_EOL;
        }
    }
    $newAuthor = new Author("Samuel Langhorne", "Clemns", 1899);
    echo $newAuthor->getFullName();
    //output:
    //
    ?>