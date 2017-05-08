<?php
    function bookByAuthorYear($authorName)
    {
        echo $authorName;        
    }
    function getAuthor()
    {
        return "William Shakespeare";
    }
    bookByAuthorYear(getAuthor());
    //output:
    
    ?>
