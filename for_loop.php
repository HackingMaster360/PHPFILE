<!DOCTYPE html>
<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <?php
  for ($i=1;$i<=10;$i++)
  {
    echo "<h1>$i</h1>";
    echo "<p>$i</p>";
  }

  echo "<h1>";
  for ($i=65;$i<=90;$i++)
  {
    echo $i," ",chr($i),", &nbsp;&nbsp;";
    
  }
  echo "</h1>";

    ?>
</body>

</html>