<!DOCTYPE html>
<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <form method="post" action="get_post.php">
        <input type="text" name="uid">
        <input type="text" name="uname">
        <input type="submit" value="Submit" name="submit">
    </form>
   
    <?php
        $user_id=@$_POST['uid'];
        $user_name=@$_POST['uname'];

        echo "User ID is : $user_id <br>";
        echo "User Name is : $user_name <br>";
    ?>
</body>

</html>