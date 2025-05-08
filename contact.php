<?php include('includes/header.php'); ?>


  <h2>Contact Us</h2>
  <p>If you have questions, suggestions, or want to get involved, send us a message below.</p>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to      = "orpianojohnrave@gmail.com";
    $subject = "Act for Earth Message from $name";
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
      echo '<div class="alert alert-success">Thank you for your message. We will get back to you soon.</div>';
    } else {
      echo '<div class="alert alert-danger">Sorry, something went wrong. Please try again later.</div>';
    }
  }
  ?>

  <form method="POST" action="contact.php" class="mt-4">
    <div class="mb-3">
      <label for="name" class="form-label">Name*</label>
      <input type="text" class="form-control" name="name" id="name" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email*</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message*</label>
      <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn btn-success">Send Message</button>
  </form>


<?php include('includes/footer.php'); ?>
