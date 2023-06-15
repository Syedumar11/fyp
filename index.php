<?php


require_once 'include.php';

$order_id_err = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $order_id = $_POST['order_id'];
  $method = "";
  $payment_id = "";
  $name = '';
  $valid = true;
  $check_order_id = $conn->query("SELECT `status`,`payment_method`,payment_id,name from orders where id='$order_id'");

  $res = $check_order_id->fetch_assoc();

  if ($check_order_id->num_rows < 1) {
    $valid = false;
    $order_id_err = "order doesn't exist.";
  } else {

    $status = $res['status'];
    $method = $res['payment_method'];
    $payment_id = $res['payment_id'];
    $name = $res['name'];
    if ($status == 'delivered') {
      $valid = false;

      $order_id_err = "this order has already been added to delivered.";
    } else if ($status == 'cancelled') {
      $valid = false;

      $order_id_err = "this order has been cancelled.";
    }
  }


  if ($valid) {
    if ($method == 'cod') {
      $amount = $conn->query("SELECT orders.*,sum(products.price*order_items.quantity)+orders.shipping_cost as total FROM ((`order_items` inner join `products` on order_items.p_id=products.id) INNER join `orders` on order_items.o_id=orders.id) where orders.id='$order_id' ")->fetch_assoc()['total'];


      $payment_id = "cod" . time();

      $conn->query("INSERT INTO payments(payment_id,received_from,received_by,amount,currency,date_time) values('$payment_id','$name','" . $rider['name'] . "','$amount','pkr',now())");
    }
    $conn->query("UPDATE `orders` set `payment_id`='$payment_id',`status`='delivered',`delivered_on`=now(),rider_id='" . $rider['id'] . "' where id='$order_id' ");
    echo "<script>alert('Order has been added to delivered.');window.location.href='index.php'</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>e_florist</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-5.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
</head>

<body>
    <?php include_once "sidebar.php" ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container ">

                <div class="my-3 bg-light shadow p-4 ">

                    <h1 class=" p-3  my-3">Add Delivery <i class="fas fa-tachometer-alt"></i></h1>


                    <form class="row my-4 shadow border mx-auto p-3" style='max-width:630px' method="post"
                        action="index.php">




                        <div class=" col-md-6 mt-4">
                            <label for="" class="form-label fw-bold ">Enter Order Id</label>
                            <input required name="order_id" value="" type="text" class="form-control rounded-0" />

                            <p class="text-danger" style="font-size: 13px;"><?php echo $order_id_err;
                                                              ?></p>
                        </div>









                        <div class=" text-end">


                            <hr class="my-5 mx-auto"
                                style=" height: 4px; background-color: var(--main-color); opacity: 1;" />
                            <button class="btn btn-1 px-4" name="delivered_btn" id="con">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>


    <script>
    let prevent = true;
    $("form[method='post']").submit(function(e) {
        if (prevent) {
            e.preventDefault();

            const form = $(this);
            const orderId = $("input[name='order_id']").val();
            console.log(orderId)
            $.get('check_method.php?id=' + orderId, function(res) {
                console.log(res);
                if (res == 'cod') {
                    if (confirm("It is a cod order, click OK if you have received the payment!")) {

                        prevent = false;
                        form.submit();
                    }
                } else {
                    prevent = false;
                    form.submit();
                }
            });
        }
    });
    // remove item from table end
    $("#con").click(function(e) {
        if (!confirm("Are you sure you want to delivered!")) {
            e.preventDefault();
        }
    })
    </script>




</body>

</html>