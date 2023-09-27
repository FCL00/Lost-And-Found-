<?php
    if(isset($_POST['register-submit'])){

        require 'db.inc.php';

        $username       = $_POST['username'];
        $password       = $_POST['password'];
        $fname          = $_POST['firstname'];
        $lname          = $_POST['lastname'];
        

        //error handler for empty field
        if(empty($username) || empty($password) || empty($fname)|| empty($lname)){
            header("Location: ../manageaccount.php?fillup=empty");
            exit();
        }
        else {
            //database
            $sql = "INSERT INTO users_table (username, password, fname, lname)
                    VALUES ('$username', '$password', '$fname', '$lname');";
            mysqli_query($conn,$sql);
            header("Location: ../manageaccount.php?fillup=sucess?$username?$password?$fname?$lname");
            exit();
        }
    }
    else 
    {
        header("Location: ../manageaccount.php?fillup=sqlerror");
        exit();
    }


?>