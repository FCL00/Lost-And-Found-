<?php
    if(isset($_POST['login-submit'])){
        require 'db.inc.php';

        $uid         = $_POST['username'];
        $pwd         = $_POST['password'];

        if(empty($uid) || empty($pwd)){
			header("Location: ../login.php?login=empty");
			exit();
		}
		else{
				$sql = "SELECT * FROM users_table WHERE username=?;";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
						header("Location: ../login.php?login=sqlerror");
						exit();
				}
				else{
						mysqli_stmt_bind_param($stmt, "s", $uid);
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
					if($row = mysqli_fetch_assoc($result)){
						$pwdCheck = ($pwd == $row['password']);
						if($pwdCheck == false){
							header("Location: ../login.php?login=wrongpwd");
							exit();
						}
						else if($pwdCheck == true){
							session_start();
							$_SESSION['fname'] = $row['fname'];
							$_SESSION['lname'] = $row['lname'];
							header("Location: ../dashboard.php?login=sucess");
							mysqli_close($conn);
							exit();
						}
						else{
							header("Location: ../login.php?login=wrongpwd");
							mysqli_close($conn);
							exit();
						}
					}
					else{
						header("Location: ../login.php?login=nouser");
						mysqli_close($conn);
						exit();
					}

				}
			
			
		}
    exit();
    }
    else{
    	header("Location: ../login.php?login=error");
    	mysqli_close($conn);
        exit();
    }

 ?>


