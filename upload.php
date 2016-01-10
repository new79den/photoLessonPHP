<?
include 'libs.php';
$uploadfile = __DIR__ . "/img/" . basename($_FILES['fileImg']['name']);
imgUploaded($uploadfile);
header("Location: index.php");
exit;
?>