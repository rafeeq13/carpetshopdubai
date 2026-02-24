<?php
// config/language.php - Language Configuration File
// CREATE THIS FILE FIRST

session_start();

// Set default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

// Handle language change
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'ar'])) {
    $_SESSION['lang'] = $_GET['lang'];
    // Redirect to remove ?lang= from URL
    $redirect_url = strtok($_SERVER["REQUEST_URI"], '?');
    header('Location: ' . $redirect_url);
    exit();
}

// Language translations array
$translations = [
    'en' => [
        // Navigation
        'home' => 'Home',
        'carpet' => 'Carpet',
        'furniture' => 'Furniture',
        'domains' => 'Domains',
        'brands' => 'Brands',
        'commercial' => 'Commercial',
        'help' => 'Help',
        'newsletter' => 'Newsletter',
        'renovator' => 'Renovator',
        
        // Main Content
        'main_heading' => 'UAE Based Brand Flooring Portfolio',
        'description' => 'Floor Land LLC is a local trading sustainable in Dubai UAE offers wide range of flooring products that cater regional needs and styles.',
        'comprehensive' => 'Comprehensive Selection',
        'high_quality' => 'High Quality Products',
        'customer_saying' => 'What Our Customer Saying',
        'read_reviews' => 'Read All Reviews',
        
        // Add your own translations here
        'about_us' => 'About Us',
        'contact' => 'Contact',
        'products' => 'Products',
        'services' => 'Services'
    ],
    'ar' => [
        // Navigation
        'home' => 'الرئيسية',
        'carpet' => 'سجاد',
        'furniture' => 'أثاث',
        'domains' => 'نطاقات',
        'brands' => 'علامات تجارية',
        'commercial' => 'تجاري',
        'help' => 'مساعدة',
        'newsletter' => 'النشرة الإخبارية',
        'renovator' => 'مجدد',
        
        // Main Content
        'main_heading' => 'محفظة الأرضيات للعلامة التجارية الإماراتية',
        'description' => 'فلور لاند ذ.م.م هي شركة تجارية محلية مستدامة في دبي الإمارات تقدم مجموعة واسعة من منتجات الأرضيات التي تلبي الاحتياجات والأنماط الإقليمية.',
        'comprehensive' => 'اختيار شامل',
        'high_quality' => 'منتجات عالية الجودة',
        'customer_saying' => 'ماذا يقول عملاؤنا',
        'read_reviews' => 'قراءة جميع المراجعات',
        
        // Add your own translations here
        'about_us' => 'معلومات عنا',
        'contact' => 'اتصل بنا',
        'products' => 'منتجات',
        'services' => 'خدمات'
    ]
];

// Get current language translations
$lang = $translations[$_SESSION['lang']];
$current_lang = $_SESSION['lang'];

// Function to translate text
function translate($key) {
    global $lang;
    return isset($lang[$key]) ? $lang[$key] : $key;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floor Land - <?php echo translate('home'); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            direction: <?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>;
        }

        /* Language Switcher Styles */
        .language-switcher {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            gap: 10px;
            z-index: 1000;
        }

        .language-switcher a {
            display: block;
            text-decoration: none;
            transition: transform 0.2s;
        }

        .language-switcher a:hover {
            transform: scale(1.1);
        }

        .language-switcher img {
            width: 32px;
            height: 24px;
            border: 2px solid transparent;
            border-radius: 4px;
            cursor: pointer;
        }

        .language-switcher img.active {
            border-color: #d4af37;
        }

        /* Header Styles */
        header {
            background: white;
            padding: 20px 50px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .login-btn {
            background: #d4af37;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: #f5f5f5;
            padding: 80px 50px;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .hero p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
        }

        /* Customer Reviews Section */
        .reviews {
            padding: 80px 50px;
            text-align: center;
        }

        .reviews h2 {
            font-size: 32px;
            margin-bottom: 40px;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Language Switcher -->
    <div class="language-switcher">
        <a href="?lang=en">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 60 30'%3E%3Crect width='60' height='30' fill='%23012169'/%3E%3Cpath d='M0 0l60 30M60 0L0 30' stroke='%23fff' stroke-width='6'/%3E%3Cpath d='M0 0l60 30M60 0L0 30' stroke='%23C8102E' stroke-width='4' clip-path='inset(0)'/%3E%3Cpath d='M30 0v30M0 15h60' stroke='%23fff' stroke-width='10'/%3E%3Cpath d='M30 0v30M0 15h60' stroke='%23C8102E' stroke-width='6'/%3E%3C/svg%3E" 
                 alt="English" 
                 class="<?php echo $current_lang == 'en' ? 'active' : ''; ?>">
        </a>
        <a href="?lang=ar">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 900 600'%3E%3Crect width='900' height='600' fill='%23ce1126'/%3E%3Crect width='900' height='400' fill='%23fff'/%3E%3Crect width='900' height='200' fill='%23000'/%3E%3C/svg%3E" 
                 alt="Arabic" 
                 class="<?php echo $current_lang == 'ar' ? 'active' : ''; ?>">
        </a>
    </div>

    <!-- Header -->
    <header>
        <nav>
            <div class="logo">FLOOR LAND</div>
            <ul class="nav-links">
                <li><a href="#"><?php echo translate('home'); ?></a></li>
                <li><a href="#"><?php echo translate('carpet'); ?></a></li>
                <li><a href="#"><?php echo translate('furniture'); ?></a></li>
                <li><a href="#"><?php echo translate('domains'); ?></a></li>
                <li><a href="#"><?php echo translate('brands'); ?></a></li>
                <li><a href="#"><?php echo translate('commercial'); ?></a></li>
            </ul>
            <button class="login-btn">Login</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1><?php echo translate('main_heading'); ?></h1>
            <p><?php echo translate('description'); ?></p>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews">
        <h2><?php echo translate('customer_saying'); ?></h2>
        <button class="login-btn"><?php echo translate('read_reviews'); ?></button>
    </section>
</body>
</html>