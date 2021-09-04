<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Blood Bank</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img class="mr-3" src="logo.png" alt="M" width="55" height="55">
    <a class="navbar-brand" href="index.php"><strong>Blood Bank</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="available_blood_sample.php">Available Blood Samples</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact Us</a>
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link active" href="hospital_signin.php">Hospital Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="receiver_signin.php">Receiver Login</a>
        </li>

      </ul>

    </div>
  </nav>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Blood Group</th>
            <th>Unit</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
        $connection = mysqli_connect("localhost", "root", "", "blood_bank");
        $db = mysqli_select_db($connection, "Blood Bank");
        $query = "select * from request";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
          <tr>
            <td><?php echo $row['fullName']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['bloodGroup']; ?></td>
            <td><?php echo $row['unit']; ?></td>
            <td><button class="btn" name="grant">Grant</button></td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
    <div class="col-md-2"></div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
if (isset($_POST['grant'])) {
  $bloodGroup = $_POST['bloodGroup'];
  $unit1 = $_POST['unit'];
  $connection = mysqli_connect("localhost", "root", "", "blood_bank");
  $db = mysqli_select_db($connection, "Blood Bank");
  $query1 = "select unit from blood_info where bloodGroup='$bloodGroup'";
  $query_run = mysqli_query($connection, $query1);
  while ($row = mysqli_fetch_assoc($query_run)) {
    $_SESSION['unit'] = $row['unit'];
    if ($unit1 <= $_SESSION['unit']) {
      $query = "update blood_info set unit=unit - $unit1  where bloodGroup='$bloodGroup'";
      $query_run = mysqli_query($connection, $query);
    }
  }
}
?>