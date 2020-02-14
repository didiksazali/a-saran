<?php
date_default_timezone_set('Asia/Jakarta');

$server = "localhost";
$username = "root";
$password = "";
$database = "a_saran";

mysql_connect($server,$username,$password) or die ("Gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");
?>
