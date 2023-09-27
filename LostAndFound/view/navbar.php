
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="design/dashboard.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Lost and Found</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
      </li>
      
      <li>
        <a href="viewfounditem.php">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">View Found Item</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="viewfounditem.php">View Found Item</a></li>
        </ul>
      </li>
      <li>
        <a href="viewlostitem.php">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">View Lost Item</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="viewlostitem.php">View Lost Item</a></li>
        </ul>
      </li>

      <li>
        <a href="inquiryreport.php">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Inquiry Report</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="inquiryreport.php">Inquiry Report</a></li>
        </ul>
      </li>
      <li>
        <a href="manageaccount.php">
          <i class='bx bx-history'></i>
          <span class="link_name">Manage Account</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="manageaccount.php">Manage Account</a></li>
        </ul>
      </li>
      <li>
        <a href="report.php">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Report</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="report.php">Report</a></li>
        </ul>
      </li>
      <li>


    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name"><?php echo $_SESSION['fname']?> </div>
        <div class="job"><?php echo $_SESSION['lname']?></div>
      </div>
      <!--DITO ANG LOGOUT NATIN -->
      <a href="Login.php"><i class='bx bx-log-out' id="log_out" ></i></a>
    </div>
  </li>
</ul>
  </div>


  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text"><?php echo "Welcome " .$_SESSION['fname'];?></span>
     <!-- <form>
      <input class="search" type="text" name="search" placeholder="Search">
      <input class="search" type="submit" name="search"></button>
      </form>
     -->
    </div>

    