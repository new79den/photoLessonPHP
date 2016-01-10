<?
require __DIR__ . '/functions/file.php';
require __DIR__ . '/models/photo.php';

if (!empty($_POST)){
	$data = array();
	if (!empty($_POST['title'])){
		$data['title'] = $_POST['title'];
	}
	if (!empty($_FILES)){
		$res = file_upload('images');
		if (false !== $res){
			$data['image'] = $res;
		}
	}
}
if (isset($data['title']) && isset($data['image'])){
	photo_insert($data);
	header("Location: index.php");
	die;
}

include __DIR__ . '/views/add.php';