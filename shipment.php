<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="styleOrder.css" />
    <title>DripShip | Shipment</title>
  </head>
  <body id="shipment">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/dripship">DripShip!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/dripship">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dripship/#create">Create Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#shipment">Shipment</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Log-->
    <section id="table">
      <div class="container text-center text-white">
        <h2>Shipment on-process</h2>
      </div>
      <div class="container mb-3 mt-5">
        <table class="table text-white" style="width: 100%" id="datatable">
          <thead>
            <tr>
              <th scope="col">Shp.ID</th>
              <th scope="col">Shp.Date</th>
              <th scope="col">Shp.Type</th>
              <th scope="col">Courier</th>
              <th scope="col">Shp.Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $query = pg_query("SELECT * FROM ongoing");
            while($ship = pg_fetch_array($query)){
              echo "<tr>";
              echo "<td>"."SH-".$ship["id"]."</td>";
              echo "<td>".$ship["shipment_date"]."</td>";
              echo "<td>".$ship["shipment_type"]."</td>";
              echo "<td>"."CR-".$ship["courier_id"]."</td>";
              echo "<td>".$ship["shipment_status"]."</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
        <br>
        <br>
        <br>
      </div>
    </section>
    <section id="table">
      <div class="container text-center text-white">
        <h2>Shipment done</h2>
      </div>
      <div class="container mb-3 mt-5">
        <table class="table text-white" style="width: 100%" id="datatable">
          <thead>
            <tr>
              <th scope="col">Shp.ID</th>
              <th scope="col">Shp.Date</th>
              <th scope="col">Shp.Type</th>
              <th scope="col">Courier</th>
              <th scope="col">Shp.Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $query = pg_query("SELECT * FROM done");
            while($ship = pg_fetch_array($query)){
              echo "<tr>";
              echo "<td>"."SH-".$ship["id"]."</td>";
              echo "<td>".$ship["shipment_date"]."</td>";
              echo "<td>".$ship["shipment_type"]."</td>";
              echo "<td>"."CR-".$ship["courier_id"]."</td>";
              echo "<td>".$ship["shipment_status"]."</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
        <br>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffff"
        fill-opacity="1"
        d="M0,160L80,170.7C160,181,320,203,480,186.7C640,171,800,117,960,106.7C1120,96,1280,128,1360,144L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
      ></path>
    </svg>
    <section id="footer">
      <div class="container text-center">footer</div>
      <!--kasi penutup ato gmn -->
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
  </body>
</html>
