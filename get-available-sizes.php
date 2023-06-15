<?php

require_once 'conn.php';
if (!isset($_GET['p_id']) || !isset($_GET['color'])) {
    exit;
}

$p_id = $_GET['p_id'];
$color = trim($_GET['color']);
$available_sizes = get_rows($conn->query("SELECT  quantity,  size,color,id  from products_sub_categories   where  p_id='$p_id' and color='$color' order by id asc  "));


foreach ($available_sizes as $i => $j) { ?>

    <div style="cursor:pointer" class="border py-0  px-2  m-1 ">
        <label style="cursor:pointer" for="<?php echo $i . 'cw' ?>" class="align-middle pe-2"><?php echo $j->size; ?></label><input <?php if ($i == 0) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?> style="cursor:pointer" class=" align-middle" type="radio" value="<?php echo $j->size; ?>" name="size" id="<?php echo $i . 'cw' ?>">
        <p class="mb-0 text-center p-1 border-top"><?php echo $j->quantity ?> left</p>
    </div>

<?php  } ?>