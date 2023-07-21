<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="stylehomepage.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="logo.jpg" class="logo">
            <ul>
                <li><a href="event.html">Events</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="index.html">Reviews</a></li>
                <li><a href="logout.php"><span class="material-symbols-outlined">logout</span></a></li>
            </ul>
        </div>
        <div class="content">
            <h1>SOUNDBUGS</h1>
            <p>The best event planners in Bengaluru!</p>
        </div>
    </div>
  <footer class="footer">
    <div class="container">
     <div class="row">
      <div class="footer-col">
       <h4>Company</h4>
       <ul>
        <li><a href="services.html">Our services</a></li>
        <li><a href="#">Privacy Policy</a></li>
       </ul>
      </div>
      <div class="footer-col">
       <h4>Get help</h4>
       <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="Contact.php">Contact us</a><li>
       </ul>
      </div>
      <div class="footer-col">
       <h4>About Us</h4>
       <ul>
        <li><a href="#">Founded in the year 2010,Soundbugs aims<br>to focus on customer satisfaction by organising and<br> managing
        events so that the<br> clients can enjoy a very memorable experience</a></li>
       </ul>
      </div>
      <div class="footer-col">
       <h4>Follow us</h4>
       <div class="social-links">
        <a href="https://www.facebook.com/soundbugsgoa"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
       </div>
      </div>
     </div>
    </div>
  </footer>  
  </body>
</html>