<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>MY Portfolio </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
        <link rel="stylesheet" href="css/bootstrap.css">

        <link rel="stylesheet" href="css/style.css">


    </head>

    <body>
    <div class="preloader">
            <div class="loader "></div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class='navbar-brand logo' href='/'>
                    ANGE ELYSE
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-scroll-nav="0" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="1" >About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="2" >Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="3">Works</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="4">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="home" class="banner" style="background-image: url('images/background/home-banner-bg.jpg')" data-stellar-background-ratio=".7" data-scroll-index="0">
            <div class="container">
                <div class="banner-caption">
                    <h1>Hi! I'm IZERE Ange Elyse.</h1>
                    <p class="cd-headline clip mt-30">
                        <span>Creative Designer & Developer located in Kigali Rwanda.</span><br>
                        <span class="blc">Specialized in</span>
                            <b class="is-visible">Creating Websites. and Designing UI/UX.</b>
                            <b></b>
                        </span>
                    </p>
                </div>
                
                <div class="arrow bounce">
                    <a class="fa fa-chevron-down fa-2x" href="#" data-scroll-nav="1"></a>
                </div>
            </div>
            
        </section>

        <section class="about pt-100 pb-100" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="images/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">


                        <div class="about-content">
                            <div class="about-heading">
                                <h2>About Me.</h2>
                                <span>UI/UX Designer & Web Developer</span>
                            </div>
                            <p>I'm <b>IZERE Ange Elyse</b>Highly motivated Information Technology student at IPRC Tumba with a focus
                             on software development. Known for intelligence, strong problem-solving skills, and a passion 
                             for learning new technologies.</p>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <span class="about-button">
                                <a class="main-btn" href="#">Download CV</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services bg-gray pt-100 pb-50" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Services</h6>
                            <h2>What I Can Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-laptop"></i>
                            </span>
                            <h4>Web Design</h4>
                            <p>Responsive Web Design <br> UI/UX Design<br>.Website Redesign <br> Graphic Design</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa-brands fa-android"></i>
                            </span>
                            <h4>Web Development</h4>
                            <p>Frontend Development  <br>Backend Development<br>  Full Stack Development <br> E-commerce Development <br> CMS Development</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                       
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-rocket"></i>
                            </span>
                            <h4>Mobile App Development</h4>
                            <p>iOS and Android Development<br>Cross-platform Development<br>Mobile App Design</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-support"></i>
                            </span>
                            <h4>Software Development Services</h4>
                            <p>Custom Software Development<br>API Development and Integration<br>Database Design and Management</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="portfolio pt-100 pb-70" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Portfolio</h6>
                            <h2>Work I Have Done</h2>
                        </div>
                        <div class="portfolio-filter text-center">
                            <ul>
                                <li class="sel-item" data-filter="*">All</li>
                                <li data-filter=".design">Web Design</li>
                                <li data-filter=".application">Applications</li>
                                <li data-filter=".development">Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row portfolio-items">
                    <div class="col-lg-4 col-md-6 item application">
                        <div class="item-content">
                            <img src="images/portfolio/img-1.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Application</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="images/portfolio/img-1.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item design">
                        <div class="item-content">
                            <img src="images/portfolio/img-2.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Web Design</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="images/portfolio/img-2.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item development">
                        <div class="item-content">
                            <img src="images/portfolio/img-3.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Application</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="images/portfolio/img-3.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item design development">
                        <div class="item-content">
                            <img src="images/portfolio/img-4.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Development</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="images/portfolio/img-4.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item development application">
                        <div class="item-content">
                            <img src="images/portfolio/img-5.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Web Design</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="images/portfolio/img-5.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Item-->
                    <div class="col-lg-4 col-md-6 item application development">
                        <div class="item-content">
                            <img src="images/portfolio/img-6.jpg" alt="">
                            <div class="item-overlay">
                                <h6>Web Design</h6>
                                <div class="icons">
                                    <span class="icon link">
                                        <a href="images/portfolio/img-6.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Section End-->

        <!--Contact Section Start-->
        <section class="contact pt-100 pb-100" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading">
                            <h6>Contact</h6>
                            <h2>Get In Touch</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <!--Contact Form-->
                        <form id='contact-form' method='POST'><input type='hidden' name='form-name' value='contactForm' />
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <!--name-->
                                    <input type="text" class="form-control con-validate" id="contact-name" placeholder="Name" minlength=3 >
                                </div>
                                <div class="col-md-6 form-group">
                                    <!--email-->
                                    <input type="email" class="form-control con-validate" id="contact-email" placeholder="Email" >
                                </div>
                                <div class="col-md-12 form-group">
                                    <!--message box-->
                                    <textarea class="form-control con-validate" id="contact-message" placeholder="How can we help you?" rows=6 ></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <!--contact button-->
                                    <button id="contact-submit" class="mt-30 main-btn">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Section End-->

        <!--Footer Start-->
        <footer class="pt-50 pb-50">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Ange Elyse</h5>
                            <p>Software developer</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Phone No.</h5>
                            <p>(+250) 791266118</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Email</h5>
                            <p>izereangelyse01@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Address</h5>
                            <p>Rwanda, Kigali</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <hr>
                        <p class="copy pt-30">
                            Angelyse &copy; 2024. All Right Reserved, Designed By IZERE Ange Elyse.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->

        <script src="js/jquery.min.js"></script>
        <script src="js/scrollIt.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>

