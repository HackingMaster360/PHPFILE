<!DOCTYPE html>
<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <?php

    //Method 1

    $computer = array("Monitor", "CPU", "HDD", "keyboard", "Mouse", 45, 256.32);
    echo "<h2>", $computer[0], "</h2><br>";
    echo "<h2>", $computer[2], "</h2><br>";
    echo "<h2>", $computer[6], "</h2><br>";


    //Method 2

    $computer = array();
    $computer[0]="Test1";
    $computer[2]="Test2";
    $computer[6]="Test3";
    echo "<h2>", $computer[0], "</h2><br>";
    echo "<h2>", $computer[2], "</h2><br>";
    echo "<h2>", $computer[6], "</h2><br>";

    echo var_dump($computer);

    ?>

</body>

</html>