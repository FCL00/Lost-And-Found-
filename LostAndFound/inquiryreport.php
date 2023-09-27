<?php session_start();
include 'view/navbar.php';
?>
    <div> <!--dito magiistart ang content ng website bobo -->
      
     <form action="inc/inquiryreport.inc.php " class="inquiryreport" method="post">
      <input type="text" name="item_name" placeholder="Item Name">

      <select name="status" id="status">
        <option value="" selected disabled hidden>Status</option>
        <option value="1">Found</option>
        <option value="0">Lost</option>
      </select>

      <input type="date" id="start" name="date">

      <textarea id="description" name="description" rows="4" cols="48" placeholder="description"></textarea><br><br>
      <button type="submit" name="report-submit" class="report">Launch</button>
     </form>

    </div><!--dito matatapos ang content ng website bobo -->
<?php include 'view/navbarClosing.php' ; ?>
 