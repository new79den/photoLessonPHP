<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table border="1">
	<th>
		name
	</th>
	<th>
		photo
	</th>
<? foreach ($items as $item): ?>
	<tr>
	<td><? echo $item['title'];?></td>
	
	<td> <img src="<? echo $item['path'];?>"  alt=""></td>
	</tr>
<?endforeach;?>
</table>
<a href="add.php">add photo</a>
</body>
</html>