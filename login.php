<?
include 'libs.php';

$userLog = $_POST['login'];
$userPass = $_POST['pass'];

if (empty($userLog) || empty($userPass)){
	header("Location: form.php");
	exit;
}
 
if (!userPass($userLog, $userPass)){
	header("Location: form.php");
	exit;
};
setCookiesUser($userLog);

header("Location: index.php");
exit;
?>