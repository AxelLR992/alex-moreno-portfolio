<?php
function render_navbar(string $active_element, i18n $i18n)
{
    $locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
    $fetch = new Fetch();
    $fetch->set_api_key($_ENV["REST_API_KEY"]);
    $fetch->set_base_url($_ENV["REST_API_URL"]);

    $owner = json_decode($fetch->get("/content/item/owner", array("locale" => $locale)));
    return '
        <div class="qrt-top-bar">
            <a href="/" class="qrt-symbol qrt-cursor-scale qrt-anima-link"><img src="img/logo-sm.svg" alt="Symbol" /></a>
            <a href="/" class="qrt-logo qrt-cursor-color qrt-cursor-scale qrt-anima-link">
                <img src="img/logo.svg" alt="Quarty" />
            </a>
            <div class="qrt-menu">
                <div id="qrt-dynamic-menu" class="qrt-dynamic-menu">
                    <nav>
                        <ul>
                            <li ' . ($active_element == "home" ? 'class="current-menu-item"' : "") . '>
                                <a class="qrt-mobile-fix" href="/">' . L::nav_home . '</a>
                            </li>
                            <li ' . ($active_element == "about" ? 'class="current-menu-item"' : "") . '>
                                <a class="qrt-mobile-fix" href="about-me.php">' . L::nav_about . '</a>
                            </li>
                            <li ' . ($active_element == "portfolio" ? 'class="current-menu-item"' : "") . '>
                                <a class="qrt-mobile-fix" href="portfolio.php">' . L::nav_portfolio . '</a>
                            </li>
                            <li ' . ($active_element == "contact" ? 'class="current-menu-item"' : "") . '>
                                <a class="qrt-mobile-fix" href="contact.php">' . L::nav_contact . '</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="qrt-buttons">
                <a href="contact-2.html" class="qrt-btn qrt-btn-md qrt-btn-color qrt-send-request qrt-anima-link qrt-mr-20"><span>' . L::common_sendRequest . '</span></a>
                <div class="qrt-menu-btn qrt-cursor-color qrt-cursor-scale">
                    <span></span>
                </div>
                <div class="qrt-info-btn qrt-cursor-color qrt-cursor-scale">
                    <span></span>
                </div>
            </div>
            <div class="qrt-search">
                <form>
                    <input type="text" placeholder="Enter search query" />
                </form>
            </div>
            <div class="qrt-info" id="qrt-scroll-info">
                <div class="qrt-info-frame">
                    <ul class="qrt-table">
                        <li>
                            <h5>' . L::common_country . '</h5>
                            <span>' . $owner->country . '</span>
                        </li>
                        <li>
                            <h5>' . L::common_city . '</h5>
                            <span>' . $owner->city . '</span>
                        </li>
                        <li>
                            <h5>' . L::common_email . '</h5>
                            <span><a class="qrt-cursor-scale qrt-cursor-color" href="mailto:' . $owner->email . '" data-no-swup>' . $owner->email . '</a></span>
                        </li>
                        <li>
                            <h5>' . L::common_phone . '</h5>
                            <span><a class="qrt-cursor-scale qrt-cursor-color" href="tel:' . $owner->phone . '" data-no-swup>' . $owner->phone . '</a></span>
                        </li>
                    </ul>
                    <div class="qrt-divider"></div>
                    <div class="qrt-social-links">
                        <div class="qrt-social-links">
                            <h5 class="qrt-mb-40">' . L::common_socialMedia . '</h5>
                            <ul class="qrt-social-list">
                                <li>
                                    <a href="https://www.behance.net/alexmoreno8" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-behance"></i></a>
                                </li>
                                <li>
                                    <a href="https://dribbble.com/alexmorenoac" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/alexmorenoac/" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/alexmorenoac" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="qrt-divider"></div>
                    <div class="qrt-instagram">
                        <h5 class="qrt-mb-40">Instagram</h5>
                        <div class="qrt-instagram-frame">
                            <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                                <div class="qrt-instagram-image-frame">
                                    <img src="img/projects/thumbnails/7.jpg" alt="instagram post" />
                                </div>
                            </a>
                            <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                                <div class="qrt-instagram-image-frame">
                                    <img src="img/projects/thumbnails/8.jpg" alt="instagram post" />
                                </div>
                            </a>
                            <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                                <div class="qrt-instagram-image-frame">
                                    <img src="img/projects/thumbnails/9.jpg" alt="instagram post" />
                                </div>
                            </a>
                            <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                                <div class="qrt-instagram-image-frame">
                                    <img src="img/projects/thumbnails/10.jpg" alt="instagram post" />
                                </div>
                            </a>
                            <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                                <div class="qrt-instagram-image-frame">
                                    <img src="img/projects/thumbnails/11.jpg" alt="instagram post" />
                                </div>
                            </a>
                            <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                                <div class="qrt-instagram-image-frame">
                                    <img src="img/projects/thumbnails/12.jpg" alt="instagram post" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="qrt-divider"></div>
                    <div class="qrt-copy">
                        <!-- author ( Please! Do not delete it. You are awesome! :) -->
                        <div>
                            © ' . date("Y") . ' Alex Moreno.<br />
                            ' . L::common_designBy . ':&#160;
                            <a class="qrt-cursor-scale qrt-cursor-color" href="https://themeforest.net/user/millerdigitaldesign" target="_blank">Nazar Miller</a><br/>
                            ' . L::common_developedBy . ':&#160;
                            <a class="qrt-cursor-scale qrt-cursor-color" href="https://nodeaxan.com/" target="_blank">NodeAxan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
}
