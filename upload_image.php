<!DOCTYPE html>
<?php
    session_start();
?>
<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <form method="post" action="upload_image.php" enctype="multipart/form-data">
        Select a File : <input type="file" name="image">
        <input type="submit" value="Upload File" name="Upload">
    </form>
   
    <?php

    echo date("Y-m-d H:i:s");
       if(isset($_POST['Upload']))
       {
            $image=$_FILES['image']['name'];
            $image_tmp=$_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp,"images/$image");
            echo "<br> <img src='images/$image' width='250px'>";
       }
    ?>
</body>

</html>