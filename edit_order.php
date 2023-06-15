<?php

require_once 'include.php';


if (!isset($_GET['id'])) {
    header('location:orders.php');
}

$order_id = $_GET['id'];
$order = $conn->query("SELECT * from orders where id='$order_id'")->fetch_assoc();

$cart_data = $conn->query("SELECT order_items.id as order_item_id, order_items.*,products.*,order_items.quantity as quantity FROM `order_items` inner join `products` on order_items.p_id=products.id where order_items.o_id='$order_id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E Florist</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-5.css">
    <link rel="stylesheet" href="assets/css/datatable.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/modal-styles.css">
    <style>
        tr {
            cursor: pointer;

        }

        .order-images {
            transition: .3s;
        }

        .order-images:hover {
            transform: translate(3px, 3px);
        }

        .modal2 {
            z-index: 32424;
            background-color: rgb(0 0 0 / 60%);
            padding: 50px;
        }

        .close {
            top: 0;
        }

        .modal-content2 {
            width: 100%;
            max-width: 1200px;
            height: unset;
            max-height: 100%;
            object-fit: contain;
        }
    </style>

</head>

<body>
    <!-- start of model for showing uploaded images -->


    <div id="myModal" class="modal2">
        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content2" id="img01">
        <!-- Modal Caption (Image Text) -->
        <div id="caption">
            <h1 style="font-family:Arial, Helvetica, sans-serif;font-size:20px; font-weight:normal"></h1>
        </div>

    </div>
    <!-- end of model for showing uploaded images -->

    <?php include_once "sidebar.php"
    ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container py-4 p-md-5 bg-light">
                <div class="p-3">
                    <a href="orders.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <h1 class="mb-4 text-center"> <i class='fas fa-plus text-success'></i> Order Info </h1>
                <form class="row my-4 shadow border mx-auto p-3" style='max-width:630px' method="post" action="edit_order.php?id=<?php echo $order_id; ?>">
                    <?php
                    $u_name = $conn->query("select name,email from users where id='" . $order['u_id'] . "'")->fetch_assoc();
                    ?>
                    <div class="  mt-4">
                        <label for="" class="form-label fw-bold">Order placed by</label>
                        <p class="my-2">Name: <?php echo $u_name['name']; ?></p>
                        <p>Email: <?php echo $u_name['email']; ?></p>
                    </div>
                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Name</label>
                        <input readonly required name="name" value="<?php echo $order['name'] ?>" type="text" class="form-control rounded-0" />
                    </div>

                    <div class=" col-md-6 mt-4">
                        <label for="" class="form-label fw-bold">Phone</label>
                        <input readonly required name="phone" value="<?php echo $order['phone'] ?>" type="text" class="form-control rounded-0" />
                    </div>
                    <div class="  mt-4">
                        <label for="" class="form-label fw-bold">Address</label>
                        <textarea readonly required name="address" class="form-control rounded-0"><?php echo $order['address'] ?></textarea>
                    </div>

                    <div class="  mt-4 row">
                        <label for="" class="form-label fw-bold">Placed on</label>
                        <div class="col-6">
                            <label>Date</label>
                            <input readonly required name="placing_date" value="<?php echo date('Y-m-d', strtotime($order['placed_on'])) ?>" type="date" class="form-control rounded-0" />
                        </div>
                        <div class="col-6">

                            <label>Time</label>
                            <input readonly required name="placing_time" value="<?php echo date('H:i', strtotime($order['placed_on'])) ?>" type="time" class="form-control rounded-0" />
                        </div>
                    </div>
                    <?php if ($order['status'] == 'delivered') { ?>
                        <div class="  mt-4 row">
                            <label for="" class="form-label fw-bold">Delivered on</label>
                            <div class="col-6">
                                <label>Date</label>
                                <input readonly required name="delivery_date" value="<?php echo date('Y-m-d', strtotime($order['delivered_on'])) ?>" type="date" class="form-control rounded-0" />
                            </div>
                            <div class="col-6">

                                <label>Time</label>
                                <input readonly required name="delivery_time" value="<?php echo date('H:i', strtotime($order['delivered_on'])) ?>" type="time" class="form-control rounded-0" />
                            </div>
                        </div>
                    <?php } ?>


                    <div class=" col-md-4 mt-4">
                        <label for="" class="form-label fw-bold">Status:<br> <?php echo $order['status']; ?></label>

                    </div>
                    <div class=" col-md-4 mt-4">
                        <label for="" class="form-label fw-bold">Shipping cost: <br> Rs. <?php echo $order['shipping_cost']; ?></label>

                    </div>
                    <div class=" col-md-4 mt-4">
                        <label for="" class="form-label fw-bold">Payment Method: <br> <?php echo $order['payment_method']; ?></label>

                    </div>

                    <div class=" text-end">
                        <hr class="my-5 mx-auto" style=" height: 4px; background-color: var(--main-color); opacity: 1;" />
                        <button class="btn btn-1 px-4 d-none" name="edit_order">Update</button>
                    </div>





                </form>

                <div class="bg-light shadow mx-auto p-3 mb-3">
                    <h5 class=" text-muted py-2 ">Order Items</h5>

                    <div class="container my-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="table-content table-responsive wishlist ">
                                    <table class="mx-auto w-100" style="min-width: 900px;">
                                        <thead class="bg-light ">
                                            <tr>
                                                <th class="p-4">images</th>
                                                <th class="p-4">Product Name</th>
                                                <th class="p-4">Until Price</th>
                                                <th class="p-4">Qty</th>
                                                <th class="p-4">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $total_cost = 0;
                                            $temp_data = array();
                                            foreach ($cart_data as $cart) {

                                                $p_id = $cart['p_id'];
                                                $image = $conn->query("select * from products_images where p_id='$p_id'")->fetch_assoc()['image'];

                                                $sub_total = $cart['quantity'] * $cart['price'];

                                                array_push($temp_data, array('id' => $cart['order_item_id'], 'price' => $cart['price'], 'quantity' => $cart['quantity'], 'sub_total' => $sub_total));

                                                $total_cost = $total_cost + $sub_total;
                                            ?>

                                                <tr id="cart_item<?php echo $cart['order_item_id']; ?>">
                                                    <td class="product-thumbnail ">
                                                        <a href="edit_product.php?id=<?php echo $p_id ?>"><img src="../<?php echo $image; ?>" width="100px" alt=""></a>
                                                    </td>
                                                    <td class="product-name ps-4"><a href="#" style="color: black;"><?php echo $cart['title']; ?>
                                                        </a></td>
                                                    <td class="product-price-cart ps-4"><span class="amount">Rs. <?php echo $cart['price']; ?></span></td>
                                                    <td class="product-quantity ps-4">
                                                        <div class="pro-dec-cart">
                                                            <input readonly data-cart="<?php echo $cart['order_item_id'] ?>" style="max-width: 50px;" class="cart-plus-minus-box quantity-input" type="number" value="<?php echo $cart['quantity']; ?>" name="qtybutton">
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal ps-4">Rs. <span id="sub<?php echo $cart['order_item_id'] ?>"> <?php echo $sub_total; ?></span></td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4  ms-auto" style=" background-color: #ebebeb;">
                                <div class="grand-totall">
                                    <div class="title-wrap p-2 my-4 ">
                                        <h5 class="cart-bottom-title section-bg-gary-cart ">Order Total: Rs. <span id="totalCost"><?php echo $total_cost ?></span></h5>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-3">
                    <a href="orders.php" class="btn btn-sm text-light" style="background-color:var(--main-color)"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>

        </div>


    </section>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>

    <script src="assets/js/jquery.dataTables.js"></script>

    <script src="assets//js/bootstrap-5-datatable.js"></script>

    <script src="assets/js/app.js"></script>

    <script>

    </script>

</body>

</html>