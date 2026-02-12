<?php

include 'config.php';

if (isset($_POST['upload_property'])) {

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

    $img_loc  = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des  = "uploadimage/" . $img_name;

    move_uploaded_file($img_loc, $img_des);
    print_r("image location");

    mysqli_query(
        $conn,
        "INSERT INTO property
        (featured1,featured2,title,para,description,sq_fit,rooms,year,bathroom,garage,slug, image)
        VALUES
        ('$FEATURED1','$FEATURED2','$TITLE','$PARA','$DESCRIPTION','$SQ_FIT','$ROOMS','$YEAR','$BATHROOM','$GARAGE','$SLUG' ,'$img_des')"
    );

    header('location:../admin/Dashboard.php');
}
