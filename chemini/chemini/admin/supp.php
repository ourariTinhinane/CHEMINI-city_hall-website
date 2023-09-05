
<?php 
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: index.php");
} ?>
<?php
require("../dbconn.php");
$id = $_GET['id'];
$table = $_GET['table'];
$sql = "DELETE from `{$table}` WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
if (isset($_GET['photo']))
{
    unlink("../assets/".$table.'/'.$_GET['photo']);
}
if ($query === TRUE)
    echo "<script>alert('Supprimé !'); 
    window.history.back();
    </script>";


?>
