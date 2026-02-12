<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <?php
    include 'config.php';
    $id = $_GET['id'];
    $Record = mysqli_query($conn, "SELECT * FROM `property` WHERE id = $id");
    $data = mysqli_fetch_array($Record);
    ?>

    <section>

        <div class="admin-main">
            <h1>Property Update</h1>
            <form action="update1.php" method="post" enctype="multipart/form-data">
                <div class="All-box" style="display: flex;">
                    <div class="All-1">
                        <label for="">Features1</label>
                        <input type="text" name="featured1" value="<?php echo $data['featured1']; ?>" placeholder="Enter Featured 1"> <br><br>

                        <label for="">Features2</label>
                        <input type="text" name="featured2" value="<?php echo $data['featured2']; ?>" placeholder="Enter Featured 2"> <br><br>

                        <label for="">Title</label>
                        <input type="text" name="title" value="<?php echo $data['title']; ?>" placeholder="Enter Heading"> <br><br>

                        <label for="">Para</label>
                        <input type="text" name="para" value="<?php echo $data['para']; ?>" placeholder="Enter Para"> <br><br>

                        <label for="">Description</label>
                        <input type="text" name="description" value="<?php echo $data['description']; ?>" placeholder="Enter description"> <br><br>

                        <label for="">SQ-Ft</label>
                        <input type="text" name="sq_fit" value="<?php echo $data['sq_fit']; ?>" placeholder="Enter SQ-Ft"> <br><br>

                    </div>
                    <div class="All-2">
                        <label for="">Total Rooms</label>
                        <input type="text" name="rooms" value="<?php echo $data['rooms']; ?>" placeholder="Enter Total Rooms"> <br><br>

                        <label for="">Established Year</label>
                        <input type="text" name="year" value="<?php echo $data['year']; ?>" placeholder="Enter Established Year"> <br><br>

                        <label for="">Bathroom Year</label>
                        <input type="text" name="bathroom" value="<?php echo $data['bathroom']; ?>" placeholder="Enter SQ-Ft"> <br><br>

                        <label for="">Garage</label>
                        <input type="text" name="garage" value="<?php echo $data['garage']; ?>" placeholder="Enter Garage"> <br><br>

                        <label for="">Slug</label>
                        <input type="text" name="slug" value="<?php echo $data['slug']; ?>" placeholder="Enter Slug"> <br><br>

                        <label for="image">Image :</label>
                        <input type="file" name="image" value="<?php echo $data['image'] ?>" required>
                        <img src="<?php echo $data['image'] ?>" alt="" height="200" width="250"><br><br>

                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

                        <button type="submit" name="update_property" class="btn btn-danger">Update</button>
                    </div>
                </div>


            </form>
        </div>
    </section>

</body>

</html>