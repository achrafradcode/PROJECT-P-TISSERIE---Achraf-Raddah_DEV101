
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LilyaDelices </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
        $pageIndex = 0; 
    require 'header.php';?>


    
    <?php 
    require 'floatedCart.php';?>


    
    <!-- Hero Start -->
    <div class="container-fluid   mb-5 hero-header video_sectionn">


        <iframe class="" id="video_art"
            src="https://player.vimeo.com/video/642559790?title=0&amp;sidedock=0&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;title=0&amp;sidedock=0&amp;controls=0"
            allow="autoplay; encrypted-media" frameborder="0"></iframe>
        <div class="forground-video"></div>



        <div class="container after-video py-5">
            <div class="row justify-content-start ">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="font-secondary text-primary mb-4">Super Crispy Pâtisserie</h1>
                    <h1 class="display-1 text-uppercase text-white mb-4">LilyaDelices</h1>
                    <h1 class="text-uppercase text-white">The Best Pâtisserie </h1>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="" class="btn btn-primary  py-3 px-5 me-5 rounded-3">Read More</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="" disabled data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid pt-5 home-intro">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3 fade-in"
                style="max-width: 600px;">
                <h2 class="text-primary font-secondary">About Us</h2>
                <h1 class="display-4 text-uppercase">Welcome To LilyaDelices</h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 slide-in fade-in from-left"
                            src="img/LilyaDelices_img_about1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h4 class="mb-4 fade-in">Gluttony, an inexhaustible source of happiness</h4>
                    <p class="mb-5 fade-in">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et tempor sit.
                        Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et
                        tempor eirmod magna dolore erat amet magna</p>
                    <div class="row g-5 fade-in from-right">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-heartbeat fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">100% Healthy</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna
                                dolor vero</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-award fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">Award Winning</h4>
                            <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita nonumy dolor magna
                                dolor vero</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-img py-5 mb-5 fade-in from-down">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-star text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Our Experience</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">8</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Cake Specialist</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Complete Project</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">460</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Happy Clients</h6>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">20140</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Products Start -->
    <div class="container-fluid about py-5 ">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3 " style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Menu & Pricing</h2>
                <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
            </div>
            <div class="tab-class text-center ">
                <ul
                    class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5 t">
                    <li class="nav-item">
                        <a class="nav-link text-white active" data-bs-toggle="pill" href="#tab-1">Cakes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-2">Cheesecake</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-3">Muffins</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <?php for ($Category=0; $Category < 3; $Category++): ?>
                    <div id="tab-<?php echo ($Category+1);?>" class="tab-pane fade show p-0 <?php if($Category==0)echo "active show";?>">
                        <div class="row g-3 ">

                            <?php
                                require 'get-prodts.php';

                                $count = 0;
                                
                                while($row = $result->fetch((PDO::FETCH_ASSOC))): 
                                    if($count >= 9){
                                        break;
                                    }
                                    $count++;
                                    
                            ?>
                            <div class="col-lg-6  ">
                                <div class="d-flex h-100">
                                    <div class="w-100 h-100 d-flex flex-column">
                                        <div class="flex-grow-0 h-100">
                                            <img class="w-100 h-100" src="<?php echo $row['imgLink']?>" alt=""
                                            >
                                        </div>
                                        <div class="d-flex justify-content-around flex-row bg-dark text-primary p-2 m-0">
                                            <h4 class="h-100 flex-grow-0 bg-dark text-primary font-weight-bold"><?php echo $row['name']?><div>
                                                <div class="small-ratings">
                                                <?php
                                                            require 'get-prod-review-list.php';
                                                            $reviewCount = 0;
                                                            $reviewRangeTotal = 0;
                                                            
                                                            while($reviewRow = $reviewList->fetch(PDO::FETCH_ASSOC)){
                                                                $reviewCount++;
                                                                $reviewRangeTotal += $reviewRow['starRange'];
                                                            }
                                                            $reviewRange = $reviewRangeTotal/$reviewCount;

                                                            for ($i=0; $i < 5; $i++) { 
                                                                if($i<$reviewRange){
                                                                    echo '<i class="fa fa-star rating-color"></i>';
                                                                }else{
                                                                    echo '<i class="fa fa-star"></i>';

                                                                }
                                                            }
                                                            
                                                            ?>
                                                    <!-- <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> -->
                                                    <i><h5 class="review-count"><!-- (12) -->
                                                        <?php

                                                            echo "(".$reviewCount.")";
                                                        ?>
                                                    </h5>
                                                    </i>
                                                </div>
                                              </div> </h4>
                                              <div class="h-100  ">
                                                  <h4 class="bg-dark text-primary font-weight-bold">$<?php echo $row['cost']?></h4>
                                                  <button class="w-100 btn btn-primary ms-2 me-2" onclick="addToCart(this,<?php echo $row['productId']?>)">Add to Cart<i
                                                class="far fa-cart"></i></button>
                                              </div>
                                            
                                        </div>
                                    </div>
                                    <div
                                        class="flex-shrink-0  d-flex flex-column justify-content-around text-start bg-secondary border-inner px-4">
                                        <!-- <h5 class="text-uppercase">Bakery</h5> -->
                                        <span class="d-flex flex-column justify-content-center">
                                            <div class="pdetail pdetail21"><?php echo $row['mass']?></div>
                                            <div class="pdetail pdetail22"><?php echo $row['tempreture']?>°C</div>
                                            
                                            <div class="pdetail pdetail25"><?php echo $row['stockCount']?></div>
                                        </span>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <?php endwhile;?>
                        </div>
                    </div>
                    <?php endfor;?>
                    <!-- <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-3 ">
                            <div class="col-lg-6  ">
                                <div class="d-flex h-100">
                                    <div class="w-100 h-100 d-flex flex-column">
                                        <div class="flex-grow-0 h-100">
                                            <img class="w-100 h-100" src="img/Patissrie/pat01.jpg" alt=""
                                            >
                                        </div>
                                        <div class="d-flex justify-content-around flex-row bg-dark text-primary p-2 m-0">
                                            <h4 class="h-100 flex-grow-0 bg-dark text-primary font-weight-bold">Cake Manda <div>
                                                <div class="small-ratings">
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i><h5 class="review-count">(12)</h5>
                                                    </i>
                                                </div>
                                              </div> </h4>
                                            <h4 class="h-100  bg-dark text-primary font-weight-bold">$15.00</h4>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-shrink-0  d-flex flex-column justify-content-around text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Bakery</h5>
                                        <span class="d-flex flex-column justify-content-center">
                                            <div class="pdetail pdetail21">1250</div>
                                            <div class="pdetail pdetail22">-18°C</div>
                                            
                                            <div class="pdetail pdetail25">216</div>
                                        </span>
                                        <button class="btn btn-primary ms-2 me-2" onclick="addToCart('Bakery','img/cake-2.jpg',15)">Add to Cart<i
                                                class="far fa-cart"></i></button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-3 ">
                            <div class="col-lg-6  ">
                                <div class="d-flex h-100">
                                    <div class="w-100 h-100 d-flex flex-column">
                                        <div class="flex-grow-0 h-100">
                                            <img class="w-100 h-100" src="img/Patissrie/pat01.jpg" alt=""
                                            >
                                        </div>
                                        <div class="d-flex justify-content-around flex-row bg-dark text-primary p-2 m-0">
                                            <h4 class="h-100 flex-grow-0 bg-dark text-primary font-weight-bold">Cake Manda <div>
                                                <div class="small-ratings">
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i><h5 class="review-count">(12)</h5>
                                                    </i>
                                                </div>
                                              </div> </h4>
                                            <h4 class="h-100  bg-dark text-primary font-weight-bold">$15.00</h4>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-shrink-0  d-flex flex-column justify-content-around text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Bakery</h5>
                                        <span class="d-flex flex-column justify-content-center">
                                            <div class="pdetail pdetail21">1250</div>
                                            <div class="pdetail pdetail22">-18°C</div>
                                            
                                            <div class="pdetail pdetail25">216</div>
                                        </span>
                                        <button class="btn btn-primary ms-2 me-2" onclick="addToCart('Bakery','img/cake-2.jpg',15)">Add to Cart<i
                                                class="far fa-cart"></i></button>
                                    </div>
                                </div>
                            </div>
                            
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Infos Start -->
    <div class="container-fluid service position-relative px-5 mt-5 fade-in" style="margin-bottom: 135px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 fade-in from-down">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">Cake</h4>
                        <p>Cake is a flour confection made from flour, sugar, and other ingredients, and is usually baked.
                             In their oldest forms, cakes were modifications of bread, but cakes now cover a wide range of preparations that can be simple or elaborate, and which share features with desserts such as pastries, meringues, custards, and pies.</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in from-down">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">Cheesecake</h4>
                        <p>Cheesecake is a sweet dessert consisting of one or more layers. The main, and thickest, layer consists of a mixture of a soft, fresh cheese eggs, and sugar.</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in from-down">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">Muffins</h4>
                        <p>muffin is a small baked good made from batter.
                             Don't kid yourself: the only real difference between a slice of cake and a muffin is the shape.</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 text-center">
                    <h1 class="text-uppercase text-light mb-4 fade-in from-left">30% Discount For This Summer</h1>
                    <a href="menu.php" class="btn btn-primary border-inner py-3 px-5 fade-in from-right">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Infos End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="fade-in from-down section-title position-relative text-center mx-auto mb-5 pb-3"
                style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Team Members</h2>
                <h1 class="display-4 text-uppercase">Our Master Chefs</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 fade-in from-down">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div
                                class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1"
                                        href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1"
                                        href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1"
                                        href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">SCP-908</h4>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in from-down">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div
                                class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1"
                                        href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1"
                                        href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1"
                                        href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">SCP-999</h4>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in from-down">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div
                                class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1"
                                        href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1"
                                        href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1"
                                        href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">SCP-001</h4>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 fade-in from-down">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3"
                        style="max-width: 600px;">
                        <h2 class="text-primary font-secondary fade-in from-left">Special Kombo Pack</h2>
                        <h1 class="display-4 text-uppercase text-white fade-in from-right">Super Crispy Cakes</h1>
                    </div>
                    <p class="text-white mb-4 fade-in">an irresistible taste and a unique texture by @Lilya.Delices #breadbylilya</p>
                    <a href="menu.php" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                    <a href="about.php" class="btn btn-dark border-inner py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="fade-in from-down section-title position-relative text-center mx-auto mb-5 pb-3"
                style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Testimonial</h2>
                <h1 class="display-4 text-uppercase">Our Clients Say!!!</h1>
            </div>
            <div class="fade-in from-down owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg"
                            style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">SCP-069</h4>
                            <span>Object Class: Safe</span>
                        </div>
                    </div>
                    <p class="mb-0">attention on █/██/199█ following reports of one John M███████, a █████████ City firefighter who miraculously emerged alive
                    </p>
                </div>
                
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg"
                            style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">SCP-076</h4>
                            <span>Object Class: Keter</span>
                        </div>
                    </div>
                    <p class="mb-0">A massive manhunt, lasting over three (3) years and ████ ███████, took place until SCP-076-2 was incapacitated by ██████████ ███████,
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg"
                            style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">SCP-996</h4>
                            <span>Object Class: Keter</span>
                        </div>
                    </div>
                    <p class="mb-0">A m█████████████████████████████████████████████████, took place until SCP-996-2 was ███████ by ██████████ ███████,
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <?php require 'footer.php';?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    
    <script src="js/main.js">
        
    </script>
</body>

</html>