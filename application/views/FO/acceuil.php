<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dingo</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/css/bootstrap.min.css") ?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/css/animate.css") ?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/css/owl.carousel.min.css") ?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/css/themify-icons.css") ?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/css/flaticon.css") ?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/css/magnific-popup.css") ?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/css/slick.css") ?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/gijgo.min.css") ?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/nice-select.css") ?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/all.css") ?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css") ?>">
</head>

<body>


    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="food_menu.html">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="chefs.html">Chefs</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html">Blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_btn">
                            <a href="#" class="btn_1 d-none d-sm-block">book a tabel</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    <!-- banner part start-->
    <!-- <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Expensive but the best</h5>
                            <h1>Deliciousness jumping into the mouth</h1>
                            <p>Together creeping heaven upon third dominion be upon won't darkness rule land
                                behold it created good saw after she'd Our set living. Signs midst dominion
                                creepeth morning</p>
                            <div class="banner_btn">
                                <div class="banner_btn_iner">
                                    <a href="#" class="btn_2">Reservation <img src="img/icon/left_1.svg" alt=""></a>
                                </div>
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup">
                                    <span><img src="img/icon/play.svg" alt=""></span> Watch our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- banner part start -->


    <!--::regervation_part start::-->
    <!-- <section class="regervation_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Suggestion</p>
                        <h2>Regime</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="regervation_part_iner">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Name *">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Email address *">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Select">
                                        <option value="1" selected>Persons *</option>
                                        <option value="2">Number of guests 1</option>
                                        <option value="3">Number of guests 2</option>
                                        <option value="4">Number of guests 3</option>
                                        <option value="5">Number of guests 4</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="pnone" placeholder="Phone number *">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group date">
                                        <input id="datepicker" type="text" class="form-control" placeholder="Date *" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Select2">
                                        <option value="" selected>Time *</option>
                                        <option value="1">8 AM TO 10AM</option>
                                        <option value="1">10 AM TO 12PM</option>
                                        <option value="1">12PM TO 2PM</option>
                                        <option value="1">2PM TO 4PM</option>
                                        <option value="1">4PM TO 6PM</option>
                                        <option value="1">6PM TO 8PM</option>
                                        <option value="1">4PM TO 10PM</option>
                                        <option value="1">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4"
                                        placeholder="Your Note *"></textarea>
                                </div>
                            </div>


                            <div class="regerv_btn">
                                <a href="#" class="btn_4">Book A Table</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::regervation_part end::-->


    <!--::exclusive_item_part start::-->
    <!-- <section class="exclusive_item_part blog_item_section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Popular Dishes</p>
                        <h2>Our Exclusive Items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/food_item/food_item_1.png" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Indian Burger</h3>
                            <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/food_item/food_item_2.png" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Cremy Noodles</h3>
                            <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/food_item/food_item_3.png" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Honey Meat</h3>
                            <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 d-none d-sm-block d-lg-none">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/food_item/food_item_1.png" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Cremy Noodles</h3>
                            <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::exclusive_item_part end::-->

    <!-- food_menu start-->
    <section class="food_menu gray_bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <p>Code d'achat</p>
                        <h2>Acheter des credits pour vos commandes</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active single-member" id="Special" role="tabpanel"
                            aria-labelledby="Special-tab">
                            <div class="row">
                                
                                <div class="col-sm-6 col-lg-6">
                                    <?php for ($i = 0; $i < count($codes) / 2; $i++) { ?>    
                                    <div class="single_food_item media">
                                        <!-- <img src="img/food_menu/single_food_1.png" class="mr-3" alt="..."> -->
                                        <div class="d-flex justify-content-around media-body align-self-center p-4">
                                            <h3 class="mt-3"><?=$codes[$i]->get_num_code() ?></h3>
                                            <!-- <p>They're wherein heaven seed hath nothing</p> -->
                                            <h3 class="mt-3 text-danger"><?=$codes[$i]->get_price() ?> Ariary</h3>
                                            <button class="btn btn-dark">Choisir</button>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                
                                <div class="col-sm-6 col-lg-6">
                                    
                                    <?php for ($i = count($codes) / 2; $i < count($codes); $i++) { ?>    
                                    <div class="single_food_item media">
                                        <!-- <img src="img/food_menu/single_food_1.png" class="mr-3" alt="..."> -->
                                        <div class="d-flex justify-content-around media-body align-self-center p-4">
                                            <h3 class="mt-3"><?=$codes[$i]->get_num_code() ?></h3>
                                            <!-- <p>They're wherein heaven seed hath nothing</p> -->
                                            <h3 class="mt-3 text-danger"><?=$codes[$i]->get_price() ?> Ariary</h3>
                                            <button class="btn btn-dark">Choisir</button>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto w-50 bg-white p-4 rounded">
            <form action="demandController/demand" method="get">
                <input type="text" name="numero" class="form-control" placeholder="Numero">
                <input type="submit" class="btn btn-dark mt-3" value="Entrer">
            </form>
        </div>
    </section>
    <!-- food_menu part end-->




    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <p>Heaven fruitful doesn't over for these theheaven fruitful doe over days
                            appear creeping seasons sad behold beari ath of it fly signs bearing
                            be one blessed after.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-2 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Important Link</h4>
                        <div class="contact_info">
                            <ul>
                                <li><a href="#">WHMCS-bridge</a></li>
                                <li><a href="#"> Search Domain</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#"> Our Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span>Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-footer-widget footer_3">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping seas</p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Email Address'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright_part_text">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-lg-4">
                        <div class="copyright_social_icon text-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="ti-dribbble"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>