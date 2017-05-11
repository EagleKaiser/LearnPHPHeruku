 <?php
    $authors = array("charles", "hello", "world", "Array");
    $lastValue = array_pop($authors);
    echo $lastValue."<br>";
    print_r($authors);
    //output:
    //ArrayArray ( [0] => charles [1] => hello [2] => world ) 
    ?>