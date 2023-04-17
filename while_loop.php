<!DOCTYPE html>
<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <?php
  
        $i=1;
        while($i<=10)
        {
            echo $i," ";
            $i++;   
        }
        echo "<br>";

            
        $i=1;
        do
        {
            echo $i," ";
            $i++;   
        }
        while($i<=10);
        echo "<br>";

    ?>
</body>

</html>