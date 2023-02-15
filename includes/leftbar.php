<?php
$lng_btn_active_class = "qrt-leng qrt-active locale-change-button";
$lng_btn_inactive_class = "qrt-leng qrt-cursor-color qrt-cursor-scale locale-change-button";
$lng = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
?>

<div class="qrt-left-bar">
    <div class="qrt-current-page-title"></div>
    <div class="qrt-change-language">
        <a href="./functions/set_language_es.php" class="<?php echo $lng == 'es' ? $lng_btn_active_class : $lng_btn_inactive_class ?>">ES</a>
        <a href="./functions/set_language_en.php" class="<?php echo $lng == 'en' ? $lng_btn_active_class : $lng_btn_inactive_class ?>">EN</a>
    </div>
</div>