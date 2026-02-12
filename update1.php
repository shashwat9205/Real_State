<?php
include 'config.php';

if (isset($_POST['update_property'])) {

    $id    = $_POST['id'];
    $FEATURED1  = $_POST['featured1'];
    $FEATURED2  = $_POST['featured2'];
    $TITLE  = $_POST['title'];
    $PARA  = $_POST['para'];
    $DESCRIPTION  = $_POST['description'];
    $SQ_FIT  = $_POST['sq_fit'];
    $ROOMS  = $_POST['rooms'];
    $YEAR  = $_POST['year'];
    $BATHROOM  = $_POST['bathroom'];
    $GARAGE  = $_POST['garage'];
    $SLUG  = $_POST['slug'];

    // Image upload
    $img_loc  = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];

    if (!empty($img_name)) {
        $img_des = "uploadimage/" . $img_name;
        move_uploaded_file($img_loc, $img_des);
    } else {
        $img_des = $_POST['old_image'];
    }

    $update_query = "
        UPDATE `property`
        SET 
            `featured1` = '$FEATURED1',
            `featured2` = '$FEATURED2',
            `title` = '$TITLE',
            `para` = '$para',
            `description` = '$DESCRIPTION',
            `sq_fit` = '$SQ_FIT',
            `rooms` = '$ROOMS',
            `year` = '$YEAR',
            `bathroom` = '$BATHROOM',
            `garage` = '$GARAGE',
            `slug` = '$SLUG',
            `image` = '$img_des'
        WHERE `id` = $id
    ";

    mysqli_query($conn, $update_query);

    header("Location: Dashboard.php");
}
