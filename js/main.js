
let listProducts = [
  // {
  //   name:"Cake",
  //   img:"img/cake-1.jpg",
  //   price:5
  // },
  // {
  //   name:"Patisrie",
  //   img:"img/cake-2.jpg",
  //   price:10
  // }
];
loadCart();
let products;

function loadProductsList(OnFinishLoadingCallback){
  if(!isNaN( products)){
    OnFinishLoadingCallback();
    return;
  }
    var oReq = new XMLHttpRequest(); // New request object
    oReq.onload = function() {
        products = JSON.parse( this.responseText);
        
        OnFinishLoadingCallback(); 
        
    };
    oReq.open("get", "get-prod-list.php", true);
    
    oReq.send();
}



function addToCart(sender,prodId) {
  sender.disabled = true;
  loadProductsList(function(){
    sender.disabled = false;
    let product ;
    console.log(products);
    
    for(var i = 0 ; i < products.length ; i++){
      if(products[i].productId == prodId){
        product = products[i];
        break;
      }
    }
    if(product == undefined){
      return;
    }
    console.log(product);

        listProducts.push({
            id:product.productId,
            name: product.name,
            img: product.imgLink,
            price: product.cost,
            count:1
        });
        updateCart();
        saveCart();
  });

}
function saveCart(){
  console.log("Save Cart");
  localStorage.setItem("cart", JSON.stringify( listProducts));
  console.log(JSON.stringify( listProducts));
}
function loadCart(){
  console.log("Load Cart");
  listProducts = JSON.parse(localStorage.getItem("cart"));

  console.log(JSON.parse(localStorage.getItem("cart")));
  if(!listProducts){
    listProducts = [
      /* {
        id:4020,
        name:"Cake",
        img:"img/cake-1.jpg",
        price:5,
        count:1
      },
      {
        id:2020,
        name:"Patisrie",
        img:"img/cake-2.jpg",
        price:10,
        count:1
      } */
    ];
    saveCart();
  }
}
function removeAllCartItem(){
  listProducts = [];
  saveCart();
  updateCart();
}
function removeCartItem(index){
  if(index < 0 || index >= listProducts.length){
    return;
  }  
  listProducts.pop(listProducts[index]);
  updateCart();
  saveCart();
}
function increaseCount(index){
  if(index < 0 || index >= listProducts.length){
    return;
  }  
  listProducts[index].count++;
  updateCart();
  saveCart();
}
function decreaseCount(index){
  if(index < 0 || index >= listProducts.length){
    return;
  }  
  if(listProducts[index].count-1 < 1){
    return;
  }
  listProducts[index].count--;
  updateCart();
  saveCart();
}


function updateCart(){
  
  try{
    var viewCart = document.getElementById("viewCart");
    if(listProducts.length==0){
      viewCart.style.cursor = 'not-allowed';
      viewCart.style.pointerEvents = 'none';
    }else{
      viewCart.style.cursor = '';
      viewCart.style.pointerEvents = '';

    }
  console.log("1");
  var cart_container = document.getElementById("cart-container");
  var Cart_Count = document.getElementById("CartCount");
  var Cart_Sub_Total = document.getElementById("CartSubTotal");

  let prixTotal = 0;
  cart_container.innerHTML = "";
  for(var i = 0 ; i < listProducts.length ;i++){
    // cart_container.innerHTML += "<div class=\"d-flex m-2 \"><div class=\"flex-shrink-0\"><img class=\"img-fluid\" src=\""+listProducts[i].img+"\" alt=\"\" style=\"width: 150px; height: 85px;\"><h4 class=\"bg-dark text-primary p-2 m-0\">$"+listProducts[i].price+"</h4></div><div class=\"d-flex flex-column w-100 justify-content-center text-start bg-secondary border-inner px-4\"><h5 class=\"text-uppercase\">"+listProducts[i].name+"</h5> </div></div>";
    cart_container.innerHTML += '<div class="cartItem d-flex m-2 "><div class="flex-shrink-0"><img class="img-fluid itemImg" src="'+listProducts[i].img+'" alt="" /></div><div class="d-flex flex-column w-100 justify-content-center text-start bg-secondary border-inner px-4"><h5 class="text-uppercase p-2">'+listProducts[i].name+'</h5><div class="d-flex flex-row p-2"><button type="button" class="btn btn-primary btn-sm  " onclick="decreaseCount('+i+')">-</button><span class="small px-3 pt-1">'+listProducts[i].count+'</span><button type="button" class="btn btn-primary btn-sm rounded-circle " onclick="increaseCount('+i+')">+</button></div></div><div class="d-flex flex-column bg-dark text-center  w-100"><h4 class=" text-primary p-2 m-0">$'+listProducts[i].price+'</h4><span class=" text-secondary p-2 m-0"><a href="##" class="btn rounded rounded-3 btn-light" style="font-size:12px;" onclick="removeCartItem('+i+')"> Remove item</a></span></div></div>';
    prixTotal += listProducts[i].price*listProducts[i].count;
  }

  Cart_Count.innerHTML = listProducts.length+" items";
  Cart_Sub_Total.innerHTML = "$"+prixTotal;
  console.log("2");
  onUpdateCart();

    updateCartPage();
  }catch(e){

  }
}
updateCart();
(function ($) {
  "use strict";

  

  
  // Sticky Navbar
  
    $(window).scroll(function () {
      if ($(this).scrollTop() > 40) {
            // $('.inder-nav').removeClass('rounded-pill');
            $('.navbar-d').addClass('w-100');
            $('.navbar-f').addClass('sticky-top');
            $('.navbar-f').addClass('bg-primary');
            if($(window).width() > 992) {

              $('.navbar-d').removeClass('px-lg-3');
            }
            $('.navbar-d').removeClass('container-lg');
            $('.navbar-d').addClass('p-0');
            $('.navbar-d').addClass('m-0');
        } else {
            // $('.inder-nav').addClass('rounded-pill');
            $('.navbar-f').removeClass('sticky-top');
            $('.navbar-f').removeClass('bg-primary');
            if ($(window).width() > 992) {

              $('.navbar-d').addClass('px-lg-3');
              
            }
            $('.navbar-d').removeClass('p-0');
            $('.navbar-d').removeClass('m-0');
        }
      });
      
      
      // Dropdown on mouse hover
      $(document).ready(function () {
        if ($(window).width() > 992) {

          
        }else{
          $('.inder-nav').removeClass('rounded-pill');
          
          
        }
        if ($(window).width() > 600) {

          $('.cartItem').addClass('d-flex');
        }else{
          
          $('.cartItem').removeClass('d-flex');
        }
        $(window).resize(function(){
          if ($(window).width() > 992) {
            $('.inder-nav').addClass('rounded-pill');
         
          }else{
            $('.inder-nav').removeClass('rounded-pill');
         
          }
          if ($(window).width() > 600) {
            
            $('.cartItem').addClass('d-flex');
          }else{
            
            $('.cartItem').removeClass('d-flex');
          }

        });
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                  $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    $(document).ready(function () {
      $('.cartButton').click(function(){
        if($('.cart').hasClass("show")){
          $('.cart').removeClass("show");
        }else{
          $('.cart').addClass("show");
        }
      });
    });


    // Modal Video
    $(document).ready(function () {
      var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 45,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    onUpdateCart = function () {
      if ($(window).width() > 600) {
        if(!$('.cartItem').hasClass("d-flex")){

          $('.cartItem').addClass('d-flex');
        }
      }else{
        
        $('.cartItem').removeClass('d-flex');
      }  
    };
    
})(jQuery);

const header = document.querySelector("header");
const sectionOne = document.querySelector(".home-intro");

const faders = document.querySelectorAll(".fade-in");
const sliders = document.querySelectorAll(".slide-in");

const sectionOneOptions = {
    rootMargin: "-200px 0px 0px 0px"
  };
  
const sectionOneObserver = new IntersectionObserver(function(
    entries,
    sectionOneObserver
  ) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        header.classList.add("nav-scrolled");
      } else {
        header.classList.remove("nav-scrolled");
      }
    });
  },
  sectionOneOptions);
  
  sectionOneObserver.observe(sectionOne);
  
  const appearOptions = {
    threshold: 0,
    rootMargin: "0px 0px -100px 0px"
  };
  
  const appearOnScroll = new IntersectionObserver(function(
    entries,
    appearOnScroll
  ) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        return;
      } else {
        entry.target.classList.add("appear");
        appearOnScroll.unobserve(entry.target);
      }
    });
  },
  appearOptions);
  
  faders.forEach(fader => {
    appearOnScroll.observe(fader);
  });
  
  sliders.forEach(slider => {
    appearOnScroll.observe(slider);
  });
  updateCart();
  
  var onUpdateCart;