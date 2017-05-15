 <?php
    $first = array("charles", "hello", "world", "Array");
    $second = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane",
    "poetic" => "William",
    "Mark Twain"
    );
    asort($first);
    print_r($first);
    echo "<br>";
    asort($second);
    print_r($second);

    ?>