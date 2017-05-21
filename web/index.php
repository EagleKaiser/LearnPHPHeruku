$readingIsFun = true;
    $authors = ["charles", "jane", "William"];
    $count = count($authors);
    
    if($count > 0 :
        echo "there is a total of ".$count." authors<br>";
    else :
        echo "there are no authors<br>"
    endif;

    $i = 0;
    while($readingIsFun) :   
        echo "reading is fun"."<br>";
        $readingIsFun = false;
    endwhile;

    for($i = 0; $i <5; $i++) :
        echo "Reading is fun";
    endfor
    ?>