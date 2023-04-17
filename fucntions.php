<!DOCTYPE html>
<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <?php
        function msg()
        {
            echo "Hello!";
        }

        echo "<h2>",msg(),"</h2>";

        function add($a,$b)
        {
            $c=$a+$b;
            echo "The sum is : ",$c;
        }

        echo "<h2>", add(5,6),"</h2>";
    

function multi($a,$b)
        {
            $c=$a*$b;
            return $c;
        }

        $result = multi(5,6);
        echo "<h2> The sum is :  $result </h2>";

        
        ?>
</body>

</html>