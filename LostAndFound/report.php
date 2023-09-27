<?php session_start();
include 'view/navbar.php';

?>
    <div>
      <table>
          <tr>
            <th>Total Lost Item  </th>
            <th>Total Found Item </th>
          </tr>
          <tr>
            <?php
            include 'inc/db.inc.php';
            $total;

            $sql = "SELECT * FROM items_table " ;
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) 
            {
                $total = mysqli_num_rows($result);
                $sql = "SELECT * FROM items_table where found = true";
                $count_item_found  = mysqli_query($conn, $sql);
                $found = mysqli_num_rows($count_item_found);

                  echo '<td>'.($total - $found).'</td>' ;
                  echo '<td>'.$found.'</td>' ;
            }
            ?>
         </tr>
      </table>
      <button type="submit" name="report-submit" class="report">Generate Report</button>
    </div>

<?php include 'view/navbarClosing.php' ; ?>
    
