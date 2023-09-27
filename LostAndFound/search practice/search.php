<?php

	include '../inc/db.inc.php';


	if(isset($_POST['search'])) {

		$search = $_POST['search'];
		$query = "SELECT * FROM items_table where item_name like '%$search%' or description like '%$search%' or date like '%$search%' ";
		$result = mysqli_query($conn, $query);
		$queryResult = mysqli_num_rows($result);

		echo "There are ". $queryResult	. "result!";

		if($queryResult > 0) {

			while($row = mysqli_fetch_assoc($result)) {

			echo "<tr>"; 
              echo "<td>" . $row["date"] . "</td>"; 
              echo "<td>" . $row["item_name"] . "</td>";
              echo "<td>" . $row["description"] . "</td>";
            echo "</tr>"; 

			}
		}

	}



?>