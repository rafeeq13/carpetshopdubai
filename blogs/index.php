<?php
// Site configuration
$siteUrl = "https://www.carpetshopdubai.com";
$blogUrl = $siteUrl . "/blogs";

// Blog posts data
$blogPosts = [
    [
        'id' => 'best-carpet-texture-for-living-room-Dubai.php',
        'title' => 'Best Carpet Texture for Living Room in Dubai – Complete Buyer’s Guide',
        'excerpt' => 'Choosing the best carpet texture for living room Dubai homes is an important decision that affects comfort, style, and durability.  ',
        'date' => 'Dec 18, 2025',
        'category' => 'Shopping Guide',
        'readTime' => '8 min read'
    ],
    [
        'id' => 'rofesstional-carpet-stitching-Dubai.php',
        'title' => 'Professional Carpet Stitching Dubai – Expert Carpet Binding & Edge Stitching Services',
        'excerpt' => 'Carpets play a vital role in enhancing the comfort and beauty of any space, whether it is a home, office, mosque, hotel, or exhibition area. ',
        'date' => 'Dec 17, 2025',
        'category' => 'Shopping Guide',
        'readTime' => '8 min read'
    ],
    [
        'id' => 'Vinyl-flooring-Suppliers-in-Dubai.php',
        'title' => 'Vinyl Flooring Suppliers in Dubai: Complete Guide to Quality, Types & Installation',
        'excerpt' => 'Choosing the right flooring plays a major role in defining the look, comfort, and durability of any space.  ',
        'date' => 'Dec 16, 2025',
        'category' => 'Shopping Guide',
        'readTime' => '8 min read'
    ],
    [
        'id' => 'Luxury-Carpet-Tiles-Dubai',
        'title' => 'Luxury Carpet Tiles Dubai – Stylish, Durable & Modern Flooring Solutions',
        'excerpt' => 'Luxury carpet tiles in Dubai have become one of the most preferred flooring solutions for modern homes, offices, hotels, and commercial spaces. ',
        'date' => 'Dec 15, 2025',
        'category' => 'Shopping Guide',
        'readTime' => '8 min read'
    ],
    [
        'id' => 'custom-stair-carpet-dubai',
        'title' => 'Why Choose Custom Stair Carpet in Dubai for Safety & Luxury',
        'excerpt' => 'If you are looking to transform your home in Dubai with functional elegance choosing a custom stair carpet is one of the best investments you can make.',
        'date' => 'Dec 13, 2025',
        'category' => 'Shopping Guide',
        'readTime' => '8 min read'
    ],
    [
        'id' => 'carpet-stitching-dubai',
        'title' => 'Carpet Stitching Dubai – Professional Carpet Edging & Binding Services',
        'excerpt' => 'Carpet stitching in Dubai is an essential service for anyone who wants to repair, resize, or enhance the edges of carpets for a clean and durable finish. ',
        'date' => 'Dec 12, 2025',
        'category' => 'Shopping Guide',
        'readTime' => '8 min read'
    ],
];

// ✅ SORT POSTS BY LATEST DATE FIRST
usort($blogPosts, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Carpet Blog - Expert Tips & Latest Trends | Carpet Shop Dubai</title>
<meta name="description" content="Read expert carpet guides, tips, and latest flooring trends in Dubai. Updated regularly by Carpet Shop Dubai.">
<link rel="canonical" href="<?php echo $blogUrl; ?>">

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Segoe UI,Tahoma,sans-serif;background:#f8f9fa;color:#333}
.container{max-width:1200px;margin:auto;padding:0 20px}

.blog-header{
background:linear-gradient(135deg,#667eea,#764ba2);
color:#fff;
padding:80px 0 60px;
text-align:center
}
.blog-header h1{font-size:3rem;margin-bottom:10px}
.blog-header p{font-size:1.2rem;opacity:.95}

.breadcrumb{background:#fff;padding:15px 0;border-bottom:1px solid #ddd}
.breadcrumb a{color:#667eea;text-decoration:none}

.blog-content{padding:60px 0}

.blog-grid{
display:grid;
grid-template-columns:repeat(auto-fill,minmax(350px,1fr));
gap:40px
}

.blog-card{
background:#fff;
border-radius:12px;
overflow:hidden;
box-shadow:0 4px 6px rgba(0,0,0,.08);
transition:.3s
}
.blog-card:hover{transform:translateY(-5px)}

.blog-card-image{
height:240px;
background:linear-gradient(135deg,#667eea,#764ba2);
display:flex;
align-items:center;
justify-content:center;
padding:20px;
color:#fff;
font-weight:600;
text-align:center
}

.blog-card-content{padding:25px}

.blog-meta{
display:flex;
gap:15px;
font-size:.85rem;
color:#666;
margin-bottom:10px;
flex-wrap:wrap
}

.blog-category{
background:#667eea;
color:#fff;
padding:4px 12px;
border-radius:20px;
font-size:.75rem
}

.blog-card h2{
font-size:1.4rem;
margin-bottom:12px
}

.blog-card h2 a{
text-decoration:none;
color:#2c3e50
}
.blog-card h2 a:hover{color:#667eea}

.blog-excerpt{color:#666;line-height:1.7;margin-bottom:15px}

.read-more{
color:#667eea;
font-weight:600;
text-decoration:none
}
.read-more:hover{color:#764ba2}

.blog-footer{
background:#2c3e50;
color:#fff;
text-align:center;
padding:30px 0;
margin-top:60px
}

@media(max-width:768px){
.blog-header h1{font-size:2rem}
.blog-grid{grid-template-columns:1fr}
}
</style>
</head>

<body>

<header class="blog-header">
<div class="container">
<h1>Carpet Shop Dubai Blog</h1>
<p>Expert insights, design tips, and the latest trends in carpets and rugs</p>
</div>
</header>

<nav class="breadcrumb">
<div class="container">
<a href="<?php echo $siteUrl; ?>">Home</a> / Blog
</div>
</nav>

<main class="blog-content">
<div class="container">
<div class="blog-grid">

<?php foreach ($blogPosts as $post): ?>
<article class="blog-card">
<div class="blog-card-image">
<?php echo $post['title']; ?>
</div>
<div class="blog-card-content">
<div class="blog-meta">
<span class="blog-category"><?php echo $post['category']; ?></span>
<span>📅 <?php echo $post['date']; ?></span>
<span>⏱️ <?php echo $post['readTime']; ?></span>
</div>

<h2>
<a href="<?php echo $post['id']; ?>.php">
<?php echo $post['title']; ?>
</a>
</h2>

<p class="blog-excerpt"><?php echo $post['excerpt']; ?></p>

<a class="read-more" href="<?php echo $post['id']; ?>.php">Read More →</a>
</div>
</article>
<?php endforeach; ?>

</div>
</div>
</main>

<footer class="blog-footer">
<div class="container">
<p>© <?php echo date('Y'); ?> Carpet Shop Dubai. All rights reserved.</p>
</div>
</footer>

</body>
</html>