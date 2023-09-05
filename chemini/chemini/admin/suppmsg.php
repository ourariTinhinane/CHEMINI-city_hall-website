<?php 
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: index.php");
} ?>

<?php
require("../dbconn.php");
$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM contact where id = '$id'");
if ($sql === TRUE)
{
    echo "<script>alert('Supprimé');
    location.href = 'messages.php';
    
    </script>";
}

?>