<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['email'])) {
    header("Location: ../admin/index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color: #fff;">
    <!-- <div class="box">
        <h1>Welcome, <span><?= $_SESSION['name'] ?></span></h1>
        <p>This is an <span>admin</span> page</p>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div> -->

    <section>
        <div class="admin-main">
            <h1>Propert ADD</h1>
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="All-box" style="display: flex;">
                    <div class="All-1" style="margin-right: 100px;">
                        <label for="para">Features1 : </label>
                        <input type="text" name="featured1" placeholder="Enter Features 1"> <br><br>

                        <label for="para">Features1 : </label>
                        <input type="text" name="featured2" placeholder="Enter Features 2"> <br><br>

                        <label for="para">Title : </label>
                        <input type="text" name="title" placeholder="Enter Title"> <br><br>

                        <label for="para">Para : </label>
                        <input type="text" name="para" placeholder="Enter Para"> <br><br>

                        <label for="para">Description : </label>
                        <input type="text" name="description" placeholder="Enter Description"> <br><br>

                        <label for="">SQ-Ft</label>
                        <input type="text" name="sq_fit" placeholder="Enter SQ-Ft"> <br><br>

                    </div>
                    <div class="All-2">
                        <label for="">Total Rooms :</label>
                        <input type="text" name="rooms" placeholder="Enter Total Rooms"> <br><br>

                        <label for="">Established Year :</label>
                        <input type="text" name="year" placeholder="Enter Established Year"> <br><br>

                        <label for="">Bathroom Available :</label>
                        <input type="text" name="bathroom" placeholder="Enter bathroom Number"> <br><br>

                        <label for="">Garage :</label>
                        <input type="text" name="garage" placeholder="Enter Number of Garage"> <br><br>

                        <label for="">Slug :</label>
                        <input type="text" name="slug" placeholder="Enter Slug Link"> <br><br>

                        <label for="image">Image :</label>
                        <input type="file" name="image"> <br><br>

                        <button type="submit" name="upload_property" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- ----------Fetch Data ------------------- -->

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Features1</th>
                <th scope="col">Features2</th>
                <th scope="col">Title</th>
                <th scope="col">Para</th>
                <th scope="col">Description</th>
                <th scope="col">SQ-Ft</th>
                <th scope="col">Rooms</th>
                <th scope="col">Year</th>
                <th scope="col">Bathroom</th>
                <th scope="col">Garage</th>
                <th scope="col">Slug</th>
                <th scope="col">Image</th>

                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';

            $pic = mysqli_query($conn, "SELECT * FROM `property`");

            while ($row = mysqli_fetch_assoc($pic)) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['featured1']}</td>
                    <td>{$row['featured2']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['para']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['sq_fit']}</td>
                    <td>{$row['rooms']}</td>
                    <td>{$row['year']}</td>
                    <td>{$row['bathroom']}</td>
                    <td>{$row['garage']}</td>
                    <td>{$row['slug']}</td>
                    <td><img src='{$row['image']}' height='100' width='100'></td>

                    <td><a href='delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>
                    <td><a href='update.php?id={$row['id']}' class='btn btn-primary'>Update</a></td>
                </tr>
                ";
            }
            ?>

        </tbody>
    </table>
</body>

</html>