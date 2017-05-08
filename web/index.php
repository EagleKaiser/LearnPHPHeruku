<?php
    $bool = false;
    $intHasValue = 1;
    $intNoValue = 0;
    $StringHasValue = "abc";
    $StringNoValue = "";

    var_dump($bool);
    var_dump((bool)$intHasValue);
    var_dump((bool)$intNoValue);
    var_dump((bool)$StringHasValue);
    var_dump((bool)$StringNoValue);
    ?>