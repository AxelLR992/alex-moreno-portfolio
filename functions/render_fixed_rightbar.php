<?php
function render_fixed_rightbar(string $title, string $description, string $btn_text, string $btn_url)
{
    return '
        <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-zoom">
            <div class="qrt-image-frame">
                <img src="img/banners/banner3.jpg" alt="banner">
            </div>
            <div class="qrt-overlay">
                <div class="qrt-scroll-hint">
                <span></span>
                <span>
                    ' . L::common_scrollDown . '
                </span>
                </div>
                <div class="qrt-banner-title">
                <h2 class="qrt-white qrt-mb-10">
                    ' . $title . '
                </h2>
                <div class="qrt-divider-2"></div>
                <div class="qrt-text qrt-white qrt-mb-20">' . $description . '</div>
                <a href="' . $btn_url . '" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link">
                    <span>
                        ' . $btn_text . '
                    </span>
                </a>
                </div>
            </div>
            </div>
        </div>
    ';
}