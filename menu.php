<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LilyaDelices</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

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
        $pageIndex = 2; 
    require 'header.php';?>

<?php 
    require 'floatedCart.php';?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img mb-5" style="
    padding-top: 100px;
    padding: 100px;
    margin-top: -50px;
    ">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Menu & Pricing</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">About</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->




    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-start  mb-5 pb-3" style="max-width: 600px;">
                <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
            </div>
            <div class="tab-class text-center">
                
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-3 ">
                            <?php
                                require 'get-prodts.php';
                                
                                while($row = $result->fetch((PDO::FETCH_ASSOC))): 
                                
                            ?>
                            <div class="col-md-4  ">
                                <div class="d-flex flex-column h-100">
                                    <div class="w-100 h-100 d-flex flex-column bg-dark">
                                        <div class="flex-grow-0 h-100">
                                            <img class="w-100 h-100" src="<?php echo $row['imgLink']?>" alt=""
                                            >
                                        </div>
                                        <div class="d-flex justify-content-around flex-row bg-dark text-primary p-2 m-0">
                                            <h4 class="h-100 flex-grow-0 bg-dark text-primary font-weight-bold"> <?php echo $row['name']?> <div>
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
                                                    </i>
                                                </div>
                                              </div> </h4>
                                            <h4 class="h-100  bg-dark text-primary font-weight-bold">$<?php echo $row['cost']?></h4>
                                        </div>
                                        <button class="btn btn-primary m-2 rounded rounded-3" onclick="addToCart(this,<?php echo $row['productId']?>">Add to Cart<i
                                                class="far fa-cart"></i></button>
                                    </div>
                                    <div class="flex-shrink-0 p-2  d-flex flex-column justify-content-around text-start bg-secondary border-inner px-4">
                                        
                                        <span class="d-flex flex-column justify-content-center">
                                            <div class="pdetail pdetail21"><?php echo $row['mass']?></div>
                                            <div class="pdetail pdetail22"><?php echo $row['tempreture']?>°C</div>
                                            
                                            <div class="pdetail pdetail25"><?php echo $row['stockCount']?></div>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile;?>

                            <!-- 
                            <div class="col-md-4  ">
                                <div class="d-flex flex-column h-100">
                                    <div class="w-100 h-100 d-flex flex-column bg-dark">
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
                                        <button class="btn btn-primary m-2 rounded rounded-3" onclick="addToCart('Bakery','img/cake-2.jpg',15)">Add to Cart<i
                                                class="far fa-cart"></i></button>
                                    </div>
                                    <div class="flex-shrink-0 p-2  d-flex flex-column justify-content-around text-start bg-secondary border-inner px-4">
                                        
                                        <span class="d-flex flex-column justify-content-center">
                                            <div class="pdetail pdetail21">1250</div>
                                            <div class="pdetail pdetail22">-18°C</div>
                                            
                                            <div class="pdetail pdetail25">216</div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4  ">
                                <div class="d-flex flex-column h-100">
                                    <div class="w-100 h-100 d-flex flex-column bg-dark">
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
                                        <button class="btn btn-primary m-2 rounded rounded-3" onclick="addToCart('Bakery','img/cake-2.jpg',15)">Add to Cart<i
                                                class="far fa-cart"></i></button>
                                    </div>
                                    <div class="flex-shrink-0 p-2  d-flex flex-column justify-content-around text-start bg-secondary border-inner px-4">
                                        
                                        <span class="d-flex flex-column justify-content-center">
                                            <div class="pdetail pdetail21">1250</div>
                                            <div class="pdetail pdetail22">-18°C</div>
                                            
                                            <div class="pdetail pdetail25">216</div>
                                        </span>
                                    </div>
                                </div>
                            </div>
 -->                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
     
    </div>
    <!-- Products End -->


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


    <script src="js/main.js"></script>
</body>

</html>