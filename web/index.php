<?php
    function bookByAuthorYear($tempAuthorName, $tempYear = 1910)
    {
        echo $tempYear;
        echo "<br>";
        echo $tempAuthorName;
        echo "<br>";
    }
    $year = 1920;
    function getAuthor()
    {
        return "William Shakespeare";
    }
    
    bookByAuthorYear(getAuthor());
    bookByAuthorYear(getAuthor(), $year);
    //output:
    
    ?>
