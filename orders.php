<?php


require_once 'include.php';

$table = $conn->query("SELECT orders.*,sum(products.price*order_items.quantity) as total FROM ((`order_items` inner join `products` on order_items.p_id=products.id) INNER join `orders` on order_items.o_id=orders.id) where rider_id='" . $rider['id'] . "' GROUP by orders.id ");


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>avicinna</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-5.css">
    <link rel="stylesheet" href="assets/css/datatable.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        tr {
            cursor: pointer;

        }
    </style>



</head>

<body>
    <?php include_once "sidebar.php" ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container py-4 p-md-5 bg-light">
                <h1 class="mb-4 ">Manage Orders </h1>

                <div class="table-responsive">
                    <table id="myTable" class="
                table table-bordered
                border-secondary border-3
                text-center
                shadow
              " style="min-width: 1500px">
                        <thead class="
                  border-bottom border-dark border-2
                  bg-secondary
                  text-light
                ">
                            <tr>
                                <th scope="col">Sr.</th>

                                <th scope="col">Order Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Total</th>
                                <th width="120px" scope="col">Status</th>
                                <th width="190px" scope="col">placed</th>
                                <th width="180px" scope="col">delivered</th>
                                <th width="100px" scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">method</th>
                                <th scope="col">payment_id</th>

                                <th width="110px" scope="col">Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($table  as $ind =>  $product) {
                            ?>
                                <tr class=" <?php if ($product['status'] == 'processing') echo 'table-active'; ?>">
                                    <td scope="col"><?php echo $ind + 1; ?></td>
                                    <td scope="col"><?php echo $product['id']; ?></td>
                                    <td scope="col"><?php echo $product['name']; ?></td>
                                    <td scope="col">Rs. <?php echo $product['total']; ?></td>
                                    <td class=" <?php if ($product['status'] != 'processing') echo 'bg-success text-light'; ?>" scope="col">
                                        <span><?php echo $product['status']; ?></span>

                                    </td>
                                    <td scope="col"><?php
                                                    $t_d = date('h:i A', strtotime($product['placed_on']));
                                                    $d_d = date('Y-m-d', strtotime($product['placed_on']));
                                                    echo $d_d . " " . $t_d;
                                                    ?></td>
                                    <td scope="col"><?php if ($product['delivered_on'] != '0000-00-00 00:00:00') {
                                                        $t_d = date('h:i A', strtotime($product['delivered_on']));
                                                        $d_d = date('Y-m-d', strtotime($product['delivered_on']));
                                                        echo $d_d . " " . $t_d;
                                                    } ?></td>
                                    <td scope="col"><?php echo $product['phone']; ?></td>
                                    <td scope="col"><?php echo $product['address']; ?></td>
                                    <td scope="col"><?php echo $product['payment_method']; ?></td>
                                    <td scope="col"><?php echo $product['payment_id']; ?></td>
                                    <td>

                                        <a class="btn btn-warning me-3" href="edit_order.php?id=<?php echo $product['id']; ?>"> Open</a>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
</body>

</html>