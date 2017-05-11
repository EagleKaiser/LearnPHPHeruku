<?php
    $first = array("charles", "hello", "world", "Array");
    $second = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane",
    "poetic" => "William",
    "Mark Twain"
    );
    unset($authors[1], $authors[0]);
    unset($second[brilliant]);
    print_r($authors);
    print_r($second);
    unset($second);
    print_r($second);
    ?>