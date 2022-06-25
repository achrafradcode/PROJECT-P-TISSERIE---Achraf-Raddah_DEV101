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
        $pageIndex = -1; 
    require 'header.php';?>





    <!-- Cart Start -->
    <div class="container w-100 py-5 px-1">
        <div class="section-title position-relative text-start  mb-5 pb-3" style="max-width: 600px;">
            <h1 class="display-4 text-uppercase">Cart <span id="CartCount" class="display-5">(0)</span></h1>
        </div>
        <div class=" text-center">
        <div class="d-flex flex-row justify-content-around">
            <div class=" w-100 m-3">
                
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="cart-container">
                            <tr>
                                <td scope="row" class="d-flex justify-content-start"> 
                                        <img style="width: 90px;"  src="img/Patissrie/pat01.jpg" alt="">
                                    <div class="mx-3 d-flex flex-column justify-content-around">
                                        <h5 class="text-primary item-name">Cake</h5>
                                        <h6 class="text-dark item-code">#40042</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="h-100 py-4">$8.95</div>
                                </td>
                                <td>
                                    
                                    <div class="d-flex flex-row justify-content-around py-4">
                                        <button type="button" class="btn btn-primary btn-sm  " onclick="decreaseCount(0);">-</button>
                                        <span class="small px-3 pt-1">1</span>
                                        <button type="button" class="btn btn-primary btn-sm rounded-circle " onclick="increaseCount(0);">+</button>
                                    </div>
                                    
                                </td>
                                <td>
                                    <h5 class="h-100 py-4">$8.95</h5>
                                </td>
                                <td>
                                    <button type="button" class="my-3 btn btn-danger btn-md " onclick="removeCartItem(0);">x</button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                
            </div>
                <div class=" w-50 m-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>OrderSummary</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">
                                <div class="d-flex justify-content-xxl-around">
                                    <h4 class="w-100 text-start">Subtotal:</h4>
                                    <span class="w-100 text-end " id="CartSubTotal">$8.95</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <div class="d-flex justify-content-xxl-around">
                                    <h4 class="w-100 text-start">Shipping:</h4>
                                    <span class="w-100 text-end">Calculated in Checkout</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <div class="d-flex justify-content-xxl-around">
                                    <h4 class="w-100 text-start">Grand total:</h4>
                                    <h3 class="tew-100 xt-end" id="CartGrandTotal">$8.95</h3>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                <a name="" id="viewCart" class="btn btn-primary w-100" href="checkout.php" role="button">CHECK OUT</a>
                
            </div>
        </div>
        
    </div>
     
    </div>
    <!-- Cart End -->







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
    <script>
        updateCartPage();
    
    
    
    
    
    
    function updateCartPage(){
    
    
    console.log("1");
    var cart_container = document.getElementById("cart-container");
    var Cart_Count = document.getElementById("CartCount");
    var Cart_Sub_Total = document.getElementById("CartSubTotal");
    var Cart_Grand_Total = document.getElementById("CartGrandTotal");
    
    let prixTotal = 0;
    cart_container.innerHTML = "";
    for(var i = 0 ; i < listProducts.length ;i++){
    // cart_container.innerHTML += "<div class=\"d-flex m-2 \"><div class=\"flex-shrink-0\"><img class=\"img-fluid\" src=\""+listProducts[i].img+"\" alt=\"\" style=\"width: 150px; height: 85px;\"><h4 class=\"bg-dark text-primary p-2 m-0\">$"+listProducts[i].price+"</h4></div><div class=\"d-flex flex-column w-100 justify-content-center text-start bg-secondary border-inner px-4\"><h5 class=\"text-uppercase\">"+listProducts[i].name+"</h5> </div></div>";
    cart_container.innerHTML += ' <tr> <td scope="row" class="d-flex justify-content-start">  <img style="width: 90px;"  src="'+listProducts[i].img+'" alt=""> <div class="mx-3 d-flex flex-column justify-content-around">  <h5 class="text-primary item-name">'+listProducts[i].name+'</h5> <h6 class="text-dark item-code">#'+listProducts[i].id+'</h6> </div> </td> <td> <div class="h-100 py-4">$'+listProducts[i].price+'</div> </td><td> <div class="d-flex flex-row justify-content-around py-4"> <button type="button" class="btn btn-primary btn-sm  " onclick="decreaseCount('+i+');">-</button> <span class="small px-3 pt-1">'+listProducts[i].count+'</span> <button type="button" class="btn btn-primary btn-sm rounded-circle " onclick="increaseCount('+i+');">+</button> </div></td><td><h5 class="h-100 py-4">$'+listProducts[i].price*listProducts[i].count+'</h5></td>  <td><button type="button" class="my-3 btn btn-danger btn-md " onclick="removeCartItem('+i+');">x</button></td></tr>';
    prixTotal += listProducts[i].price*listProducts[i].count;
    }
    
    Cart_Count.innerHTML ="("+listProducts.length+")";
    Cart_Sub_Total.innerHTML = "$"+prixTotal;
    Cart_Grand_Total.innerHTML = "$"+prixTotal;
    console.log("2");
    }
    </script>
</body>

</html>