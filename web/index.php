<?php
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
    print_r($authors2['Male']['Mark Twain'][1]);
    ?>