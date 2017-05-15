<?php
    $first = array("charles", "hello", "world", "Array");
    echo count($first). "<br>";
    //output: 4
    $authors2 = [
            "Male" => array(
                "Charles" => array("Christmas Carol", "Oliver Twist"),
                "William" => array("Romeo & Juliet", "Richard III"),
                "Mark Twain" => Array("Tom Sawyer", "Huck Finn")
                ),
            "Female" => array(
                "L. M. Montgomery" => array("Anne of Green", "Anne of Avolea"),
                "Louisa May" => array("Litle Women")
                )
            ];
    echo count($authors2)."<br>";
    echo count($authors2, 1);  
    ?>