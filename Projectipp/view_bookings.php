<?php include 'db.php'; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <title>View Bookings</title> 
  <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
  <h2 style="text-align:center;">      All Travel Bookings</h2> 
  <table> 
    <tr> 
      <th>ID</th> 
      <th>Name</th> 
      <th>Email</th> 
      <th>Phone</th> 
      <th>Package</th> 
      <th>Date</th> 
    </tr> 
    <?php 
    $result = mysqli_query($conn, "SELECT b.*, p.name AS package_name FROM 
bookings b JOIN packages p ON b.package_id = p.id"); 
    while ($row = mysqli_fetch_assoc($result)) { 
      echo "<tr> 
              <td>{$row['id']}</td> 
              <td>{$row['name']}</td> 
              <td>{$row['email']}</td> 
              <td>{$row['phone']}</td> 
              <td>{$row['package_name']}</td> 
              <td>{$row['booking_date']}</td> 
            </tr>"; 
    } 
    ?> 
  </table> 
  <center><a href="index.php" class="view-bookings">        Back to Home</a></center> 
</body> 
</html>