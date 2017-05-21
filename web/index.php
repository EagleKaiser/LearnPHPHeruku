<?php
    $authors = ["charles", "jane", "William"];
    $count = count($authors);
    switch($count)
    {
        case 0:
            echo "there are no authors";
        case 1:
            echo "there is 1 authors";
        default:
            echo "there is a total of ".$count." authors";
    }
    ?>