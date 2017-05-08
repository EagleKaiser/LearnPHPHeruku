<?php
    $quote = "Hello world";
    $varArray = str_split($quote);
    Print_r($varArray)."<br>";
    $varArray = str_split($quote, 3);
    Print_r($varArray);
    ?>