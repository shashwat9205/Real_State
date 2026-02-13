<?php
include("db_connect.php");

$query = "SELECT * FROM properties ORDER BY id DESC LIMIT 4";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real Estate</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" href="./assest/css/style.css">
</head>

<body>


  <!-- header  -->

  <?php include "./assest/components/header.php"; ?>



  <!-- hero-section  -->

  <section class="hero-section d-flex align-items-center">
    <div class="container text-center text-white">
      <h1 class="display-4 fw-bold mb-4">Your Trusted Partner in</h1>
      <h2 class="mb-3 text-uppercase">Premium Real Estate</h2>

      <div class="productss">
        <span>Residential</span>   |
        <span>Commercial</span>   |
        <span>Luxury Villas</span>   |
        <span>Plots</span>


      </div>
      
      

    </div>


  </section>


  <!-- featured -->
   <section class="featured-section py-5 px-5">
    <div class="containerr">


      <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="fw-bold">Featured Properties</h1>
        <div class=" text-primary fw-semibold">
          🏠 1,300+ AVAILABLE PROPERTIES
        </div>
      </div>

      <div class="row g-3">
        <?php
        include 'admin/config.php';
        $select = mysqli_query($conn, "SELECT * FROM `property`");
        while ($row = mysqli_fetch_assoc($select)) {
        ?>

          <div class="col-lg-3 col-md-6">
            <div class="card property-card2 h-100">

              <div class="property-img2">
                <img src="admin/<?= $row['image']; ?>" class="card-img-top" alt="property2">

                <span class="badge bg-success badge-featured"><?= $row['featured1']; ?></span>
                <span class="badge bg-danger badge-status"><?= $row['featured2']; ?></span>
              </div>

              <div class="card-body">


                <h6 class="fw-bold">
                  <a href="property-details.html" class="property-link2">
                    <?= $row['title'] ?>
                  </a>
                </h6>

                <p class="text-muted small mb-3"><?= $row['para']; ?></p>

                <div class="property-info2 d-flex justify-content-between small text-muted">
                  <span>🏢 <?= $row['sq_fit']; ?> sq ft</span>
                  <span>🛏 <?= $row['rooms']; ?> Rooms</span>
                  <span>📅 <?= $row['year'] ?></span>
                </div>

              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </section>




  <!-- sold-section  -->


<section class="recent-section py-5">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-5">
      <h2 class="fw-bold">Recent Properties for Sale</h2>
      <a href="property.php" class="section-link">ALL PROPERTIES FOR SALE</a>
    </div>

    <div class="row g-4">


    <?php
        include 'admin/config.php';
        $select = mysqli_query($conn, "SELECT * FROM `properties`");
        while ($row = mysqli_fetch_assoc($select)) {
        ?>
    

      
      <div class="col-lg-3 col-md-6">
        <div class="recent-card">

          <div class="recent-img">
            <img src="admin/<?= $row['image']; ?>" class="card-img-top" alt="property2">
            <span class="badge bg-success badge-featured"><?= $row['feature']; ?></span>
          </div>

          <div class="recent-body">
            <h6>
              <a href="property-details.html" class="property-link2">
                    <?= $row['title'] ?>
                  </a>
            </h6>

            <div class="property-icons2">
              <span>🛏 <?= $row['rooms']; ?></span>
              <span>🛁 <?= $row['baths']; ?></span>
              <span>📅 <?= $row['yearEST']; ?></span>
              <span>🚗 <?= $row['garage']; ?></span>
            </div>
          </div>

        </div>
      </div>

     
     

<?php } ?>
    </div>
  </div>
</section>



  <!-- rent-section   -->



<!-- looking -->


<section class="cta-section">

  <div class="container">
    <div class="row justify-content-center">

     
      <div class="col-lg-5 col-md-6 mb-4">
        <div class="cta-box">
          <div class="cta-icon">
            🏠
          </div>
          <h4>Looking for the new home?</h4>
          <p>
            10 new offers every day. 350 offers on site,
            trusted by a community of thousands of users.
          </p>
        </div>
      </div>

      
      <div class="col-lg-5 col-md-6 mb-4">
        <div class="cta-box">
          <div class="cta-icon">
            💰
          </div>
          <h4>Want to sell your home?</h4>
          <p>
            10 new offers every day. 350 offers on site,
            trusted by a community of thousands of users.
          </p>
        </div>
      </div>

    </div>
  </div>

</section>




<!-- cities  -->


<section class="cities-section py-5">
  <div class="container">

    <h2 class="fw-bold mb-5">Properties by Cities</h2>

    
    <div class="row g-4 mb-4">

      <div class="col-lg-6">
        <div class="city-card large">
          <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee" alt="">
          <div class="city-overlay">
            <h4>Los Angeles</h4>
            <p>12 PROPERTIES</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="city-card large">
          <img src="https://images.unsplash.com/photo-1508057198894-247b23fe5ade" alt="">
          <div class="city-overlay">
            <h4>Philadelphia</h4>
            <p>14 PROPERTIES</p>
          </div>
        </div>
      </div>

    </div>

    
    <div class="row g-4">

      <div class="col-lg-4 col-md-6">
        <div class="city-card">
          <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d" alt="">
          <div class="city-overlay">
            <h4>Las Vegas</h4>
            <p>9 PROPERTIES</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="city-card">
          <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29" alt="">
          <div class="city-overlay">
            <h4>San Francisco</h4>
            <p>28 PROPERTIES</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="city-card">
          <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429" alt="">
          <div class="city-overlay">
            <h4>Sacramento</h4>
            <p>7 PROPERTIES</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>





<!-- why-choose  -->

<section class="why-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="why-title">Why Choose Us</h2>
      <div class="divider"></div>
    </div>

    <div class="row text-center">

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="why-box">
      <div class="why-icon">
        <i class="bi bi-award-fill"></i>
      </div>
      <h4>Trusted by HNI & Premium Clients</h4>
      <p>
        We have built long-term relationships with high-value clients
        through transparency and consistent results.
      </p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="why-box">
      <div class="why-icon">
        <i class="bi bi-shield-check"></i>
      </div>
      <h4>Transparent Deals & Legal Assistance</h4>
      <p>
        Every transaction is handled with complete clarity,
        backed by expert legal support.
      </p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="why-box">
      <div class="why-icon">
        <i class="bi bi-building"></i>
      </div>
      <h4>World-Class Design & Modern Amenities</h4>
      <p>
        Our properties feature premium architecture,
        smart layouts and luxury amenities.
      </p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="why-box">
      <div class="why-icon">
        <i class="bi bi-person-check-fill"></i>
      </div>
      <h4>Personalized Services for Every Client</h4>
      <p>
        We tailor our services to meet your unique needs
        and investment goals.
      </p>
    </div>
  </div>

</div>
</section>





<section class="partners-section py-5">
  <div class="container text-center">

    <h2 class="fw-bold mb-5">Our Partners</h2>

    <div class="row align-items-center justify-content-center g-4">

      <div class="col-6 col-md-3">
        <img src="./assest/images/partner1.png" class="partner-logo" alt="Partner 1">
      </div>

      <div class="col-6 col-md-3">
        <img src="./assest/images/partner2.png" class="partner-logo" alt="Partner 2">
      </div>

      <div class="col-6 col-md-3">
        <img src="./assest/images/partner3.png" class="partner-logo" alt="Partner 3">
      </div>

      <div class="col-6 col-md-3">
        <img src="./assest/images/partner4.png" class="partner-logo" alt="Partner 4">
      </div>

    </div>

  </div>
</section>




<?php include "./assest/components/footer.php"; ?> 



































  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


  <script src="script.js"></script>

</body>

</html>