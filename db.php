<?php
	$connection = mysqli_connect('127.0.0.1', 'root', '', 'test_db');
	if( $connection == false ) {
		echo 'Подключение не состоялось! <br/>';
		echo mysqli_connect_error();
		echo '<br/>';
		exit();
	}
	else {
		echo 'Вы успешно подключились к БД! <br/>';
	}
?>