<!-- includes/language-switcher.php -->
<!-- INCLUDE THIS FILE IN ALL YOUR PAGES -->

<style>
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
        box-shadow: 0 0 8px rgba(212, 175, 55, 0.5);
    }

    /* RTL Support for Arabic */
    body[dir="rtl"] {
        direction: rtl;
        text-align: right;
    }

    body[dir="rtl"] .language-switcher {
        left: auto;
        right: 20px;
    }
</style>

<!-- Language Switcher HTML -->
<div class="language-switcher">
    <a href="?lang=en" title="English">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 60 30'%3E%3Crect width='60' height='30' fill='%23012169'/%3E%3Cpath d='M0 0l60 30M60 0L0 30' stroke='%23fff' stroke-width='6'/%3E%3Cpath d='M0 0l60 30M60 0L0 30' stroke='%23C8102E' stroke-width='4' clip-path='inset(0)'/%3E%3Cpath d='M30 0v30M0 15h60' stroke='%23fff' stroke-width='10'/%3E%3Cpath d='M30 0v30M0 15h60' stroke='%23C8102E' stroke-width='6'/%3E%3C/svg%3E" 
             alt="English" 
             class="<?php echo $current_lang == 'en' ? 'active' : ''; ?>">
    </a>
    <a href="?lang=ar" title="العربية">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 900 600'%3E%3Crect width='900' height='600' fill='%23ce1126'/%3E%3Crect width='900' height='400' fill='%23fff'/%3E%3Crect width='900' height='200' fill='%23000'/%3E%3C/svg%3E" 
             alt="العربية" 
             class="<?php echo $current_lang == 'ar' ? 'active' : ''; ?>">
    </a>
</div>