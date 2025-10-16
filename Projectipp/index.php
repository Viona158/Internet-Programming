<?php include 'db.php'; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>Travel Package Booking</title> 
<link rel="stylesheet" href="style.css"> 
</head> 
<body> 
<h1>       Explore & Book Your Dream Vacation       
<div class="package-container"> 
</h1> 
<?php 
    $result = mysqli_query($conn, "SELECT * FROM packages"); 
    while ($row = mysqli_fetch_assoc($result)) { 
    ?> 
      <div class="package-card"> 
        <img src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>"> 
        <h3><?= $row['name'] ?></h3> 
        <p><b>Location:</b> <?= $row['location'] ?></p> 
        <p><b>Price:</b> ₹<?= $row['price'] ?></p> 
        <p><?= $row['description'] ?></p> 
        <a href="book.php?id=<?= $row['id'] ?>" class="btn">Book Now</a> 
      </div> 
    <?php } ?> 
  </div> 
 
  <center><a href="view_bookings.php" class="view-bookings">View 
Bookings</a></center> 
</body> 
</html>