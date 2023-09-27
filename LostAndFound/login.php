<!DOCTYPE html>
<html>
<head>
	<title>
    Landing Page
	</title>
	<link rel="stylesheet" type="text/css" href="design/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="main-form">
 <form action="inc/login.inc.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder=" Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder=" Enter Password" name="password" required>

    <button type="submit" name="login-submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form> 
</div>

</body>
</html>