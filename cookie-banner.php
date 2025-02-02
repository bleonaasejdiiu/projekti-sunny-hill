<?php

if (!isset($_COOKIE['cookies_accepted'])) {
    $cookieBanner = true;
} else {
    $cookieBanner = false;
}
?>

<!-- Mesazhi i Cookies -->
<div id="cookie-banner" class="cookie-banner" style="display: <?php echo $cookieBanner ? 'block' : 'none'; ?>;">
    <p>Ne përdorim cookies për të përmirësuar përvojën tuaj në këtë faqe. Duke klikuar "Prano", ju pranoni përdorimin e cookies.</p>
    <a href="?accept_cookies=true"><button class="accept-button">Prano</button></a>
</div>

<?php

if (isset($_GET['accept_cookies']) && $_GET['accept_cookies'] == 'true') {
    
    setcookie('cookies_accepted', 'yes', time() + 60 * 60, "/", ".emri-i-domenit.com"); 
    
    header("Location: " . $_SERVER['HTTP_REFERER']); 
    exit();
}
?>