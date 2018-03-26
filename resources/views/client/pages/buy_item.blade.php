<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dukkangi</title>
        <link rel="stylesheet" href="./css/lib/bootstrap.min.css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./css/jquery-pretty-tabs.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="stylesheet" href="./css/item.css">
        <link rel="stylesheet" href="./css/item_view.css">
        <link rel="stylesheet" href="./css/buy_item.css">
        <link rel="stylesheet" href="./css/material_icons.css">
        <script type="text/javascript" src="js/plugin/jssor.slider.min.js"></script>
        <script type="text/javascript" src="./js/plugin/slide.js"></script>
        <link rel="stylesheet" href="./css/SimpleStarRating.css">
        <style>
            .star{
                cursor: pointer;
                color: #fff;
            }
            .rating{
                font-size: 1.3em;
                color: #fff;
                bottom: 0.6em;
                left: 1.4em;
            }
                .header_page  .rating{
                bottom: 0.2em;
                left: 19.9em;
            }
            .rating .star::after{
                color: #d80001;
            }
            .rating .star::before{
                color: #fff;
            }
            .div_item  .rating .star::after{
                color: #d80001;
            }
            .div_item .rating .star::before{
                color: #d80001;
            }
            .details_comment .rating{
                bottom: unset;
                right: 1.4em;
                left: unset;
            }
             .details_comment  .rating .star::after{
                color: #d80001;
            }
            .details_comment .rating .star::before{
                color: #d80001;
            }
            main {
                background-color: white;
                width: 80%;
                margin: 0 auto;
                padding: 50px;
                text-align: center;
            }
            .golden {
                color: #ee0;
                background-color: #444;
            }
            .big-red {
                color: #f11;
                font-size: 50px;
            }
            .navbar {
                padding: .5rem 5rem;
            }
            .one_item_details{
                padding-bottom: 5.4em;
            }
            .price_item_details{
                margin-top: 0em;
            }
            .btn_qty{
                cursor: pointer;
            }
        </style>
        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
            .jssora093 {display:block;position:absolute;cursor:pointer;}
            .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
            .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
            .jssora093:hover {opacity:.8;}
            .jssora093.jssora093dn {opacity:.6;}
            .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
            .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
            .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
            .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
            .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
            .jssort101 .p:hover{padding:2px;}
            .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
            .jssort101 .p:hover.pdn{padding:0;}
            .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
            .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
            .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
            .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
            .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
        </style>
        <style>
            .star_1 i:hover{
                content: "&#xE838;";
            }
        </style>
    </head>
    <body>
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-nav-bar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-navbar-items">
                    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                        <li class="nav-item active">
                            <a class="nav-link" href="./main.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./signup.html">Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./help.html">Help</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="lang-nav-bar">
                <a class="navbar-brand rate-us" href="#">Rate us?</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Arabic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">German</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kurdish</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Turkish</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="col-md-12" style="padding: 0em 5em;">
            <div class="header_page">
                <p class="header_page_text_div">
                    Health Food / Canned Food
                    <img src="images/items_page/star.png" class="one_start_slider" />
                    <span class="rating" ></span>
                </p>
            </div>
           
                <div class="one_item_details">
                    <div class="header_item_details">
                        <img src="./images/slider/item1.jpg" class="img_item_details" />
                        <div class="div_title_item_details" >
                            <p class="title_item_details">
                                Item's Name
                            </p>
                            <span class="rating" style="float:left;"></span>
                               <i class="material-icons icon_item_details">&#xE838;</i>
                            <i class="material-icons icon_item_details">error_outline</i>
                        </div>
                    </div>
                    <!--<div class="price_tag_item_details">-->
                        <div class="col-md-12" style="margin-top: 0.6em;float: left;">
                            <div style="width: 30%;float: left;">
                                <h3 class="title_qty">
                                    Quantity
                                </h3>
                            </div>
                            <div style="width: 70%;float: right;">
                                <p class="num_qty">
                                    3
                                </p>
                                <div style="width:30%;float: right;">
                                    <img src="./images/payment/handler-plus.png" class="btn_qty" onclick="num_plus(this);">
                                    <img src="./images/payment/handler-min.png" class="btn_qty" style="margin-top: -0.9em" onclick="num_min(this)">
                                </div>
                                <!-- <img -->
                            </div>
                        </div>
                           <div class="col-md-12" style="float: left;">
                            <div style="width: 30%;float: left;">
                                <h3 class="title_color" style="margin-top: 0.4em;">
                                    Color
                                </h3>
                            </div>
                            <div style="width: 70%;float: right;">
                                <div class="option_color" style="background-color: #303030;">
                                    
                                </div>
                                  <div class="option_color active_option_color" style="background-color: #e8e8e8;">
                                    
                                </div>
                                  <div class="option_color" style="background-color: #f5f5f5;">
                                    
                                </div>
                            </div>
                        </div>
                           <div class="col-md-12" style="float: left;margin-top: 1em;">
                            <div style="width: 30%;float: left;">
                                <h3 class="title_size" style="margin-top: -0.1em;">
                                    Size
                                </h3>
                            </div>
                            <div style="width: 70%;float: right;">
                                <p class="option_size active_option_size">
                                    Small
                                </p>
                                 <p class="option_size">
                                    Medium
                                </p>
                                 <p class="option_size">
                                    Large
                                </p>
                            </div>
                        </div>
                    <p class="price_item_details">
                        <span style="font-family: 'HeadlinesFont';font-size: 1.3em;margin-top: 0.4em;">Total</span>
                        <span style="left:4em;"> 900 $</span>
                        <img src="images/price-tag/price-tag@3x.png" style="width: 14em;" class="img_price_item_details"/>
                    </p>
                </div>
            
            <div class="sections">
                <div class="choose_payment">
                    <h4 class="title_choose_payment">
                        Choose your payment methode:
                    </h4>
                    <div  class="visa_choose_payment">
                        <label style="float: left;">
  <input type="radio" name="choose_payment" />
  <div class="circle">
    <div class="circle--inner circle--inner__1" ></div>
    <div class="circle--inner circle--inner__2" ></div>
    <div class="circle--inner circle--inner__3" ></div>
    <div class="circle--inner circle--inner__4" ></div>
    <div class="circle--inner circle--inner__5" ></div>
    <div class="circle--outer" ></div>
  </div>
  <svg style="height: 4em;width: 3em;">
    <defs>
      <filter id="gooey">
        <feGaussianBlur
          in="SourceGraphic"
          result="blur"
          stdDeviation="3"
        />
        <feColorMatrix
          in="blur"
          mode="matrix"
          values="
            1 0 0 0 0
            0 1 0 0 0
            0 0 1 0 0
            0 0 0 18 -7
          "
          result="gooey"
        />
        <feBlend
          in2="gooey"
          in="SourceGraphic"
          result="mix"
        />
      </filter>
    </defs>
  </svg>
</label>

                        <img src="./images/payment/visa.png" class="img_visa_choose_payment">
                    </div>
                    <div  class="paypal_choose_payment">
                                          <label style="float: left;">
  <input type="radio" name="choose_payment" />
  <div class="circle">
    <div class="circle--inner circle--inner__1" ></div>
    <div class="circle--inner circle--inner__2" ></div>
    <div class="circle--inner circle--inner__3" ></div>
    <div class="circle--inner circle--inner__4" ></div>
    <div class="circle--inner circle--inner__5" ></div>
    <div class="circle--outer" ></div>
  </div>
  <svg style="height: 4em;width: 3em;">
    <defs>
      <filter id="gooey">
        <feGaussianBlur
          in="SourceGraphic"
          result="blur"
          stdDeviation="3"
        />
        <feColorMatrix
          in="blur"
          mode="matrix"
          values="
            1 0 0 0 0
            0 1 0 0 0
            0 0 1 0 0
            0 0 0 18 -7
          "
          result="gooey"
        />
        <feBlend
          in2="gooey"
          in="SourceGraphic"
          result="mix"
        />
      </filter>
    </defs>
  </svg>
</label>
                        <img src="./images/payment/paypal.png" class="img_paypal_choose_payment">
                    </div>
                   
                </div>
         <div class="credit_card_details">
               <h4 class="title_credit_card_details">
                        Credit Card Details:
                    </h4>
                    <div class="col-md-12" style="float:left;padding: 0em 2em;"> 
                    <input type="text" class="form-control input_credit_card_details" placeholder="Card number ..">
                    <input type="text" class="form-control input_credit_card_details" placeholder="Cardholder name ..">
                    <p class="title_input">Expiration Date</p>
                    <input type="date" id="expiration_date" class="form-control input_credit_card_details" placeholder="" style="margin-top: 0.2em;">
                    <input type="text" class="form-control input_credit_card_details" placeholder="CVV">
                    <p class="btn_credit_card_details" style="background-color: #d80001;color: #fff;">Make Payment</p>
                     <p class="btn_credit_card_details" style="margin-left: 8%;">Cancel</p>
                </div>
         </div>
            
        </div>

    </div>
        
        
        
        <footer class="footer" >
            <div class="col-md-12" style="float:left">
                <h2 class="title_footer">
                    About Dukkangi 
                </h2> 
            </div>
            <div class="col-md-6 " style="float:left;margin-left: 26%;">
                <p class="text_footer">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                </p>
            </div>
            <div class="col-md-6 " style="float:left;margin-left: 26%;">
                <p class="text_footer">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
            <div class="col-md-7 div_icon_footer" >
                <i class="fa fa-google-plus icon_footer" style="    padding: 0.5em 0.35em;"></i>
                <i class="fa fa-instagram icon_footer"></i>
                <i class="fa fa-twitter icon_footer"></i>
                <i class="fa fa-facebook icon_footer" style="padding: 0.5em 0.7em;"></i>
            </div>
        </footer>
        <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        <script src="./js/plugin/jquery-pretty-tabs.js"></script>
        <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-36251023-1']);
                _gaq.push(['_setDomainName', 'jqueryscript.net']);
                _gaq.push(['_trackPageview']);

                (function () {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();
        </script>
        <script src="./js/plugin/SimpleStarRating.js"></script>
        <script>
                var ratings = document.getElementsByClassName('rating');

                for (var i = 0; i < ratings.length; i++) {
                    var r = new SimpleStarRating(ratings[i]);

                    ratings[i].addEventListener('rate', function (e) {
                        console.log('Rating: ' + e.detail);
                    });
                }
        </script>
        <script>
            $('.rating').click(function(){
                var num_star_active = 0;
               $(this).find('.star').each(function(){
                  if($(this).hasClass('active')){
                      num_star_active ++;
                  }  
               });
               //      Value star is variable : num_star_active
               //      Request Update rating 
            });
        </script>
         <script>
        $(function () {
            $("#expiration_date").datepicker();
        });
    </script>
       <script>
            function num_plus(obj) {
                $(obj).parent().parent().find('p').text(parseInt($(obj).parent().parent().find('p').text()) + 1);
            }
            function num_min(obj) {
                if ((parseInt($(obj).parent().parent().text()) > 0)) {
                    $(obj).parent().parent().find('p').text(parseInt($(obj).parent().parent().find('p').text()) - 1);
                }
            }
        </script>
    </body>
</html>
