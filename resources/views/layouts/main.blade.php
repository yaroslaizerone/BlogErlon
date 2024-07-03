<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/all.min.css">
    <link href="assets/vendors/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
</head>
<body>
    <div class="edica-loader"></div>
    <header class="edica-header edica-landing-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg" alt="Edica"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                <a class="dropdown-item" href="blog.html">Blog Archive</a>
                                <a class="dropdown-item" href="blog-single.html">Blog Post</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                <a class="dropdown-item" href="404.html">404</a>
                                <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> Eng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Download</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="edica-landing-header-content">
               <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                       <li data-target="#edicaLandingHeaderCarousel" data-slide-to="0" class="active">.01</li>
                       <li data-target="#edicaLandingHeaderCarousel" data-slide-to="1">.02</li>
                       <li data-target="#edicaLandingHeaderCarousel" data-slide-to="2">.03</li>
                   </ol>
                   <div class="carousel-inner" role="listbox">
                       <div class="carousel-item active">
                           <div class="row">
                               <div class="col-md-6 carousel-content-wrapper">
                                   <h1 >Get Started Power social proof for your brands.</h1>
                                   <p>He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement.</p>
                                   <div class="carousel-content-btns">
                                       <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App Store</a>
                                       <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i>  Google Play</a>
                                    </div>
                               </div>
                               <div class="col-md-6 carousel-img-wrapper">
                                   <img src="assets/images/Slider_1.png" alt="carousel-img" class="img-fluid" width="350px">
                               </div>
                           </div>
                       </div>
                       <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 carousel-content-wrapper">
                                    <h1>Get Started Power social proof for your brands.</h1>
                                    <p>He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement.</p>
                                    <div class="carousel-content-btns">
                                        <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App Store</a>
                                        <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Google Play</a>
                                    </div>
                                </div>
                                <div class="col-md-6 carousel-img-wrapper">
                                    <img src="assets/images/Slider_1.png" alt="carousel-img" class="img-fluid" width="350px">
                                </div>
                            </div>
                       </div>
                       <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 carousel-content-wrapper">
                                    <h1>Get Started Power social proof for your brands.</h1>
                                    <p>He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement.</p>
                                    <div class="carousel-content-btns">
                                        <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App Store</a>
                                        <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Google Play</a>
                                    </div>
                                </div>
                                <div class="col-md-6 carousel-img-wrapper">
                                    <img src="assets/images/Slider_1.png" alt="carousel-img" class="img-fluid" width="350px">
                                </div>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </header>

    @yield('content')

    <main>
        <section class="edica-landing-section edica-landing-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up-right">
                        <h4 class="edica-landing-section-subtitle-alt">ABOUT US</h4>
                        <h2 class="edica-landing-section-title">1000+ customer using Our application.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipng elit, sed do eiusmod tempor incididunt ut labore aliqua. Ut enim que minim veniam, quis nostrud exercitation.</p>
                        <ul class="landing-about-list">
                            <li>Powerful and flexible theme</li>
                            <li>Simple, transparent pricing</li>
                            <li>Build tools and full documention</li>
                        </ul>
                    </div>
                    <div class="col-md-6" data-aos="fade-up-left">
                        <img src="assets/images/phone-copy.png" width="468px" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-clients">
            <div class="container">
                <h4 class="edica-landing-section-subtitle-alt">PARTNER WITH US</h4>
                <div class="partners-wrapper">
                    <img src="assets/images/Partner_1.png" alt="client logo" data-aos="flip-right" data-aos-delay="250">
                    <img src="assets/images/Partner_2.png" alt="client logo" data-aos="flip-right" data-aos-delay="500">
                    <img src="assets/images/Partner_3.png" alt="client logo" data-aos="flip-right" data-aos-delay="750">
                    <img src="assets/images/Partner_4.png" alt="client logo" data-aos="flip-right" data-aos-delay="1000">
                    <img src="assets/images/Partner_5.png" alt="client logo" data-aos="flip-right" data-aos-delay="1250">
                    <img src="assets/images/Partner_6.png" alt="client logo" data-aos="flip-right" data-aos-delay="1500">
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-services">
            <div class="container">
                <h4 class="edica-landing-section-subtitle">Service We Offer</h4>
                <h2 class="edica-landing-section-title">What features you will <br> Get from App.</h2>
                <div class="row">
                    <div class="col-md-6 landing-service-card" data-aos="fade-right">
                        <img src="assets/images/picture.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Live Video</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-left">
                        <img src="assets/images/internet.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Secure and Reliable</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-right">
                        <img src="assets/images/goal.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Fast. Instantly.</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-left">
                        <img src="assets/images/chat-bubble.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Built-in Messenger</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-testimonials" data-aos="fade-up">
            <div class="container">
                <div id="edicaLandingTestimonialCarousel" class="carousel slide landing-testimonial-carousel" data-ride="carousel">
                    <div class="text-center py-4">
                        <img src="assets/images/quote.svg" alt="quote">
                    </div>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item active">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="0">
                            <img src="assets/images/oval-copy-3.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="1">
                            <img src="assets/images/oval-copy-4.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="2" class="active">
                            <img src="assets/images/oval.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>

                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="3">
                            <img src="assets/images/oval-copy.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="4">
                            <img src="assets/images/oval-copy-2.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog">
            <div class="container">
                <h4 class="edica-landing-section-subtitle" data-aos="fade-up">Blog posts</h4>
                <h2 class="edica-landing-section-title" data-aos="fade-up">Check our app latest blog post <br> for more update.</h2>
                <div class="row">
                    <div class="col-md-4 landing-blog-post" data-aos="fade-right">
                        <img src="assets/images/rectangle.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-up">
                        <img src="assets/images/rectangle-copy.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-left">
                        <img src="assets/images/rectangle-copy-2.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog-posts">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-1 mb-4 mb-md-0" data-aos="fade-right">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Check our latest blog post for more update.</h2>
                            <a href="#!" class="post-link">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-2" data-aos="fade-left">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Check our latest blog post for more update.</h2>
                            <a href="#!" class="post-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <h1 class="banner-title">Download it now.</h1>
                <div class="banner-btns-wrapper">
                    <button class="btn btn-success"> <img src="assets/images/apple@1x.svg" alt="ios" class="mr-2"> App Store</button>
                    <button class="btn btn-success"> <img src="assets/images/android@1x.svg" alt="android" class="mr-2"> Google Play</button>
                </div>
                <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p>
            </div>
        </div>
    </section>
    <footer class="edica-footer" data-aos="fade-up">
        <div class="container">
            <div class="row footer-widget-area">
                <div class="col-md-3">
                    <a href="index.html" class="footer-brand-wrapper">
                        <img src="assets/images/logo.svg" alt="edica logo">
                    </a>
                    <p class="contact-details">hello@edica.com</p>
                    <p class="contact-details">+23 3000 000 00</p>
                    <nav class="footer-social-links">
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                        <a href="#!"><i class="fab fa-behance"></i></a>
                        <a href="#!"><i class="fab fa-dribbble"></i></a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a href="#!" class="nav-link">Company</a>
                        <a href="#!" class="nav-link">Android App</a>
                        <a href="#!" class="nav-link">ios App</a>
                        <a href="#!" class="nav-link">Blog</a>
                        <a href="#!" class="nav-link">Partners</a>
                        <a href="#!" class="nav-link">Careers</a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a href="#!" class="nav-link">FAQ</a>
                        <a href="#!" class="nav-link">Reporting</a>
                        <a href="#!" class="nav-link">Block Storage</a>
                        <a href="#!" class="nav-link">Tools & Integrations</a>
                        <a href="#!" class="nav-link">API</a>
                        <a href="#!" class="nav-link">Pricing</a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <div class="dropdown footer-country-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                   <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i class="fas fa-chevron-down ml-2"></i>
                                </button>
                        <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                            <button class="dropdown-item" href="#">
                                    <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                                </button>
                            <button class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-content">
                <nav class="nav footer-bottom-nav">
                    <a href="#!">Privacy & Policy</a>
                    <a href="#!">Terms</a>
                    <a href="#!">Site Map</a>
                </nav>
                <p class="mb-0">© Edica. 2020 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">bootstrapdash</a> . All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="assets/vendors/popper.js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendors/aos/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        AOS.init({
            duration: 2000
        });
      </script>
</body>
</html>
