<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$isActive = function ($files) use ($currentPage) {
	$files = (array) $files;
	return in_array($currentPage, $files, true);
};
?>
<header>

<div id="header-sticky" class="td-header__area td-header-spacing td-header-5-wrapper td-header-about-wrapper p-relative z-index-1">
    <div class="container-fluid container-1710">
        <div class="row align-items-center">
            <div class="col-xxl-2 col-xl-2 col-4">
                <div class="logo">
                    <a class="logo-1" href="index.php"><img data-width="96" src="assets/img/logo/logo-black.png" alt="Logo"></a>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-7 d-none d-xl-block">
                <div class="tdmenu__wrap tdmenu-2-wrap text-center">
                    <nav class="tdmenu__nav">
                        <div class="tdmenu__navbar-wrap tdmenu__main-menu">
                            <ul class="navigation">
                                <li class="menu-item-has-children<?php if ($isActive('index.php')) echo ' active'; ?>"><a href="index.php">Home</a>
                                </li>
                                <li<?php echo $isActive('about.php') ? ' class="active"' : ''; ?>><a href="about.php">About</a></li>
                                <li<?php echo $isActive('service.php') ? ' class="active"' : ''; ?>><a href="service.php">Service</a>
                                <ul class="sub-menu">
                                    <li><a href="/services-pages/ghostwriting.php">Ghostwriting</a></li>
                                    <li><a href="/services-pages/editing-proofreading.php">Editing & Proofreading</a></li>
                                    <li><a href="/services-pages/illustration.php">Illustration</a></li>
                                    <li><a href="/services-pages/publishing-strategy.php">Publishing Strategy</a></li>
                                    <li><a href="/services-pages/marketing-plan.php">Marketing Plan</a></li>
                                </ul>
                                </li>
                                <li<?php echo $isActive('portfolio.php') ? ' class="active"' : ''; ?>><a href="portfolio.php">Portfolio</a></li>
                                <li class="menu-item-has-children<?php if ($isActive('blog.php')) echo ' active'; ?>"><a href="blog.php">Blog</a>
                                <li<?php echo $isActive('contact.php') ? ' class="active"' : ''; ?>><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-3 col-8">
                <div class="td-header-right text-end">
                    <a class="td-btn-12" href="contact.php">Let’s Talk</a>
                     <div class="d-inline-block ml-10">
                         <div class="tdmenu-offcanvas-open-btn mobile-nav-toggler">
                            <div class="tdmenu-offcanvas-open-bar d-inline-block">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                     </div>
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
            <a href="index.html"><img data-width="96" src="assets/img/logo/logo-black.png" alt="logo"></a>
        </div>
        <div class="tdmobile__search">
            <form action="#">
                <input type="text" placeholder="Search here...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="tdmobile__menu-outer d-xl-none">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="offCanvas__side-info mb-30 d-none ml-25 mr-25 d-xl-block">
            <div class="contact-list mb-30">
                <h4>Office Address</h4>
                <p>1322 N Pine Hills Road, Orlando, Fl, 32808</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Phone Number</h4>
                <p>(786) 949-4620</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Email Address</h4>
                <p>info@isbpublisher.com</p>
            </div>
        </div>
        <div class="mt-30 ml-25 mr-25">
            <a href="contact.php" class="td-btn td-btn-menu-black w-100 d-inline-block td-btn-switch-animation ml-10">
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