<?php session_start();
include 'view/navbar.php';
?>
    <div> <!--dito magiistart ang content ng website bobo -->
      
     <form action="inc/manageaccount.inc.php " class="inquiryreport" method="post">
        <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>

        <input type="text" name="username" placeholder="Username"> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <input type="text" name="firstname" placeholder="First Name"> <br>
        <input type="text" name="lastname" placeholder="Last Name">

        <button type="submit" name="register-submit" class="report">Register</button>
      </div>
    </form>

      </div><!--dito matatapos ang content ng website bobo -->
<?php include 'view/navbarClosing.php' ; ?>
 