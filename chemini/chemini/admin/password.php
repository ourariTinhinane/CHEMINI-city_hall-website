<?php
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
  header("location: index.php");
} ?>

<!DOCTYPE html>
<html>

<head>
  <title>Elus</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <!------ Include the above in your HEAD tag ---------->

  <script src="https://kit.fontawesome.com/a27d6ed1ca.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php include("navbar.php") ?>
  <center>
    <h2>Changer le mot de passe</h2>
  </center>




  <form class="col-sm-6" method="POST" action="password.php" enctype="multipart/form-data" style="margin : 0 auto; padding : 20px 20px; border : solid 1px rgb(200, 200, 200)">

    <!--  Choisir la rubrique  -->

    <div class="form-floating mb-4">

    </div>


    <div class="form-floating mb-4 ">
      <label for="floatingTitle">Ancien mot de passe</label>
      <input type="text" class="form-control" name="ancien">
    </div>
    <div class="form-floating mb-4 ">
      <label for="floatingTitle">Nouveau mot de passe</label>
      <input type="text" class="form-control" name="nv">
    </div>
    <div class="form mb-4">
      <button type="submit" name="submit" class="btn btn-danger">Changer</button>
    </div>
  </form>

</body>

</html>


<?php
if (isset($_POST['submit'])) {
    require("../dbconn.php");
  $ancien = $_POST['ancien'];
  $nv = $_POST['nv'];
  $id = $_SESSION['AdminLoginId'];
  $query = mysqli_query($conn, "SELECT mdp from admins where id = '$id'");
  $mdp = mysqli_fetch_array($query)[0];
  if ($mdp == $ancien)
  {
      mysqli_query($conn, "UPDATE admins SET mdp = '$nv' where id = '$id'");
      echo "<script>alert('Modifié !')</script>";
  }
  else
    echo "<script>alert('Erreur')</script>";
}
?>
<br><br>