<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $mystring = 'abc' ;
    $findme = 'a' ;
    $pos = strpos ( $mystring , $findme );
    if ( $pos === false ) {
    echo "The string ' $findme ' was not found in the string '
    $mystring '" ;
    } else {
    echo "The string ' $findme ' was found in the string ' $mystring
    '" ;
    echo " and exists at position $pos " ; }
    ?>
</body>
</html>