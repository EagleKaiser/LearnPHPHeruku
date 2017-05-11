<?php
    $firstType = array("charles", "hello", "world", "Array");
    $authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane",
    "poetic" => "William",
    "Mark Twain"
    );
    echo $firstType[1]."<br>";
    echo $authors["quarky"]."<br>";
    echo array_key_exists(2, $firstType)."<br>";
    echo array_key_exists("Mark Twain", $authors);
    ?>