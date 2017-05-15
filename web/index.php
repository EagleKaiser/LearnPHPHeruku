 <?php
    $first = array("charles", "hello", "world", "Array");
    $second = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane",
    "poetic" => "William",
    "Mark Twain"
    );
    sort($first);
    print_r($first);
    echo "<br>";
    sort($second);
    print_r($second);

    ?>