<?php
    class Foo
    {
        public static $centuryPopular = "19";
        public static function getCentury()
        {
            return self::$centuryPopular;
        }
    }
    echo Foo::$centuryPopular;
    
    

    ?>