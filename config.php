<?php
$db=pg_connect('host=localhost dbname=dripship user=postgres password=password');
if( !$db ){
die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
