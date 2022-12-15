<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include './LibClass.php';
    $a = new Cars();
    function test(GameTransport $a){
        $a->Go($a->speed = 12);
    }
    test($a);
    echo "<br>";
    $a->NitrousOxideLevel(5);
    $b = new SpecialTransport();
    echo "<hr>";
    function test2(GameTransport $b){
        $b->Go($b->speed = -6);
    }
    test2($b);
    echo "<br>";
    $b->getUsetool('On');
    ?>
</body>
</html>