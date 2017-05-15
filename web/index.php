<?php
$first = array("charles", "hello", "world", "Array");
$second = array(
"quarky" => "Charles Dickens",
"brilliant" => "Jane",
"poetic" => "William",
"Mark Twain"
);
unset($first[1], $first[0]);
unset($second[brilliant]);
print_r($first);
echo "<br>";
unset($first);
print_r($first);
echo "<br>";
print_r($second);
?>