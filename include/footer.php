<!-- ======= Replacement Footer (Mobile Centered) ======= -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <title>Carpet Shop Dubai – footer redesign</title>
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- modern font stack: Inter + fallback -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300..700&display=swap" rel="stylesheet">
    <style>
        /* -------------------------------
           FOOTER REDESIGN – MODERN, WARM, RESPONSIVE
           premium craft feel, earthy palette, airy spacing
        ------------------------------- */
        .cs-footer {
            /* refined colour palette – deep warmth with soft accent */
            --bg-dark: #1f1b17;      /* rich charcoal-brown */
            --bg-panel: #2c241e;      /* warm espresso */
            --accent-soft: #e5b081;   /* terracotta / sand */
            --accent-glow: #f8c49c;   /* lighter hover */
            --text-light: #f2ede9;
            --text-muted: #cdc2b8;
            --border-dim: rgba(239, 226, 212, 0.08);
            
            background-color: var(--bg-dark);
            background: radial-gradient(circle at 20% 30%, #25201b 0%, #1b1714 100%);
            color: var(--text-light);
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            padding: 64px 0 32px;
            margin-top: 40px;  /* just for demo context */
            line-height: 1.5;
            border-top: 1px solid rgba(230, 200, 170, 0.06);
        }

        .cs-footer .inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 28px;
        }

        /* ---- grid: better proportion & breathing ---- */
        .cs-footer .row {
            display: flex;
            flex-wrap: wrap;
            gap: 32px 20px;
            justify-content: space-between;
        }

        .cs-footer .col.brand { 
            flex: 2.2 1 300px;   /* more space for brand/gallery */
        }
        .cs-footer .col.links { 
            flex: 1.2 1 160px; 
        }
        .cs-footer .col.contact { 
            flex: 1.2 1 200px; 
        }
        .cs-footer .col.map { 
            flex: 1.5 1 220px; 
        }

        /* ---- brand & logo ---- */
        .footer-logo {
            max-width: 180px;
            max-height: 58px;
            object-fit: contain;
            margin-bottom: 20px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .desc {
            font-size: 0.95rem;
            line-height: 1.6;
            color: var(--text-muted);
            margin-bottom: 20px;
            max-width: 360px;
        }

        /* ---- gallery: modern square soft grid ---- */
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            max-width: 300px;
            margin-bottom: 18px;
        }

        .gallery img {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            border-radius: 10px;
            transition: 0.25s ease-in-out;
            border: 1px solid rgba(255,215,170,0.1);
            box-shadow: 0 6px 12px -6px rgba(0,0,0,0.4);
        }

        .gallery img:hover {
            transform: scale(1.03);
            border-color: var(--accent-soft);
        }

        /* ---- social: clean circular buttons ---- */
        .social {
            display: flex;
            gap: 14px;
            margin: 16px 0 8px;
        }

        .social a {
            width: 42px;
            height: 42px;
            background: rgba(245, 235, 220, 0.06);
            color: #efe3d8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.25s;
            font-size: 1.1rem;
            backdrop-filter: blur(2px);
            border: 1px solid rgba(255,200,170,0.1);
        }

        .social a:hover {
            background: var(--accent-soft);
            color: #1e1916;
            border-color: transparent;
            transform: translateY(-3px);
        }

        /* ---- headings with fine underline ---- */
        h5 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #ffe6d5;
            margin-bottom: 22px;
            letter-spacing: 0.02em;
            position: relative;
            display: inline-block;
        }
        h5::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 2.5px;
            background: var(--accent-soft);
            border-radius: 4px;
        }

        /* links – clean spacing */
        .col.links ul,
        .col.contact ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .col.links li,
        .col.contact li {
            margin-bottom: 14px;
            font-size: 0.95rem;
            color: #d9cec4;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .custom-link {
            color: #dbd1c7;
            text-decoration: none;
            transition: 0.2s;
            font-weight: 400;
            border-bottom: 1px solid transparent;
            padding-bottom: 1px;
        }

        .custom-link:hover {
            color: var(--accent-glow);
            border-bottom: 1px solid var(--accent-soft);
        }

        /* contact icons – subtle */
        .col.contact li i {
            width: 20px;
            color: var(--accent-soft);
            font-size: 0.95rem;
        }

        /* ---- payment icons: cleaner ---- */
        .payments {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
            margin-top: 24px;
        }

        .payments img {
            height: 42px;
            width: auto;
            object-fit: contain;
            background: rgba(255,250,240,0.04);
            padding: 6px 12px;
            border-radius: 28px;
            border: 1px solid rgba(255,210,170,0.08);
            transition: 0.2s;
        }
        .payments img:hover {
            background: rgba(230,200,180,0.1);
            border-color: var(--accent-soft);
        }

        /* ---- map: elevated card ---- */
        .map iframe {
            width: 100%;
            height: 180px;
            border-radius: 16px;
            border: none;
            box-shadow: 0 10px 20px -8px rgba(0,0,0,0.3);
            background: #2e2a26;
            transition: 0.2s;
        }

        .map iframe:hover {
            box-shadow: 0 14px 26px -8px rgba(0,0,0,0.5);
            outline: 1px solid rgba(245,200,150,0.2);
        }

        /* divider – subtle glow */
        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(240,210,170,0.2), rgba(240,210,170,0.4), rgba(240,210,170,0.2), transparent);
            margin: 40px 0 28px;
            opacity: 0.7;
        }

        .bottom {
            text-align: center;
            font-size: 0.9rem;
            color: rgba(220,210,200,0.8);
            font-weight: 350;
            letter-spacing: 0.3px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 6px;
        }

        /* ---- dynamic year ---- */
        .bottom span {
            color: var(--accent-glow);
        }

        /* ============================================
           RESPONSIVE – ENHANCED MOBILE & TABLET
           truly centered, stacked, but with style
        ============================================ */
        @media (max-width: 991px) {
            .cs-footer .row {
                gap: 40px 30px;
            }
        }

        @media (max-width: 767px) {
            .cs-footer {
                padding: 52px 0 28px;
                text-align: center;
            }

            .cs-footer .inner {
                padding: 0 24px;
            }

            .cs-footer .row {
                flex-direction: column;
                gap: 44px;
            }

            .cs-footer .col {
                width: 100%;
                max-width: 540px;
                margin-left: auto;
                margin-right: auto;
            }

            /* center everything */
            .brand, .links, .contact, .map {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .desc {
                max-width: 480px;
                margin-left: auto;
                margin-right: auto;
            }

            .gallery {
                margin-left: auto;
                margin-right: auto;
                max-width: 300px;
                width: 100%;
            }

            .social {
                justify-content: center;
            }

            .col.links ul {
                display: inline-block;
                text-align: center;
            }

            .col.links li {
                justify-content: center;
            }

            .contact ul {
                display: inline-block;
                text-align: center;
            }
            .contact li {
                justify-content: center;
            }

            .payments {
                justify-content: center;
            }

            h5 {
                margin-left: auto;
                margin-right: auto;
                display: inline-block;
            }
            h5::after {
                left: 50%;
                transform: translateX(-50%);
                width: 50px;
            }

            .map iframe {
                max-width: 100%;
                width: 100%;
                margin: 0 auto;
                height: 200px;
            }

            .bottom {
                flex-direction: column;
                gap: 2px;
            }
        }

        /* tiny screens extra polish */
        @media (max-width: 480px) {
            .payments img {
                height: 38px;
            }
            .gallery {
                gap: 6px;
            }
        }

        /* image placeholder – if no images, keep consistent */
        .gallery img {
            background: #3a322c;
        }
    </style>
</head>
<body>
    <!-- demo context: preview footer only, intentionally no extra content -->
    <footer class="cs-footer">
        <div class="inner">
            <!-- main row: refined column proportions -->
            <div class="row">

                <!-- ----- COLUMN 1 : BRAND + GALLERY + SOCIAL (expanded) ----- -->
                <div class="col brand">
                    <!-- logo (update src if needed, works with placeholder) -->
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='60' viewBox='0 0 200 60'%3E%3Crect width='200' height='60' fill='%233c2e26' rx='8'/%3E%3Ctext x='20' y='40' font-family='Inter, sans-serif' font-size='20' fill='%23e5b081' font-weight='bold'%3E✨ CARPET SHOP%3C/text%3E%3C/svg%3E"
                         class="footer-logo" alt="Carpet Shop Dubai">
                    <p class="desc">
                        <span style="font-size: 1.05rem; color: #f2e1d4;">Premium carpets, rugs & bespoke flooring.</span><br>
                        Dubai’s trusted atelier for curtains, upholstery and timeless interiors.
                    </p>

                    <!-- gallery : six images (simulated with abstract swatches) -->
                    <div class="gallery">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Crect width='80' height='80' fill='%23947962'/%3E%3Ctext x='12' y='45' fill='%23fff' font-size='12' font-family='monospace'%3E🧶 rug%3C/text%3E%3C/svg%3E" alt="custom rug 1">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Crect width='80' height='80' fill='%23b28b6b'/%3E%3Ctext x='12' y='45' fill='%23fff' font-size='12'%3Ecarpet%3C/text%3E%3C/svg%3E" alt="wool carpet">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Crect width='80' height='80' fill='%238e6b4e'/%3E%3Ctext x='10' y='45' fill='%23fff' font-size='12'%3Ecurtain%3C/text%3E%3C/svg%3E" alt="curtain">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Crect width='80' height='80' fill='%23ac8e6c'/%3E%3Ctext x='12' y='45' fill='%23fff' font-size='12'%3Efloor%3C/text%3E%3C/svg%3E" alt="flooring">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Crect width='80' height='80' fill='%23a5764e'/%3E%3Ctext x='12' y='45' fill='%23fff' font-size='12'%3Edesign%3C/text%3E%3C/svg%3E" alt="furniture">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Crect width='80' height='80' fill='%23c49a6c'/%3E%3Ctext x='12' y='45' fill='%23fff' font-size='12'%3Euph%3C/text%3E%3C/svg%3E" alt="upholstery">
                    </div>

                    <div class="social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>

                <!-- ----- COLUMN 2 : USEFUL LINKS (compact) ----- -->
                <div class="col links">
                    <h5>Useful Links</h5>
                    <ul>
                        <li><a class="custom-link" href="#">About Us</a></li>
                        <li><a class="custom-link" href="#">Carpets</a></li>
                        <li><a class="custom-link" href="#">Flooring</a></li>
                        <li><a class="custom-link" href="#">Rugs</a></li>
                        <li><a class="custom-link" href="#">Curtains</a></li>
                        <li><a class="custom-link" href="#">Blinds</a></li>
                        <li><a class="custom-link" href="#">Upholstery</a></li>
                        <li><a class="custom-link" href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- ----- COLUMN 3 : CONTACT + PAYMENTS  ----- -->
                <div class="col contact">
                    <h5>Contact</h5>
                    <ul>
                        <li><i class="fas fa-map-pin"></i> 39 3B St – Al Quoz, Dubai</li>
                        <li><i class="fas fa-phone-alt"></i> +971 54 779 4446</li>
                        <li><i class="fas fa-envelope"></i> Carpetscurtains@gmail.com</li>
                    </ul>
                    <div class="payments">
                        <!-- simulated payment icons (clean placeholders) -->
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='90' height='40' viewBox='0 0 90 40'%3E%3Crect width='90' height='40' fill='%23362d27' rx='12'/%3E%3Ctext x='15' y='26' fill='%23f2dac0' font-size='16' font-weight='bold' font-family='Inter'%3E💳 VISA%3C/text%3E%3C/svg%3E" alt="Visa">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='90' height='40' viewBox='0 0 90 40'%3E%3Crect width='90' height='40' fill='%23362d27' rx='12'/%3E%3Ctext x='12' y='26' fill='%23f2dac0' font-size='16' font-weight='bold'%3Emastercard%3C/text%3E%3C/svg%3E" alt="Mastercard">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='90' height='40' viewBox='0 0 90 40'%3E%3Crect width='90' height='40' fill='%23362d27' rx='12'/%3E%3Ctext x='16' y='26' fill='%23f2dac0' font-size='16'%3Epay%3C/text%3E%3C/svg%3E" alt="payment">
                    </div>
                </div>

                <!-- ----- COLUMN 4 : MAP (clean embed) ----- -->
                <div class="col map">
                    <h5>Our Location</h5>
                    <!-- actual google maps embed (coordinates preserved) -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.617757194182!2d55.2402535!3d25.1486107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f699c52d5ec0f%3A0xad9f68cb3275fdcb!2s39%203B%20St%20-%20Al%20Quoz%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sae!4v1692201481874"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Carpet Shop Dubai location">
                    </iframe>
                </div>
            </div> <!-- end row -->

            <div class="divider"></div>

            <div class="bottom">
                <span>© <span id="current-year"></span> Dubai Carpet Shop</span> 
                <span style="margin: 0 6px; color: var(--text-muted);">—</span> 
                <span>All Rights Reserved. Crafted with care.</span>
            </div>
        </div> <!-- end inner -->
    </footer>

    <!-- dynamic year update -->
    <script>
        (function() {
            document.getElementById('current-year').textContent = new Date().getFullYear();
        })();
    </script>
    <!-- note: year fallback: if script fails, static but dynamic works -->
    <noscript><style>#current-year:after { content: "2025"; }</style></noscript>
</body>
</html>

<script>
document.getElementById("year").textContent = new Date().getFullYear();
</script>
<!-- Floating WhatsApp Button -->
<a href="https://wa.me/+9710565847696" target="_blank" class="whatsapp-float">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
  <span>WhatsApp (+971 056 584 76 96)</span>
</a>

<style>
.whatsapp-float {
  position: fixed;
  left: 20px;
  bottom: 20px;
  background: #25D366;
  color: #fff;
  padding: 10px 14px;
  border-radius: 50px;
  display: inline-flex;
  align-items: center;
  gap: 8px;

  width: auto !important;
  max-width: fit-content;
  white-space: nowrap;

  text-decoration: none;
  font-family: Arial, sans-serif;
  font-size: 14px;
  font-weight: bold;

  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  z-index: 99999;
}

.whatsapp-float img {
  width: 22px;
  height: 22px;
}
</style>

<!-- ======= End Footer ======= -->
