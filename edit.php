<?php include("config.php");
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="styleOrder.css" />

    <title>DripShip | Edit</title>
  </head>
  <body>
      <section id="edit">

            <div class="container text-white">
              <div class="row">
                <div class="col">
                  <div class="container text-center display-6"><b>Edit Page</b></div>
                  <div class="container mt-5 fs-5 mb-3">Shipment status</div>
				  	  <form action="process_edit.php" method="POST">
				<fieldset>
				<input type="hidden" name="id" value="<?= $id ?>"</input>
                  <select class="form-select mt-2 mb-3" name="status" aria-label="Default select example">
                    <option value="In shipping" selected>In shipping</option>
                    <option value="Shipped">Shipped</option>
                  </select>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col">
                  <button type="submit" value="edit" class="btn btn-primary ms-5">Confirm</button>
                </div>
              </div>
		</fieldset>
		</form>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
