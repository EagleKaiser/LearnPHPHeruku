<?php
    define('CHECK_CONSTANT', "Yes, I am a constant!");

    $intVar = 1234;
    $stringVar = "I'm a String";
    $boolVar = true;
    $floatVar = 12.34;

    echo is_int($intVar);
    echo is_string($stringVar);
    echo is_bool($boolVar);
    echo is_float($floatVar);

    echo define('CHECK_CONSTANT');
    ?>