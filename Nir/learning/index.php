<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <h1>Contact Us</h1>
    </div>
    <div class="row">
      <h4 style="text-align: center">We'd love to hear from you!</h4>
    </div>

    <form action="index.php" method="post" class="row input-container" style="height: 650px;">
      <div class="col-xs-12">
        <div class="styled-input wide">
          <input type="text" name="name" required />
          <label>Name</label>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="styled-input">
          <input type="email" name="email" required />
          <label>Email</label>
        </div>
        <div class="styled-input" style="float: right">
          <input type="text" name="phone" required />
          <label>Phone Number</label>
        </div>
      </div>
  

      <div class="col-xs-12">
        <div class="styled-input wide">
          <textarea name="message" required></textarea>
          <label>Message</label>
        </div>
      </div>

      <div class="col-xs-12">
        <button type="submit" class="btn-lrg submit-btn">Send Message</button>
      </div>

    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $message = htmlspecialchars($_POST['message']);

  // Hide the form using inline CSS
  echo "<style>.input-container { display: none; }</style>";

  // Show output after submission
  echo "<div class='showOutput' style='color: black; margin-top: 30px;'>";
  echo "<h3>Form Submitted Successfully!</h3>";
  echo "<p><strong>Name:</strong> $name</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Phone:</strong> $phone</p>";
  echo "<p><strong>Message:</strong> $message</p>";
  echo "</div>";
  
  header("Location:index.php");
  exit();
}
?>
  </div>
</body>
</html>