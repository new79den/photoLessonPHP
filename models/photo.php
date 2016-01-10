<?
require_once __DIR__ . '/../functions/sql.php';

function photo_GetAll(){
	$sql = 'SELECT * FROM img';
	return sql_query($sql);
}

function photo_insert($data){
	$sql = "INSERT INTO img
			(title, path)
			VALUES
			('" .  $data['title']  . "', '" .  $data['image']  . "')		
	";
	sql_exec($sql);
}