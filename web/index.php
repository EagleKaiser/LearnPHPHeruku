<?php
    $second = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane",
    "poetic" => "William",
    "Mark Twain"
    );
    foreach($authors as $val)
    {
        echo $val."<br>";
    }
    foreach($authors as $key => $val)
    {
        echo $val."(".$key.")<br>";
    }
    ?>