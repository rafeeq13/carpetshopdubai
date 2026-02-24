<!-- Main Footer -->
<footer class="main-footer">
  <div class="auto-container">
    <div class="row clearfix">

      <!-- LEFT COLUMN -->
      <div class="big-column col-md-6 col-sm-12 col-xs-12">
        <div class="row clearfix">

          <!-- LOGO + IMAGES -->
          <div class="footer-column col-md-6 col-sm-6 col-xs-12">
            <div class="footer-widget logo-widget">
              <div class="footer-logo">
                <a href="index.php">
                  <img src="images/Logo111.png" alt="Carpet Shop Dubai">
                </a>
              </div>

              <p>Carpet Shop Dubai provide all types of Carpets, Rugs and Flooring services.</p>

              <div class="row clearfix">
                <?php
                $images = [
                  "custom-design-furniture-2-1.jpg",
                  "custom-furniture-design-5.jpg",
                  "custom-furniture-4.jpg",
                  "custom-furniture-1.jpg",
                  "custom-design-furniture-3-1.jpg",
                  "custom-furniture-6.jpg"
                ];
                foreach ($images as $img) {
                  echo '
                  <div class="image-column col-md-4 col-sm-4 col-xs-6">
                    <a href="images/gallery/'.$img.'" class="lightbox-image">
                      <img src="images/gallery/'.$img.'" alt="Carpet Shop Dubai">
                    </a>
                  </div>';
                }
                ?>
              </div>

              <ul class="social-icon-one">
                <li><a href="https://www.facebook.com/carpetshopdubai/" target="_blank"><span class="fa fa-facebook"></span></a></li>
                <li><a href="https://twitter.com/DubaiCarpetShop" target="_blank"><span class="fa fa-twitter"></span></a></li>
                <li><a href="https://www.instagram.com/carpetshopdubai/" target="_blank"><span class="fa fa-instagram"></span></a></li>
                <li><a href="https://www.pinterest.com/carpetshopdubaionline/" target="_blank"><span class="fa fa-pinterest"></span></a></li>
              </ul>

            </div>
          </div>

          <!-- USEFUL LINKS -->
          <div class="footer-column col-md-5 col-sm-6 col-xs-12">
            <div class="footer-widget links-widget">
              <h4 class="theme_color3">Useful Links</h4>
              <ul class="list">
                <li><a href="about.php">About Us</a></li>
                <li><a href="carpet.php">Carpets</a></li>
                <li><a href="flooring.php">Flooring</a></li>
                <li><a href="rugs.php">Rugs</a></li>
                <li><a href="curtains.php">Curtains</a></li>
                <li><a href="blinds.php">Blinds</a></li>
                <li><a href="upholstery.php">Upholstery</a></li>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <!-- RIGHT COLUMN -->
      <div class="big-column col-md-6 col-sm-12 col-xs-12">
        <div class="row clearfix">

          <!-- ADDRESS -->
          <div class="footer-column col-md-6 col-sm-6 col-xs-12">
            <h4 class="theme_color3">Our Address</h4>
            <ul class="list-style-one">
              <li>39 3B St - Al Quoz, Dubai, UAE</li>
              <li><a href="tel:+971547794446">+971 54779 4446</a></li>
              <li>info@carpetshopdubai.com</li>
            </ul>
            <img src="images/Payment1.png" alt="Payment Methods">
          </div>

          <!-- MAP -->
          <div class="footer-column col-md-6 col-sm-6 col-xs-12">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.617757194182!2d55.2402535!3d25.1486107"
              loading="lazy"
              style="border:0;">
            </iframe>
          </div>

        </div>
      </div>

      <!-- AREAS -->
      <div class="big-column col-md-12 col-sm-12 col-xs-12">
        <h4 class="theme_color3">Areas We Cover</h4>
        <p>
          Al Barsha, Palm Jumeirah, Dubai Marina, Business Bay, Downtown Dubai,
          JVC, Al Quoz, Dubai Hills, Sharjah, Abu Dhabi, Ajman & more.
        </p>
      </div>

    </div>
  </div>

  <!-- FOOTER BOTTOM -->
  <div class="footer-bottom">
    © 2025 <a href="index.php">Dubai Carpet Shop</a> | All Rights Reserved
  </div>
</footer>