<?php
include("config.php");
$id = $_GET["id"];
$q_ship = pg_query("SELECT * FROM shipment WHERE id=$id");
$ship = pg_fetch_array($q_ship);
$order_id = $ship["order_id"];
$q_order = pg_query("SELECT * FROM orders WHERE id=$order_id");
$order = pg_fetch_array($q_order);
$sender_id = $order["sender_id"];
$recip_id = $order["recipient_id"];
$item_type = $order["item_type"];
$item_qty = $order["item_qty"];
$order_date = $order["order_date"];
$ship_type = $order["shipment_type"];
$ship_status = $ship["shipment_status"];
$ship_date = $ship["shipment_date"];
$courier_id = $ship["courier_id"];
$q_sender = pg_query("SELECT * FROM customers WHERE id=$sender_id");
$sender = pg_fetch_array($q_sender);
$sender_name = $sender["name"];
$sender_addr = $sender["address"];
$sender_pcode = $sender["pcode"];
$sender_pnumber = $sender["phone_number"];
$q_recip = pg_query("SELECT * FROM customers WHERE id=$recip_id");
$recip = pg_fetch_array($q_recip);
$recip_name = $recip["name"];
$recip_addr = $recip["address"];
$recip_pcode = $recip["pcode"];
$recip_pnumber = $recip["phone_number"];
$q_courier = pg_query("SELECT * FROM courier WHERE id=$courier_id");
$courier = pg_fetch_array($q_courier);
$courier_name = $courier["name"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
   <link rel="stylesheet" href="styleDetail.css" />
   <title>DripShip | Data Details</title>
</head>
<style>
   .tab {
      padding-left: 2px;
   }
</style>

<body>
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
   <section id="create">
      <div class="cointainer text-center text-white mb-5">
         <h2>Details</h2>
      </div>
      <div class="container text-white">
         <div class="row ">
            <h4>Sender</h4>
            <div class="container mb-3 mt-3">
               <table class="table table-borderless text-white" style="width: 86%" id="datatable">
                  <tr>
                     <!--max 57 -->
                     <th>ID</th>
                     <td>: CR-<?= $sender_id ?></td>
                  </tr>
                  <tr>
                     <!--max 57 -->
                     <th>Name</th>
                     <td>: <?= $sender_name ?></td>
                  </tr>
                  <tr>
                     <th>Address</th>
                     <td>: <?= $sender_addr ?></td>
                  </tr>
                  <tr>
                     <th>Postal Code</th>
                     <td>: <?= $sender_pcode ?></td>
                  </tr>
                  <tr>
                     <th>Phone</th>
                     <td>: <?= $sender_pnumber ?></td>
                  </tr>
                  <tr>
                     <th> </th>
                     <td>
                        <pre>                                                                  </pre>
                     </td>
                  </tr>
               </table>
            </div>
            <h4>Recipient</h4>
            <div class="container mb-3 mt-3">
               <table class="table table-borderless text-white" style="width: 86%" id="datatable">
                  <tr>
                     <!--max 57 -->
                     <th>ID</th>
                     <td>: CR-<?= $recip_id ?></td>
                  </tr>
                  <tr>
                     <!--max 57 -->
                     <th>Name</th>
                     <td>: <?= $recip_name ?></td>
                  </tr>
                  <tr>
                     <th>Address</th>
                     <td>: <?= $recip_addr ?></td>
                  </tr>
                  <tr>
                     <th>Postal Code:</th>
                     <td>: <?= $recip_pcode ?></td>
                  </tr>
                  <tr>
                     <th>Phone</th>
                     <td>: <?= $recip_pnumber ?></td>
                  </tr>
                  <tr>
                     <th> </th>
                     <td>
                        <pre>                                                                  </pre>
                     </td>
                  </tr>
               </table>
            </div>
            <h4>Order</h4>
            <div class="container mb-3 mt-3">
               <table class="table table-borderless text-white" style="width: 76%" id="datatable">
                  <tr>
                     <!--max 57 -->
                     <th>Order ID</th>
                     <td>: OD-<?= $order_id ?></td>
                  </tr>
                  <tr>
                     <!--max 57 -->
                     <th>Order Date</th>
                     <td>: <?= $order_date ?></td>
                  </tr>
                  <tr>
                     <!--max 57 -->
                     <th>Item Type</th>
                     <td>: <?= $item_type ?></td>
                  </tr>
                  <tr>
                     <th>Item Quantity</th>
                     <td>: <?= $item_qty ?></td>
                  </tr>
                  <tr>
                     <th> </th>
                     <td>
                        <pre>                                                                  </pre>
                     </td>
                  </tr>
               </table>
            </div>
            <h4>Shipment</h4>
            <div class="container mb-3 mt-3">
               <table class="table table-borderless text-white" style="width: 70%" id="datatable">
                  <tr>
                     <!--max 57 -->
                     <th>Shipment ID</th>
                     <td>: SH-<?= $id ?></td>
                  </tr>
                  <tr>
                     <!--max 57 -->
                     <th>Shipment Date</th>
                     <td>: <?= $ship_date ?></td>
                  </tr>
                  <tr>
                     <th>Shipment Type</th>
                     <td>: <?= $ship_type ?></td>
                  </tr>
                  <tr>
                     <th>Courier ID</th>
                     <td>: CR-<?= $courier_id ?></td>
                  </tr>
                  <tr>
                     <th>Courier Name</th>
                     <td>: <?= $courier_name ?></td>
                  </tr>
                  <tr>
                     <th>Shipment Status</th>
                     <td>: <?= $ship_status ?></td>
                  </tr>
                  <tr>
                     <th> </th>
                     <td>
                        <pre>                                                                  </pre>
                     </td>
                  </tr>
               </table>
            </div>
            <div class="col">
               <a href="shipment.php" class="btn btn-primary">Back</a>
            </div>
         </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
         <path fill="#3a404b" fill-opacity="1" d="M0,224L40,202.7C80,181,160,139,240,128C320,117,400,139,480,149.3C560,160,640,160,720,154.7C800,149,880,139,960,138.7C1040,139,1120,149,1200,160C1280,171,1360,181,1400,186.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
      </svg>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>