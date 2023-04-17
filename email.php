<!DOCTYPE html>
<html>

<head>
    <title>
        PHP basic Course
    </title>
</head>

<body>
    <?php
        $to="rakesuch@gmail.com";
        $sub="email test from php";
        $msg="I am testing email sending service from php with";
        $frm="rakesuch@gmail.com";

        mail($to,$sub,$msg,$frm);
        echo "<br>";
        echo "Mail has been sent successfully";
        

    ?>
</body>

</html>