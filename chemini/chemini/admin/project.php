<?php 
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: index.php");
} ?>

<!DOCTYPE html>
<html>

<head>
  <title>Projets</title>
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
    <h2>PROJETS</h2>
  </center>


  <form class="col-sm-6" method="POST" action="project.php" enctype="multipart/form-data" style="margin : 0 auto; padding : 20px 20px; border : solid 1px rgb(200, 200, 200)">



    <div class="form-floating mb-4 ">
      <label for="floatingTitle">Article</label>
      <input type="text" class="form-control" name="article">

    </div>
    <div class="form-floating mb-4 ">
      <label for="floatingTitle">AP</label>
      <input type="number" step="any" class="form-control" name="ap">

    </div>
    <div class="form-floating mb-4">
      <label for="floatingSelect">Type</label>
      <select name="type" class="form-control">
        <option selected disabled>Sélectionner..</option>
        <option value="hydro">Hydraulique</option>
        <option value="batiment">Bâtiment</option>
        <option value="urbain">Aménagement urbain</option>
        <option value="loisirs">Loisirs</option>
        <option value="chemin">Chemins et pistes</option>
        <option value="edu">Education</option>
        <option value="divers">Divers</option>
      </select>

    </div>



    <div class="form mb-4">
      <button type="submit" class="btn btn-danger">Ajouter</button>
    </div>
  </form>

  <br><br>

</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $table = "projets";
  $article = htmlspecialchars($_POST['article']);
  $article = str_replace("'", "\'", $article);
  $ap = floatval($_POST['ap']);
  $type = $_POST['type'];
  require("../dbconn.php");
  $query = "INSERT INTO `projets` (article, ap, type) VALUES('$article', '$ap', '$type')";

  if ($conn->query($query) === TRUE)
    echo "<script>alert('Ajouté !'); </script>";
  else 
    echo "<script>alert('Erreur !'); </script>";
}



?>

<br><br>

<h3><center>Anciens Projets</center></h3>
<?php 
require("../dbconn.php");
$sql = mysqli_query($conn, "SELECT * from projets ORDER BY type");
if (mysqli_num_rows($sql) == 0)
{
  echo "<br><br><center>Vide</center><br><br><br>";
}
else{
  $type = array("hydro" => "Hydraulique", "batiment" => "Bâtiment", "loisirs" => "Loisirs", "urbain" => "Aménagement Urbain", "chemin" => "Chemins et pistes", "edu" => "Education", "divers" => "Divers");
while ($row = mysqli_fetch_array($sql)){
?> 
<div class="card">
  <img src="" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $type[$row['type']] ?></h5>
    <p class="card-text"><?php echo $row["article"] ?></p>
    <a href="supp.php?id=<?php echo $row['id'] ?>&table=projets" class="btn btn-danger pull-right">Supprimer</a>
  </div>
</div>
<br>
<?php }} ?>