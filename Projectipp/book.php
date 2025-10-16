<?php include 'db.php';  
$id = $_GET['id']; 
$package = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM packages 
WHERE id=$id")); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Book Package</title> 
  <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
  <div class="form-container"> 
    <h2>Book Your Trip: <?= $package['name'] ?></h2> 
    <form action="confirm.php" method="POST"> 
      <input type="hidden" name="package_id" value="<?= $package['id'] ?>"> 
      <label>Name:</label> 
      <input type="text" name="name" required> 
 
      <label>Email:</label> 
      <input type="email" name="email" required> 
 
      <label>Phone:</label> 
      <input type="text" name="phone" required> 
 
      <button type="submit" class="btn">Confirm Booking</button> 
    </form> 
  </div> 
</body> 
</html> 
 
