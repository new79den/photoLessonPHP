<?
/*   Константы    */
define('DIR',  __DIR__ . '/img');

/*----------------*/
/*вывод картинок*/
function imgForUndex($arrImg){
	$img;
	foreach ($arrImg as $key){
		$img .= "<img  width='100' height = '100'  src='img/".$key."'>"; 
	}
	return $img;
}
/*  функция получения списка файлов */
function getImg($dir){
	return array_diff(scandir($dir), array('.','..'));
};

/*  функция загрузки файла на сервер */
function imgUploaded($uploadfile){
	if (is_uploaded_file($_FILES['fileImg'][tmp_name])){
	return	move_uploaded_file($_FILES['fileImg'][tmp_name], $uploadfile);
	}
}

/*прверка авторизации пользователя*/
function userPass($user, $pass){
	$userPas = array('user1' =>'111' , 'user2' =>'222');
	return isset($userPas[$user]) &&  $pass == $userPas[$user];
}

/*проверка на наличие куки*/
function isCookies(){
	return isset($_COOKIE['user']);
}

/*установка куки*/
function setCookiesUser($login){
	setcookie('user', $login, time()+86400);
}
/*logout выйти с акаунта*/
function logout(){
	setcookie('user', time()-86400);
}
?>