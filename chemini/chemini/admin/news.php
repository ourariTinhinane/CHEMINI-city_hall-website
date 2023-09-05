<?php 
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: index.php");
} ?>

<!DOCTYPE html>
<html>

<head>
  <title>Actualités</title>
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
    <h2>ACTUALITES</h2>
  </center>




  <form class="col-sm-6" method="POST" action="news.php" enctype="multipart/form-data" style="margin : 0 auto; padding : 20px 20px; border : solid 1px rgb(200, 200, 200)">

    <!--  Choisir la rubrique  -->

    <div class="form-floating mb-4">

    </div>

    <div class="form-floating mb-4 ">
      <label for="floatingTitle">Titre</label>
      <input type="text" class="form-control" name="titre">

    </div>

    <div class="form-floating mb-4">
      <label for="floatingAuthor">Auteur</label>
      <input type="text" class="form-control" name="auteur" placeholder="Auteur">

    </div>

    <div class="form mb-4">
      <input type="file" class="form-control" name="image" accept="image/*">
    </div>


    <div class="form-floating mb-4">
      <label for="floatingContent">Article</label>
      <textarea class="form-control" name="article" placeholder="Article" id="floatingContent" rows="10" style=" height: 15em;"></textarea>

    </div>

    <div class="form mb-4">
      <button type="submit" class="btn btn-danger ">Ajouter</button>
    </div>
  </form>


</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $table = "infos";
  $titre = htmlspecialchars($_POST['titre']);
  $titre = str_replace("'", "\'", $titre);
  $article = htmlspecialchars($_POST['article']);
  $article = str_replace("'", "\'", $article);
  $auteur = $_POST['auteur'];
  require("../dbconn.php");
  require("fichier.php");
  $query = "INSERT INTO `infos` (titre, article, auteur, photo) VALUES('$titre', '$article', '$auteur', '$image')";

  if ($conn->query($query) === TRUE)
    echo "<script>alert('Ajouté !'); </script>";
  else 
    echo "<script>alert('Erreur !'); </script>";
}
?>
<br><br>

<h3><center>Anciennes actualités</center></h3>
<?php 
require("../dbconn.php");
$sql = mysqli_query($conn, "SELECT * from infos");
if (mysqli_num_rows($sql) == 0)
{
  echo "<br><br><center>Vide</center><br><br><br>";
}
else{
while ($row = mysqli_fetch_array($sql)){
?> 
<div class="card">
  <img src="" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["titre"] ?></h5>
    <p class="card-text"><?php echo substr($row["article"],0,455)."..." ?></p>
    <a href="supp.php?id=<?php echo $row['id'] ?>&table=infos<?php if (isset($row['photo'])) echo "&photo=".$row['photo'] ?>" class="btn btn-danger pull-right">Supprimer</a>
  </div>
</div>
<br>
<?php }} ?>