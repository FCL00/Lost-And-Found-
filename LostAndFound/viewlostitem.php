<?php session_start();
include 'view/navbar.php';
include 'inc/db.inc.php';

                if(isset($_POST['search'])){

                    $searchKey = $_POST['search'];
                    $query = "SELECT * FROM items_table where item_name like '%$searchKey%' or description like '%$searchKey%' ";

                }
                else {

                    $query = "SELECT * FROM items_table where found = false order by date";
                    $searchKey = "";
    
                }  
                $result = mysqli_query($conn, $query);
?>

    <div> <!--dito magiistart ang content ng website bobo -->
      <form action="viewlostitem.php" method="post">
        <input type="text" name="search" placeholder="search" value="<?php echo $searchKey?>">
        <input type="submit" name="search-submit" value="Find" >
      </form>

      <table>
         <tr> 
              
              <th>Date</th>
              <th>Item name</th>
              <th>Desctiption</th>
              <th>Status</th>  
          </tr>  
              <?php  
                while($row = mysqli_fetch_array($result))
              {

              ?>  
          <tr> 
              <td><?php echo $row["date"]; ?></td>  
              <td><?php echo $row["item_name"]; ?></td>  
              <td><?php echo $row["description"]; ?></td>
              <td><?php echo $row["found"] = true ? "Claimed" :  "Found" ; ?></td>

              </tr>  
                <?php  
                }  
                ?>                  

      </table>
    </div><!--dito matatapos ang content ng website bobo -->
<?php include 'view/navbarClosing.php' ; ?>
 -