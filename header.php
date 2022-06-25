
    <!-- Navbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block after-video">
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
                        <a class="text-white px-3" href="https://web.facebook.com/lilya.delices">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <!-- <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a> -->
                        <a class="text-white px-3" href="https://www.instagram.com/lilya.delices">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <!-- <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar-f navbar nav-bar container-fluid p-0 ">
        <div class="navbar-d container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav
                class="inder-nav navbar navbar-expand-lg bg-dark navbar-dark shadow-sm w-100 py-3 py-lg-0 px-3 px-lg-0 rounded-pill ps-4">
                <a href="index.php" class="navbar-brand d-block ms-5 ">
                    <h1 class="m-0 text-uppercase text-white"><i
                            class="fa fa-birthday-cake fs-1 text-primary me-3"></i>LilyaDelices</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-lg-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?php if($pageIndex == 0)echo "active";?>">Home</a>
                        <a href="about.php" class="nav-item nav-link <?php if($pageIndex == 1)echo "active";?>">About Us</a>
                        <a href="menu.php" class="nav-item nav-link <?php if($pageIndex == 2)echo "active";?>">Menu & Pricing</a>
                        <!--  <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="service.html" class="dropdown-item">Our Service</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> -->
                    </div>
                    <a href="cart.php" class="navbar-brand d-block ">

                        <!-- <i class="fa fa-cart-arrow-down fs-2 text-primary me-3"></i> -->
                        <svg class="me-3" width="22" height="24" viewBox="0 0 12 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.875 5.125V3.25C7.875 2.21425 7.03575 1.375 6 1.375C4.96425 1.375 4.125 2.21425 4.125 3.25V5.125"
                                stroke="#E88F2A" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M10.875 12.625H1.125L1.875 5.125H10.125L10.875 12.625Z" stroke="#E88F2A"
                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </nav>
    <!-- Navbar End -->