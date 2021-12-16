<?php include("config.php");

if(isset($_POST['status'])){

        // ambil data dari formedit.php
		$id = $_POST["id"];
		$status = $_POST["status"];
		

        // update query
  $query = pg_query("UPDATE shipment SET shipment_status = '$status' WHERE id = $id");

        if( $query==TRUE ) {
                // ubah berhasil alihkan ke daftarsiswa.php
                header('Location: shipment.php');
        } else {
                die("gagal mengubah..");
        }


} else {
        die("Akses dilarang...");

}
?>