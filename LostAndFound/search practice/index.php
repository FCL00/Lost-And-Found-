<?php
	$conn = mysqli_connect("localhost" , "root" , "" ,"lostandfound1");

		if(isset($_POST['search'])){
			$searchKey = $_POST['search'];
			$sql = "SELECT * FROM items_table where item_name like '%$searchKey%' or description like '%$searchKey%' ";

		}
		else {

			$sql = "SELECT * FROM items_table";
			$searchKey = "";
		
		}
		
		$result = mysqli_query($conn,$sql);
		

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
		Search
	</title>


<style type="text/css">
form  {
	margin-left: 40%;
	margin-top: 15%;
}
table {
	margin-left: 40%;
}

</style>
</head>
<body>

	<form action="index.php" method="post">
		<input type="text" name="search" placeholder="Search" value="<?php echo $searchKey?>">
		<input type="submit" value="Find" >


	</form>
<table>
	<tr>
		<th>Item Name</th>
		<th>Description</th>
		<th>Date</th>
	</tr>
	<tr>
	<?php while ($row = mysqli_fetch_assoc($result)) { ?>

		<td><?php echo $row["date"]; ?></td>  
        <td><?php echo $row["item_name"]; ?></td>  
        <td><?php echo $row["description"]; ?></td>
	</tr>
    <?php } ?>
</table>




</body>
</html>