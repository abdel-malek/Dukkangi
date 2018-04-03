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
        <link rel="stylesheet" href="/front-end/css/view_my_card.css">
        <link rel="stylesheet" href="/front-end/css/material_icons.css">
        <script type="text/javascript" src="/front-end/js/plugin/jssor.slider.min.js"></script>
        <script type="text/javascript" src="/front-end/js/plugin/slide.js"></script>
        <link rel="stylesheet" href="/front-end/css/SimpleStarRating.css">
        <style>
            .star{
                cursor: pointer;
                color: #fff;
            }
            .one_item_details{
                width: 29%;
            }
            .footer{
                margin-top: 13em;
            }
            .sections {
    width: 61.8%;
            }
            .header_page_text_div{
             padding-left: 25em;
            }
            .rating{
                font-size: 1.3em;
                color: #fff;
                bottom: 0.6em;
                left: 1.4em;
            }
            .header_page  .rating{
                bottom: 0.2em;
                left: 19.2em;
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
                padding: .5rem 7rem;
            }
            .one_item_details{
                padding-bottom: 5.4em;
            }
            .price_item_details{
                margin-top: 0em;
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
@endsection
@section('main_section')
    <?php
        $total = 0;
        $gain=0;
        $taxes=0;
    ?>
  <div class="col-md-12" style="height: 1200px" id="content_page">

  <div class="col-md-12" style="padding: 0em 5em;">
            <div class="header_page" style="background-image: url('/front-end/images/items_page/2.png')"/>
                <p class="header_page_text_div">
                    Health Food / Canned Food
                    <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                    <span class="rating" ></span>
                </p>
            </div>

            <div class="one_item_details" style="padding-top: 1em;">
                <h3 class="title_one_item_details">
                    My Cart
                </h3>
                <div class="col-md-12" style="float:left;">
                    <h3 class="title_detail_my_card" style="width:30%;">Quantities</h3>
                    <hr class="line_title_detail_my_card" style="width:70%;">
                </div>


                @foreach($orders as $order)
                <?php
            $total += (isset($order->product->discount_price) ? $order->product->discount_price : $order->product->price );
            $gain  += (isset($order->product->discount_price) ? ceil($order->product->discount_price/5) : ceil($order->product->price/5 ));
            $taxes += isset($order->product->discount_price) ? sprintf('%0.2f',$order->product->discount_price*0.19 ): 
            sprintf('%0.2f',$order->product->price*0.19 );
                
                ?>
                <div class="item_qty_detail_my_card" data-price="{{(isset($order->product->discount_price) ? $order->product->discount_price : $order->product->price )}}" data-gain="{{(isset($order->product->discount_price) ? ceil($order->product->discount_price /5) : ceil($order->product->price/5) )}}"
                  data-productId='{{$order->product->id}}'>
                    <img src="{{$order->product->image_id}}" class="img_item_qty" />
                    <div class="text_item_qty">
                        <h3>{{$order->product->english}}</h3>
                        <p style="margin-bottom: 0.01em;">{{$order->product->section1_english}}</p>
                        <span>
                            <p  style="margin-bottom: 0rem;"> @lang('Price') :{{isset($order->product->discount_price)?sprintf('%0.2f', $order->product->discount_price -($order->product->discount_price *0.19)) : sprintf('%0.2f',$order->product->price - ($order->product->price *0.19)) }} €</p>
                        </span>
                        <span>
                            <p> @lang('Tax') :{{ isset($order->product->discount_price)?sprintf('%0.2f', $order->product->discount_price *0.19)  : sprintf('%0.2f', $order->product->price *0.19) }} €</p>

                        </span>
                    </div>
                    <div class="control_item_qty">
                        <h4 class="num_item_qty" >{{ $order->qty }}</h4>
                        <div class="btn_control_item_qty">
                            <img src="/front-end/images/payment/handler-plus.png" onclick="num_plus(this);" />
                            <img src="/front-end/images/payment/handler-min.png" onclick="num_min(this);" style="margin-top:-0.8em;" />
                        </div>
                        <p class="total_item_qty">
                            Total <span id="total">{{ isset($order->product->discount_price) ? $order->product->discount_price : $order->product->price }} </span> <i style="color: #d80001;font-weight: bold;font-family: 'EagarFont';font-size: 1em;">€</i>
                        </p>
                    </div>
                </div>
                @endforeach


                 <div class="col-md-12" style="float:left;">
                    <h3 class="title_detail_my_card" style="width:40%;">Points rewards</h3>
                    <hr class="line_title_detail_my_card" style="width:60%;">
                </div>
                <div class="gained_point_rewards">
                    <p>
                       You gained
                    </p>
                    <h3 id="total-gain">
                        {{$gain }} PT
                    </h3>
                </div>

                   <div class="col-md-12" style="float:left;">
                    <h3 class="title_detail_my_card" style="width:16%;">Taxes</h3>
                    <hr class="line_title_detail_my_card" style="width:84%;">
                </div>
                <div class="taxes_taxes">
                       <p>
                        Taxes <small><small> <i>(Included in product price)<i></small></small>
                    </p>

                    <h3 id="tax">
                        {{ sprintf('%0.2f', $taxes)}} $
                    </h3>
                    </div>
           <!--                        DISCOUNTS
                   <div class="col-md-12" style="float:left;">
                    <h3 class="title_detail_my_card" style="width:25%;">Discounts</h3>
                    <hr class="line_title_detail_my_card" style="width:75%;">
                </div>
                <div class="total_discount">
                       <p>
                        Total before discounts
                    </p>
                    <h3 id="total-price">
                        {{$total }} $
                    </h3>
                </div>

                <div class="discount_discount">
                       <p>
                        Discount
                    </p>
                    <h3>
                        3 %
                    </h3>
                </div>
               -->
                   <div class="col-md-12" style="float:left;">
                    <h3 class="title_detail_my_card" style="width:35%;">Voucher Code</h3>
                    <hr class="line_title_detail_my_card" style="width:65%;">
                </div>
                <div class="code_voucher_code">
                    <p style="width: 35%;margin-top: 0.4em;">
                        Enter Code
                    </p>
                    <input class="form-group one_code_voucher_code"  />
                </div>

                <p class="price_item_details">
                    <span style="font-family: 'HeadlinesFont';font-size: 1.3em;margin-top: 0.4em;">Total</span>
                    <span style="left:4em;" id="Total"> {{$total }}</span>
                    <i style="color: #fff;    font-size: 1.5em;font-family: 'EagarFont';margin-top: 0.2em;width: 4em;margin-left: 94px;text-align: center;position: absolute;z-index: 18;">$</i>

                    <img src="/front-end/images/price-tag/price-tag@3x.png" style="width: 14em;" class="img_price_item_details"/>
                </p>
            </div>

            <div class="sections">
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
                        <p class="btn_credit_card_details" id='btn-checkout' style="background-color: #d80001;color: #fff;cursor: pointer;">Make Payment</p>
                        <p class="btn_credit_card_details" style="margin-left: 8%;">Cancel</p>
                    </div>
                </div>
            </div>
            </div>
        </div>


@endsection
@section('scripts')
    <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="/front-end/js/plugin/jquery-pretty-tabs.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/front-end/js/main.js"></script>

    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
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
    var ratings = document.getElementsByClassName('rating');

    for (var i = 0; i < ratings.length; i++) {
        var r = new SimpleStarRating(ratings[i]);

        ratings[i].addEventListener('rate', function (e) {
            console.log('Rating: ' + e.detail);
        });
    }
</script>
<script>
    $('.rating').click(function () {
        var num_star_active = 0;
        $(this).find('.star').each(function () {
            if ($(this).hasClass('active')) {
                num_star_active++;
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
       // console.log( parseFloat($(obj).parent().parent().parent().data('price')));
       $(obj).parent().parent().find('p').find('span').text(
        parseFloat(
        parseFloat($(obj).parent().parent().find('p').find('span').text())  + parseFloat($(obj).parent().parent().parent().data('price'))
        ).toFixed(2));

        $('#total-gain').text(parseInt($(obj).parent().parent().parent().data('gain')) + parseInt($('#total-gain').text()) +" PT");


        $('#tax').text( parseFloat( parseFloat($('#tax').text() ) + parseFloat( parseFloat($(obj).parent().parent().parent().data('price') ) * 0.19)).toFixed(2) +"$");


       $('#Total').text(parseFloat(parseFloat($(obj).parent().parent().parent().data('price')) + parseFloat( $('#Total').text() )  ).toFixed(2));

        $(obj).parent().parent().find('h4').text(parseInt($(obj).parent().parent().find('.num_item_qty').text()) + 1);

    }
    function num_min(obj) {
        if ((parseInt($(obj).parent().parent().text()) > 0)) {
                           $(obj).parent().parent().find('p').find('span').text(
        parseFloat(
        parseFloat($(obj).parent().parent().find('p').find('span').text())  - parseFloat($(obj).parent().parent().parent().data('price'))
        ).toFixed(2));

        $('#total-gain').text(parseInt( parseInt($('#total-gain').text()) -$(obj).parent().parent().parent().data('gain') ) +" PT");



        $('#tax').text( parseFloat( parseFloat($('#tax').text() ) - parseFloat( parseFloat($(obj).parent().parent().parent().data('price') ) * 0.19)).toFixed(2) + "$");
        if ( parseFloat($('#tax').text()) < 0  )
            $('#tax').text('0');
        $('#Total').text(parseFloat(parseFloat(parseFloat( $('#Total').text() ) - $(obj).parent().parent().parent().data('price')) ).toFixed(2));

        $(obj).parent().parent().find('h4').text(parseInt($(obj).parent().parent().find('h4').text()) - 1);


        }
    }

    $('#btn-checkout').on('click',function(){
      //get productIds and qtys
        products = [];
        $('.item_qty_detail_my_card').each(function(i,obj){
            productId = $(obj).attr('data-productId');
            qty = $(obj).find('.num_item_qty').html();
            var product = {};
            product.id = productId;
            product.qty = qty;
            products.push(product);
        })
        $.ajax({
            type: "POST",
            url: `/cart/checkout`,
            data:{'products':products},
            headers: {
                "x-csrf-token": $("[name=_token]").val()
            },
        }).done(response => {
            swal({
                title: 'Successfully',
                text: "Thank you For purchasing with us!",
                type: 'success',
                confirmButtonColor: '#d90f17',
                confirmButtonText: 'Return To Home!'
              }).then((result) => {
                if (result.value) {
                  window.location.href ='/';
                }
              })

        });
    })

</script>
@endsection
