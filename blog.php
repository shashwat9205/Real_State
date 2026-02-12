<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./assest/css/style.css">
</head>
<body>




<?php include "./assest/components/header.php"; ?>


<section class="about-banner d-flex align-items-center">

    <div class="container text-white p-5">
       <h1>Our Blog</h1>
       <h5 class="text-light">Latest Real Estate News & Insights</h5>
        
       <div class="pagination">
        <a href="index.php" class=" text-light text-decoration-none">Home > </a> 
        <p class=""> Our Blog</p> 

    </div>
    </div>

</section>


<section class="blog-section py-5">
  <div class="container">
    <div class="row">

     
      <div class="col-lg-8">

        <div class="row g-4">

         
          <div class="col-md-6">
            <div class="blog-card">
              <img src="./assest/images/about-banner.png" class="img-fluid">
              <div class="blog-content">
                <span class="blog-date">March 20, 2026</span>
                <h5>
                  <a href="blog-details.html">
                    Top 10 Tips for First-Time Home Buyers
                  </a>
                </h5>
                <p>
                  Discover expert advice to help you navigate your first home purchase confidently.
                </p>
                <a href="blog-details.html" class="read-more">Read More →</a>
              </div>
            </div>
          </div>

          
          <div class="col-md-6">
            <div class="blog-card">
              <img src="./assest/images/about-banner.png" class="img-fluid">
              <div class="blog-content">
                <span class="blog-date">March 15, 2026</span>
                <h5>
                  <a href="blog-details.html">
                    Real Estate Market Trends in 2026
                  </a>
                </h5>
                <p>
                  A complete breakdown of where the housing market is heading this year.
                </p>
                <a href="blog-details.html" class="read-more">Read More →</a>
              </div>
            </div>
          </div>

        </div>

      
        <nav class="mt-5">
          <ul class="pagination">
            <li class="page-item active"><a class="page-link">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
          </ul>
        </nav>

      </div>


     
      <div class="col-lg-4">

        
        <div class="sidebar-box mb-4">
          <h5>Search</h5>
          <input type="text" class="form-control" placeholder="Search blog...">
        </div>

       
        <div class="sidebar-box mb-4">
          <h5>Categories</h5>
          <ul class="list-unstyled">
            <li><a href="#">Market Trends</a></li>
            <li><a href="#">Buying Guide</a></li>
            <li><a href="#">Selling Tips</a></li>
            <li><a href="#">Investment</a></li>
          </ul>
        </div>

        
        <div class="sidebar-box">
          <h5>Recent Posts</h5>
          <ul class="list-unstyled">
            <li><a href="#">How to Stage Your Home for Sale</a></li>
            <li><a href="#">Best Cities for Property Investment</a></li>
            <li><a href="#">Understanding Mortgage Rates</a></li>
          </ul>
        </div>

      </div>

    </div>
  </div>
</section>






<?php include "./assest/components/footer.php"; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
