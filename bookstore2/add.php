<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style33.css">
    <title>Add Book</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Add a New Book</h1>
            <a href="">Back</a>
        </header>
        <form action="data_save.php" method="post" enctype="multipart/form-data">
            <div class="form-element my-4">
                <table>
                    <tr>
                        <td>Category Name</td>
                        <td>
                            <select class="form-control" name="category" required>
                                <option value="" disabled selected>Select Category</option>
                                <option>Adventure</option>
                                <option>Crime</option>
                                <option>Comedy</option>
                                <option>Thriller</option>
                                <option>Psychological</option>
                                <option>Sci-fi</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Sub Category Name</td>
                        <td><input type="text" class="form-control" name="sub_category" placeholder="Enter Sub Category" required></td>
                    </tr>
                    <tr>
                        <td>Book Name</td>
                        <td><input type="text" class="form-control" name="title" placeholder="Enter the title of the book." required></td>
                    </tr>
                    <tr>
                        <td>Author Name</td>
                        <td><input type="text" class="form-control" name="author" placeholder="Enter the name of the author." required></td>
                    </tr>
                    <tr>
                        <td>Publisher</td>
                        <td><input type="text" class="form-control" name="publisher" placeholder="Enter Publisher" required></td>
                    </tr>
                    <tr>
                        <td>10 ISBN</td>
                        <td><input type="text" class="form-control" name="isbn_10" placeholder="Enter 10 Digit ISBN number" required></td>
                    </tr>
                    <tr>
                        <td>13 ISBN</td>
                        <td><input type="text" class="form-control" name="isbn_13" placeholder="Enter 13 Digit ISBN number" required></td>
                    </tr>
                    <tr>
                        <td>Book Language</td>
                        <td><input type="text" class="form-control" name="language" placeholder="Enter Book Language" required></td>
                    </tr>
                    <tr>
                        <td>Book Price Before Discount</td>
                        <td><input type="text" class="form-control" name="price_before_discount" placeholder="Enter Book Price" required></td>
                    </tr>
                    <tr>
                        <td>Book Price After Discount</td>
                        <td><input type="text" class="form-control" name="price_after_discount" placeholder="Enter Book Price" required></td>
                    </tr>
                    <tr>
                        <td>Book Description</td>
                        <td><textarea class="form-control" name="description" placeholder="Enter Book Description" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Book Shipping Charge</td>
                        <td><input type="text" class="form-control" name="shipping_charge" placeholder="Enter Book Shipping Charge" required></td>
                    </tr>
                    <tr>
                        <td>Book Availability</td>
                        <td>
                            <select class="form-control" name="availability" required>
                                <option value="" disabled selected>Select</option>
                                <option>Available</option>
                                <option>Out of Stock</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Book Featured Image</td>
                        <td><input type="file" class="form-control" name="featured_image" required></td>
                    </tr>
                    <tr>
                        <td>Book Image 2</td>
                        <td><input type="file" class="form-control" name="image2"></td>
                    </tr>
                    <tr>
                        <td>Book Image 3</td>
                        <td><input type="file" class="form-control" name="image3"></td>
                    </tr>
                </table>
                <input type="submit" name="create" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
