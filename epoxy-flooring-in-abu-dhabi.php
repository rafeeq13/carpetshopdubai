<!DOCTYPE html>
<html lang="en">

    <!--End Main Header -->
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wait To Well - Premium Carpets & Flooring</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header */
        header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .top-bar {
            background: #1a2332;
            color: #fff;
            padding: 8px 0;
            font-size: 14px;
        }

        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav {
            padding: 15px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #d97706;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #d97706;
        }

        .nav-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-icons i {
            font-size: 20px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .nav-icons i:hover {
            color: #d97706;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23c4a57b" width="1200" height="600"/></svg>');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 120px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero h2 {
            font-size: 32px;
            color: #d97706;
            margin-bottom: 20px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-primary {
            background: #d97706;
            color: #fff;
            border: 2px solid #d97706;
        }

        .btn-primary:hover {
            background: #b45309;
            border-color: #b45309;
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid #fff;
        }

        .btn-secondary:hover {
            background: #fff;
            color: #d97706;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Services */
        .services {
            padding: 60px 20px;
            background: #fff;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .service-card {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: #d97706;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 36px;
            color: #fff;
        }

        /* Section Title */
        .section-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 50px;
            color: #1a2332;
        }

        /* Featured Services */
        .featured-services {
            padding: 60px 20px;
            background: #f9f5f0;
        }

        .featured-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .featured-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .featured-card:hover {
            transform: translateY(-5px);
        }

        .featured-image {
            width: 100%;
            height: 200px;
            background: #c4a57b;
            position: relative;
        }

        .featured-content {
            padding: 20px;
            color: #000;
        }

        .featured-content h3 {
            margin-bottom: 10px;
            color: #1a2332;
        }

        /* Shop By Size */
        .shop-by-size {
            padding: 60px 20px;
            background: #1a2332;
            color: #fff;
        }

        .shop-by-size .section-title {
            color: #fff;
        }

        .size-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .size-card {
            background: #2a3542;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .size-card:hover {
            transform: translateY(-5px);
        }

        .size-image {
            width: 100%;
            height: 200px;
            background: #4a5568;
        }

        .size-content {
            padding: 20px;
        }

        .size-content h3 {
            margin-bottom: 10px;
        }

        .size-content p {
            font-size: 14px;
            color: #cbd5e0;
            margin-bottom: 15px;
        }

        /* Product Grid */
        .products {
            padding: 60px 20px;
            background: #fff;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .product-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #c4a57b 0%, #a68968 100%);
            position: relative;
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #d97706;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }

        .product-info {
            padding: 15px;
        }

        .product-info h4 {
            margin-bottom: 10px;
            color: #1a2332;
        }

        .product-price {
            font-size: 20px;
            color: #d97706;
            font-weight: bold;
        }

        /* Shop By Styles */
        .shop-styles {
            padding: 60px 20px;
            background: #f9f5f0;
        }

        .styles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .style-item {
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .style-item:hover {
            transform: scale(1.05);
        }

        .style-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #8b4513 0%, #a0522d 100%);
            margin: 0 auto 15px;
            border: 5px solid #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Promo Banner */
        .promo-banner {
            background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
            color: #fff;
            padding: 80px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .promo-content h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .promo-features {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 30px 0;
            flex-wrap: wrap;
        }

        .promo-feature {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Info Section */
        .info-section {
            padding: 60px 20px;
            background: #fff;
        }

        .info-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .info-text h3 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #1a2332;
        }

        .info-features {
            list-style: none;
            margin: 20px 0;
        }

        .info-features li {
            padding: 10px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-features i {
            color: #d97706;
        }

        .info-image {
            width: 100%;
            height: 400px;
            background: #c4a57b;
            border-radius: 10px;
        }

        /* Why Choose Us */
        .why-choose {
            padding: 60px 20px;
            background: #1a2332;
            color: #fff;
        }

        .why-choose .section-title {
            color: #fff;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .benefit-card {
            text-align: center;
            padding: 30px;
        }

        .benefit-icon {
            font-size: 48px;
            color: #d97706;
            margin-bottom: 20px;
        }

        /* Steps Section */
        .steps-section {
            padding: 60px 20px;
            background: #f9f5f0;
        }

        .steps-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .steps-list {
            list-style: none;
        }

        .step-item {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: #d97706;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            flex-shrink: 0;
        }

        .step-content h4 {
            margin-bottom: 10px;
            color: #1a2332;
        }


.form-faq-section {
  padding: 60px 20px;
  background: #f9f5f0;
}

.form-faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
}

.form-box, .faq-box {
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.form-box h2, .faq-box h2 {
  margin-bottom: 20px;
  color: #1a2332;
}

.form-box input,
.form-box textarea {
  width: 100%;
  padding: 12px;
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.form-box button {
  padding: 12px 25px;
  background: #d97706;
  color: #fff;
  border: none;
  border-radius: 25px;
  cursor: pointer;
}

.form-box button:hover {
  background: #b45309;
}

/* FAQ */
.faq-item {
  border-bottom: 1px solid #eee;
  padding: 15px 0;
  background-color: transparent !important;
}

.faq-question {
  font-weight: 600;
  cursor: pointer;
  position: relative;
  padding-right: 20px;
}

.faq-question::after {
  content: "+";
  position: absolute;
  right: 0;
  top: 0;
  font-size: 20px;
}

.faq-item.active .faq-question::after {
  content: "-";
}

.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: 0.3s ease;
  color: #555;
  margin-top: 10px;
}

.faq-item.active .faq-answer {
  max-height: 200px;
}

/* Mobile */
@media(max-width:768px){
  .form-faq-grid {
    grid-template-columns: 1fr;
  }
}


        /* Reviews */
        .reviews {
            padding: 60px 20px;
            background: #fff;
            text-align: center;
        }

        .google-badge {
            margin: 30px 0;
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .review-card {
            background: #f9f5f0;
            padding: 30px;
            border-radius: 10px;
            text-align: left;
        }

        .review-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .reviewer-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #d97706;
        }

        .stars {
            color: #fbbf24;
            margin: 10px 0;
        }

        /* Footer */
        footer {
            background: #1a2332;
            color: #fff;
            padding: 60px 20px 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            color: #d97706;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section a {
            color: #cbd5e0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #d97706;
        }

        .newsletter-form {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .newsletter-form button {
            padding: 10px 20px;
            background: #d97706;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .newsletter-form button:hover {
            background: #b45309;
        }

.reviews {
  padding: 60px 20px;
}

.google-badge {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  margin-bottom: 30px;
}

.slider-wrapper {
  display: flex;
  align-items: center;
  gap: 10px;
}

.reviews-window {
  overflow: hidden;
  width: 100%;
}

.reviews-slider {
  display: flex;
  transition: 0.4s ease;
}

.review-card {
  min-width: 25%;   /* 4 reviews in one row */
  box-sizing: border-box;
  padding: 15px;
  margin: 5px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.08);
}

.review-card h4 {
  margin: 0 0 5px;
}

.stars {
  color: #fbbc04;
  font-size: 14px;
  margin-bottom: 5px;
}

.slide-btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid #ccc;
  background: #fff;
  font-size: 22px;
  cursor: pointer;
}


        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            background: #2a3542;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            transition: background 0.3s;
        }

        .social-icons a:hover {
            background: #d97706;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #2a3542;
            color: #cbd5e0;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #fff;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            }

            .nav-menu.active {
                display: flex;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero h2 {
                font-size: 24px;
            }

            .section-title {
                font-size: 28px;
            }

            .info-content,
            .steps-content {
                grid-template-columns: 1fr;
            }

            .promo-content h2 {
                font-size: 32px;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 24px;
            }

            .hero h2 {
                font-size: 20px;
            }

            .section-title {
                font-size: 24px;
            }

            .product-grid,
            .featured-grid,
            .size-grid {
                grid-template-columns: 1fr;
            }
        }
        
        /* ===== IMAGE ASSIGNMENT USING YOUR URLs ===== */

/* Featured Services (4) */
.featured-card:nth-child(1) .featured-image {background:url("https://i.ytimg.com/vi/7R6t0P1ql4M/maxresdefault.jpg") center/cover;}
.featured-card:nth-child(2) .featured-image {background:url("https://i.pinimg.com/originals/46/b8/ed/46b8ed70566da83fb05ce31d5c483126.jpg") center/cover;}
.featured-card:nth-child(3) .featured-image {background:url("https://i.pinimg.com/originals/1d/b7/86/1db78650b2196eed4ade5120db917d98.jpg") center/cover;}
.featured-card:nth-child(4) .featured-image {background:url("https://miro.medium.com/v2/resize:fit:1358/1*LxOODXfBA-ibn0Ir54OfFQ.jpeg") center/cover;}

/* Shop By Size (3) */
.size-card:nth-child(1) .size-image {background:url("https://i.pinimg.com/originals/15/1a/23/151a23d1474d9a9745ada38c5d946b5a.webp") center/cover;}
.size-card:nth-child(2) .size-image {background:url("https://i.pinimg.com/originals/ec/dd/0c/ecdd0c8be44428d4c859da1f86d520c3.jpg") center/cover;}
.size-card:nth-child(3) .size-image {background:url("https://i.pinimg.com/originals/85/55/eb/8555eb9b5a695657af75f3cb8036f7e6.jpg") center/cover;}

/* Products (8) */
.product-card:nth-child(1) .product-image {background:url("https://artisandesignconcepts.com/wp-content/uploads/2025/07/IMG_5697.jpeg") center/cover;}
.product-card:nth-child(2) .product-image {background:url("https://i.pinimg.com/originals/6e/53/4f/6e534f5b1e557f59101341adc3d29e49.png") center/cover;}
.product-card:nth-child(3) .product-image {background:url("https://idei.club/sd/uploads/posts/2023-11/1701202897_idei-club-p-epoksidnii-pol-pod-mramor-oboi-16.jpg") center/cover;}
.product-card:nth-child(4) .product-image {background:url("https://topflightgaragefloors.com/wp-content/uploads/2024/09/19560.jpg") center/cover;}
.product-card:nth-child(5) .product-image {background:url("https://i.pinimg.com/originals/45/e6/f6/45e6f6e32781ca9e146833c1aa42d9b1.jpg") center/cover;}
.product-card:nth-child(6) .product-image {background:url("https://i.pinimg.com/originals/8f/14/d0/8f14d039fb532b98bbff65d564a6cdcc.jpg") center/cover;}
.product-card:nth-child(7) .product-image {background:url("https://i.pinimg.com/originals/9f/97/4c/9f974c1e262a0ea093c5553c2225c3ef.jpg") center/cover;}
.product-card:nth-child(8) .product-image {background:url("https://i.ytimg.com/vi/7R6t0P1ql4M/maxresdefault.jpg") center/cover;}

/* Styles (6) */
.style-item:nth-child(1) .style-circle {background:url("https://i.pinimg.com/originals/46/b8/ed/46b8ed70566da83fb05ce31d5c483126.jpg") center/cover;}
.style-item:nth-child(2) .style-circle {background:url("https://i.pinimg.com/originals/1d/b7/86/1db78650b2196eed4ade5120db917d98.jpg") center/cover;}
.style-item:nth-child(3) .style-circle {background:url("https://miro.medium.com/v2/resize:fit:1358/1*LxOODXfBA-ibn0Ir54OfFQ.jpeg") center/cover;}
.style-item:nth-child(4) .style-circle {background:url("https://i.pinimg.com/originals/15/1a/23/151a23d1474d9a9745ada38c5d946b5a.webp") center/cover;}
.style-item:nth-child(5) .style-circle {background:url("https://i.pinimg.com/originals/ec/dd/0c/ecdd0c8be44428d4c859da1f86d520c3.jpg") center/cover;}
.style-item:nth-child(6) .style-circle {background:url("https://i.pinimg.com/originals/85/55/eb/8555eb9b5a695657af75f3cb8036f7e6.jpg") center/cover;}

/* Info + Steps */
.info-section .info-image {background:url("https://artisandesignconcepts.com/wp-content/uploads/2025/07/IMG_5697.jpeg") center/cover;}
.steps-section .info-image {background:url("https://topflightgaragefloors.com/wp-content/uploads/2024/09/19560.jpg") center/cover;}

        
    </style>
</head>
<body>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/head.php');?>
    <?php include('include/header.php');?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wait To Well - Premium Epoxy Flooring Abu Dhabi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* --- All your previous CSS stays the same --- */
        /* Only Hero section, text content, product/service names are updated for epoxy flooring */
    </style>
</head>
<body>

   <!-- Hero Section -->
<section class="hero" id="home" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://framerusercontent.com/images/A77hcaatzyypGGR5968xcgSuAag.jpeg'); background-size: cover; background-position: center;">
    <h1>Get Our Premium Epoxy Flooring Abu Dhabi | Shop Now!</h1>
    <p>We provide durable flooring using epoxy floor coating in Abu Dhabi that works for homes, shops, and industrial spaces. Our finishes are smooth, easy to clean, and designed for daily use in tough environments.</p>
    <div class="hero-buttons">
        <a href="#shop" class="btn btn-primary">Shop Now</a>
        <a href="#contact" class="btn btn-secondary">Contact Us</a>
    </div>
</section>


    <!-- Services -->
    <section class="services" id="services">
        <div class="container">
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Free Delivery</h3>
                    <p>Delivery across Abu Dhabi and surrounding areas</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Always available for assistance</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3>100% Secure Payment</h3>
                    <p>Safe and trusted checkout for every order</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services -->
    <section class="featured-services">
        <div class="container">
            <h2 class="section-title">Our Featured Flooring Services in Abu Dhabi</h2>
            <div class="featured-grid">
                <div class="featured-card">
                    <div class="featured-image"></div>
                    <div class="featured-content">
                        <h3>Epoxy Flooring Installation</h3>
                        <p>High-performance epoxy floor coating for residential, commercial, and industrial spaces.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <div class="featured-card">
                    <div class="featured-image"></div>
                    <div class="featured-content">
                        <h3>Vinyl & PVC Flooring</h3>
                        <p>Perfect for offices, shops, and modern interiors.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <div class="featured-card">
                    <div class="featured-image"></div>
                    <div class="featured-content">
                        <h3>Tile & Porcelain Flooring</h3>
                        <p>Durable and stylish tile solutions for all areas.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <div class="featured-card">
                    <div class="featured-image"></div>
                    <div class="featured-content">
                        <h3>Concrete Polishing</h3>
                        <p>Smooth, strong, and shiny concrete surfaces.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop By Size -->
    <section class="shop-by-size">
        <div class="container">
            <h2 class="section-title">Shop Epoxy Floors By Area</h2>
            <div class="size-grid">
                <div class="size-card">
                    <div class="size-image"></div>
                    <div class="size-content">
                        <h3>Small Spaces</h3>
                        <p>Perfect for kitchens, bathrooms, and small rooms</p>
                        <a href="#shop" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="size-card">
                    <div class="size-image"></div>
                    <div class="size-content">
                        <h3>Medium Spaces</h3>
                        <p>Ideal for living rooms, offices, and shops</p>
                        <a href="#shop" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="size-card">
                    <div class="size-image"></div>
                    <div class="size-content">
                        <h3>Large Spaces</h3>
                        <p>Great for halls, warehouses, and industrial areas</p>
                        <a href="#shop" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="products" id="shop">
        <div class="container">
            <h2 class="section-title">Shop Epoxy Flooring Options</h2>
            <div class="product-grid">
                <?php for($i = 1; $i <= 8; $i++): ?>
                <div class="product-card">
                    <div class="product-image">
                        <span class="product-badge">Premium</span>
                    </div>
                    <div class="product-info">
                        <h4>Premium Epoxy Floor – Style <?php echo $i; ?></h4>
                        <p class="product-price">From AED 499</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Shop By Styles -->
    <section class="shop-styles">
        <div class="container">
            <h2 class="section-title">Shop Epoxy Styles</h2>
            <div class="styles-grid">
                <?php 
                $styles = ['Self-Leveling', 'Metallic', 'Quartz-Filled', 'Flake', 'Anti-Static', 'High-Build Industrial'];
                foreach($styles as $style): 
                ?>
                <div class="style-item">
                    <div class="style-circle"></div>
                    <p><?php echo $style; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Promo Banner -->
    <section class="promo-banner">
        <div class="container">
            <div class="promo-content">
                <h2>GET UP TO<br>50% OFF</h2>
                <div class="promo-features">
                    <div class="promo-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Free Delivery</span>
                    </div>
                    <div class="promo-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Expert Installation</span>
                    </div>
                </div>
                <a href="#shop" class="btn btn-secondary">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container">
            <div class="info-content">
                <div class="info-text">
                    <h3>Transform Your Space With Premium Epoxy Flooring</h3>
                    <p>Our epoxy floors are durable, stylish, and designed for heavy daily use in homes, offices, and industrial spaces.</p>
                    <ul class="info-features">
                        <li><i class="fas fa-check"></i> Designed for Heavy Traffic</li>
                        <li><i class="fas fa-check"></i> Custom Finishes</li>
                        <li><i class="fas fa-check"></i> Long-lasting Quality</li>
                        <li><i class="fas fa-check"></i> Modern Look</li>
                    </ul>
                    <div style="margin-top: 20px;">
                        <a href="#contact" class="btn btn-primary">Get Started</a>
                        <a href="#faq" class="btn btn-secondary" style="margin-left: 10px;">Ask Question?</a>
                    </div>
                </div>
                <div class="info-image"></div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose">
        <div class="container">
            <h2 class="section-title">Why Choose Our Epoxy Flooring</h2>
            <p style="text-align: center; max-width: 800px; margin: 0 auto 40px;">We provide durable, high-quality epoxy floors with expert installation services in Abu Dhabi.</p>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Premium Quality</h3>
                    <p>Top-grade epoxy materials for lasting performance</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Expert Installation</h3>
                    <p>Professional installation for flawless floors</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Best Value</h3>
                    <p>Competitive pricing without compromising quality</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="steps-section">
        <div class="container">
            <h2 class="section-title">Transform Your Floor in Three Steps</h2>
            <div class="steps-content">
                <div>
                    <ul class="steps-list">
                        <li class="step-item">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Choose Your Style</h4>
                                <p>Select your epoxy type, color, and finish</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Schedule Site Visit</h4>
                                <p>Free consultation and measurement</p>
                            </div>
                        </li>
                        <li class="step-item">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Final Installation</h4>
                                <p>Fast, clean, and durable epoxy flooring installation</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="info-image"></div>
            </div>
        </div>
    </section>

    <!-- Form & FAQ Section -->
    <section class="form-faq-section">
      <div class="container form-faq-grid">
        <div class="form-box">
          <h2>Get In Touch</h2>
          <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <input type="text" placeholder="Subject">
            <textarea placeholder="Your Message" rows="5"></textarea>
            <button type="submit">Send Message</button>
          </form>
        </div>
        <div class="faq-box">
          <h2>Frequently Asked Questions</h2>
          <div class="faq-item">
            <div class="faq-question">How long does installation take?</div>
            <div class="faq-answer">Usually installation takes 1–2 days depending on area size.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question">Do you offer free delivery?</div>
            <div class="faq-answer">Yes, free delivery across Abu Dhabi.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question">Can I choose custom designs?</div>
            <div class="faq-answer">Yes, fully customizable epoxy designs are available.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question">Is installation included?</div>
            <div class="faq-answer">Installation is included with selected packages.</div>
          </div>
          <div class="faq-item">
            <div class="faq-question">What payment methods are accepted?</div>
            <div class="faq-answer">We accept cash, card, and online transfers.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Reviews -->
    <section class="reviews">
      <div class="container">
        <div class="google-badge">
          <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" style="height:30px;">
          <p><strong>Reviews</strong></p>
        </div>
        <div class="slider-wrapper">
          <button class="slide-btn prev">‹</button>
          <div class="reviews-window">
            <div class="reviews-slider" id="reviewSlider">
              <div class="review-card">
                <h4>Ali Khan</h4>
                <div class="stars">★★★★★</div>
                <p>Professional and clean epoxy flooring installation.</p>
              </div>
              <div class="review-card">
                <h4>Sarah Ahmed</h4>
                <div class="stars">★★★★★</div>
                <p>Our warehouse floor is strong, smooth, and easy to maintain.</p>
              </div>
              <div class="review-card">
                <h4>Omar Latif</h4>
                <div class="stars">★★★★★</div>
                <p>High-quality epoxy floors delivered on time. Excellent service.</p>
              </div>
              <div class="review-card">
                <h4>Ayesha Malik</h4>
                <div class="stars">★★★★★</div>
                <p>Beautiful finishes, our shop floor looks amazing!</p>
              </div>
            </div>
          </div>
          <button class="slide-btn next">›</button>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Wait To Well</h3>
                    <p>Premium epoxy flooring solutions in Abu Dhabi.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#shop">Shop</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Newsletter</h3>
                    <p>Subscribe to get special offers and updates</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your email address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Wait To Well. All rights reserved. | Designed with ❤️</p>
            </div>
        </div>
    </footer>

    <!-- JS for menu, reviews slider, FAQ -->
    <script>
        function toggleMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }
        document.addEventListener('click', function(event) {
            const navMenu = document.getElementById('navMenu');
            const mobileBtn = document.querySelector('.mobile-menu-btn');
            if (!navMenu.contains(event.target) && !mobileBtn.contains(event.target)) {
                navMenu.classList.remove('active');
            }
        });
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    document.getElementById('navMenu').classList.remove('active');
                }
            });
        });
        const slider = document.getElementById("reviewSlider");
        const next = document.querySelector(".next");
        const prev = document.querySelector(".prev");
        let index = 0;
        const visible = 4;
        const total = slider.children.length;
        next.addEventListener("click", () => { if (index < total - visible) { index++; slide(); } });
        prev.addEventListener("click", () => { if (index > 0) { index--; slide(); } });
        function slide() {
            const cardWidth = slider.children[0].offsetWidth;
            slider.style.transform = `translateX(-${index * cardWidth}px)`;
        }
        document.querySelectorAll(".faq-question").forEach(q => {
            q.addEventListener("click", () => {
                const item = q.parentElement;
                item.classList.toggle("active");
                document.querySelectorAll(".faq-item").forEach(faq => { if (faq !== item) faq.classList.remove("active"); });
            });
        });
    </script>
<script>
  const whatsappLink = "https://api.whatsapp.com/send?phone=971547794446&text=Hi!";
  const callLink = "tel:971547794446";

  document.querySelectorAll("a").forEach(btn => {
    const text = btn.textContent.toLowerCase();

    // Call buttons
    if (text.includes("call")) {
      btn.setAttribute("href", callLink);
      return;
    }

    // All shop/action buttons -> WhatsApp
    if (
      text.includes("contact") ||
      text.includes("get") ||
      text.includes("ask") ||
      text.includes("message") ||
      text.includes("add to cart") ||
      text.includes("shop") ||
      text.includes("learn more")
    ) {
      btn.setAttribute("href", whatsappLink);
      btn.setAttribute("target", "_blank");
    }
  });
</script>


</body>
</html>



</body>
</html>