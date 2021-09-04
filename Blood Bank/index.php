<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Blood Bank</title>
    <style>
    #image {
      filter: blur(10px);
      -webkit-filter: blur(10px);
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
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">

<ol class="carousel-indicators">
  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img1.jpg" class="d-block w-100" alt="..." id="image" width="1000px" height="590px">




    <div class="carousel-caption d-none d-md-block">
      <h5 style="color:white ; font-family:courier;font-size:200%;"><b>"Your blood is replaceable. A life is not.”</b></h5>
    </div>
  </div>
  <div class="carousel-item">
    <img src="img2.jpg" class="d-block w-100" alt="..." id="image" width="1000px" height="590px">
    <div class="carousel-caption d-none d-md-block">
      <h5 style="color:white ; font-family:courier;font-size:250%;"><b>“Donate blood and be the reason of smile to many faces.”</b></h5>
    </div>
  </div>
  <div class="carousel-item">
    <img src="img3.jpg" class="d-block w-100" alt="..." id="image" width="1000px" height="590px">
    <div class="carousel-caption d-none d-md-block">
      <h5 style="color:white; font-family:courier;font-size:200%;"><b>Blood can circulate forever if you keep donating it.</b></h5>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>