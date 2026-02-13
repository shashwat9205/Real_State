<footer class="footer-section pt-5">

  <div class="container">

    <div class="row">

      <div class="col-lg-3 col-md-6 mb-4">
        <h6 class="footer-title">Popular Searches</h6>
        <ul class="footer-links">
          <li><a href="#">Apartment for Rent</a></li>
          <li><a href="#">Apartment Low to hide</a></li>
          <li><a href="#">Offices for Buy</a></li>
          <li><a href="#">Offices for Rent</a></li>
          
        </ul>
      </div>

      
      <div class="col-lg-3 col-md-6 mb-4">
        <h6 class="footer-title">Homepress Markets</h6>
        <ul class="footer-links">
          <li><a href="#">Los Angeles Offices</a></li>
          <li><a href="#">Las Vegas Apartments</a></li>
          <li><a href="#">Sacramento Townhome</a></li>
          <li><a href="#">San Francisco Offices</a></li>
          
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <h6 class="footer-title">Quick Links</h6>
        <ul class="footer-links">
          <li><a href="blog.php">Blog</a></li>
          <li><a href="#">Our Services</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          
        </ul>
      </div>

   
      <div class="col-lg-3 col-md-6 mb-4">
        <h6 class="footer-title">Subscribe</h6>

        <form>
          <input type="text" class="form-control footer-input mb-3" placeholder="First Name, Last Name*">
          <input type="email" class="form-control footer-input mb-3" placeholder="Your Email Address*">
          <button type="submit" class="btn btn-primary w-100">SUBSCRIBE</button>
        </form>
      </div>

    </div>

    <hr class="footer-divider">

   
    <div class="footer-bottom text-center mb-3">
      <a href="#">Front Page</a> |
      <a href="#">About us</a> |
      <a href="#">Contact Us</a> |
      <a href="#">News</a> |
      <a href="#">Typography</a> |
      <a href="#">Wishlist</a>
    </div>

    
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pb-3">

      <p class="mb-2 mb-md-0">
        Copyright © 2026 DreamEstate. All Rights Reserved.
      </p>

      <div class="footer-social">
        <a href="#">🌐</a>
        <a href="#">🐦</a>
        <a href="#">📘</a>
        <a href="#">📸</a>
      </div>

    </div>

  </div>

</footer>












<div class="modal fade" id="enquireModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content enquire-modal">

      <div class="modal-header border-0">
        <h5 class="modal-title">Enquire Now</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

       <form action="assest/components/enquiry.php" method="POST">



          <div class="mb-3">
            <input type="text" class="form-control enquire-input" name="full_name"
              placeholder="Full Name*" required>
          </div>

          <div class="mb-3">
            <input type="email" name="email" class="form-control enquire-input"
              placeholder="Email Address*" required>
          </div>

          <div class="mb-3">
            <input type="tel" name="phone" class="form-control enquire-input"
              placeholder="Phone Number">
          </div>

          <div class="mb-3">
            <textarea class="form-control enquire-input" name="message"
              rows="4" placeholder="Your Message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary w-100">
            Submit Enquiry
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
