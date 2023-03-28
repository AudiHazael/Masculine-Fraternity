<?php
if(isset($_POST['subscribe'])) {
  // Get the email address from the form submission
  $email = $_POST['email'];

  // Validate the email address
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Add the email address to your mailing list or database
    // Replace this with your own code to handle the subscription
    echo "Thanks for subscribing!";
  } else {
    // Invalid email address
    echo "Invalid email address. Please try again.";
  }
}
?>
