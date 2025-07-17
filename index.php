<?php include('includes/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>My Affiliate Store</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="description" content="Best affiliate products">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Welcome to My Store</h1>

<div class="products">
<?php
$result = mysqli_query($conn, "SELECT * FROM products");
while ($row = mysqli_fetch_assoc($result)) {
  echo "
    <div class='product-card'>
      <img src='uploads/{$row['image']}' alt='{$row['title']}' width='200'>
      <h2>{$row['title']}</h2>
      <p>{$row['description']}</p>
      <a href='{$row['affiliate_link']}' target='_blank'>Buy Now</a>
    </div>
  ";
}
?>
</div>

</body>
</html>
