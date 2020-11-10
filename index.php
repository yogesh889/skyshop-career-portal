<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skyshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `job_post`";
$retval = mysqli_query($conn, $sql);
if(! $retval ) {
    die('Could not get data: ' . mysql_error());
  }


?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job board | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <header>

        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">

                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">

                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="categori.html">Categories</a></li>
                                                <li><a href="#">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="about.html">about</a></li>
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog_details.html">Blog Details</a></li>
                                                        <li><a href="elements.html">Element</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="login.html">Log in</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <div class="header-right-btn d-none d-lg-block ml-65">
                                        <a href="contact.html" class="border-btn">Post a Job</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main>

        <div class="slider-area">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class=" container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">

                            <div class="hero__caption">
                                <h1>Find your dream job.</h1>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome
                                    is gleaming clothes. Placeholder text commonly used.</p>
                            </div>
                        </div>
                        <div class="col-xl-11 col-lg-12">

                            <form action="#" class="search-box">
                                <div class="input-form">
                                    <input type="text" name="keywords" placeholder="Job title or keywords">

                                    <div class="icon">
                                        <i class="fas fa-pencil-alt"></i>
                                    </div>
                                </div>
                                <div class="input-form2">
                                    <input type="text" name="state" placeholder="Where?">

                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">Category</option>
                                            <option value="">Catagories One</option>
                                            <option value="">Catagories Two</option>
                                            <option value="">Catagories Three</option>
                                            <option value="">Catagories Four</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form">
                                    <a href="#"><i class="fas fa-search"></i> Search</a>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div class="popular-search text-center pt-30">
                                <ul>
                                    <li>
                                        <p>Popular search:</p>
                                    </li>
                                    <li><a href="#">#User experience designer</a></li>
                                    <li><a href="#">#Marketing</a></li>
                                    <li><a href="#">#Programmer</a></li>
                                    <li><a href="#">#Finance</a></li>
                                    <li><a href="#">#UI designer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <section class="our-services  section-padding40 pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">

                        <div class="section-tittle text-center mb-80">
                            <h2>Browse from over <span style="color:#367FFF ;"> 2000+</span> jobs</h2>
                            <p>The automated process starts as soon as your clothes go into the machine. The outcome is
                                gleaming clothes. Placeholder text commonly used.</p>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services">
                            <div class="services-ion">
                                <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/services1.svg"
                                    alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                                <a href="#" class="more-btn">Browse Job</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services">
                            <div class="services-ion">
                                <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/services2.svg"
                                    alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                                <a href="#" class="more-btn">Browse Job</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services">
                            <div class="services-ion">
                                <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/services3.svg"
                                    alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                                <a href="#" class="more-btn">Browse Job</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services">
                            <div class="services-ion">
                                <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/services4.svg"
                                    alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                                <a href="#" class="more-btn">Browse Job</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services">
                            <div class="services-ion">
                                <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/services5.svg"
                                    alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                                <a href="#" class="more-btn">Browse Job</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services">
                            <div class="services-ion">
                                <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/services6.svg"
                                    alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Design & creatives</a></h5>
                                <p>The automated process starts as soon as your clothes go into.</p>
                                <a href="#" class="more-btn">Browse Job</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="top-jobs  section-padding40 fix pt-0">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-7 col-md-9">

                        <div class="section-tittle text-center mb-80">
                            <h2>Browse top jobs</h2>
                            <p>The automated process starts as soon as your clothes go into the machine. The outcome is
                                gleaming clothes. Placeholder text commonly used.</p>
                        </div>
                    </div>
                </div>
                <div class="container mb-4 pb-4">
<?php
while($row = mysqli_fetch_assoc($retval)) {

                    echo'<div class="card m-4">
                        <div class="card-header">
                        ' .$row["job_title"].'
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">android developer</h5>
                            <p class="card-text"><strong>Qualifications :</strong>
                            </p>
                            '. str_replace("\n", "<br>",$row["min_qualifications"]).'
                            <br>
                            <a href="job-details.php?jid='.$row["id"].'" class="btn btn-primary mt-4">Go somewhere</a>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>';
}
                    ?>
                    
                </div>
                <div class="top-job-slider">

                    <div class="single-top-jobs">
                        <div class="services-ion">
                            <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/jon-iocn1.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Design & creatives</a></h5>
                            <p>The automated process starts as soon as your clothes go into.</p>
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                        <div class="stickers">
                            <span>Remote</span>
                        </div>
                    </div>

                    <div class="single-top-jobs">
                        <div class="services-ion">
                            <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/jon-iocn2.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Design & creatives</a></h5>
                            <p>The automated process starts as soon as your clothes go into.</p>
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                        <div class="stickers">
                            <span>Remote</span>
                        </div>
                    </div>

                    <div class="single-top-jobs">
                        <div class="services-ion">
                            <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/jon-iocn3.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Design & creatives</a></h5>
                            <p>The automated process starts as soon as your clothes go into.</p>
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                        <div class="stickers">
                            <span>Remote</span>
                        </div>
                    </div>

                    <div class="single-top-jobs">
                        <div class="services-ion">
                            <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/jon-iocn4.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Design & creatives</a></h5>
                            <p>The automated process starts as soon as your clothes go into.</p>
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                        <div class="stickers">
                            <span>Remote</span>
                        </div>
                    </div>

                    <div class="single-top-jobs">
                        <div class="services-ion">
                            <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/jon-iocn5.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Design & creatives</a></h5>
                            <p>The automated process starts as soon as your clothes go into.</p>
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                        <div class="stickers">
                            <span>Remote</span>
                        </div>
                    </div>

                    <div class="single-top-jobs">
                        <div class="services-ion">
                            <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/jon-iocn2.svg" alt="">
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Design & creatives</a></h5>
                            <p>The automated process starts as soon as your clothes go into.</p>
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                        <div class="stickers">
                            <span>Remote</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="job-post  pt-top section-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="single-features mb-40 pt-60">
                            <div class="job-post-banner">
                                <img src="https://colorlib.com/preview/theme/jobhub/assets/img/gallery/job-pos-banner1.png"
                                    alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Post a job</h3>
                                <p>The automated process starts as soon as your clothes go into.</p>
                                <a href="#" class="border-btn">Post a Job</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="single-features  single-features2 mb-40 pt-60">
                            <div class="job-post-banner">
                                <img src="https://colorlib.com/preview/theme/jobhub/assets/img/gallery/job-pos-banner2.png"
                                    alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Browse for job</h3>
                                <p>The automated process starts as soon as your clothes go into.</p>
                                <a href="#" class="border-btn">Browse Job</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-area2 testimonial-area fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class=" col-lg-6 col-md-9 col-sm-9">
                        <div class="about-caption">

                            <div class="h1-testimonial-active dot-style">

                                <div class="single-testimonial">
                                    <div class="testimonial-caption">
                                        <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/quotes-sign.png"
                                            alt="" class="quotes-sign">
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts.
                                            You can select your favorite layouts & elements for cular ts with unlimited
                                            ustomization possibilities. Pixel-perfect replica;ition of thei designers
                                            ijtls intended csents your se.</p>
                                    </div>

                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/Homepage_testi.png"
                                                alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Robart Brown</span>
                                            <p>Creative designer at Colorlib</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-testimonial">
                                    <div class="testimonial-caption">
                                        <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/quotes-sign.png"
                                            alt="" class="quotes-sign">
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts.
                                            You can select your favorite layouts & elements for cular ts with unlimited
                                            ustomization possibilities. Pixel-perfect replica;ition of thei designers
                                            ijtls intended csents your se.</p>
                                    </div>

                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="https://colorlib.com/preview/theme/jobhub/assets/img/icon/Homepage_testi.png"
                                                alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Robart Brown</span>
                                            <p>Creative designer at Colorlib</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="about-img2 pt-20">
                <img src="https://colorlib.com/preview/theme/jobhub/assets/img/gallery/testimonail.png" alt="">
            </div>
        </section>


        <section class="wantToWork-area">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-7 col-lg-9 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Start finding your dream job</h2>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome
                                    is gleaming clothes placeholder text commonly used.</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 ">
                            <a href="#" class="btn f-right wantToWork-btn">Browse Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="footer-wrappper pl-100 pr-100 section-bg" data-background="assets/img/gallery/footer-bg.png">

            <div class="footer-area footer-padding">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">

                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img
                                                src="https://colorlib.com/preview/theme/jobhub/assets/img/logo/logo2_footer.png"
                                                alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>The automated process starts as soon as your clothes go into the machine.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Top categories</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>For employer</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Company</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle mb-50">
                                    <h4>Subscribe newsletter</h4>
                                    <p>Subscribe newsletter to get updates.</p>
                                </div>

                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                                                onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ' Email Address '"
                                                data-cf-modified-dcf5166b5194c47d0719b3b2-="">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="https://colorlib.com/preview/theme/jobhub/assets/img/gallery/form.png"
                                                        alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        Copyright &copy;
                                        <script
                                            type="dcf5166b5194c47d0719b3b2-text/javascript">document.write(new Date().getFullYear());</script>
                                        All rights reserved | This template is made with <i class="fa fa-heart"
                                            aria-hidden="true"></i> by <a href="https://colorlib.com"
                                            target="_blank">Colorlib</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/vendor/modernizr-3.5.0.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/vendor/jquery-1.12.4.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/popper.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/bootstrap.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.slicknav.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/owl.carousel.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/slick.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/wow.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/animated.headline.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.magnific-popup.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/gijgo.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.nice-select.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.sticky.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.barfiller.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.counterup.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/waypoints.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.countdown.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/hover-direction-snake.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/contact.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.form.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.validate.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/mail-script.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/jquery.ajaxchimp.min.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/plugins.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script src="https://colorlib.com/preview/theme/jobhub/assets/js/main.js"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="dcf5166b5194c47d0719b3b2-text/javascript"></script>
    <script type="dcf5166b5194c47d0719b3b2-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="dcf5166b5194c47d0719b3b2-|49" defer=""></script>
</body>

</html>