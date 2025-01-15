<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style33.css">
	<title>Edit Book</title>
</head>
<body>
	
	<div class="container">
	<header>
		<h1>Edit Book</h1>
		<a href="dashboard.php">Back</a>
	</header>

	<?php
		if(isset($_GET["ID"])){
			$Id = $_GET["ID"];
			include("database_connect.php");
			$sql = "SELECT * FROM books WHERE id = $Id";
			$res = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($res);
	?>

		<form action="data_save.php" method="post">
			<div class="form-element my-4">
				<table>
					<tr>
						<td>Category Name</td>
						<td>
							<select name="category_name" required>
								<!-- Add your category options here -->
								<option value="Adventure" <?php if ($row['category_name'] == "Adventure") echo "selected"; ?>>Adventure</option>
								<!-- Repeat for other categories -->
							</select>
						</td>
					</tr>
					<tr>
						<td>Sub Category Name</td>
						<td>
							<input type="text" class="form-control" name="sub_category_name" value="<?php echo $row['sub_category_name']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>Book Name</td>
						<td>
							<input type="text" class="form-control" name="book_name" value="<?php echo $row['book_name']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>Author Name</td>
						<td>
							<input type="text" class="form-control" name="author_name" value="<?php echo $row['author_name']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>Publisher</td>
						<td>
							<input type="text" class="form-control" name="publisher" value="<?php echo $row['publisher']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>10 ISBN</td>
						<td>
							<input type="text" class="form-control" name="isbn_10" value="<?php echo $row['isbn_10']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>13 ISBN</td>
						<td>
							<input type="text" class="form-control" name="isbn_13" value="<?php echo $row['isbn_13']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>Book Language</td>
						<td>
							<input type="text" class="form-control" name="language" value="<?php echo $row['language']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>Book Price Before Discount</td>
						<td>
							<input type="text" class="form-control" name="price_before_discount" value="<?php echo $row['price_before_discount']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>Book Price After Discount</td>
						<td>
							<input type="text" class="form-control" name="price_after_discount" value="<?php echo $row['price_after_discount']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>Book Description</td>
						<td>
							<textarea class="form-control" name="description" required><?php echo $row['description']; ?></textarea>
						</td>
					</tr>
					<tr>
						<td>Book Shipping Charge</td>
						<td>
							<input type="text" class="form-control" name="shipping_charge" value="<?php echo $row['shipping_charge']; ?>" required>
						</td>
					</tr>
					<tr>
						<td>Book Availability</td>
						<td>
							<select name="availability" required>
								<option value="Available" <?php if ($row['availability'] == "Available") echo "selected"; ?>>Available</option>
								<option value="Out of Stock" <?php if ($row['availability'] == "Out of Stock") echo "selected"; ?>>Out of Stock</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Book Featured Image</td>
						<td>
							<input type="file" class="form-control" name="featured_image">
							<img src="<?php echo $row['featured_image']; ?>" alt="Featured Image" width="100">
						</td>
					</tr>
					<tr>
						<td>Book Image 2</td>
						<td>
							<input type="file" class="form-control" name="image2">
							<img src="<?php echo $row['image2']; ?>" alt="Image 2" width="100">
						</td>
					</tr>
					<tr>
						<td>Book Image 3</td>
						<td>
							<input type="file" class="form-control" name="image3">
							<img src="<?php echo $row['image3']; ?>" alt="Image 3" width="100">
						</td>
					</tr>
				</table>

				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<input type="submit" name="submit_button" value="Update">
			</div>
		</form>

	<?php
		}
	?>

	</div>

</body>
</html>
