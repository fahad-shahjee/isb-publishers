<?php
// components/header.php
?>
<!-- header-search -->
<div class="search__popup">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search__wrapper">
                    <div class="search__close">
                        <button type="button" class="search-close-btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="search__form">
                        <form action="#">
                            <div class="search__input">
                                <input class="search-input-field" type="text" placeholder="Type keywords here">
                                <span class="search-focus-border"></span>
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="search-popup-overlay"></div>
<!-- header-search-end -->

<!-- header-area -->
<header>
    <div id="header-sticky" class="td-header__area td-header-spacing p-relative z-index-1">
        <div class="container container-1750">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-4 col-5">
                    <div class="tdmenu__wrap">
                        <div class="tdmenu-offcanvas-open-btn mobile-nav-toggler d-flex align-items-center justify-content-center">
                            <span class="text mr-5">menu</span>
                            <div class="tdmenu-offcanvas-open-bar">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <nav class="tdmenu__nav d-none">
                            <div class="tdmenu__navbar-wrap tdmenu__main-menu">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a href="index.php">Home</a>
                                        <ul class="sub-menu">
                                            <li class="active"><a href="index.php">Design Studio</a></li>
                                            <li><a href="index-2.php">Startup Agency</a></li>
                                            <li><a href="index-3.php">Digital Studio</a></li>
                                            <li><a href="index-4.php">Creative Agency</a></li>
                                            <li><a href="index-5.php">Digital Agency</a></li>
                                            <li><a href="index-6.php">Marketing Agency</a></li>
                                            <li><a href="index-7.php">Personal Portfolio</a></li>
                                            <li><a href="full-screen-slicer.php">Full Screen Slicer</a></li>
                                            <li><a href="interactive-links.php">Interactive links</a></li>
                                            <li><a href="showcase-carousale.php">Showcase Carousale</a></li>
                                            <li><a href="portfolio-showcase.php">Portfolio Showcase</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="service.php">Service</a></li>
                                            <li><a href="service-details.php">Service Details</a></li>
                                            <li><a href="team.php">Team</a></li>
                                            <li><a href="team-details.php">Team Details</a></li>
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="shop-details.php">Shop Details</a></li>
                                            <li><a href="pricing.php">Pricing</a></li>
                                            <li><a href="faq.php">Faq</a></li>
                                            <li><a href="error.php">Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="portfolio-two-columns.php">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li><a href="portfolio-two-columns.php">Two Columns</a></li>
                                            <li><a href="portfolio-three-columns.php">Three Columns</a></li>
                                            <li><a href="portfolio-four-columns.php">Four Columns</a></li>
                                            <li><a href="portfolio-random.php">Portfolio Random</a></li>
                                            <li><a href="portfolio-details.php">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="blog.php">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="blog-sidebar.php">Blog Sidebar</a></li>
                                            <li><a href="blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-5">
                    <div class="logo text-center">
                        <a class="logo-1" href="index.php"><img data-width="96" src="assets/img/logo/logo-black.png"
                                alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-2">
                    <div class="td-header-right text-end">
                        <button class="td-header-search search-open-btn">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00004 17.0001C13.4183 17.0001 17.0001 13.4183 17.0001 9.00004C17.0001 4.58174 13.4183 1 9.00004 1C4.58174 1 1 4.58174 1 9.00004C1 13.4183 4.58174 17.0001 9.00004 17.0001Z"
                                    stroke="#1C1D1F" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M19.0004 18.9999L14.6504 14.6499" stroke="#1C1D1F" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <a href="contact.php"
                            class="td-btn td-btn-lg d-none d-md-inline-block td-btn-switch-animation ml-10">
                            <span class="d-flex align-items-center justify-content-center">
                                <span class="btn-text"> Contact Us </span>
                                <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                                <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="tdmobile__menu td-menu-large">
        <nav class="tdmobile__menu-box">
            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
            <div class="nav-logo">
                <a href="index.php"><img data-width="96" src="assets/img/logo/logo-black.png" alt="logo"></a>
            </div>
            <div class="tdmobile__search">
                <form action="#">
                    <input type="text" placeholder="Search here...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="tdmobile__menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="mt-30 ml-25 mr-25">
                <a href="contact.php"
                    class="td-btn td-btn-menu-black w-100 d-inline-block td-btn-switch-animation ml-10">
                    <span class="d-flex align-items-center justify-content-center">
                        <span class="btn-text"> Contact Us </span>
                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                    </span>
                </a>
            </div>
            <div class="social-links">
                <ul class="list-wrap">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="tdmobile__menu-backdrop"></div>
    <!-- End Mobile Menu -->
</header>
<!-- header-area-end -->
