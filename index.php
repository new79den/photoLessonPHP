<?
include 'libs.php';

if (!isCookies()){
	header("Location: form.php");
	exit;
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h3> hello <?echo $_COOKIE['user'];?></h3>
	<form action="upload.php" method="post" enctype="multipart/form-data">
    <input name="fileImg" type="file"><br>
    <input type="submit" value="send"><br>
</form><br>


	<?
$arr = getImg(DIR);
$img = imgForUndex($arr);
echo $img;
	?>
	<h3><a href = "logaut.php">exit</a></h3>
</body>
</html>

