<?php

   $conn=mysqli_connect("localhost","root","","project","3306") or die("Connection to database failed");
   
  if(isset($_POST['submit'])) {

  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $message=$_POST['message'];

  $sql="INSERT into form (name,email,contact,message) values ('$name','$email','$contact','$message')";
  $result=mysqli_query($conn, $sql);

  if($result)
    echo "<script> alert('Your data is saved successfully \\n \\nName : $name\\nE-Mail : $email\\nContact : $contact\\nMessage: $message')</script>";
  else
    echo "We are facing some technical errors! <br> Sorry for the inconvenience";
}  

?>
<html>
<head>
    <title>Contact Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : +91 9552997585 </div>
        </div>
        <div class="screen-body-item">
          <form class="app-form" action="Contact.php" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="CONTACT NO" type="tel" maxlength="10" name="contact" required>
            </div>
            <div class="app-form-group message">
              <textarea class="app-form-control" rows="3" placeholder="YOUR MESSAGE" type="text" name="message" required></textarea>
            </div>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="SEND" name="submit"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
<script>
  // Get the input element
  var inputElement = document.getElementsByName("contact")[0];

// Listen for input events
inputElement.addEventListener("input", function() {
  // Get the input value and remove all non-numeric characters
  var inputValue = this.value.replace(/[^0-9]/g, "");

  // Check for sequential numbers of length 3 or more
  if (/123|234|345|456|567|678|789/.test(inputValue)) {
    // If a sequential number is found, remove the last entered digit
    this.value = inputValue.slice(0, -1);
  } else {
    // Set the input value to the cleaned value
    this.value = inputValue;
  }
});

// Get the input element
var inputElement = document.getElementsByName("name")[0];

// Listen for input events
inputElement.addEventListener("input", function() {
  // Get the input value and remove all non-letter characters
  var inputValue = this.value.replace(/[^a-zA-Z]/g, "");

  // Set the input value to the cleaned value
  this.value = inputValue;
});



</script>
</body>
</html>