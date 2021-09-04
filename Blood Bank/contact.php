<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/form.css">
  <style>
    #bg {
      text-align: center;
      margin-top: 200px;
      font-size: 25px;
      font-weight: bold;
      color: black;


    }
  </style>

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
        <li class="nav-item">
          <a class="nav-link active" href="register_choice.php">Register</a>
        </li>
      </ul>

    </div>
  </nav>
  <div id="bg">
    <div >Contact us on TollFree Number 180054321</div>
    <div >or</div>
    <div >Mail us on bloodbank@gmail.com</div>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>