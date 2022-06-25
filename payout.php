<?php

$state = 0;
if(isset( $_POST['sub'])){

    
    try{
        require 'db.php';
        
        $listProducts = json_decode( $_POST['listProducts']);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $codepostal = $_POST['codepostal'];
        
        
        if(count( $listProducts)==0){
            // die();
            return;
        }
        
        $connection->exec("INSERT INTO shippingadresses (country,shippingAddress,codePostal) VALUES ('$country','$address','$codepostal');");
        $last_shipping_id = $connection->lastInsertId();
        $last_customer_id = -1;
        try{

            $customer = $connection->query("SELECT * FROM customer WHERE firstname='$fname'  AND lastname='$lname'");
            if(count( ($customer)->fetchAll(PDO::FETCH_ASSOC)) == 0 ){
                $connection->exec("INSERT INTO customer (   firstname ,  lastname , nationality , shippingId ) VALUES ( '$fname','$lname','$country',$last_shipping_id );");
                $last_customer_id = $connection->lastInsertId();
                
            }else{
                while($row = ($customer)->fetch(PDO::FETCH_ASSOC)){
                    $last_customer_id = intval($row['customerId']) ;
                    break;
                }
            }
        }catch(PDOException $e){
            $connection->exec("INSERT INTO customer (   firstname ,  lastname , nationality , shippingId ) VALUES ( '$fname','$lname','$country',$last_shipping_id );");
            $last_customer_id = $connection->lastInsertId();

        }
            
            $date = date("Y/m/d");
        for ($i=0; $i < count($listProducts); $i++) { 
            $prodid = $listProducts[$i]->id;
            $prodcount = $listProducts[$i]->count;

            $connection->exec("INSERT INTO orders ( productId, countity, initiateDate, shippingId, customerId) VALUES ($prodid,$prodcount,'$date',$last_shipping_id,$last_customer_id);");
        }
        $state = 1;

    }catch(PDOException $e){
        die("Fatal Error !! : ".$e);
    }
}
    
    ?>




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
        $pageIndex = -1; 
    require 'header.php';?>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>


<script src="js/main.js">
    
</script>

    <?php if($state==1):?>
        <div class="  position-absolute  w-100 h-75 d-flex flex-column text-center  justify-content-center">
            <h2 class="p-3 border border-1 bg-secondary text-primary">Your Orderd Submited Successfuly</h2>
        </div>
        <script>
            window.onload = function () {
                removeAllCartItem();

              }
        </script>
     <?php else:?>
        <div class="  position-absolute  w-100 h-75 d-flex flex-column text-center  justify-content-center">
            <h2 class="p-3 border border-1 bg-secondary text-danger">Error !!!</h2>
        </div>

    <?php endif;?>

    




</body>

</html>