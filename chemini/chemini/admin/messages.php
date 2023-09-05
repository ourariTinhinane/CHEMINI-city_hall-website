<?php 
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: index.php");
} ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <script src="assets/js/main.js"></script> 

<!------ Include the above in your HEAD tag ---------->

<script src="https://kit.fontawesome.com/a27d6ed1ca.js" crossorigin="anonymous"></script>
    </head>
    <body>

<?php include("navbar.php") ?>
<center><h2>MESSAGES</h2></center>
<?php  
    require("../dbconn.php");
    $sql = mysqli_query($conn,"SELECT *, DATE_FORMAT(date, \"%d/%m/%Y\") AS date from contact ORDER BY id DESC");
    while($row = mysqli_fetch_array($sql))
    {
?>
<div class="card">
  <div class="card-header">
  <?php echo $row['nom']. "      -  ".$row['email'] ?>
  <a href="suppmsg.php?id=<?php echo $row['id'] ?>" style="float: right;">Supprimer</a>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['objet'] ?><small style="float : right"><?php echo $row['date'] ?></small></h5>
    <br><br><p class="card-text"><?php echo $row['message'] ?></p>
  </div>
</div><br><br><hr><br><br>
    <?php } ?>

    </body>
</html>