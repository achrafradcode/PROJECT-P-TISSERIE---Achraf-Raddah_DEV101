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
    





    <!-- Info Start -->

        <div class="position-absolute h-100 w-100   d-flex flex-row justify-content-around">
            <form id="myform" action="payout.php" method="post" class="  d-flex flex-column justify-content-around w-50 m-3">
                
                <div class="section-title position-relative text-start  mb-5 pb-3" style="max-width: 600px;">
                    <h1 class="display-4 text-uppercase">Checkout </h1>
                </div>
                
                <div class="container">
                        
                        <div class="mb-3">
                        <div class="w-100 d-flex justify-content-around">
                            <input type="text" class="form-control mx-1" name="fname"   placeholder="First Name">
                            <input type="text" class="form-control mx-1" name="lname"   placeholder="Last Name">
                        </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="email"  placeholder="Email">
                            
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="address"  placeholder="Address">
                            
                        </div>
                        <div class="mb-3">
                        <div class="w-100 d-flex justify-content-around">
                            <select name="country" class="w-60" >
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Aland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curacao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                    
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                            
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
            
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
        
                                <option value="KR">Korea, Republic of</option>
                                <option value="XK">Kosovo</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>

                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>

                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthelemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="CS">Serbia and Montenegro</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>

                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>

                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.s.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                            <input type="number" class="form-control mx-1" name="codepostal"   placeholder="Code Postal">
                            <input type="hidden" id="listProductsInput" name="listProducts">
                        </div>
                        </div>
                        

                    </div>

                    <input name="sub" type="submit" class="btn btn-primary w-100" href="#" role="submit" value="Payout">

                
                
            </form>
            <div class=" bg-secondary  w-50 py-5 ">
            <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="cart-container">
                            <tr>
                                <td scope="row" class="d-flex justify-content-start"> 
                                        <img style="height: 72px;"  src="img/Patissrie/pat01.jpg" alt="">
                                        <div style="font-size: 12px;" class="mx-3 d-flex flex-column justify-content-start">
                                            <h5 class="text-primary item-name">Cake <span style="font-size: 14px;" class="text-dark ">x5</span></h5>
                                            <p class="text-dark item-code">#40042</p>
                                        </div>
                                </td>
    
                                <td>
                                    <div class="h-100 py-4">$8.95</div>
                                </td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
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
                
                
            </div>
        </div>
        

     

    <!-- Info End -->





 


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
        var form = document.getElementById('myform');
        form.addEventListener('submit', function(){
            var listProductsInput = document.getElementById("listProductsInput");
            listProductsInput.value = JSON.stringify(listProducts);
            
            
            
        });
        
    
    
    
    
    
    
    function updateCartPage(){
    
    
    console.log("1");
    var cart_container = document.getElementById("cart-container");

    var Cart_Sub_Total = document.getElementById("CartSubTotal");
    var Cart_Grand_Total = document.getElementById("CartGrandTotal");
    
    let prixTotal = 0;

    Cart_Sub_Total.innerHTML = "$"+0;
    Cart_Grand_Total.innerHTML = "$"+0;
    cart_container.innerHTML = "";
    for(var i = 0 ; i < listProducts.length ;i++){
        // cart_container.innerHTML += "<div class=\"d-flex m-2 \"><div class=\"flex-shrink-0\"><img class=\"img-fluid\" src=\""+listProducts[i].img+"\" alt=\"\" style=\"width: 150px; height: 85px;\"><h4 class=\"bg-dark text-primary p-2 m-0\">$"+listProducts[i].price+"</h4></div><div class=\"d-flex flex-column w-100 justify-content-center text-start bg-secondary border-inner px-4\"><h5 class=\"text-uppercase\">"+listProducts[i].name+"</h5> </div></div>";
        cart_container.innerHTML += ' <tr> <td scope="row" class="d-flex justify-content-start"> <img style="height: 72px;"  src="'+listProducts[i].img+'" alt=""><div style="font-size: 12px;" class="mx-3 d-flex flex-column justify-content-start"> <h5 class="text-primary item-name">'+listProducts[i].name+' <span style="font-size: 14px;" class="text-dark ">x'+listProducts[i].count+'</span></h5> <p class="text-dark item-code">#'+listProducts[i].id+'</p>  </div>  </td>  <td>   <div class="h-100 py-4">$'+listProducts[i].price+'</div>  </td>  </tr>';
        prixTotal += listProducts[i].price*listProducts[i].count;
    }
    
    
    Cart_Sub_Total.innerHTML = "$"+prixTotal;
    Cart_Grand_Total.innerHTML = "$"+prixTotal;
    console.log("2");
    } 
    </script>
</body>

</html>