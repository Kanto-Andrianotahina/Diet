<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Regime</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css") ?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.min.css") ?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/themify-icons.css") ?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/flaticon.css") ?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/magnific-popup.css") ?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/slick.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/gijgo.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/nice-select.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.css") ?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css") ?>">
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
                                    <div class="single_food_item media rounded shadow-sm">
                                        <!-- <img src="img/food_menu/single_food_1.png" class="mr-3" alt="..."> -->
                                        <div class="d-flex justify-content-around media-body align-self-center p-4">
                                            <h3 class="mt-3"><?php echo $codes[$i]->get_num_code() ?></h3>
                                            <!-- <p>They're wherein heaven seed hath nothing</p> -->
                                            <h3 class="mt-3 text-danger"><?=$codes[$i]->get_price() ?> Ariary</h3>
                                            <!-- <button class="btn btn-dark">Choisir</button> -->
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                
                                <div class="col-sm-6 col-lg-6">
                                    
                                    <?php for ($i = count($codes) / 2; $i < count($codes); $i++) { ?>    
                                    <div class="single_food_item media rounded shadow-sm">
                                        <!-- <img src="img/food_menu/single_food_1.png" class="mr-3" alt="..."> -->
                                        <div class="d-flex justify-content-around media-body align-self-center p-4">
                                            <h3 class="mt-3"><?php echo $codes[$i]->get_num_code() ?></h3>
                                            <!-- <p>They're wherein heaven seed hath nothing</p> -->
                                            <h3 class="mt-3 text-danger"><?=$codes[$i]->get_price() ?> Ariary</h3>
                                            <!-- <button class="btn btn-dark">Choisir</button> -->
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
            <form action="<?php echo base_url('demandController/demand') ?>" method="get">
                <input type="text" name="numero" class="form-control" placeholder="Numero">
                <input type="submit" class="btn btn-dark mt-3" value="Entrer">
            </form>
        </div>
    </section>
    <!-- food_menu part end-->