<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("./db_connect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (full_name, email, phone, message) 
            VALUES ('$name', '$email', '$phone', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Enquiry submitted successfully!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
