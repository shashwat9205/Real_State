<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real Estate</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" href="./assest/css/style.css">
</head>

<body>

  <?php include "./assest/components/header.php"; ?>


  <section class="property-banner d-flex align-items-center">

    <div class="container text-white p-5">
      <h1>Property</h1>

      <div class="pagination">
        <a href="index.php" class=" text-light text-decoration-none">Home > </a>
        <p> Property</p>

      </div>
    </div>
  </section>



 <!-- search bar  -->

 



  <!-- property-listings  -->
  <section class="property-listing py-5">
    <div class="container">

      <?php
      include 'admin/config.php';
      $select = mysqli_query($conn, "SELECT * FROM `property`");
      while ($row = mysqli_fetch_assoc($select)) {
      ?>
        <!-- PROPERTY 1 -->
        <div class="property-item mb-5">
          <div class="row align-items-center">

            <!-- Left Image -->
            <div class="col-lg-4">
              <img src="admin/<?= $row['image']; ?>" class="img-fluid property-img">
            </div>

            <!-- Right Content -->
            <div class="col-lg-8">
              <div class="property-content">

                <h3>
                  <a href="property-details.html" class="property-title">
                    <?= $row['title']; ?>
                  </a>
                </h3>

                <p class="location">Miami, Florida</p>

                <p class="description">
                  <?= $row['description']; ?>
                </p>

                <div class="property-info row mt-3">
                  <div class="col-md-3">🏠 <?= $row['sq_fit']; ?> sq ft</div>
                  <div class="col-md-3">🛏 <?= $row['rooms'] ?> Bedrooms</div>
                  <div class="col-md-3">🛁 <?= $row['bathroom']; ?> Bathrooms</div>
                  <div class="col-md-3">🚗 <?= $row['garage']; ?> Garage</div>
                </div>

                <div class="mt-3">
                  <a href="property-details.html" class="btn btn-primary">
                    View Details
                  </a>
                </div>

              </div>
            </div>

          </div>
        </div>
      <?php } ?>

    </div>
  </section>



  <!-- property -->




























  <?php include "./assest/components/footer.php"; ?>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>