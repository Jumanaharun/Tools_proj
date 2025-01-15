<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<title>Book Details</title>
</head>
<body>

	<header>
		<h1>Book Details</h1>
		<div> <a href="display_books.php">Back </a></div>
	</header>

	<div>
		<?php
		//isset checks whether the value is null or not; we get the partcular is of the //book using get
		if (isset($_GET['Title'])) {
			$id_rec=$_GET['Title']; //keep the obtained id in a new var, here 'id_rec'
			include("database_connect.php");
			$sql = "SELECT * FROM books WHERE Title=$id_rec";
			$result= mysqli_query($con, $sql); //make connection to database
			$row= mysqli_fetch_array($result); //convert result into array, since only one obj is grabbed,no while loop needed
			?>
 
			<h2>Title</h2>
			<p> <?php echo $row["Title"]; ?> </p>
			<h2>Desciption</h2>
			<p> <?php echo $row["Description"]; ?> </p>
			<h2>Author</h2>
			<p> <?php echo $row["Author"]; ?> </p>
			<h2>Genre</h2>
			<p> <?php echo $row["Genre"]; ?> </p>


	<?php 	}
		?>
	</div>

</body>
</html>
