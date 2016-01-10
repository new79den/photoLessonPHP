<?
function sql_connect(){
	mysql_connect('localhost','root','');
	mysql_select_db('mvc');
}

function sql_exec($sql){
	sql_connect();
	$res = mysql_query($sql);
}

function sql_query($sql){
	sql_connect();
	$res = mysql_query($sql);
	$array = array();
	while ($row = mysql_fetch_assoc($res)) {
		$array[] = $row;
	}
	return $array;
}