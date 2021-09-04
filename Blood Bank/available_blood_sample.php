<?php
require('functions.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/form.css">

  <title>Blood Bank</title>
  <style type="text/css">
    #side_bar {
      padding: 50px;
      width: 200px;
      height: 250px;
      
    }
  </style>
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
        <li class="nav-item">
          <a class="nav-link active" href="register_choice.php">Register</a>
        </li>
      </ul>

    </div>
  </nav>
  <div class="row">
    <div class="col-md-3"  id="side_bar">
      <div class="card bg-light" style="width: 300px">
        <div class="card-header">Blood Group: A+</div>
        <div class="card-body">
          <p class="card-text">No. of Unit Available: <?php echo get_unit('A+'); ?> </p>
          <a href="request.php" class="btn btn-danger" target="_blank">Request</a>
        </div>
      </div>
    </div>
    <div class="col-md-3" id="side_bar">
      <div class="card bg-light" style="width: 300px">
        <div class="card-header">Blood Group: A-</div>
        <div class="card-body">
          <p class="card-text">No. of Unit Available: <?php echo get_unit('A-'); ?> </p>
          <a href="request.php" class="btn btn-danger" target="_blank">Request</a>
        </div>
      </div>
    </div>
    <div class="col-md-3" id="side_bar">
      <div class="card bg-light" style="width: 300px">
        <div class="card-header">Blood Group: B+</div>
        <div class="card-body">
          <p class="card-text">No. of Unit Available: <?php echo get_unit('B+'); ?> </p>
          <a href="request.php" class="btn btn-danger" target="_blank">Request</a>
        </div>
      </div>
    </div>
    <div class="col-md-3" id="side_bar">
      <div class="card bg-light" style="width: 300px">
        <div class="card-header">Blood Group: B-</div>
        <div class="card-body">
          <p class="card-text">No. of Unit Available: <?php echo get_unit('B-'); ?> </p>
          <a href="request.php" class="btn btn-danger" target="_blank">Request</a>
        </div>
      </div>
    </div>

    <div class="col-md-3" id="side_bar">
      <div class="card bg-light" style="width: 300px">
        <div class="card-header">Blood Group: AB+</div>
        <div class="card-body">
          <p class="card-text">No. of Unit Available: <?php echo get_unit('AB+'); ?> </p>
          <a href="request.php" class="btn btn-danger" target="_blank">Request</a>
        </div>
      </div>
    </div>
    <div class="col-md-3" id="side_bar">
      <div class="card bg-light" style="width: 300px">
        <div class="card-header">Blood Group: AB-</div>
        <div class="card-body">
          <p class="card-text">No. of Unit Available: <?php echo get_unit('AB-'); ?> </p>
          <a href="request.php" class="btn btn-danger" target="_blank">Request</a>
        </div>
      </div>
    </div>
    <div class="col-md-3" id="side_bar">
      <div class="card bg-light" style="width: 300px">
        <div class="card-header">Blood Group: O+</div>
        <div class="card-body">
          <p class="card-text">No. of Unit Available: <?php echo get_unit('O+'); ?> </p>
          <a href="request.php" class="btn btn-danger" target="_blank">Request</a>
        </div>
      </div>
    </div>
    <div class="col-md-3" id="side_bar">
      <div class="card bg-light" style="width: 300px">
        <div class="card-header">Blood Group: O-</div>
        <div class="card-body">
          <p class="card-text">No. of Unit Available: <?php echo get_unit('O-'); ?> </p>
          <a href="request.php" class="btn btn-danger" target="_blank">Request</a>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>