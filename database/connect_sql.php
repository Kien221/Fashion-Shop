<?php
require_once ('config.php');
session_start();
mysqli_report(MYSQLI_REPORT_OFF);

$dbc = mysqli_connect('localhost', 'root', '', 'ct275-final');
if (!$dbc) {
	echo '<p class="error">Không thể kết nối đến CSDL vì:<br>' .
		mysqli_connect_error() . '.</p>';
	exit();
}
mysqli_set_charset($dbc,'utf8mb4_general_ci');

?>