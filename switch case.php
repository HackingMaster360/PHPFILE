<!DOCTYPE html>
<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <?php
  
   $a=1;
   switch($a)
   {
        case 1:
            echo "Sunday";
        break;

        case 2:
            echo "Monday";
        break;

        case 3:
            echo "Tuesday";
        break;

        default:
            echo "Wrong Choice";
   }

   echo "<br>";

   $a='Sunday';
   switch($a)
   {
        case 'Sunday':
            echo 1;
        break;

        case 'Monday':
            echo 2;
        break;

        case "Tuesday":
            echo 3;
        break;

        default:
            echo "Wrong Choice";

   }

    ?>
</body>

</html>