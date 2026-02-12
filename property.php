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

<?php include "./components/header.php"; ?>


<section class="property-banner d-flex align-items-center">

    <div class="container text-white p-5">
       <h1>Property</h1>
        
       <div class="pagination">
        <a href="index.php" class=" text-light text-decoration-none">Home > </a> 
        <p> Property</p> 

    </div>
    </div>
</section>



<!-- search-bar  -->
<section class="property-search py-4">
  <div class="container">

    <div class="search-wrapper">
      <form>
        <div class="row g-3 align-items-center">

          <!-- Location -->
          <div class="col-lg-4 col-md-6">
            <input type="text" class="form-control search-input"
              placeholder="Search by location (City, Area)">
          </div>

          <!-- Property Type -->
          <div class="col-lg-3 col-md-6">
            <select class="form-select search-input">
              <option selected>Property Type</option>
              <option>Apartment</option>
              <option>Villa</option>
              <option>Office</option>
              <option>Land</option>
            </select>
          </div>

          <!-- Status -->
          <div class="col-lg-3 col-md-6">
            <select class="form-select search-input">
              <option selected>Status</option>
              <option>For Sale</option>
              <option>For Rent</option>
            </select>
          </div>

          <!-- Button -->
          <div class="col-lg-2 col-md-6">
            <button type="submit" class="btn btn-primary w-100 search-btn">
              Search
            </button>
          </div>

        </div>
      </form>
    </div>

  </div>
</section>



<!-- property-listings  -->
<section class="property-listing py-5">
  <div class="container">

    <!-- PROPERTY 1 -->
    <div class="property-item mb-5">
      <div class="row align-items-center">

        <!-- Left Image -->
        <div class="col-lg-4">
          <img src = "./images/hero-banner.png" class="img-fluid property-img">
        </div>

        <!-- Right Content -->
        <div class="col-lg-8">
          <div class="property-content">

            <h3>
              <a href="property-details.html" class="property-title">
                Luxury Waterfront Villa
              </a>
            </h3>

            <p class="location">Miami, Florida</p>

            <p class="description">
              A stunning waterfront villa offering breathtaking views,
              modern architecture, private dock access, and premium interiors.
            </p>

            <div class="property-info row mt-3">
              <div class="col-md-3">🏠 3200 sq ft</div>
              <div class="col-md-3">🛏 4 Bedrooms</div>
              <div class="col-md-3">🛁 3 Bathrooms</div>
              <div class="col-md-3">🚗 2 Garage</div>
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


    <!-- PROPERTY 2 -->
    <div class="property-item mb-5">
      <div class="row align-items-center">

        <div class="col-lg-4">
          <img src = "./images/hero-banner.png" class="img-fluid property-img">
        </div>

        <div class="col-lg-8">
          <div class="property-content">

            <h3>
              <a href="property-details.html" class="property-title">
                Modern City Apartment
              </a>
            </h3>

            <p class="location">New York, NY</p>

            <p class="description">
              Elegant city apartment in downtown area with skyline views,
              luxury amenities and modern design.
            </p>

            <div class="property-info row mt-3">
              <div class="col-md-3">🏠 1500 sq ft</div>
              <div class="col-md-3">🛏 3 Bedrooms</div>
              <div class="col-md-3">🛁 2 Bathrooms</div>
              <div class="col-md-3">🚗 1 Garage</div>
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
    <div class="property-item mb-5">
      <div class="row align-items-center">

        <!-- Left Image -->
        <div class="col-lg-4">
          <img src="./images/hero-banner.png" class="img-fluid property-img">
        </div>

        <!-- Right Content -->
        <div class="col-lg-8">
          <div class="property-content">

            <h3>
              <a href="property-details.html" class="property-title">
                Luxury Waterfront Villa
              </a>
            </h3>

            <p class="location">Miami, Florida</p>

            <p class="description">
              A stunning waterfront villa offering breathtaking views,
              modern architecture, private dock access, and premium interiors.
            </p>

            <div class="property-info row mt-3">
              <div class="col-md-3">🏠 3200 sq ft</div>
              <div class="col-md-3">🛏 4 Bedrooms</div>
              <div class="col-md-3">🛁 3 Bathrooms</div>
              <div class="col-md-3">🚗 2 Garage</div>
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


    <!-- PROPERTY 2 -->
    <div class="property-item mb-5">
      <div class="row align-items-center">

        <div class="col-lg-4">
          <img src="./images/hero-banner.png" class="img-fluid property-img">
        </div>

        <div class="col-lg-8">
          <div class="property-content">

            <h3>
              <a href="property-details.html" class="property-title">
                Modern City Apartment
              </a>
            </h3>

            <p class="location">New York, NY</p>

            <p class="description">
              Elegant city apartment in downtown area with skyline views,
              luxury amenities and modern design.
            </p>

            <div class="property-info row mt-3">
              <div class="col-md-3">🏠 1500 sq ft</div>
              <div class="col-md-3">🛏 3 Bedrooms</div>
              <div class="col-md-3">🛁 2 Bathrooms</div>
              <div class="col-md-3">🚗 1 Garage</div>
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
    <div class="property-item mb-5">
      <div class="row align-items-center">

        <!-- Left Image -->
        <div class="col-lg-4">
          <img src="./images/hero-banner.png" class="img-fluid property-img">
        </div>

        <!-- Right Content -->
        <div class="col-lg-8">
          <div class="property-content">

            <h3>
              <a href="property-details.html" class="property-title">
                Luxury Waterfront Villa
              </a>
            </h3>

            <p class="location">Miami, Florida</p>

            <p class="description">
              A stunning waterfront villa offering breathtaking views,
              modern architecture, private dock access, and premium interiors.
            </p>

            <div class="property-info row mt-3">
              <div class="col-md-3">🏠 3200 sq ft</div>
              <div class="col-md-3">🛏 4 Bedrooms</div>
              <div class="col-md-3">🛁 3 Bathrooms</div>
              <div class="col-md-3">🚗 2 Garage</div>
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


    <!-- PROPERTY 2 -->
    <div class="property-item mb-5">
      <div class="row align-items-center">

        <div class="col-lg-4">
          <img src="./images/hero-banner.png" class="img-fluid property-img">
        </div>

        <div class="col-lg-8">
          <div class="property-content">

            <h3>
              <a href="property-details.html" class="property-title">
                Modern City Apartment
              </a>
            </h3>

            <p class="location">New York, NY</p>

            <p class="description">
              Elegant city apartment in downtown area with skyline views,
              luxury amenities and modern design.
            </p>

            <div class="property-info row mt-3">
              <div class="col-md-3">🏠 1500 sq ft</div>
              <div class="col-md-3">🛏 3 Bedrooms</div>
              <div class="col-md-3">🛁 2 Bathrooms</div>
              <div class="col-md-3">🚗 1 Garage</div>
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


  </div>
</section>



<!-- property -->




























<?php include "./components/footer.php"; ?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>