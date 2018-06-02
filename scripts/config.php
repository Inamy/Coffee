<?

	$db_name = 'coffee';
	$db_server = 'localhost';
	$db_user = 'root';
	$db_password = '';

	$link = mysqli_connect($db_server, $db_user, $db_password, $db_name);
	if (!$link){
		die('Невозможно подключиться к БД');
	}
?>