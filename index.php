<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Real Estate</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" href="style.css">
</head>

<body>


  <!-- header  -->

  <?php include "./components/header.php"; ?>



  <!-- hero-section  -->

  <section class="hero-section d-flex align-items-center">
    <div class="container text-center text-white">
      <h5 class="mb-3 text-uppercase">The Best Way To</h5>
      <h1 class="display-4 fw-bold mb-4">Find Your Perfect Home</h1>

      <div class="row justify-content-center">
       <div class="col-lg-8 ">
      <div class="hero-search p-3 mt-4 ">
         
        <div class="row g-2">
          <div class="col-lg-3">
            <select class="form-select">
              <option>Apartments</option>
              <option>Villa</option>
              <option>House</option>
            </select>
          </div>

          <div class="col-lg-6">
            <input type="text" class="form-control" placeholder="Search location...">
          </div>

          <div class="col-lg-3">
            <button class="btn btn-primary w-100">Search</button>
          </div>
        </div>

      </div>
      </div>
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


        <div class="col-lg-3 col-md-6">
          <div class="card property-card h-100">

            <div class="property-img">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="card-img-top" alt="property">

              <span class="badge bg-success badge-featured">FEATURED</span>
              <span class="badge bg-danger badge-status">SOLD</span>
            </div>

            <div class="card-body">


              <h6 class="fw-bold">
                <a href="property-details.html" class="property-link">
                  8480 Sulphur Springs Drive
                </a>
              </h6>

              <p class="text-muted small mb-3">Brooklyn, NY 11234</p>

              <div class="property-info d-flex justify-content-between small text-muted">
                <span>🏢 3030 sq ft</span>
                <span>🛏 8 Rooms</span>
                <span>📅 2016</span>
              </div>

            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6">
          <div class="card property-card h-100">

            <div class="property-img">
              <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994" class="card-img-top" alt="property">

              <span class="badge bg-success badge-featured">FEATURED</span>
              <span class="badge bg-warning text-dark badge-status">RENT</span>
            </div>

            <div class="card-body">

              <h6 class="fw-bold">
                <a href="property-details.html" class="property-link">
                  764 W. Manor Station Drive
                </a>
              </h6>

              <p class="text-muted small mb-3">Elmhurst, NY 11370</p>

              <div class="property-info d-flex justify-content-between small text-muted">
                <span>🏢 3445 sq ft</span>
                <span>🛏 4 Rooms</span>
                <span>📅 2008</span>
              </div>

            </div>
          </div>
        </div>



        <div class="col-lg-3 col-md-6">
          <div class="card property-card h-100">

            <div class="property-img">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="card-img-top" alt="property">

              <span class="badge bg-success badge-featured">FEATURED</span>
              <span class="badge bg-danger badge-status">SOLD</span>
            </div>

            <div class="card-body">


              <h6 class="fw-bold">
                <a href="property-details.html" class="property-link">
                  8480 Sulphur Springs Drive
                </a>
              </h6>

              <p class="text-muted small mb-3">Brooklyn, NY 11234</p>

              <div class="property-info d-flex justify-content-between small text-muted">
                <span>🏢 3030 sq ft</span>
                <span>🛏 8 Rooms</span>
                <span>📅 2016</span>
              </div>

            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6">
          <div class="card property-card h-100">

            <div class="property-img">
              <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994" class="card-img-top" alt="property">

              <span class="badge bg-success badge-featured">FEATURED</span>
              <span class="badge bg-warning text-dark badge-status">RENT</span>
            </div>

            <div class="card-body">

              <h6 class="fw-bold">
                <a href="property-details.html" class="property-link">
                  764 W. Manor Station Drive
                </a>
              </h6>

              <p class="text-muted small mb-3">Elmhurst, NY 11370</p>

              <div class="property-info d-flex justify-content-between small text-muted">
                <span>🏢 3445 sq ft</span>
                <span>🛏 4 Rooms</span>
                <span>📅 2008</span>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>




  <!-- sold-section  -->


<section class="recent-section py-5">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-5">
      <h2 class="fw-bold">Recent Properties for Sold</h2>
      <a href="#" class="section-link">ALL PROPERTIES FOR SOLD</a>
    </div>

    <div class="row g-4">

      
      <div class="col-lg-3 col-md-6">
        <div class="recent-card">

          <div class="recent-img">
            <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994" alt="">
            <span class="badge bg-danger status-badge">SOLD</span>
          </div>

          <div class="recent-body">
            <h6>
              <a href="property-details.html" class="property-link">
                Villa called Archangel
              </a>
            </h6>

            <div class="property-icons">
              <span>🛏 3</span>
              <span>🛁 1</span>
              <span>📅 2019</span>
              <span>🚗 1</span>
            </div>
          </div>

        </div>
      </div>

     
      <div class="col-lg-3 col-md-6">
        <div class="recent-card">
          <div class="recent-img">
            <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d">
            <span class="badge bg-danger status-badge">SOLD</span>
          </div>
          <div class="recent-body">
            <h6>
              <a href="property-details.html" class="property-link">
                House on the Hollywood
              </a>
            </h6>
            <div class="property-icons">
              <span>🛏 3</span>
              <span>🛁 2</span>
              <span>📅 2017</span>
              <span>🚗 1</span>
            </div>
          </div>
        </div>
      </div>

     

      <div class="col-lg-3 col-md-6">
        <div class="recent-card">

          <div class="recent-img">
            <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994" alt="">
            <span class="badge bg-danger status-badge">SOLD</span>
          </div>

          <div class="recent-body">
            <h6>
              <a href="property-details.html" class="property-link">
                Villa called Archangel
              </a>
            </h6>

            <div class="property-icons">
              <span>🛏 3</span>
              <span>🛁 1</span>
              <span>📅 2019</span>
              <span>🚗 1</span>
            </div>
          </div>

        </div>
      </div>

     
      <div class="col-lg-3 col-md-6">
        <div class="recent-card">
          <div class="recent-img">
            <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d">
            <span class="badge bg-danger status-badge">SOLD</span>
          </div>
          <div class="recent-body">
            <h6>
              <a href="property-details.html" class="property-link">
                House on the Hollywood
              </a>
            </h6>
            <div class="property-icons">
              <span>🛏 3</span>
              <span>🛁 2</span>
              <span>📅 2017</span>
              <span>🚗 1</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



  <!-- rent-section   -->


<section class="recent-section py-5">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-5">
      <h2 class="fw-bold">Recent Properties for Rent</h2>
      <a href="#" class="section-link">ALL PROPERTIES FOR RENT</a>
    </div>

    <div class="row g-4">

    
      <div class="col-lg-3 col-md-6">
        <div class="recent-card">

          <div class="recent-img">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c">
            <span class="badge bg-success status-badge">RENT</span>
          </div>

          <div class="recent-body">
            <h6>
              <a href="property-details.html" class="property-link">
                Modern House for Rent
              </a>
            </h6>

            <div class="property-icons">
              <span>🛏 4</span>
              <span>🛁 2</span>
              <span>📅 2018</span>
              <span>🚗 2</span>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="recent-card">

          <div class="recent-img">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c">
            <span class="badge bg-success status-badge">RENT</span>
          </div>

          <div class="recent-body">
            <h6>
              <a href="property-details.html" class="property-link">
                Modern House for Rent
              </a>
            </h6>

            <div class="property-icons">
              <span>🛏 4</span>
              <span>🛁 2</span>
              <span>📅 2018</span>
              <span>🚗 2</span>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="recent-card">

          <div class="recent-img">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c">
            <span class="badge bg-success status-badge">RENT</span>
          </div>

          <div class="recent-body">
            <h6>
              <a href="property-details.html" class="property-link">
                Modern House for Rent
              </a>
            </h6>

            <div class="property-icons">
              <span>🛏 4</span>
              <span>🛁 2</span>
              <span>📅 2018</span>
              <span>🚗 2</span>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="recent-card">

          <div class="recent-img">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c">
            <span class="badge bg-success status-badge">RENT</span>
          </div>

          <div class="recent-body">
            <h6>
              <a href="property-details.html" class="property-link">
                Modern House for Rent
              </a>
            </h6>

            <div class="property-icons">
              <span>🛏 4</span>
              <span>🛁 2</span>
              <span>📅 2018</span>
              <span>🚗 2</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


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

      
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="why-box">
          <div class="why-icon">👥</div>
          <h5>TRUSTED BY THOUSANDS</h5>
          <p>
            10 new offers every day. 350 offers on site,
            trusted by a community of thousands of users.
          </p>
        </div>
      </div>

      
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="why-box">
          <div class="why-icon">📄</div>
          <h5>WIDE RANGE OF PROPERTIES</h5>
          <p>
            With a robust selection of popular properties on hand,
            as well as leading properties from real estate experts.
          </p>
        </div>
      </div>

      
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="why-box">
          <div class="why-icon">🏦</div>
          <h5>FINANCING MADE EASY</h5>
          <p>
            Our stress-free finance department can find financial
            solutions to save you money.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>




<section class="partners-section py-5">
  <div class="container text-center">

    <h2 class="fw-bold mb-5">Our Partners</h2>

    <div class="row align-items-center justify-content-center g-4">

      <div class="col-6 col-md-3">
        <img src="images/partner1.png" class="partner-logo" alt="Partner 1">
      </div>

      <div class="col-6 col-md-3">
        <img src="images/partner2.png" class="partner-logo" alt="Partner 2">
      </div>

      <div class="col-6 col-md-3">
        <img src="images/partner3.png" class="partner-logo" alt="Partner 3">
      </div>

      <div class="col-6 col-md-3">
        <img src="images/partner4.png" class="partner-logo" alt="Partner 4">
      </div>

    </div>

  </div>
</section>




<?php include "./components/footer.php"; ?> 



































  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


  <script src="script.js"></script>

</body>

</html>