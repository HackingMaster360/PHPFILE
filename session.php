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
    <form method="post" action="session.php">
        <input type="text" name="uid" value="<?php echo $_SESSION['uid'] ?>">
        <input type="text" name="uname" value="<?php echo $_SESSION['uname'] ?>">
        <input type="submit" value="Submit" name="submit">
    </form>
   
    <?php
        $user_id=@$_POST['uid'];
        $user_name=@$_POST['uname'];

        $_SESSION['uid']=$user_id;
        $_SESSION['uname']=$user_name;

        echo "<br><br>";
        echo "<b>Welcome to my site</b>" . $_SESSION['uid'] . "<br>" . $_SESSION['uname'] . "<br>";
    ?>
</body>

</html>