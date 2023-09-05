<?php
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
  header("location: index.php");
}
if (isset($_POST['logout'])) {
  session_destroy();
  header("location: index.php");
}


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<script src="https://kit.fontawesome.com/a27d6ed1ca.js" crossorigin="anonymous"></script>
<?php include("navbar.php"); ?>





<div class="box">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="news.php">
          <div class="box-part text-center">

            <i class="fas fa-newspaper fa-5x"></i>

            <div class="title">
              <h4>Actualités</h4>
            </div>

          </div>
        </a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="appels.php">
          <div class="box-part text-center">

            <i class="fas fa-briefcase fa-5x"></i>

            <div class="title">
              <h4>APPELS D'OFFRE</h4>
            </div>

          </div>
        </a>
      </div>
    </div>
    <div class="row">



      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="project.php">
          <div class="box-part text-center">

            <i class="fas fa-project-diagram fa-5x"></i>

            <div class="title">
              <h4>Projets</h4>
            </div>

          </div>
        </a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="elus.php">
          <div class="box-part text-center">

            <i class="fas fa-newspaper fa-5x"></i>

            <div class="title">
              <h4>élus</h4>
            </div>

          </div>
        </a>
      </div>


      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mx-auto">
        <a href="messages.php">
          <div class="box-part text-center">

            <i class="fas fa-envelope fa-5x"></i>

            <div class="title">
              <h4>Contact</h4>
            </div>

          </div>
        </a>
      </div>






    </div>
  </div>
</div>

<?php


?>

<style>
  body {
    background: #eee;
  }

  span {
    font-size: 15px;
  }

  a {
    text-decoration: none;
    color: #0062cc;
    border-bottom: 2px solid #0062cc;
  }

  .box {
    padding: 60px 0px;
  }

  .box-part {
    background: #FFF;
    border-radius: 0;
    padding: 60px 10px;
    margin: 30px 0px;
  }

  .text {
    margin: 20px 0px;
  }

  .fa-5x {
    color: #4183D7;
  }

  h4 {
    padding-top: 1rem;
    color: #4183D7;
    text-transform: uppercase;
    text-decoration: none !important;
    font-size: large;
    font-weight: bold;

  }

  a {
    text-decoration: none !important;
  }

  .box-part {
    border: 1px solid transparent;
    border-radius: 5px;
  }

  .box-part:hover {
    border: 1px solid #4183D7;
  }
</style>