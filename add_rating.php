<?php
require_once 'conn.php';

if (isset($_SESSION['u_id'])) {
    $user_id = $_SESSION['u_id'];
    $p_id = $_GET['p_id'];
    $rate = $_GET['rate'];

    $res = $conn->query("select id from ratings where u_id='$user_id' and p_id='$p_id'");


    if ($res->num_rows == 0) {
        $conn->query("INSERT into ratings(u_id,p_id,rate) values('$user_id','$p_id','$rate')");
    } else {
        $conn->query("Update  ratings set rate='$rate' where u_id='$user_id' and p_id='$p_id'");
    }

    $totalRating = round($conn->query("SELECT  avg(rate) as rating FROM `ratings` where p_id='$p_id'")->fetch_assoc()['rating']);
?>


    <h4>
        <?php
        for ($i = 1; $i <= 5; $i++) { ?> <i class="<?php echo $i <= round($totalRating) ? 'text-warning' : ''; ?> fa fa-star " aria-hidden="true"></i>
        <?php } ?>
        </i>
    </h4>
    <h6 class="font-weight-bold ">Total Rating : <?php echo $totalRating; ?></h6>
<?php
} else {
    echo 'loginerr';
}
