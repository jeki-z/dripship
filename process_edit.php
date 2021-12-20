<?php include("config.php");

if(isset($_POST['status'])){

		$id = $_POST["id"];
		$status = $_POST["status"];
		

        // update query
  $query = pg_query("UPDATE shipment SET shipment_status = '$status' WHERE id = $id");

        if( $query==TRUE ) {
                header('Location: shipment.php');
        } else {
                die("GAGAL GAN");
        }


} else {
        die("GAGAL GAN");

}
?>
