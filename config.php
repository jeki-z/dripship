<?php
$f_pass=fopen("password.txt","r") or die("tidak ada password.txt");
$pass=fread($f_pass, filesize("password.txt"));
$connect="host=localhost dbname=dripship user=postgres password=$pass";
$db=pg_connect($connect);
if( !$db ){
die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
