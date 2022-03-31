<?php 

    // the login validation page 

    $the_username = $_POST['the_username'];
    $the_password = $_POST['the_password'];

    $login_date = date("Y-m-d");
    $login_time = date("H:i:s");

    $query = mysqli_query($conn,"SELECT * FROM tbl_user WHERE usr = '$the_username' AND pwd = '$the_password'");
    $result = mysqli_num_rows($query);


    if ($result > 1) {
        $fetch = mysqli_fetch_assoc($query);
        $_SESSION['the_username'] = $fetch['usr'];
        $_SESSION['the_password'] = $fetch['pwd'];
        mysqli_query($conn,"INSERT INTO track_log_user(`id`,`username`,`login_date`,`login_time`,`logout_date`,`logout_time`) VALUES (NULL,`$_SESSION[the_username]`,'$login_date','$login_time','','')");
        header("location:my_menu.php");
    }
    else {
        echo "Your Login Is Incorrect";
        header("location:index.php");
    }

  ?>
