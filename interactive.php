<?php include('includes/header.php'); ?>
<h2>Climate Awareness Survey</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $feedback = htmlspecialchars($_POST["feedback"]);
    $file = fopen("survey_results.csv", "a");
    fputcsv($file, [$name, $email, $feedback]);
    fclose($file);
    echo "<div class='alert alert-success'>Thank you for your feedback!</div>";
}
?>

<form method="post" action="interactive.php">
  <div class="row">
    <div class="col-md-6 mb-3">
      <label>Name:</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>Email:</label>
      <input type="email" name="email" class="form-control" required>
    </div>
  </div>
  <div class="mb-3">
    <label>What actions are you taking to combat climate change?</label>
    <textarea name="feedback" class="form-control" rows="4" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include('includes/footer.php'); ?>
