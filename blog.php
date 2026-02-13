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

         <?php
        include 'admin/config.php';
        $select = mysqli_query($conn, "SELECT * FROM `blog_main`");
        while ($row = mysqli_fetch_assoc($select)) {
        ?>
          <div class="col-md-4">
            <div class="blog-card">
              <img src="admin/<?= $row['image']; ?>" class="img-fluid">
              <div class="blog-content">
                <span class="blog-date"><?= $row['blog_date'] ?></span>
                <h5>
                  <a href="blog-details.html">
                    <?= $row['title']; ?>
                  </a>
                </h5>
                <p>
                  <?= $row['para']; ?>
                </p>
                <a href="blog-details.html" class="read-more">Read More →</a>
              </div>
            </div>
          </div>
<?php } ?>

        </div>

    </div>

        </div>


       
  </div>
</section>






<?php include "./assest/components/footer.php"; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
