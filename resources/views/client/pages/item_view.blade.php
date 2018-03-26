@extends('client.main')
@section('styles')
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/lib/bootstrap.min.css')}}">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/jquery-pretty-tabs.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/login.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/item.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/item_view.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/buy_item.css')}}">
     <link rel="stylesheet" href="{{URL::asset('/front-end/css/out_of_stock.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/material_icons.css')}}">
        <script type="text/javascript" src="{{URL::asset('/front-end/js/plugin/jssor.slider.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('/front-end/js/plugin/slide.js')}}"></script>
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/SimpleStarRating.css')}}">
          <style>
            .star{
                cursor: pointer;
                color: #fff;
            }
                   #content_page{
                margin-top: 6.6em;
                float: left;
            }
                  header{
                position: absolute;
                z-index: 33;
                width: 100%;
            }
            .rating{
                font-size: 1.3em;
                color: #fff;
                bottom: 0.6em;
                left: 1.4em;
            }
                .header_page  .rating{
                bottom: 0.2em;
                left: 18em;
            }
            .rating .star::after{
                color: #d80001;
            }
            .rating .star::before{
                color: #fff;
            }
            .div_item  .rating .star::after{
                color: #d80001;
                width: 0.75em;
                height: 1.7em;
            }
            .div_item .rating .star::before{
                color: #d80001;
                width: 0.75em;
                height: 0.7em;
            }
            .div_item .rating{
                left: 2em;
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

    @endsection
    @section('main_section')
        <div class="col-md-12" style="padding: 0em 5em;" id="content_page">
            <div class="header_page"  style = "background-image: url('{{$subcategory->image_id}}');background-size:100%">
                <p class="header_page_text_div">
                   {{$subcategory->english}}
                    <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                    <span class="rating rating-info subcategory" data-type="subcategory" data-id="{{$subcategory->id}}" ></span>
                </p>
            </div>

                <div class="one_item_details">
                    <div class="header_item_details">
                         <div class="discount_item_details">
                            <!-- Need a Change -->
                            <p class="text_discount_details"> 15% off</p>
                         </div>
                        <img src="{{$product->image_id}}" class="img_item_details" style="height: 380px" />
                        <div class="div_title_item_details" >
                            <p class="title_item_details">
                                {{$product->english}}
                            </p>
                            <span class="rating rating-info product" data-type="product" data-id="{{$product->id}}" style="float:left;"></span>
                               <i class="material-icons icon_item_details">&#xE838;</i>
                            <i class="material-icons icon_item_details">error_outline</i>
                        </div>
                    </div>
                    @if ($product->qty == 0)

                    <div class="item_out_of_stock">
                        <h3 class="title_item_out_of_stock">
                            Sorry!
                        </h3>
                        <p class="text_item_out_of_stock" style="font-family: 'EagarFont';">
                            item is out of stock
                        </p>
                        <div class="circle_check" onclick="circle_check(this);" style="cursor: pointer;">
                            <img src="/front-end/images/user_actions/check.png" class="icon_item_out_of_stock">
                        </div>
                        <p class="text_item_out_of_stock" style="font-size: 1.3em;" >
                            Notify me by email when this item becomes available
                        </p>
                    </div>
                    @endif
                    <!--<div class="price_tag_item_details">-->
                    @if ($product->qty != 0 )
                    <p class="price_item_details">
                        <span> {{$product->price}} €</span>
                        <img src="/front-end/images/price-tag/price-tag.png" class="img_price_item_details"/>
                    </p>
                    @endif
                    <!--</div>-->

                    <p class="points_item_details" {{ $product->qty == 0 ?"style='filter: blur(5px)'" : '' }}>
                        <span> {{$product->point}} Points </span>Bounce
                    </p>
                    <p  class="text_item_details" {{ $product->qty == 0 ?"style='filter: blur(5px)'" : '' }}>
                        {{ $product->desc_english}}

                    </p>
                     @if ($product->qty != 0 )

                    <p class="buy_item_details" style="margin-top: 50px">
                         <a href="" ><span style="cursor: pointer;"> Buy This Item</span></a>
                        <img src="/front-end/images/price-tag/buy-this-item.png" class="img_buy_item_details"/>
                    </p>
                     <p class="add_to_card_item_details" style="cursor: pointer;margin-top: 60px" id="btn_modal_one_item_details" >
                        <span> Add to cart</span>
                        <img src="/front-end/images/price-tag/add-to-cart.png" class="img_add_to_card_item_details"/>
                    </p>
                   @endif
                </div>

            <div class="sections">
                <div class="section">
                    <h4 class="title_section">
                        Section 1
                    </h4>
                    <p class="text_section">
                        <big>
                         <span>{{$product->section1_english}}</span>
                        </big>
                    </p>
                </div>
                <div class="section">
                    <h4 class="title_section">
                        Section 2
                    </h4>
                    <p class="text_section">
                         <span>{{$product->section2_english}}</span>
                         <p>
                         <span class="point_text_section">{{$product->point}} points</span> <small>This will be given to you !</small>
                         </p>
                    </p>
                </div>

                <div class="section">
                    <h4 class="title_section">
                        Section 3
                    </h4>
                      <p class="text_section">
                         {{$product->section3_english}}<br/><br>
                       </p>
                </div>
                <div class="section">
                    <h4 class="title_section">
                        Quantity
                    </h4>
                    <p class="text_section">
                        <big>
                         <span>{{$product->qty}} Pieces</span>
                        </big>
                    </p>
                </div>
                <div class="section" style="width:100%;">
                    <h4 class="title_section">
                        Description
                    </h4>
                    <p class="text_section">
                        {{$product->desc_english}}
                    </p>
                </div>
                <div class="section" style="width:100%;">
                    <h4 class="title_section">
                        Options
                    </h4>
                    <div class="options_section">
                        <div class="option_section">
                            <div class="box_option_section">

                            </div>
                            <p class="title_option_section">
                                Option 1
                            </p>
                        </div>
                         <div class="option_section">
                             <div class="box_option_section" style="background-color: #303030;">

                            </div>
                            <p class="title_option_section">
                                Option 2
                            </p>
                        </div>
                         <div class="option_section">
                             <div class="box_option_section" style="background-color: #e8e8e8;">

                            </div>
                            <p class="title_option_section">
                                Option 3
                            </p>
                        </div>
                         <div class="option_section">
                             <div class="box_option_section" style="background-color: #f5f5f5;">

                            </div>
                            <p class="title_option_section">
                                Option 4
                            </p>
                        </div>
                    </div>
                    <img src="/front-end/images/user_actions/view-my-cart.png" class="icon_buy_option_section">
            </div>
        </div>
        <div class="col-md-12" style="float:left;">
            <h3 class="title_customer_review">

        <br>
        <br>
        <br>
                Customer's Reviews
            </h3>
            <div class="customer_reviews col-md-7">
                @foreach($comments as $comment)
                 <div class="comments_customer_reviews">
                    <img src="/front-end/images/slider/item1.jpg" class="img_user_comments_customer_reviews" >
                    <div class="details_comment">
                        <h3 class="username_details_comment" style="width:225px">{{$comment->user_id}}</h3>
                        <p class="rated_details_comment" style="margin-left: 0px">Rated this product</p>
                        <span class="rating comment"  ></span>
                        <p class="text_details_comment">
                            {{$comment->description}}
                        </p>
                        <div class="user_actions_details_comment">
                            <div class="upvoted_user_actions">
                                <img src="/front-end/images/user_actions/upvoted.png" class="img_upvoted_user_actions">
                                <p class="text_upvoted_user_actions">
                                    Upvoted
                                </p>
                            </div>
                             <div class="replay_user_actions">
                                <img src="/front-end/images/user_actions/replay.png" class="img_replay_user_actions">
                                <p class="text_replay_user_actions" style="color: #999">
                                    Reply
                                </p>
                            </div>
                             <div class="report_user_actions">
                                <img src="/front-end/images/user_actions/report.png" class="img_report_user_actions">
                                <p class="text_report_user_actions" style="color: #999">
                                    Report
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="leave_constructive_review col-md-4">
                {!! Form::open(['route' => ['comment',$product->id ]]) !!}
                    <h3 class="text_leave_constructive_review" style="color: #d80001;margin-top: 0em;">Leave a constructive review</h3>
                    <p class="text_leave_constructive_review" style="margin-top:0.6em;">Rate this product </p>
                   <div class="details_comment" style="margin-bottom: 50px">
                    <span class="rating form-rate" data-id="{{$product->id }}" style="margin-right: 160px"></span>
                    </div>

                    <p class="text_leave_constructive_review">Leave a comment</p>
                    {{ Form::text('commentbody' , null,['class' => 'input_leave_constructive_review']) }}
                    <!-- input_leave_constructive_review -->
                    {{ Form::text('rate', 0,['hidden' => 'hidden' , 'id'=>'rate'])}}
                    <a class="btn_leave_constructive_review btn-block commentbody"  id="btn-comment" data-id="{{$product->id}}" style="background-color: #d80001;color: #fff">Post my review</a>
                    {{ Form::submit('',['hidden' =>'hidden' , 'id' =>'myBtn'])}}
                    <p class="btn_leave_constructive_review" onclick="document.getElementsByClassName('commentbody').thisext ='' ">Cancel</p>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-12" style="float:left;">
            <h3 class="title_similar_items" >
                Similar item
            </h3>

            <!-- Just Testing for($i=0 ; $i< 9; $i++) -->
                            @foreach($simiProducts as $simiproduct)
                            @if($simiproduct->id == $product->id)
                            <?php
                            continue;
                            ?>
                            @endif
                              <div class="col-md-3" style="margin-top: 1em;float: left;">
                                <div class="div_item" style="width: 229px">
                                    <a href="{{ route('product',$simiproduct->id) }}">
                                    <img src="{{$simiproduct->image_id}}" class="img_item"  />
                                    <p class="item_name">{{ $simiproduct->english}}  </p>
                                    </a>
                                    <p class="item_price" style="margin-bottom: 0em;">{{$simiproduct->price}} €</p>
                                    <span class="rating simi" style="width: 0.75em;height: 1.7em;" ></span>
                                    <img src="/front-end/images/user_actions/view-my-cart.png" class="icon_view_my_card" />
                                </div>
                            </div>
                            @endforeach

            <!-- Testing  endfor -->
        </div>
    </div>


@endsection
@section('cart')

<!-- Add To Cart -->

 <div class="background_modal" style="display: none;" >

         </div>


         <div class="modal_one_item_details" id="modal_one_item_details" style="display: none;">
                    <div class="header_item_details">
                        <img src="/front-end/images/slider/slider1.jpg" class="img_item_details" />
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
                                    <img src="/front-end/images/payment/handler-plus.png"
                                    onclick="num_plus(this)" class="btn_qty">
                                     <img src="/front-end/images/payment/handler-min.png" onclick="num_min(this)" class="btn_qty" style="margin-top: -0.9em">
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
                    <p class="price_item_details" style="margin-top: 0em;">
                        <span style="font-family: 'HeadlinesFont';font-size: 1.3em;margin-top: 0.4em;">Total</span>
                        <span style="left:4em;"> {{$product->price}} $</span>
                        <img src="/front-end/images/price-tag/price-tag@3x.png" style="width: 14em;" class="img_price_item_details"/>
                    </p>
                    <div class="button_modal_one_item_details">
                        <p class="btn_done" style="background-color: #d80001;color: #fff;">Done</p>
                        <p class="btn_cancel" style="margin-left: 9%;">Cancel</p>
                        <p class="btn_view_my_cart" style="width: 100%;">View my Cart</p>
                    </div>
                </div>

<!--script src="{{url('/js/jquery.min.js')}}"></script-->
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('/front-end/js/plugin/jquery-pretty-tabs.js')}}"></script>

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
        <script src="{{URL::asset('/front-end/js/plugin/SimpleStarRating.js')}}"></script>


 <script>
    var ratings = document.getElementsByClassName('rating');


            //5 functions for 1, 2, 3, 4, 5 Stars for anything
            //one more function for those which don't have any rate
                //Initial Rate Subcategory
                var ratings = document.getElementsByClassName('subcategory');

                for (var i = 0; i < ratings.length; i++) {

                    var r = new SimpleStarRating<?php echo (!isset($subcategory->rate)?'0':$subcategory->rate)?>(ratings[i]);

                }

                //Form Rate This Product
                var ratings = document.getElementsByClassName('form-rate');
                for (var i = 0; i < ratings.length; i++) {
                    var r = new SimpleStarRating(ratings[i]);

                }
                //Initial Rate Product
                 var ratings = document.getElementsByClassName('product');
                for (var i = 0; i < ratings.length; i++) {
                    var r = new SimpleStarRating<?php echo ($product->rate==0?'':$product->rate) ?>(ratings[i]);

                    ratings[i].addEventListener('rate', function (e) {
                        console.log('Rating: ' + e.detail);
                    });
                }

                //Initial Rate Comments

                var ratings = document.getElementsByClassName('comment');
                <?php $counter= 0 ?>

                for (var i = 0; i < ratings.length; i++) {

                    var r = new SimpleStarRating<?php echo isset($comments[$counter]->rate)?$comments[$counter]->rate : '' ?>(ratings[i]);
                    <?php $counter++?>
                }
                //Initial Rate Simiproducts

                var ratings = document.getElementsByClassName('simi');
                <?php $counter= 0 ?>

                for (var i = 0; i < ratings.length; i++) {
                    var r = new SimpleStarRating<?php echo (isset($simiProducts[$counter]->rate)?$simiProducts[$counter]->rate:'0') ?>(ratings[i]);
                    <?php $counter++?>
                }


        </script>
        <script>
            $('.form-rate').click(function(){
                console.log("asdlijasd");
                var num_star_active = 0;
               $(this).find('.star').each(function(){
                  if($(this).hasClass('active')){
                      num_star_active ++;
                  }
               });
               type = $(this).data('type');
               id=$(this).data('id');

            data = {};
            console.log(data);
            $.ajax({
                url: "/rate" ,
               type: "POST",
                data: {"type":type,"rate": num_star_active , "id": id } ,
                dataType: 'json',
                success: function (response) {
                    alert(response.status);
                }
             });
               //      Value star is variable : num_star_active
               //      Request Update rating
            });

            $('.rating').click(function(){
                var num_star_active = 0;
               $(this).find('.star').each(function(){
                  if($(this).hasClass('active')){
                      num_star_active ++;
                  }
               });
           });

            $('#btn-comment').on("click",function(e){
                e.preventDefault();

                var num_star_active = 0;
               $('.leave_constructive_review').find('.star').each(function(){
                  if($(this).hasClass('active')){
                      num_star_active ++;
                  }
               });
               var comment = $('input[name=commentbody]').val();
               var id = $(this).data('id');

              $.ajax({
                    url: "/comment-save" ,
                    type: "POST",
                    data: {"comment":comment,"rate": num_star_active , "id": id } ,
                    dataType: 'json',
                    success: function (response) {
                        alert(response.status);
                    }
                 });

                console.log(num_star_active);
            });
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
            $('#btn_modal_one_item_details').click(function(){
               $('#modal_one_item_details').show();
               $('.background_modal').show();
               $('#header').css( 'filter','blur(5px)');
               $('#content_page').css('filter','blur(5px)');
               $('.footer').css('filter','blur(5px)');
            });
            $('.background_modal').click(function(){
                $('#modal_one_item_details').hide();
                $('.background_modal').hide();
                $('#header').css( 'filter','blur(0px)');
                $('#content_page').css('filter','blur(0px)');
                $('.footer').css('filter','blur(0px)');
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
        <script>
            function circle_check(obj) {
                if ($(obj).find('.icon_item_out_of_stock').css('display') != 'none') {
                    $(obj).find('.icon_item_out_of_stock').css('display', 'none');
                } else {
                    $(obj).find('.icon_item_out_of_stock').css('display', 'block');
                }
            }
        </script>
        <script>
          if(parseInt($('.one_item_details').height()) < 730){
              $('.one_item_details .text_item_details').css('paddingBottom','8em');
          }else{
              $('.one_item_details .text_item_details').css('paddingBottom','0em');
          }
          $('.item_out_of_stock').css('height',parseInt($('.one_item_details').height()) - 380);
        </script>
        @endsection