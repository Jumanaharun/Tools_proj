
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<title>Add books</title>
</head>
<body>
	
	<div class="container"> <!--container is a bootstrap-->
	<header>
		<h1>Add a new book</h1>
		<a href="">Back</a>
	</header>

	<?php
		if(isset($_GET["ID"])){
			$Id= $_GET["ID"];
			include("database_connect.php");
			$sql = "SELECT * FROM books WHERE ID=$Id";
			$res= mysqli_query($con, $sql);
			$row = mysqli_fetch_array($res);
			//no need any loops since we're obtaining particular ID for an object
	?>

		<form action="data_save.php" method="post"> 
			<!-- my-4 is bootstrap, used to put margin top and bottom  -->
			<div class="form-element my-4"> 
				<table>
					<tr>
					<td>Title</td>
					<td>
						<input type="text" class="form-control" name="title" value="<?php echo $row['Title']; ?>" placeholder="Enter the title of the book." required>
					</td>
				</tr>

				<tr>
					<td>Author</td>
					<td><input type="text" class="form-control" name="author" value="<?php echo $row['Author']; ?>" placeholder="Enter the name of the author." required>
					</td>
						
				</tr>

				<tr>
					<td>Genre</td>
					<td>
						<select name="genre" required>
							<option value="Adventure" <?php if ($row['genre']== "Adventure") {echo "selected";} ?>>Adventure</option>
							<option value="Crime" <?php if ($row['genre']== "Crime") {echo "selected";} ?>>Crime</option>
							<option value="Comedy" <?php if ($row['genre']== "Comedy") {echo "selected";} ?>>Comedy</option>
							<option value="Thriller" <?php if ($row['genre']== "Thriller") {echo "selected";} ?>>Thriller</option>
							<option value="Psychological" <?php if ($row['genre']== "Psychological") {echo "selected";} ?>>Psychological</option>
							<option value="Sci-fi" <?php if ($row['genre']== "Sci-fi") {echo "selected";} ?>>Sci-fi</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Book Description</td>
					<td>
						<input type="text" class="form-control" name="description" value="<?php echo $row['Description']; ?>" placeholder="Enter the description of the book." required>
					</td>
						
				</tr>
					
				</table>

				<input type="submit" name="submit_button" value="submit">
				
			</div>
			
		</form>

<?php
}?>

	</div>


</body>
</html>