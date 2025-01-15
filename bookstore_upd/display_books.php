<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<title>Display Books</title>
</head>
<header>
	<h1>List of Books</h1>
	<p>Want to add a new book?</p>
	<a href="create.php"> <button> Click here</button></a>
</header>

<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Author</th>
			<th>Genre</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php 

include('database_connect.php');

// initiate a new var to get data form database table where * means all
$getdatafromtable = mysqli_query($con,"SELECT * FROM books");

// 'getdatafromtable' var returns an obj, which is converted to array using the following command
 while ($row= mysqli_fetch_array($getdatafromtable)) {
	//Description is removed since it can only be viewed when clicked on books
 	
 ?>

 <tr>
 	<td><?php echo $row["ID"]; ?></td>
 	<td><?php echo $row["Title"]; ?></td>
 	<td><?php echo $row["Author"]; ?></td>
 	<td><?php echo $row["Genre"]; ?></td>

 	<td>
 		<a href="description.php?ID=<?php echo $row["ID"]; ?>">Read More </a>
 		<a href="edit.php">Edit </a>
 		<a href="">Delete </a>
 	</td>

 </tr>

 <?php
 }  ?>
		
	</tbody>
</table>

</html>


