<?php


require_once 'include.php';

$table = $conn->query("SELECT a.id,a.title,a.price,a.featured,a.hot,a.discount, sum(b.quantity) as quantity  FROM `products` as a  left JOIN products_sub_categories as b on a.id=b.p_id GROUP BY a.id,a.title,a.price,a.featured,a.hot,a.discount order by id desc");

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
                <h1 class="mb-4 ">Manage Products <a href="add_product.php" class='btn btn-success btn-sm fs-6'><i class="fas fa-plus-circle"></i> New</a></h1>
                <p>Semester: 5</p>
                <div class="table-responsive">
                    <table id="myTable" class="
                table table-bordered
                border-secondary border-3
                text-center
                shadow
              " style="min-width: 500px">
                        <thead class="
                  border-bottom border-dark border-2
                  bg-secondary
                  text-light
                ">
                            <tr>
                                <th scope="col">Sr.</th>
                                <th scope="col">tital</th>
                                <th scope="col">price</th>
                                <th scope="col">featured</th>
                                <th scope="col">hot</th>
                                <th scope="col">quantity</th>
                                <th scope="col">discount</th>
                                <th scope="col">Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($table  as $ind =>  $product) {
                            ?>
                                <tr>
                                    <td scope="col"><?php echo $ind + 1; ?></td>
                                    <td scope="col"><?php echo $product['title']; ?></td>
                                    <td scope="col">Rs:<?php echo $product['price']; ?></td>
                                    <td scope="col"><?php echo $product['featured']; ?></td>
                                    <td scope="col"><?php echo $product['hot']; ?></td>
                                    <td scope="col"><?php echo $product['quantity'] ? $product['quantity'] : 0; ?></td>
                                    <td scope="col"><?php echo $product['discount']; ?>%</td>
                                    <td>

                                        <a class="btn  me-3" style=" color: #0da45e;background: #e8e8e8;" href="ratings.php?id=<?php echo $product['id']; ?>"> <i class="fas fa-smile"></i> Rating & Reviews</a>
                                        <a class="btn btn-warning me-3" href="edit_product.php?id=<?php echo $product['id']; ?>"> Open</a>

                                        <a title="delete" class="btn btn-danger" href="del_product.php?id=<?php echo $product['id']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
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

    <script>
        $("[title='delete']").click(function(e) {

            if (!confirm("deleting this product may delete it from other places like orders,carts etc!")) {
                e.preventDefault();

            }
        });
    </script>
</body>

</html>