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



<section class="contact-banner d-flex align-items-center">

    <div class="container text-white p-5">
       <h1>Contact Us</h1>
        
       <div class="pagination">
        <a href="index.php" class=" text-light text-decoration-none">Home > </a> 
        <p> Contact Us</p> 

    </div>
    </div>
</section>



<section class="loaction-section py-5 mt-5">
    <div class="container">
    <div class="row g-3 justify-content-center">

        <div class="col-lg-5 h-60">
            <div class="office-content">
              <h5 class=" text-muted">Let’s Build Your Golden Future Together</h5>
                <p class=" text-muted">

At GoldNest 369 Properties, we don’t just facilitate transactions — we curate exceptional real estate experiences. Whether you are seeking an ultra-luxury residence, a strategic commercial investment, or a high-value plot in a prime location, our dedicated team is prepared to provide personalized attention and discreet, professional guidance tailored to your goals.

Every client journey begins with a conversation. We take the time to understand your vision, your lifestyle preferences, and your long-term aspirations — ensuring that every recommendation aligns with your expectations of quality, elegance, and value.</p>

                      </div>

                      <div class="col-lg-6 d-flex align-items-center">

                        <img class=" h-100 " src="./assest/images/contact1.png" alt="">

                        <div class="details-contact ms-3 mt-4">
                        <p class="text-muted">Call Us</p>
                        <p class=" ">+919876543210</p>
                        </div>


                        <img class=" mb-2 h-100" src="./assest/images/contact2.png" alt="">

                        <div class="details-contact ms-3 ">
                        <p class="text-muted">Have any Questions?</p>
                        <a class=" ">info@goldnest369.com</a>
                        </div>


                      <div class="col-lg-6">
                        

                      </div>

            </div>
        </div>


        <div class="col-lg-5 h-60">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5395938245015!2d77.3125310755408!3d28.58358497569146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce51ee5d79db7%3A0x685544a078523ffb!2sHRN%20Tech%20Solutions!5e0!3m2!1sen!2sin!4v1770710625268!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


     </div>
    </div>
</section>






<section class="contact-section py-5">
  <div class="container">

    <div class="row g-5">

    
      <div class="col-lg-8">
        <h3 class="mb-4">Feedback Form</h3>

        <form action="./feedback_db.php" method="POST">
          <div class="row g-3">

            <div class="col-md-6">
              <input type="text" name="full_name" class="form-control contact-input"
                placeholder="First Name, Last Name*" required>
            </div>

            <div class="col-md-6">
              <input type="email" name="email" class="form-control contact-input"
                placeholder="Your Email Address*" required>
            </div>

            <div class="col-md-6">
              <input type="text" name="phone" class="form-control contact-input"
                placeholder="Your Phone">
            </div>

            <div class="col-md-6">
              <textarea class="form-control contact-input" name="message"
                rows="4" placeholder="Your Message"></textarea>
            </div>

            <div class="col-12 mt-3">
              <button type="submit" class="btn btn-primary px-5">
                SUBMIT
              </button>
            </div>

          </div>
        </form>
      </div>


      
      <div class="col-lg-4">
        <h3 class="mb-4">Your Contact</h3>

        
        <div class="contact-person d-flex mb-4">
          <img src="./assest/images/leader1.png" alt="">
          <div class="ms-3">
            <h6 class="mb-1">Berg Devien</h6>
            <p class="small text-muted mb-1">Head of Communications</p>
            <p class="mb-1"><strong>Email:</strong> b.devien@yourdomain.com</p>
            <p><strong>Skype:</strong> berg.property</p>
          </div>
        </div>

       
        <div class="contact-person d-flex">
          <img src="./assest/images/leader2.png" alt="">
          <div class="ms-3">
            <h6 class="mb-1">Priscilla Sorvino</h6>
            <p class="small text-muted mb-1">Head of Communications</p>
            <p class="mb-1"><strong>Email:</strong> p.sorvino@yourdomain.com</p>
            <p><strong>Skype:</strong> priscilla.property</p>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>





<section class="cta-section mt-3">

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

















<?php include "./assest/components/footer.php"; ?> 

















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>