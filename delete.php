<?php include("config.php");
$id = $_GET["id"];

$query = pg_query("DELETE FROM shipment WHERE id = $id");
if( $query==TRUE ) {
                // ubah berhasil alihkan ke daftarsiswa.php
                header('Location: shipment.php');
        } else {
                die("gagal mengubah..");
        }
?>
