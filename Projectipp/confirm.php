<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Booking Confirmation</title> 
  <link rel="stylesheet" href="style.css"> 
  <style> 
    .confirmation-container { 
      width: 500px; 
      margin: 100px auto; 
      background: #fff; 
      padding: 40px; 
      border-radius: 15px; 
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15); 
      text-align: center; 
      animation: fadeIn 0.8s ease-in-out; 
    } 
 
    .confirmation-container h2 { 
      color: #28a745; 
      margin-bottom: 20px; 
      font-size: 1.8em; 
    } 
 
    .confirmation-container img { 
      width: 80px; 
      height: 80px; 
      margin-bottom: 15px; 
    } 
 
    .confirmation-container a { 
      display: inline-block; 
      background: #ff4d4d; 
      color: #fff; 
      padding: 10px 25px; 
      border-radius: 25px; 
      text-decoration: none; 
      font-weight: 600; 
      margin-top: 15px; 
      transition: background 0.3s; 
    } 
 
    .confirmation-container a:hover { 
      background: #e03e3e; 
    } 
 
    @keyframes fadeIn { 
      from { opacity: 0; transform: scale(0.95); } 
      to { opacity: 1; transform: scale(1); } 
    } 
  </style> 
</head> 
<body> 
 
  <div class="confirmation-container"> 
    <img src="images/success.jpg" alt="Success"> 
    <h2>   Booking Confirmed Successfully!</h2> 
    <p>Thank you for choosing our travel service.<br>We wish you a pleasant trip!</p> 
    <a href="index.php">Back to Packages</a> 
  </div> 
 
</body> 
</html>