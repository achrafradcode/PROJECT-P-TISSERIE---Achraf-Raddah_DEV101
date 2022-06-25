<!-- Cart Start-->

    
<div class="cart cart-show  position-fixed row">
        <button type="button" class="cartButton border border-2 btn btn-primary rounded-3" data-bs-toggle="button" aria-pressed="false" autocomplete="off"><span class="fa fa-cart-arrow-down" style="font-size: xx-large;"></span></button>
        
        <div class="h-100 ">
            <div class="card h-100 p-3">
                <div class="card-header  text-center">
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h4 class="text-start text-black-50 font-primary">Shopping Cart</h4>
                            
                        </div>
                        <div class="col-md-4">
                            <h6><a href="##" onclick="removeAllCartItem()">Remove All</a></h6>
                        </div>
                    </div>
                </div>
                <div id="cart-container" class="card-body table-wrapper-scroll-y my-custom-scrollbar p-1">

                
                    <div class="d-flex m-2 ">
                        <div class="flex-shrink-0">
                            <img class="img-fluid" src="img/cake-1.jpg" alt="" style="width: 150px; height: 100%; ">
                            
                        </div>
                        <div class="d-flex flex-column w-100 justify-content-center text-start bg-secondary border-inner px-4">
                            <h5 class="text-uppercase">Cake</h5>
                            <div class="d-flex flex-row">
                                <button type="button" class="btn btn-primary btn-sm  ">-</button>
                                <span class="small px-3 pt-1">1</span>
                                <button type="button" class="btn btn-primary btn-sm rounded-circle ">+</button>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-dark text-center  w-100">

                            <h4 class=" text-primary p-2 m-0">$5</h4>
                            <span class=" text-secondary p-2 m-0"><a href="#"> Remove item</a></span>
                            
                            
                        </div>
                    </div>
                    
                        


                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col-md-5">
                            
                        </div>
                        <div class="col-md-7">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        Sub-Total <br>
                                        <span id="CartCount" class="text-dark">2 items</span>
                                    </div>
                                    <div class="col-md-6 w-50">
                                        <h2 id="CartSubTotal">$7.18</h2>
                                    </div>
                                </div>
                            </div>
                            <a href="cart.php" class="w-100 btn btn-primary" type="button" id="viewCart" value="">View Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    <!-- Carte End-->