<!DOCTYPE html>
<html>
<head>
<title> Simple PHP contact form with MySQL and Form Validation </title>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</head>
<body>
<h3> Contact US</h3>
<form id = "contact-form" action="thankyou.php" method="post">
  Name:<br>
  <input type="text" name="u_name" required><br>

  Email:
  <input type="email" name="u_email" required><br>

Subject:<br>
  <input type="text" name="subj" required><br>

Message:<br>
  <input type="text" name="message" required><br>
<input type="submit" value="Submit"><br>
</form>
</body>
</html>
