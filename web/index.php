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
            echo "Person->getFullName()<br>";
            return $this->firstName." ".$this->lastName."<br>";
        }
    }
    class Author extends Person
    {
        public $penName = "Mark Twain";
        public function getPenName()
        {
            return $this->penName."<br>";
        }
        //child methods with same name will overide parents method
        public function getFullName()
        {
            echo "Author->getFullName()<br>";
            //firstName and lastName are parents attriputes that child can access
            return $this->firstName." ".$this->lastName."<br>";
        }
    }
    //Author will access parent method getFullName()
    $newAuthor = new Author("Samuel Langhorne", "Clemns", 1899);
    echo $newAuthor->getFullName();

    //output:
    //Person Constructor
    //Person->getFullName()
    //Samuel Langhorne Clemns
    ?>