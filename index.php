<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RentHouse - Rent House HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php require('navbar.php');?>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Bizning ofisimiz</h5>
                            <p class="m-0">Toshkent shaxar KIUT university</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email</h5>
                            <p class="m-0">RentHOUSE@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Aloqa uchun</h5>
                            <p class="m-0">+99890-123-45-67</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/home1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Betakror ko'rinish</h4>
                            <h3 class="display-3 text-white mb-md-4">Hovli uy</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Ko'proq</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/home2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">O'zgacha manzara</h4>
                            <h3 class="display-3 text-white mb-md-4">Ko'ngilochar uylar</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Ko'proq</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/home3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Ixcham va qulay uy</h4>
                            <h3 class="display-3 text-white mb-md-4">Katejlar</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Ko'proq</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/home4.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Ko'p qavatli turarjoy kvartiralari</h4>
                            <h3 class="display-3 text-white mb-md-4">Kvartira turarjoyi</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Ko'proq</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <img class="logo" src="img/kiut.png" alt="Image">
                        <h4 class="display-3 mb-3">2</h4>
                        <h1 class="m-0">KIUT talabalari</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Biz haqimizda</h6>
                    <h1 class="mb-4 section-title">O'zbekiston ichidagi eng arzon va hashamdor uylar ijarasi</h1>
                    <p>Bizning RentHOUSE uylarimizni ijaraga oling . Ushbu loyiha hozirda amalda qollanmagan bo'lsada keyinchalik o'z o'rnini O'zbekistondagi 1-o'rinda turuvchi uy ijarasi o'rnini egallaydi. </p>
                    <div class="row py-2">
                        
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Qulay sharoyit</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Hashamdor ko'rinish</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Uy jihozlari</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                    <h1 class="mb-4 section-title">Awesome Interior Designing Services For Your Home</h1>
                    <p>Invidunt lorem justo clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bedroom Design</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Kitchen Design</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bathroom Design</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                    <h1 class="mb-4 section-title">25+ Years Experience In The Interior Design Industry</h1>
                    <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>25+ Years Experience</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li>
                    </ul>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Projects Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Projects</h6>
                    <h1 class="mb-4">Some Of Our Awesome Interior Designing Projects</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">Complete</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">Running</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">Upcoming</li>
                    </ul>
                </div>
            </div>
            <div class="row mx-1 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-5.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="img/portfolio-6.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->




    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-7 py-5 pr-md-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonial</h6>
                    <h1 class="mb-4 section-title">What Our Clients Say</h1>
                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5>Client Name</h5>
                                    <i>Profession</i>
                                </div>
                            </div>
                            <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor  lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5>Client Name</h5>
                                    <i>Profession</i>
                                </div>
                            </div>
                            <p class="m-0">Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor  lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/testimonial.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Blog</h6>
                    <h1 class="mb-4">Read The Latest News & Articles From Our Blog</h1>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/blog-1.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Diam amet eos at no eos</h5>
                            </div>
                            <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/blog-2.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Diam amet eos at no eos</h5>
                            </div>
                            <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/blog-3.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Diam amet eos at no eos</h5>
                            </div>
                            <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Newsletter</h4>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>