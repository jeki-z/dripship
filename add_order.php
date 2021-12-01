<?php include("config.php");

if(isset($_POST['submit'])){
    $s_name = $_POST['s-name'];
    $s_addr = $_POST['s-address'];
    $s_pcode = $_POST['s-pcode'];
    $s_phone = $_POST['s-phone'];
    $r_name = $_POST['r-name'];
    $r_addr = $_POST['r-address'];
    $r_pcode = $_POST['r-pcode'];
    $r_phone = $_POST['r-phone'];
    $item_type = $_POST['item-type'];
    $item_qty = $_POST['item-qty'];
    $ship_type = $_POST['ship-type'];
    $tgl = date('d');
    $bln = date('M');
    $thn = date('Y');

    $query_s = pg_query("INSERT INTO customers (name,address,pcode,phone_number) VALUES('$s_name','$s_addr', '$s_pcode', '$s_phone')");
    $s_id = pg_fetch_result(pg_query("SELECT count(*) from customers"), "count");
    $query_r = pg_query("INSERT INTO customers (name,address,pcode,phone_number) VALUES('$r_name','$r_addr', '$r_pcode', '$r_phone')");
    $r_id = pg_fetch_result(pg_query("SELECT count(*) from customers"), "count");
    $query_o = pg_query("INSERT INTO orders (sender_id,recipient_id,item_type,item_qty,order_date,shipment_type) VALUES($s_id,$r_id,'$item_type',$item_qty,'$tgl-$bln-$thn','$ship_type')");
    $o_id = pg_fetch_result(pg_query("SELECT count(*) from orders"), "count");
    $query_sh = pg_query("SELECT add_ship($o_id,'$tgl-$bln-$thn')");
    
    if($query_o && $query_r && $query_s){
        header('Location: shipment.php');
    } else{
        die("GAGAL GAN");
    }
} else {
    die("GAGAL GAN");
}

?>