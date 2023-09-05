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
    <h2>ELUS</h2>
  </center>




  <form class="col-sm-6" method="POST" action="elus.php" enctype="multipart/form-data" style="margin : 0 auto; padding : 20px 20px; border : solid 1px rgb(200, 200, 200)">

    <!--  Choisir la rubrique  -->

    <div class="form-floating mb-4">

    </div>


    <div class="form mb-4">
      <input type="file" class="form-control" name="file" accept="image/*, .pdf">
    </div>

    <div class="form mb-4">
      <button type="submit" name="submit" class="btn btn-danger">Changer</button>
    </div>
  </form>

</body>

</html>


<?php
if (isset($_POST['submit'])) {
  $type = $_FILES['file']['type'];
  $nom = $_FILES["file"]["name"];
  $ext = substr($nom, strrpos($nom, '.'));
  $ext       = str_replace('.', '', $ext);
  $nv = "elus" .  '.' . $ext;
  array_map('unlink', glob("../assets/img/" . "elus.*"));

  move_uploaded_file($_FILES["file"]["tmp_name"], "../assets/img/" . $nv);
  echo "<script>location.href = 'dash.php'</script>";
}
?>
<br><br>