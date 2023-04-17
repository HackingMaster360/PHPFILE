<!DOCTYPE html>
<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <?php

   $a=5;
   $b="test";
   $c=6.5;
   $d=true;
   $e=array('a'=>"Apple", 'b'=>"Ball", 'c'=>'Cat');
   $f=array('Apple','Ball','Cat');

   echo $a,"<br>";
   echo $b,"<br>";
   echo $c,"<br>";
   echo $d,"<br>";
   echo $e['a'],"<br>";
   echo $f[1],"<br>";

   echo var_dump($a),"<br>";
   echo var_dump($b),"<br>";
   echo var_dump($c),"<br>";
   echo var_dump($d),"<br>";
   echo var_dump($e),"<br>";
   echo var_dump($f),"<br>";
    
    ?>

</body>

</html>