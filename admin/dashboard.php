<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
</head>
<body>
  <h2>Add Affiliate Product</h2>
  <form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Title" required><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <input type="text" name="link" placeholder="Affiliate Link" required><br>
    <input type="file" name="image" required><br>
    <button type="submit" name="submit">Add Product</button>
  </form>

<?php
if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $desc = $_POST['description'];
  $link = $_POST['link'];

  $image = $_FILES['image']['name'];
  $target = "../uploads/" . basename($image);
  move_uploaded_file($_FILES['image']['tmp_name'], $target);

  $sql = "INSERT INTO products (title, description, affiliate_link, image) 
          VALUES ('$title', '$desc', '$link', '$image')";
  if (mysqli_query($conn, $sql)) {
    echo "Product added!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>
</body>
</html>
