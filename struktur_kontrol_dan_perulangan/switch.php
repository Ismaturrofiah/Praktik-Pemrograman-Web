<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
        $favourite_site = 'Code';
        echo "my fav site is " . $favourite_site . "<br><br><br>";
        switch ($favourite_site) {
            case 'Business':
                echo "My favourite site is business.tutsplus.com!";
                break;
            case 'Code':
                echo "My favourite site is code.tutsplus.com!";
                break;
            case 'Web Design':
                echo "My favourite site is webdesign.tutsplus.com!";
                break;
            case 'Music':
                echo "My favourite site is music.tutsplus.com!";
                break;
            case 'Photography':
                echo "My favourite site is photography.tutsplus.com!";
                break;
            default:
                echo "I like everything at tutsplus.com!";
        }
    ?>   
</body>
</html>