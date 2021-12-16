<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <!--My CSS-->
    <link rel="stylesheet" href="style.css" />

    <title>DripShip</title>
  </head>
  <body id="home">
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
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#create">Create Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shipment.php">Shipment</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Jumbotron-->
    <section class="jumbotron text-center text-white">
      <img src="img/logo1.png" alt="DripShip_logo" width="175" />
      <h5 class="display-4">Where Your Fashion Feel Safe</h5>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,160L40,149.3C80,139,160,117,240,128C320,139,400,181,480,197.3C560,213,640,203,720,186.7C800,171,880,149,960,128C1040,107,1120,85,1200,90.7C1280,96,1360,128,1400,144L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!--Create-->
    <section id="create">
      <form action="add_order.php" method="POST">
        <div class="cointainer text-center">
          <h3>Customer Data</h3>
        </div>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="container text-center"><b>Sender</b></div>
              <div class="mb-3 ms-5 me-5">
                <label for="s-name" class="form-label">Name</label>
                <input class="form-control" type="text" name="s-name" placeholder="Default input" />
              </div>
              <div class="mb-3 ms-5 me-5">
                <label for="s-address" class="form-label">Address</label>
                <input class="form-control" type="text" name="s-address" placeholder="Default input" />
              </div>
              <div class="mb-3 ms-5 me-5">
                <label for="s-pcode" class="form-label">Postal Code</label>
                <input class="form-control" type="text" name="s-pcode" placeholder="Default input" />
              </div>
              <div class="mb-3 ms-5 me-5">
                <label for="s-phone" class="form-label">Phone Number</label>
                <input class="form-control" type="text" name="s-phone" placeholder="Default input" />
              </div>
            </div>
            <div class="col">
              <div class="container text-center"><b>Recipient</b></div>
              <div class="mb-3 ms-5 me-5">
                <label for="r-name" class="form-label">Name</label>
                <input class="form-control" type="text" name="r-name" placeholder="Default input" />
              </div>
              <div class="mb-3 ms-5 me-5">
                <label for="r-address" class="form-label">Address</label>
                <input class="form-control" type="text" name="r-address" placeholder="Default input" />
              </div>
              <div class="mb-3 ms-5 me-5">
                <label for="r-pcode" class="form-label">Postal Code</label>
                <input class="form-control" type="text" name="r-pcode" placeholder="Default input" />
              </div>
              <div class="mb-3 ms-5 me-5">
                <label for="r-phone" class="form-label">Phone Number</label>
                <input class="form-control" type="text" name="r-phone" placeholder="Default input" />
              </div>
              <br>
            </div>
            <div class="cointainer text-center">
              <h3>Order Data</h3>
            </div>
            <div class="row text-left">
              <div class="mb-3 ms-5 me-5">
                <label for="item-type" class="form-label">Item Type</label>
                <input class="form-control" type="text" name="item-type" placeholder="Default input" />
              </div>
              <div class="mb-3 ms-5 me-5">
                <label for="item-qty" class="form-label">Item Quantity</label>
                <input class="form-control" type="number" name="item-qty" placeholder="Default input" />
              </div>
              <div class="mb-3 ms-5 me-5">
                <label for="ship-type" class="form-label">Shipment Type</label>
                <select class="form-select" name="ship-type" aria-label="Regular">
                  <option value="Regular" selected>Regular</option>
                  <option value="Premium">Premium</option>
                </select>
              </div>
            </div>
            <div class="row text-left">
              <div class="col">
                <button type="submit" name="submit" value="submit" class="btn btn-primary ms-5">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#3a404b"
          fill-opacity="1"
          d="M0,224L40,202.7C80,181,160,139,240,128C320,117,400,139,480,149.3C560,160,640,160,720,154.7C800,149,880,139,960,138.7C1040,139,1120,149,1200,160C1280,171,1360,181,1400,186.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
  </body>
</html>
