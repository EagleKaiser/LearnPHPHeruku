<?php
    $quote = "To be or not to be, that is the question.";
    $replaced = str_replace("be", "know", $quote)."<br>";
    echo $replaced;
    $replaced = str_replace("be", "know", $replaced, $count)."<br>";
    echo $replaced."<br>number of replaces= ".$count;
    ?>