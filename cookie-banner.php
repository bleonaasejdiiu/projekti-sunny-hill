<?php

// Kontrollo nëse përdoruesi ka pranuar cookies më parë
if (!isset($_COOKIE['cookies_accepted'])) {
    $cookieBanner = true;  // Nëse nuk është vendosur cookie, shfaq mesazhin
} else {
    $cookieBanner = false; // Nëse cookie është vendosur, mos shfaq mesazhin
}

?>

<!-- Mesazhi i Cookies -->
<div id="cookie-banner" class="cookie-banner" style="display: <?php echo $cookieBanner ? 'block' : 'none'; ?>;">
    <p>Ne përdorim cookies për të përmirësuar përvojën tuaj në këtë faqe. Duke klikuar "Prano", ju pranoni përdorimin e cookies.</p>
    <a href="?accept_cookies=true"><button class="accept-button">Prano</button></a>
</div>

<?php

// Trajto pranimin e cookies
if (isset($_GET['accept_cookies']) && $_GET['accept_cookies'] == 'true') {
    // Vendos cookie për të ruajtur pranimin për 60 minuta (3600 sekonda)
    setcookie('cookies_accepted', 'yes', time() + 60 * 60, "/");  // Nuk është e nevojshme të vendosësh domenin, pasi do të funksionojë për të gjithë faqen

    // Përshtat rishfaqjen e mesazhit dhe ridrejto përdoruesin në faqen që kishte hapur
    header("Location: " . $_SERVER['HTTP_REFERER']);  // Ridrejto përdoruesin pas pranimit të cookies
    exit();  // Sigurohu që të mbyllet ekzekutimi i kodit pas ridrejtimit
}

?>