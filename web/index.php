<?php
    function bookByAuthorYear($authorName, $year)
    {
        echo $year;
        echo "\n";
        echo $authorName;
    }

    $authorName = "William Shakespeare";
    bookByAuthorYear($authorName, 1910);

    ?>
