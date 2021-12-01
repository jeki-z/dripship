<?php
$db=pg_connect('host=localhost dbname=dripship user=postgres password=postgres');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>