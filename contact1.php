<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us</title>

<meta name="keywords" content="contact us">
<meta name="description" content="We are one of the best Carpet Shop Dubai. Buy high-quality carpets, curtains & flooring solutions in Dubai at affordable prices. Contact us today!">

<link rel="alternate" href="https://carpetshopdubai.com/contact.php">

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://carpetshopdubai.com/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Contact Us",
    "item": "https://carpetshopdubai.com/contact.php"
  }]
}
</script>

<?php include('include/head.php');?>

<?php include('include/header.php');?>
    <!--End Main Header -->

</head>

<!-- PAGE TITLE SECTION -->
<section class="page-title" style="background-image:url('/images/background/3.jpg'); padding:80px 0;">
   <div class="auto-container">
      <div class="row clearfix">
         <div class="title-column col-md-6 col-sm-12">
            <h1 class="theme_color3">Contact Us</h1>
         </div>
         <div class="breadcrumb-column col-md-6 col-sm-12">
            <ul class="bread-crumb clearfix">
               <li><a href="index.php">Home</a></li>
               <li class="active">Contact Us</li>
            </ul>
         </div>
      </div>
   </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact-section" style="padding:60px 0;">
   <div class="auto-container">

      <div class="title-text" style="margin-bottom:40px;">
         You can talk to our online representative anytime.  
         Use our Whatsapp Live Chat System. Call: 
         <a href="tel:+971547794446">+971 54 779 4446</a>
      </div>

      <div class="row clearfix">

         <!-- Address -->
         <div class="contact-info col-md-4 col-sm-6 col-xs-12">
            <div class="inner">
               <div class="icon-box"><span class="icon fa fa-map-marker"></span></div>
               <h3>Our Address</h3>
               <div class="text" style="color:#000;">
                  39 3B St - Al Quoz Dubai <br>
                  United Arab Emirates
               </div>
            </div>
         </div>

         <!-- Phone -->
         <div class="contact-info col-md-4 col-sm-6 col-xs-12">
            <div class="inner">
               <div class="icon-box"><span class="icon fa fa-phone"></span></div>
               <h3>Phone & Email</h3>
               <div class="text" style="color:#000;">
                  <a href="tel:+971547794446">+971 54 779 4446</a><br>
                  carpetscurtains@gmail.com
               </div>
            </div>
         </div>

         <!-- Social -->
         <div class="contact-info col-md-4 col-sm-6 col-xs-12">
            <div class="inner">
               <div class="icon-box"><span class="icon fa fa-share-alt"></span></div>
               <h3>Stay In Touch</h3>
               <div class="text" style="color:#000;">Follow us on social media</div>

               <div class="social-icon-three clearfix">
                  <a href="https://www.facebook.com/carpetshopdubai/" target="_blank"><span class="fa fa-facebook"></span></a>
                  <a href="https://twitter.com/DubaiCarpetShop" target="_blank"><span class="fa fa-twitter"></span></a>
                  <a href="https://www.instagram.com/carpetshopdubai/" target="_blank"><span class="fa fa-instagram"></span></a>
                  <a href="https://www.pinterest.com/carpetshopdubaionline/" target="_blank"><span class="fa fa-pinterest"></span></a>
               </div>
            </div>
         </div>

      </div>

      <div class="row clearfix" style="margin-top:50px;">

         <!-- MAP -->
         <div class="col-md-6 col-sm-12">
            <h2>Location Map</h2>
            <iframe 
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.617757194182!2d55.240253499999994!3d25.1486107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f699c52d5ec0f%3A0xad9f68cb3275fdcb!2s39%203B%20St%20-%20Al%20Quoz%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1692201481874!5m2!1sen!2sin" 
               height="500" 
               style="border:0; width:100%;" 
               allowfullscreen 
               loading="lazy">
            </iframe>
         </div>

         <!-- CONTACT FORM -->
         <div class="contact-from-column col-md-6 col-sm-12">
            <div class="form-inner" style="background:#f8f8f8; padding:30px; border-radius:8px;">
               <h2>Contact Us</h2>

               <form method="post" action="thanks.php" class="contact-form">
                  <div class="row clearfix">

                     <div class="form-group col-md-6 col-sm-12">
                        <input type="text" name="username" placeholder="First Name*" required>
                     </div>

                     <div class="form-group col-md-12 col-sm-12">
                        <input type="email" name="email" placeholder="Email*" required>
                     </div>

                     <div class="form-group col-md-12 col-sm-12">
                        <input type="text" name="subject" placeholder="Phone No.*" required>
                     </div>

                     <div class="form-group col-md-12 col-sm-12">
                        <textarea name="message" placeholder="Message*" required></textarea>
                     </div>

                     <div class="form-group col-md-12 col-sm-12">
                        <button type="submit" name="submit" class="theme-btn btn-style-one">
                           Send Message
                        </button>
                     </div>

                  </div>
               </form>

            </div>
         </div>

      </div>

   </div>
</section>

<!--Main Footer--> <?php include('include/footer.php');?>
