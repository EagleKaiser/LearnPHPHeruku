<?php
    $authors = ["charles", "jane", "William"];
    $count = count($authors);
    $outcome = $count ? $count : "Count unavailable";
    echo "<br>";
    $outcome = $count ?? "count unavailable";
    echo $outcome;
    ?>