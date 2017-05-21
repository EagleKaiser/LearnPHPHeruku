<?php
    $authors = ["charles", "jane", "William"];
    $count = count($authors);

    $outcome = ($count > 0) ? "Author Total: ".$count : "noAuthors";
    echo $outcome;
    ?>