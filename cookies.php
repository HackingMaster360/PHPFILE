<!DOCTYPE html>
<?php
$expire = time()+60*60*24*30;
setcookie("User","www.google.com",$expire);
?>


<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <?php
        echo  $_COOKIE['User']."<br>";
    print_r ($_COOKIE);
    ?>

</body>

</html>