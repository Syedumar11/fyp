<?php


require_once 'include.php';

$table = $conn->query("SELECT bookings.*,users.name,payments.amount as total from (bookings inner join users on bookings.u_id= users.id ) left join payments on bookings.payment_id=payments.payment_id");




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
    <?php include_once "sidebar.php"
    ?>
    <!-- main -->
    <section class="main">
        <div>
            <div class="container py-4 p-md-5 bg-light">
                <h1 class="mb-4 ">Manage Bookings </h1>

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

                                <th scope="col" style="width: 90px;">Booking Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Event</th>
                                <th scope="col">Total</th>
                                <th width="120px" scope="col">Date/Time</th>
                                <th width="100px" scope="col">Phone</th>
                                <th scope="col" style="width: 200px;">Address</th>
                                <th scope="col">payment_id</th>

                                <th width="110px" scope="col">Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($table  as $ind =>  $booking) {
                                $booking_event = $booking['event_id'];
                                $event = $conn->query("SELECT * from events where id='$booking_event'")->fetch_assoc();
                            ?>
                                <tr>
                                    <td scope="col"><?php echo $ind + 1; ?></td>
                                    <td scope="col"><?php echo $booking['id']; ?></td>
                                    <td scope="col"><?php echo $booking['name']; ?></td>
                                    <td scope="col"><a href="edit_event.php?id=<?php echo $booking_event; ?>">
                                            <?php echo $event['title']; ?></a> </td>
                                    <td scope="col">Rs. <?php echo $booking['total']; ?></td>

                                    <td scope="col"><?php
                                                    $t_d = date('h:i A', strtotime($booking['date_time']));
                                                    $d_d = date('Y-m-d', strtotime($booking['date_time']));
                                                    echo $d_d . " <br/>" . $t_d;
                                                    ?></td>

                                    <td scope="col"><?php echo $booking['phone']; ?></td>
                                    <td scope="col"><?php echo $booking['address']; ?></td>
                                    <td scope="col"><?php echo $booking['payment_id']; ?></td>

                                    <td>


                                        <a title="delete" class="btn btn-danger" href="del_booking.php?id=<?php echo $booking['id']; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>


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