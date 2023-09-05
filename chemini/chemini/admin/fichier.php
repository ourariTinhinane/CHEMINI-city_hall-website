<?php 
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: index.php");
} ?>

<?php 
$output = "../assets/".$table."/";
if (!file_exists($output)) {
    @mkdir($output, 0777);
}

$random = time();
$type      = $_FILES['image']['type'];
$ImageName = $_FILES["image"]["name"];
$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
$ImageExt       = str_replace('.', '', $ImageExt);
if($ImageName != '')
    $image = $random . '.' . $ImageExt;
else
    $image = '';
move_uploaded_file($_FILES["image"]["tmp_name"], $output . $image);


?>