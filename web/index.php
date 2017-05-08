 <?php
    $authorName = "William Shakespeare";
    function setAuthorName()
    {
        Global $authorName;
        $authorName = "Charles Dickens";
    }
    setAuthorName();
    echo $authorName;
    ?>