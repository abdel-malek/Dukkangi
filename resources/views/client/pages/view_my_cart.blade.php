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
            #ex3{
              float: right;

            }
            #ex3 .fa-stack[data-count]:after{
                position:absolute;
                right:0%;
                top:1%;
                content: attr(data-count);
                font-size:30%;
                padding:.6em;
                border-radius:50%;
                line-height:.8em;
                color: white;
                background:rgba(255,0,0,.85);
                text-align:center;
                min-width: 1em;
                font-weight:bold;
              }
              #ex3 .fa-stack-1x, .fa-stack-2x{
                background-color:#d90000;
                border-radius: 100px;
              }
        </style>
@endsection
@section('main_section')
    <?php
        $total = 0;
        $gain=0;
        $taxes=0;
    ?>
  <div class="col-md-12" style="height: 740px" id="content_page">

  <div class="col-md-12" style="padding: 0em 5em;">
            <div class="header_page" style="background-image: url('/front-end/images/items_page/2.png')"/>
                <p class="header_page_text_div" style="width: 80.9%;padding-left: 29.5em ">
                    Health Food / Canned Food
                    <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                    <span class="rating"  style="padding-left: 4em"></span>
                </p>
            </div>

            <div class="one_item_details" style="padding-top: 1em;">
                <h3 class="title_one_item_details">
                    @lang('My Cart')
                </h3>
                <div class="col-md-12" style="float:left;">
                    <h3 class="title_detail_my_card" style="width:30%;">@lang('Quantities')</h3>
                    <hr class="line_title_detail_my_card" style="width:70%;">
                </div>

                @foreach($orders as $order)
                <?php
                    $total += (isset($order->product->discount_price) ? $order->product->discount_price : $order->product->price) * $order->qty ;
                    $gain  += (isset($order->product->discount_price) ? ceil($order->product->discount_price/5) : ceil($order->product->price/5)) * $order->qty;
                    $taxes += (isset($order->product->discount_price) ? sprintf('%0.2f', $order->product->discount_price*0.19 * $order->qty ) : sprintf('%0.2f', $order->product->price*0.19 * $order->qty )  );
                ?>
                <div class="item_qty_detail_my_card" data-price="{{ isset($order->product->discount_price) ? $order->product->discount_price : $order->product->price }}"
                  data-tax="{{$order->product->tax_fees}}" data-gain="{{isset($order->product->discount_price ) ? ceil($order->product->discount_price /5) : ceil($order->product->price /5 ) }}"
                  data-productId='{{$order->product->id}}'>
                    <img src="{{$order->product->image_id}}" class="img_item_qty" />
                    <div class="text_item_qty">
                        <h3>{{$order->product->english}}</h3>
                        <p style="margin-bottom: 0.01em;">{{$order->product->section1_english}}</p>
                        <span>
                            <p> @lang('Tax') :{{ isset($order->product->discount_price)?sprintf('%0.2f', $order->product->discount_price *0.19)  : sprintf('%0.2f', $order->product->price *0.19) }} €</p>

                        </span>
                    </div>
                    <div class="control_item_qty">
                        <h4 class="num_item_qty" id="total" >{{ $order->qty }}</h4>
                        <div class="btn_control_item_qty">
                            <img src="/front-end/images/payment/handler-plus.png" onclick="num_plus(this);" id ="this" />
                            <img src="/front-end/images/payment/handler-min.png" onclick="num_min(this);" style="margin-top:-0.8em;" />
                        </div>
                        <p class="total_item_qty">
                            @lang('Total')
                            <span class="findit" >{{ isset($order->product->discount_price) ? $order->product->discount_price *  $order->qty : $order->product->price *  $order->qty }} </span>
                            <i style="color: #d80001;font-weight: bold;font-family: 'EagarFont';font-size: 1em;">€</i>
                        </p>
                    </div>
                </div>
                @endforeach


                 <div class="col-md-12" style="float:left;">
                    <h3 class="title_detail_my_card" style="width:40%;">@lang('Points rewards')</h3>
                    <hr class="line_title_detail_my_card" style="width:60%;">
                </div>
                <div class="gained_point_rewards">
                    <p>
                       @lang('You gained')
                    </p>
                    <h3 id="total-gain">
                        {{$gain }} PT
                    </h3>
                </div>

                   <div class="col-md-12" style="float:left;">
                    <h3 class="title_detail_my_card" style="width:16%;">@lang('Taxes')</h3>
                    <hr class="line_title_detail_my_card" style="width:84%;">
                </div>
                <div class="taxes_taxes">
                       <p>
                        @lang('Taxes') <small><small> <i>@lang('(Included in product price)')<i></small></small>
                    </p>

                    <h3 id="tax">
                        {{ sprintf('%0.2f', $taxes )}} €
                    </h3>
                    </div>

                   <div class="col-md-12" style="float:left;">
                    <h3 class="title_detail_my_card" style="width:35%;">@lang('Voucher Code')</h3>
                    <hr class="line_title_detail_my_card" style="width:65%;">
                </div>
                <div class="code_voucher_code">
                    <p style="width: 35%;margin-top: 0.4em;">
                        @lang('Enter Code')
                    </p>
                    <input class="form-group one_code_voucher_code" value="" id="couponcode" placeholder="Enter Code" type="text" onchange="checkCode(this.value)" >
                </div>

                <p class="price_item_details">
                    <span style="font-family: 'HeadlinesFont';font-size: 1.3em;margin-top: 0.4em;">@lang('Total')</span>

                    <span style="left:3em;" id="Total"> {{$total }} </span>
                    <i style="color: #fff;    font-size: 1.5em;font-family: 'EagarFont';margin-top: 0.2em;width: 4em;margin-left: 94px;text-align: center;position: absolute;z-index: 18;"> €</i>
                    <img src="/front-end/images/price-tag/price-tag@3x.png" style="width: 14em;" class="img_price_item_details"/>
                </p>
            </div>

            <div class="sections">
                <div class="choose_payment">
                    <h4 class="title_choose_payment">
                        @lang('Choose your payment method:')
                    </h4>
                    <div  class="visa_choose_payment">
                        <label style="float: left;">
                        </label>
                    </div>
                    <div  class="paypal_choose_payment">
                        <label style="float: left;">
                        </label>
                    </div>
                </div>
                <div class="credit_card_details">

                    <div class="col-md-12" style="float:left;padding: 0em 2em;">
                          <img src="/front-end/images/payment/visa.png" id='btn-checkout' class="img_visa_choose_payment">
                          <form action="/stripe" method="POST" id='stripe-form'>
                            <input type="text" class="form-control products" name='products' hidden value=''>
                            <input type="text" class="form-control" name='token' hidden value=''>
                            <script src="https://checkout.stripe.com/checkout.js"></script>
                            <script>
                            var handler = StripeCheckout.configure({
                              key: 'pk_test_fHrlUIH5LLkAQpihvDVDH7Di',
                              image: '/front-end/images/dukkangi_man.png',
                              locale: 'auto',
                              token: function(token) {
                                products = [];
                                code = $('#couponcode').val();

                                   $('.item_qty_detail_my_card').each(function(i,obj){
                                       productId = $(obj).attr('data-productId');
                                       qty = $(obj).find('.num_item_qty').html();
                                       var product = {};
                                       product.id = productId;
                                       product.qty = qty;
                                       products.push(product);
                                   });
                                   $.ajax({
                                       type: "POST",
                                       url: `/stripe`,
                                       data:{'products':products,'code':code,'token':token.id,'email':token.email},
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
                                // You can access the token ID with `token.id`.
                                // Get the token ID to your server-side code for use.
                              }
                            });

                            document.getElementById('btn-checkout').addEventListener('click', function(e) {
                              // Open Checkout with further options:
                              total = parseInt($('#Total').html()) * 100;
                              handler.open({
                                name: 'Dukkangi',
                                description: '2 widgets',
                                currency: 'eur',
                                amount: total
                              });
                              e.preventDefault();
                            });

                            // Close Checkout on page navigation:
                            window.addEventListener('popstate', function() {
                              handler.close();
                            });
                            </script>
                          </form>


                        {{-- <form id="paypalform" action="https://www.paypal.com/cgi-bin/webscr" method="post"> --}}
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Identify your business so that you can collect the payments. -->
                            {{-- <input type="hidden" name="business" value="info@dukkangi.com"> --}}
                            <input type="hidden" name="business" value="info-facilitator@dukkangi.com">

                            <!-- Specify a Buy Now button. -->
                            <input type="hidden" name="cmd" value="_xclick">

                            <!-- Specify details about the item that buyers will purchase. -->
                            <input type="hidden" name="item_name" value="{{$productsName}}" >
                            <input type="hidden" name="item_number" value="{{$itemNumber}}">
                            <input id="paypalamount" type="hidden" name="amount" value="Nan" >
                            <input type="hidden" name="currency_code" value="EUR">
                            <!-- Display the payment button. -->

                            <img alt="" border="0" style="cursor: pointer"
                                 src="/front-end/images/payment/paypal.png"
                                 onclick="submitPaypal(this)">

                            <input type="image" id="clickpaypal" hidden name="submit" border="0"
                                   src="/front-end/images/payment/paypal.png"
                                   alt="Buy Now">

                        </form>

                        <p class="btn_credit_card_details" id="cancel-btn" style="margin-left: 8%;">@lang('Cancel')</p>
                    </div>
                </div>
            </div>
            </div>
        </div>


@endsection
@section('scripts')
    <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="/front-end/js/plugin/jquery-pretty-tabs.js"></script>
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
        //cancel button to delete cart
        $('#cancel-btn').on('click',function(){
          swal({
            title:'Confirmation',
            text:"Are you sure you want to empty your cart!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
              // do Ajax and delete the cart
              $.ajax({
                    type: "POST",
                    url: `/cart/delete`,
                    headers: {
                        "x-csrf-token": $("[name=_token]").val()
                    },
                }).done(response => {
                  if(response = 'true'){
                    swal({
                      title:'Deleted!',
                      text:'Your file has been deleted.',
                      type:'success',
                      showConfirmButton:false
                    });

                    // redirect to home page
                    window.location.href='/';
                  }
                });
            }
          })
        });
    });
</script>
<script>
    var total= 0;
    function num_plus(obj) {
       $(obj).parent().parent().find('p').find('span').text(
        parseFloat(
        parseFloat($(obj).parent().parent().find('p').find('span').text())  + parseFloat($(obj).parent().parent().parent().data('price'))
        ).toFixed(2));

        $('#total-gain').text(parseInt($(obj).parent().parent().parent().data('gain')) + parseInt($('#total-gain').text()) +" PT");


        $('#tax').text( parseFloat( parseFloat($('#tax').text() ) + parseFloat( parseFloat($(obj).parent().parent().parent().data('price') ) * 0.19)).toFixed(2) +"€");

        total = parseFloat(parseFloat(parseFloat( $('#Total').text() ) + $(obj).parent().parent().parent().data('price')) ).toFixed(2);

        $('#Total').text(total);

        qty = parseInt($(obj).parent().parent().find('.num_item_qty').text()) + 1;
        $(obj).parent().parent().find('h4').text(qty);

        $('.stripe-button').attr('data-amount',total);

        var qty = parseInt($(obj).parent().parent().find('.num_item_qty').text() );
        var id = $(obj).parent().parent().parent().attr('data-productId');
        $.ajax({
                     type: "POST",
                     url: `/changeqty/`,
                     data:{'qty':qty , 'id': id},
                     headers: {
                         "x-csrf-token": $("[name=_token]").val()
                     },
                 });

    }
    function num_min(obj) {
        if ((parseInt($(obj).parent().parent().text()) > 0)) {
                           $(obj).parent().parent().find('p').find('span').text(
        parseFloat(
        parseFloat($(obj).parent().parent().find('p').find('span').text())  - parseFloat($(obj).parent().parent().parent().data('price'))
        ).toFixed(2));

        $('#total-gain').text(parseInt( parseInt($('#total-gain').text()) -$(obj).parent().parent().parent().data('gain') ) +" PT");



        $('#tax').text( parseFloat( parseFloat($('#tax').text() ) - parseFloat( parseFloat($(obj).parent().parent().parent().data('price') ) * 0.19)).toFixed(2) + "€");

        if ( parseFloat($('#tax').text()) < 0  )
            $('#tax').text('0');

        $(obj).parent().parent().find('h4').text(parseInt($(obj).parent().parent().find('h4').text()) - 1);

        total = parseFloat(parseFloat(parseFloat( $('#Total').text() ) - $(obj).parent().parent().parent().data('price')) ).toFixed(2);
        $('#Total').text(total);

        var qty = parseInt($(obj).parent().parent().find('.num_item_qty').text() );
        var id = $(obj).parent().parent().parent().attr('data-productId');
        // console.log(id);
        // console.log(qty);

        $.ajax({
            type: "POST",
            url: `/changeqty/`,
            data:{'qty':qty , 'id': id},
            headers: {
                "x-csrf-token": $("[name=_token]").val()
            },
        });

        $('.stripe-button').attr('data-amount',total);
        }
    }
</script>
<script>

    code = 0 ;
    function checkCode(val){
        if (val.length == 12 ){ // validating coupon pattern
            if (code == 0 ) // fixing insterting coupon multiple times
                $.ajax({
                     type: "POST",
                     url: `/checkcoupon`,
                     data:{'code':val},
                     headers: {
                         "x-csrf-token": $("[name=_token]").val()
                     },
                 }).done(response => {
                     if (Array.isArray(response)){
                         swal({
                           title: 'Successfully',
                           text: "Coupon Check Successfully",
                           type: 'success',
                           confirmButtonColor: '#d90f17',
                           confirmButtonText: 'OK'
                         });
                         if (response[3] == 'fixed') // Changing Total Price
                         {
                            $('#Total').text( $('#Total').text() - response[2]);
                         }
                         if (response[3] == 'percentage'){ // Changing List prices and Details
                            $('#Total').text( $('#Total').text() -( $('#Total').text() * response[2]));
                            $('.item_qty_detail_my_card').each(function(i,obj){
                                $(obj).data('price' , parseFloat($(obj).data('price') - ($(obj).data('price') * response[2])).toFixed(2) );
                            });
                            $('.findit').each(function(i,obj){
                                $(obj).text(parseFloat( parseFloat($(obj).text())  - (parseFloat($(obj).text()) * response[2])).toFixed(2));
                            });
                            $('#tax').text( parseFloat(  parseFloat($('#tax').text()) - ( parseFloat($('#tax').text() )  * response[2] )  ).toFixed(2) + '€');
                         }
                           code ++;
                        }
                     if(response == 0){
                        swal({
                            title:'Fail',
                            text: 'Coupon Code Not Valid',
                            type: 'error',
                            confirmButtonColor: '#d90f17',
                            confirmButtonText: 'OK'
                        });
                     }
                });
        }
        else
             swal({
                title:'Fail',
                text: 'Coupon Code Not Valid',
                type: 'error',
                confirmButtonColor: '#d90f17',
                confirmButtonText: 'OK'
            });
    }

    function submitPaypal(){
        var inp = $('#paypalamount');
        var amount ;
        $.ajax({
             type: "POST",
             url: `/getamount`,
             headers: {
                 "x-csrf-token": $("[name=_token]").val()
             },
         }).done(response => {
            amount = parseInt(response);
            inp.val(amount);
           $('#clickpaypal').click();
     });
     }

</script>
@endsection
