<?php
require_once 'conn.php';

if (isset($_SESSION['u_id'])) {
    $user_id = $_SESSION['u_id'];
    $user_name = $conn->query("select name from users where id='$user_id'")->fetch_assoc()['name'];
    $p_id = $_POST['p_id'];
    $comment = $_POST['comment'];

    $conn->query("INSERT into comments(u_id,p_id,comment) values('$user_id','$p_id','$comment')");
    $c_id = $conn->insert_id;

?>

    <div>
        <a data-id="<?php echo $c_id ?>" title="delete comment" class="del-comment float-end">delete</a>
        <h6 class="fw-bold"> <img src="images/user.png" style="width: 30px;" class="rounded-cicle" alt=""> <?php echo $user_name; ?></h6>

        <p><?php echo $comment ?></p>
    </div>
<?php
} else {
    echo 'loginerr';
}
