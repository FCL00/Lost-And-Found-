<?php
    if(isset($_POST['report-submit'])){

        require 'db.inc.php';

        $itemName         = $_POST['item_name'];
        $status           = $_POST['status'];
        $date             = date('Y-m-d' , strtoTime ($_POST['date']));
        $description      = $_POST['description'];
        

        //error handler for empty field
        if(empty($itemName) || empty($date) || empty($description)){
            header("Location: ../inquiryreport.php?fillup=empty&$itemName?$?$date?$description");
            exit();
        }
        else {
            //database
            $sql = "INSERT INTO items_table (item_name, description, date)
                    VALUES ('$itemName', '$description', '$date');";
            mysqli_query($conn,$sql);
            header("Location: ../inquiryreport.php?fillup=sucess");
            exit();
        }
    }
    else 
    {
        header("Location: ../inquiryreport.php?fillup=sqlerror");
        exit();
    }


?>