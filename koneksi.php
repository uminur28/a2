<?php 

$server = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'wa_lanjut'; 

mysql_connect ($server,$username,$password) or die ('Koneksi Gagal !'); 
mysql_select_db ($database) or die ('Database tidak bisa dibuka'); 

?>
