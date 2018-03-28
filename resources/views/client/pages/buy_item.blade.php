@extends('client.main')
@section('styles')
        <link rel="stylesheet" href="/front-end/css/lib/bootstrap.min.css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/front-end/css/jquery-pretty-tabs.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/front-end/css/style.css">
        <link rel="stylesheet" href="/front-end/css/login.css">
        <link rel="stylesheet" href="/front-end/css/item.css">
        <link rel="stylesheet" href="/front-end/css/item_view.css">
        <link rel="stylesheet" href="/front-end/css/buy_item.css">
        <link rel="stylesheet" href="/front-end/css/material_icons.css">
        <script type="text/javascript" src="/front-end/js/plugin/jssor.slider.min.js"></script>
        <script type="text/javascript" src="/front-end/js/plugin/slide.js"></script>
        <link rel="stylesheet" href="/front-end/css/SimpleStarRating.css">
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
            .jssort101 .t {position:initial;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
            .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
        </style>
        <style>
            .star_1 i:hover{
                content: "&#xE838;";
            }
        </style>
@endsection
@section('main_section')
       <div class="col-md-12" style="padding: 0em 5em;" id="content_page">

        <div class="col-md-12" style="padding: 0em 5em;">
            <div class="header_page" style="background-image: url('{{$subcategory->image_id}}')">
                <p class="header_page_text_div">
                    {{ $subcategory->english }}
                    <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                    <span class="rating subcategory"  style="left: 17.9em;"></span>
                </p>
            </div>

                <div class="one_item_details" style="width: 30% ;margin-left: 2em">
                    <div class="header_item_details">
                        <img src="{{$product->image_id}}" class="img_item_details" style="height: 380px;" />
                        <div class="div_title_item_details" >
                            <p class="title_item_details">
                                {{$product->english}}
                            </p>
                            <span class="rating product" style="float:left;"></span>
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
                                    1
                                </p>
                                <div style="width:30%;float: right;">
                                    <img src="/front-end/images/payment/handler-plus.png" class="btn_qty" onclick="num_plus(this);">
                                    <img src="/front-end/images/payment/handler-min.png" class="btn_qty" style="margin-top: -0.9em" onclick="num_min(this)">
                                </div>
                                <!-- <img -->
                            </div>
                        </div>
                           <div class="col-md-12" style="float: left;">
                            <div style="width: 39%;float: left;">
                                <h3 class="title_color" style="margin-top: 0.4em;">
                                    Option 1
                                </h3>
                            </div>
                            <div style="width: 60%;float: right;">
                                <div class="option_color" style="background-color: #303030;">

                                </div><div class="option_color" style="background-color: #303030;">

                                </div><div class="option_color" style="background-color: #303030;">

                                </div>

                             </div>
                        </div>
                        <div class="col-md-12" style="float: left;margin-top: 20px;">
                            <div style="width: 39%;float: left;">
                                <h3 class="title_size" style="margin-top: -0.1em;">
                                    Option 2
                                </h3>
                            </div>
                            <div style="width: 60%;float: right;">
                                <p class="option_size active_option_size" style="width: 100%">
                                    Small
                                </p>

                            </div>
                        </div>
                        <div style="width: 39%;float: left;margin-top: 0px;padding-left: 15px">
                                <h3 class="title_size" style="margin-top: -0.1em;">
                                    Option 3
                                </h3>
                            </div>
                            <div style="width: 60%;float: right;margin-top: 0px;">
                                <p class="option_size active_option_size" style="width: 100%">
                                    Small
                                </p>

                            </div>

                        <div style="width: 39%;float: left;margin-top: 0px;">
                                <h3 class="title_size" style="margin-top: 1.0em;padding-left: 15px">
                                    Option 4
                                </h3>
                            </div>
                            <div style="width: 60%;float: right;margin-top: 0px;">
                                <p class="option_size active_option_size" style="width: 100%">
                                    Small
                                </p>

                            </div>

                    <p class="price_item_details">
                        <span style="font-family: 'HeadlinesFont';font-size: 1.3em;margin-top: 0.4em;">Total</span>
                        <span style="left:4em;"> 900 $</span>
                        <img src="/front-end/images/price-tag/price-tag@3x.png" style="width: 14em;" class="img_price_item_details"/>
                    </p>
            </div>

            <div class="sections" style="width: 60.8%;">
                <div class="choose_payment">
                    <h4 class="title_choose_payment">
                        Choose your payment method:
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

                        <img src="/front-end/images/payment/visa.png" class="img_visa_choose_payment">
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
                        <img src="/front-end/images/payment/paypal.png" class="img_paypal_choose_payment">
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

        </div></div>


   @endsection
   @section('scripts')
        <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        <script src="/front-end/js/plugin/jquery-pretty-tabs.js"></script>
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
        <script src="/front-end/js/plugin/SimpleStarRating.js"></script>
        <script>
                var ratings = document.getElementsByClassName('subcategory');

                for (var i = 0; i < ratings.length; i++) {

                    var r = new SimpleStarRating<?php echo (!isset($subcategory->rate)?'0':$subcategory->rate)?>(ratings[i]);

                }

                var ratings = document.getElementsByClassName('product');
                for (var i = 0; i < ratings.length; i++) {
                    var r = new SimpleStarRating<?php echo ($product->rate==0?'':$product->rate) ?>(ratings[i]);


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

                if (parseInt($(obj).parent().parent().find('p').text()) < <?php echo $product->qty?> ){
                $(obj).parent().parent().find('p').text(parseInt($(obj).parent().parent().find('p').text()) + 1);
                counter = 0;
                }
                else if (counter < 1){
                    $(obj).parent().parent().find('p').text($(obj).parent().parent().find('p').text() + "MAX");
                    counter= counter+1;

                }

            }
            function num_min(obj) {
                if ((parseInt($(obj).parent().parent().text()) > 0)) {
                    $(obj).parent().parent().find('p').text(parseInt($(obj).parent().parent().find('p').text()) - 1);
                }
            }
        </script>
@endsection
