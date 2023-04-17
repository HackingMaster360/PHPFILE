<!DOCTYPE html>
<html>

<head>
    <title>
        PHP & MYSQLI Connection
    </title>
</head>

<body>
    <form action="insert_data1.php" method="post">
        <h2>User Registration form </h2>
        User Name : <input type="text" name="user_name"> <br>
        User Email : <input type="text" name="user_email"> <br>
        User Password : <input type="text" name="user_pass"> <br>

        <input type="submit" name="submit" value="Submit Now">
    </form>
    <h2>
        <a href="insert_data1.php?view">View Users</a>
    </h2>
</body>

</html>

<?php
//Insert data
include("db.php");
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];

    $insert_query = "insert into users_data(user_name, user_email, user_pass)
                values ('$user_name', '$user_email', '$user_pass')";

    $run_query = mysqli_query($con, $insert_query);

    if ($run_query) {
        echo "<h2>You have been registered</h2>";
    }
}

?>

<?php
//getting views from table
if (isset($_GET['view'])) 
{
    echo ("
            <table width='700' border='2' bgcolor='orange'>
            <tr>
                <th>User no.</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Password</th>
                <th>Delete User</th>
                <th>Create User</th>
            </tr>");

    $select_users = "select * from users_data order by user_id asc limit 0,5 ";
    $run_users = mysqli_query($con, $select_users);
    while ($row = mysqli_fetch_array($run_users)) {
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $user_email = $row['user_email'];
        $user_password = $row['user_pass'];

        echo "<tr>
            <td>$user_id</td>
            <td>$user_name</td>
            <td>$user_email</td>
            <td>$user_password</td>
            <td><a href='insert_data1.php?del=$user_id'>Delete</a></td>
           <td><a href='insert_data1.php?edit=$user_id'>Edit</a></td>
           </tr>";
    }
    
   


    echo (" </table>");
}
//Deleting from table
if (isset($_GET['del'])) 
{
    $del_id = $_GET['del'];
    $delete_user = "delete from users_data where user_id=$del_id";
    $run_delete = mysqli_query($con, $delete_user);;
    if ($run_delete) {
        echo "<script> alert('You have been deleted')</script>";
        echo "<script>window.open('insert_data1.php?view','_self')</script>";
    }
    else
    {
        echo "Error: " . mysqli_error($con);
    }
}


//editing the data

if(isset($_GET['edit']))
{
    $edit_id= $_GET['edit'];
    $get_users="Select * from users_data where user_id='$edit_id'";
    $run_edit = mysqli_query($con, $get_users);
    $row_users=mysqli_fetch_array($run_edit);
    $user_id = $row_users['user_id'];
    $user_name = $row_users['user_name'];
    $user_email = $row_users['user_email'];
    $user_password = $row_users['user_pass'];

    echo "
    <h2>Edit your Data</h2>
    <form action=''  method='post' >
    User Id : <input type='text' name='User_id' value='$user_id'><br>
    Edit Name : <input type='text' name='User_name' value='$user_name'><br>
    Edit email : <input type='text' name='User_email' value='$user_email'><br>
    Edit Password : <input type='text' name='User_pass' value='$user_password'><br><br>
    <input type='submit' name='update' value='Update now' >

    </form>
";
}
else
{
    echo "Error: " . mysqli_error($con);
}


/// updating data
if(isset($_POST['update']))
{
    $update_id=$user_id;
    $user_name=$_POST['User_name'];
    $user_email=$_POST['User_email'];
    $user_password=$_POST['User_pass'];

    $update_user = "update users_data set user_name='$user_name', user_email='$user_email',user_pass='$user_password' where user_id='$update_id'";

    $run_update=mysqli_query($con,$update_user);

    if($run_update)
    {
        echo "<script>alert('Updated')</script>";
        echo "<script>window.open('insert_data1.php?view','_self')</script>";
    }
    else
    {
        echo "Error: " . mysqli_error($con);
    }
}




?>