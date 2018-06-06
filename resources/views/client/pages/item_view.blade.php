@extends('client.main') @section('styles')
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

<style>
    .star {
        cursor: pointer;
        color: #fff;
    }

    #content_page {
        margin-top: 6.6em;
        float: left;
    }

    header {
        position: absolute;
        z-index: 33;
        width: 100%;
    }

    a:hover {
        color: inherit;
        text-decoration: none;
    }

    a {
        color: inherit;
        text-decoration: none;
    }
    .simi {
            max-width: 16% !important;
            margin-left: 6%;
        }

    .rating {
        font-size: 1.3em;
        color: #fff;
        bottom: 0.6em;
        left: 1.4em;
    }

    .header_page .rating {
        bottom: 0.2em;
        left: 18em;
    }

    .rating .star::after {
        color: #d80001;
    }

    .rating .star::before {
        color: #fff;
    }

    .div_item .rating .star::after {
        color: #d80001;
        width: 0.75em;
        height: 1.7em;
    }

    .div_item .rating .star::before {
        color: #d80001;
        width: 0.75em;
        height: 0.7em;
    }

    .div_item .rating {
        left: 2em;
    }

    .div_item {
        width: 229px;
        height: 255px
    }



    .details_comment .rating {
        bottom: unset;
        right: 1.4em;
        left: unset;
    }

    .details_comment .rating .star::after {
        color: #d80001;
    }

    .details_comment .rating .star::before {
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

    .imgslide {
        width: 30px !important;
        height: 3px !important;
        margin-top: 1px !important;
        margin-right: 3px !important;
        margin-left: 3px !important;
        text-indent: -999px !important;
    }

    .header_page_text_div {
        padding: 0.8em 2em;
        top: 10.9em;
        width: 81.1%;
        padding-left: 25.5em
    }

    .btn_qty {
        cursor: pointer;
    }

    .block_similar {
        float: left;
        margin-left: 0px;
        padding-right: 0px;
        overflow: hidden;
    }

    .all_page_item_view {
        padding: 0em 5em;
    }

    .title_reviews {
        float: left;
        margin-top: 290px
    }

    .add_to_card_item_details span {
        margin-top: 8.3em;
        color: #fff;
    }

    .img_add_to_card_item_details {
        margin-top: 10.5em;
    }

    .logo_prodect {
        margin-left: 210px;
        width: 13%;
    }
    .img_item
    {
        height: 10.4em;
    }
    .button_modal_one_item_details {
            margin-top: 3em;
        }

        .text_item_details{
            height: 16em;
            margin-bottom: 5em;
            padding-bottom: 0em;
        }
    @media (min-width: 768px) and (max-width: 1030px) {
        .all_page_item_view {
            padding: 0em 0em;
        }
        .details_comment .rating {
            margin-top: 0.8em !important;
            font-size: 1.7em !important;
            margin-right: 92px !important;
        }
        .simi {
            max-width: 50% !important;
            margin-left: 0px !important;
        }
        .text_discount{
                width: 5em;
                left: -0.5em;
        }
        .div_item {
            width: 100%;
            height: auto;
        }
        .header_page {
            width: 100%;
            margin-left: 0%;
            height: 16.4em;
        }
        .header_page_text_div {
            width: 100%;
            padding: 0.8em 2em;

            top: 10.3em;
            padding-left: 25.5em
        }
        .one_item_details,
        .modal_one_item_details {
            width: 42%;
            margin-left: 2em;
        }
        .sections {
            width: 54.8%;
        }
        .discount_item_details {
            border-top: 9em solid #d80001;
            border-right: 7.8em solid transparent;
        }
        .text_discount_details {
            font-size: 1.7em;
        }
        .header_page_text_div {
            padding-left: 26.8em;
        }
        .header_page .rating {
            left: 17.7em;
            font-size: 1.5em;
        }
        .text_section {
            font-size: 1.5em;
        }
        .text_item_details {
            font-size: 1.5em;
        }
        .points_item_details {
            font-size: 1.7em;
        }
        .img_buy_item_details,
        .img_add_to_card_item_details {
            margin-top: 37.5em;
        }
        .buy_item_details span,
        .add_to_card_item_details span {
            margin-top: 20.1em;
            font-size: 2em;
        }
        .add_to_card_item_details span {
            margin-top: 10em;
        }
        .img_add_to_card_item_details {
            margin-top: 17.5em;
        }
        .img_buy_item_details,
        .img_add_to_card_item_details {
            width: 17em;
        }
        .title_section {
            font-size: 2.4em;
        }
        .text_item_details {
            margin-bottom: 5em;
            height: 11em;
        }
        .img_buy_item_details,
        .img_add_to_card_item_details {
            right: -2.8em;
        }
        .options_section {
            padding: 0em 2em;
            width: 88%;
        }
        .details_comment .rating {
            margin-top: 1.8em;
            font-size: 1.7em;
        }
        .rating_block_item {
            font-size: 2.3em;
            left: 0.6em !important;
            bottom: 1em !important;
        }
        .img_item {
            height: 21.4em;
        }
        .point_text_section {
            font-size: 1.2em;
        }
        .username_details_comment {
            font-size: 2.2em;
        }
        .rated_details_comment {
            font-size: 1.7em;
        }
        .details_comment {
            width: 75%;
        }
        .img_user_comments_customer_reviews {
            width: 20%;
        }
        .text_details_comment {
            font-size: 1.4em;
        }
        .username_details_comment {
            width: 70%;
        }
        .upvoted_user_actions,
        .replay_user_actions,
        .report_user_actions {
            width: 33%;
        }
        .img_upvoted_user_actions,
        .img_replay_user_actions,
        .img_report_user_actions {
            width: 27%;
        }
        .text_upvoted_user_actions,
        .text_replay_user_actions,
        .text_report_user_actions {
            font-size: 1.4em;
            margin-top: 0.2em;
        }

        .text_footer {
            font-size: 1.3em;
        }
        .block_text_footer {
            margin-left: 20%;
        }
        .section {
            width: 81%;
            float: left;
            padding-left: 1em;
        }
        .logo_prodect {
            width: 19%;
            float: right;
            margin-right: 2em;
            margin-top: -3em;
        }

        .logo_prodect img {
            width: 55%;
        }
        .title_reviews {
            float: left;
            margin-top: 310px
        }
        .block_similar {
            float: left;
            margin-left: 0px;
            padding-right: 0px;
            overflow: auto;
        }
        .rate-us {
            display: none;
        }
        .button_modal_one_item_details {
            margin-top: 5em;
        }
        .one_item_details, .modal_one_item_details {
    box-shadow: 1px 1px 25px #000000b0;
}
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

    .jssora093 {
        display: block;
        position: absolute;
        cursor: pointer;
    }

    .jssora093 .c {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
    }

    .jssora093 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
    }

    .jssora093:hover {
        opacity: .8;
    }

    .jssora093.jssora093dn {
        opacity: .6;
    }

    .jssora093.jssora093ds {
        opacity: .3;
        pointer-events: none;
    }

    .jssort101 .p {
        position: absolute;
        top: 0;
        left: 0;
        box-sizing: border-box;
        background: #000;
    }

    .jssort101 .p .cv {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 2px solid #000;
        box-sizing: border-box;
        z-index: 1;
    }

    .jssort101 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
        visibility: hidden;
    }

    .jssort101 .p:hover .cv,
    .jssort101 .p.pdn .cv {
        border: none;
        border-color: transparent;
    }

    .jssort101 .p:hover {
        padding: 2px;
    }

    .jssort101 .p:hover .cv {
        background-color: rgba(0, 0, 0, 6);
        opacity: .35;
    }

    .jssort101 .p:hover.pdn {
        padding: 0;
    }

    .jssort101 .p:hover.pdn .cv {
        border: 2px solid #fff;
        background: none;
        opacity: .35;
    }

    .jssort101 .pav .cv {
        border-color: #fff;
        opacity: .35;
    }

    .jssort101 .pav .a,
    .jssort101 .p:hover .a {
        visibility: visible;
    }

    .jssort101 .t {
        position: initial;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        opacity: .6;
    }

    .jssort101 .pav .t,
    .jssort101 .p:hover .t {
        opacity: 1;
    }
</style>
<style>
    .star_1 i:hover {
        content: "&#xE838;";
    }

    .carousel-indicators .active {
        width: 30px !important;
        height: 3px !important;
        margin-right: 3px !important;
        margin-left: 3px !important;
        margin-bottom: 0px !important;
        margin-top: 1px !important;
    }
</style>

@endsection @section('main_section')
<div class="col-md-12 all_page_item_view" id="content_page">
    <div class="header_page" style="background-image: url('{{$subcategory->image_id}}');background-size:133%">
        <p class="header_page_text_div">
            {{$subcategory->english}}
            <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
            <span class="rating  rating-info ratings{{$subcategory->rate}}" data-type="subcategory" data-id="{{$subcategory->id}}" style="margin-left: 40px"></span>
        </p>
    </div>

    <div class="one_item_details" data-id="{{$product->id}}">
        <div class="header_item_details">
            @if(isset($product->discount) && $product->discount != 0)
            <div class="discount_item_details" style="z-index: 20">
                <p class="text_discount_details">
                    <small>{{$product->discount}}</small> % @lang('off')</p>
            </div>
            @endif

            <!-- -Slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 380px">
                <ol class="carousel-indicators" style="bottom:-10px">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    @if(isset($product->image_id2))
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    @endif @if(isset($product->image_id3))
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    @endif @if(isset($product->image_id4))
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    @endif

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class=" d-block w-100" data-target="carouselExampleIndicators" style="height: 380px" src="{{$product->image_id}}" alt="First slide">
                    </div>

                    @if(isset($product->image_id2))
                    <div class="carousel-item">
                        <img class="img_item_details" data-target="carouselExampleIndicators" style="height: 380px" src="{{$product->image_id2}}"
                            alt="Second slide">
                    </div>
                    @endif @if(isset($product->image_id3))
                    <div class="carousel-item">
                        <img class="img_item_details" data-target="carouselExampleIndicators" style="height: 380px" src="{{$product->image_id3}}"
                            alt="Third slide">
                    </div>
                    @endif @if(isset($product->image_id4))
                    <div class="carousel-item">
                        <img class="img_item_details" data-target="carouselExampleIndicators" style="height: 380px" src="{{$product->image_id4}}"
                            alt="Fourth slide">
                    </div>
                    @endif
                </div>

            </div>


            <!-- /Slider -->
            <!-- <img src="{{$product->image_id}}" /> -->
            <div class="div_title_item_details">
                <p class="title_item_details">
                    {{$product->english}}
                </p>
                <span class="rating rating-info ratings{{$product->rate}}" data-type="product" data-id="{{$product->id}}" style="float:left;"></span>
                <i class="material-icons icon_item_details">&#xE838;</i>
                <i class="material-icons icon_item_details">error_outline</i>
            </div>
        </div>
        @if ($product->qty == 0)

        <div class="item_out_of_stock">
            <h3 class="title_item_out_of_stock">
                Sorry!
            </h3>
            <p class="text_item_out_of_stock" style="font-family: 'EagarFont';padding: 0em 0em !important;">
                item is out of stock
            </p>
            <div class="circle_check" onclick="circle_check(this);" style="cursor: pointer;">
                <img src="/front-end/images/user_actions/check.png" class="icon_item_out_of_stock" style="display: none;">
            </div>
            <p class="text_item_out_of_stock" style="font-size: 1.3em;padding: 0em 0em !important;">
                Notify me by email when this item becomes available
            </p>
        </div>
        @endif
        <!--<div class="price_tag_item_details">-->
        @if ($product->qty != 0 )
        <p class="price_item_details">

            @if (isset($product->discount) && $product->discount_price != $product->price)
            <span style="left: 30px;width: 5em;">

                <small>
                    <span style="text-decoration: line-through;left: -2.5em;top: -6px; font-size:33px"><small> {{$product->price}}</small></span>
                    <span style="font-size: 15px;top: 1em;">Saled To</span>
                    <b style="font-family: 'EagarFont';"> {{$product->discount_price}} €</b>

                </small>
                @else
                <span>
                    {{$product->price}} € @endif
                </span>
                <img src="/front-end/images/price-tag/price-tag.png" class="img_price_item_details" />
        </p>
        @endif
        <!--</div>-->
        {{--
        <p class="points_item_details" style="margin-top:1em ;{{ $product->qty == 0 ?" filter: blur(5px) " : '' }}">
            <span>
                {{ sprintf('%0.2f', $product->tax) }} €
            </span>
            @lang('Tax')
            <small>
                <small>
                    <i>(included)</i>
                </small>
            </small>
        </p> --}}
        <p class="points_item_details" style="margin-left:50px;margin-top: 0em; {{ $product->qty == 0 ?" filter: blur(5px)
            " : '' }}">
            <span> {{ $product->gain_points }} @lang('Points') </span> @lang('Bounce')
        </p>

        <p class="text_item_details" {{ $product->qty == 0 ?"style='filter: blur(5px)'" : '' }} style="margin-top:32px"> {{ $product->desc_english}}

        </p>
        @if ($product->qty != 0 ) {{--
        <p class="buy_item_details" style="margin-top: 100px">
            <a href="{{route('buyitem' , $product->id)}}">
                <span style="cursor: pointer;">
                    <small> @lang('Buy This Item')</small>
                </span>
            </a>
            <img src="/front-end/images/price-tag/buy-this-item.png" class="img_buy_item_details" />
        </p> --}}
        <p class="add_to_card_item_details" style="cursor: pointer;margin-top: 100px" id="btn_modal_one_item_details">
            <span>
                <small>@lang('Add to cart')</small>
            </span>

            <img src="/front-end/images/price-tag/buy-this-item.png" class="img_add_to_card_item_details" @if(session( 'lang')=='de'
                ) style="height: 7.2em;" @endif />
        </p>
        @endif
    </div>

    <div class="sections">
        <div class="section">
            <h4 class="title_section">
                @lang('Section') 1
            </h4>
            <p class="text_section">
                <big>
                    <span>{{$product->section1_english}}</span>
                </big>
            </p>
        </div>

        <div class="logo_prodect">
            <a href="{{ route('brandfilter', $brand->id ) }}">
                <img style="width:32px" src="{{ $brand->image_path }}" />
            </a>
        </div>
        <div class="section">
            <h4 class="title_section">
                @lang('Section') 2
            </h4>
            <p class="text_section">
                <span>{{$product->section2_english}}</span>
                <p>
                    <span class="point_text_section">{{$product->point}} @lang('points')</span>
                    <small>@lang('This will be given to you !') </small>
                </p>
            </p>
        </div>

        <div class="section">
            <h4 class="title_section">
                @lang('Section') 3
            </h4>
            <p class="text_section">
                {{$product->section3_english}}
                <br/>
                <br>
            </p>

        </div>
    </div>

    <div class="col-md-12 title_reviews">
        <h3 class="title_customer_review">
            @lang("Customer's Reviews")
        </h3>
        <div class="customer_reviews col-md-7">
            @foreach($comments as $comment)
            <div class="comments_customer_reviews">
                <img src="{{isset($comment->user->image_id) ? $comment->user->image_id : '/uploads/user.png'}}" style="min-height: 4em;" class="img_user_comments_customer_reviews">
                <div class="details_comment">
                    <h3 class="username_details_comment" style="width:225px">{{$comment->user->name}}</h3>
                    <p class="rated_details_comment" style="margin-left: 0px">
                        <?php if($comment->rate != 0){ ?> @lang('Rated this product')
                        <?php } ?>
                    </p>
                    <span class="rating ratings{{$comment->rate}}"></span>
                    <p class="text_details_comment">
                        {{$comment->description}}
                    </p>
                    <div class="user_actions_details_comment">
                        <div class="upvoted_user_actions">
                            <img src="/front-end/images/user_actions/upvoted.png" class="img_upvoted_user_actions">
                            <p class="text_upvoted_user_actions">
                                @lang('Upvoted')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="leave_constructive_review col-md-4">
            {!! Form::open(['route' => ['comment',$product->id ]]) !!}
            <h3 class="text_leave_constructive_review" style="color: #d80001;margin-top: 0em;">@lang('Leave a constructive review')</h3>
            <p class="text_leave_constructive_review" style="margin-top:0.6em;">@lang('Rate this product') </p>
            <div class="details_comment" style="margin-bottom: 50px">
                <span class="rating2 ratinge rating form-rate" data-id="{{$product->id }}" style="margin-right: 160px"></span>
            </div>

            <p class="text_leave_constructive_review">@lang('Leave a comment')</p>
            {{ Form::text('commentbody' , null,['class' => 'input_leave_constructive_review']) }}
            <!-- input_leave_constructive_review -->
            {{ Form::text('rate', 0,['hidden' => 'hidden' , 'id'=>'rate'])}}
            <a class="btn_leave_constructive_review btn-block commentbody" id="btn-comment" data-id="{{$product->id}}" style="background-color: #d80001;color: #fff">@lang('Post my review')</a>
            {{ Form::submit('',['hidden' =>'hidden' , 'id' =>'myBtn'])}}
            <p class="btn_leave_constructive_review" onclick="document.getElementsByClassName('input_leave_constructive_review').commentbody.value = '';   ">@lang('Cancel') </p>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<div class="col-md-12 block_similar">
    <h3 class="title_similar_items">
        @lang('Similar items')
    </h3>

    @foreach($simiProducts as $simiproduct) @if($simiproduct->id == $product->id)
    <?php
                            continue;
                            ?> @endif

    <div class=" col-lg-3 col-md-6 simi" style="margin-top: 1em;float: left;margin-bottom: 20px;">
        <div class="div_item">
            @if (isset($simiproduct->discount) && $simiproduct->discount != 0)
            <div class="discount_item">
                <p class="text_discount">
                <span style="text-decoration: line-through;" >{{$simiproduct->price}} €</span> <br>
                <span style="font-family: unset;font-weight: bolder;font-size: 22px;"> {{ $simiproduct->discount_price}} €</span>
            </p>
                <div class="shadow_div_discount"></div>
            </div>
            @endif
            <a href="{{ route('product',$simiproduct->id) }}">
                <img src="{{$simiproduct->image_id}}" class="img_item" />
                <p class="item_name">{{ $simiproduct->english}} </p>
            </a>
            <p class="item_price" style="margin-bottom: 0em;">{{$simiproduct->price}} €</p>
            <span class="rating ratings{{$simiproduct->rate}}" style="width: 0.75em;height: 1.7em; left: 1em;bottom: 0.2em;"></span>
            <img src="\front-end\images\user_actions\view-my-cart.png" class="icon_view_my_card">
        </div>
    </div>
    @endforeach

</div>
</div>
@endsection @section('cart')

<!-- Add To Cart -->

<div class="background_modal" style="display: none;"></div>
<div class="modal_one_item_details" id="modal_one_item_details" style="display: none;" data-productId="{{$product->id}}"
    data-qty='1'>
    <div class="header_item_details">
        <img src="{{$product->image_id}}" class="img_item_details" style="height: 300px" />
        <div class="div_title_item_details">
            <p class="title_item_details">
                {{$product->english}}
            </p>
            <span class="rating ratings{{$product->rate}}" style="float:left;"></span>
            <i class="material-icons icon_item_details">&#xE838;</i>
            <i class="material-icons icon_item_details">error_outline</i>
        </div>
    </div>
    <div class="col-md-12" style="margin-top: 0.6em;float: left;">
        <div style="width: 30%;float: left;">
            <h3 class="title_qty">
                @lang('Quantity')
            </h3>
        </div>
        <div style="width: 70%;float: right;">
            <p class="num_qty">
                1
            </p>
            <div style="width:30%;float: right;">
                <img src="/front-end/images/payment/handler-plus.png" onclick="num_plus(this)" class="btn_qty">
                <img src="/front-end/images/payment/handler-min.png" onclick="num_min(this)" class="btn_qty" style="margin-top: -0.9em">
            </div>
            <!-- <img -->
        </div>
    </div>

    <p class="price_item_details" style="margin-top: 0em;" data-product-price='{{isset($product->discount_price) ? $product->discount_price: $product->price}}'>
        <span style="font-family: 'HeadlinesFont';font-size: 1.3em;margin-top: 0.4em;left: -1em;">@lang('Total') </span>
        <span class="total_qty" style="left:2.2em;width: 6em"> {{isset($product->discount_price) ? $product->discount_price: $product->price}} €</span>
        <img src="/front-end/images/price-tag/price-tag@3x.png" style="width: 14em;" class="img_price_item_details" />
    </p>
    <div class="button_modal_one_item_details">
        @if( Auth::check())
        <p class="btn_done" style="background-color: #d80001;color: #fff;cursor: pointer">@lang('Done')</p>
        <p class="btn_cancel" style="margin-left: 9%;cursor: pointer">@lang('Cancel') </p>
        <a href="{{route('mycart')}}">
            <p class="btn_view_my_cart" style="width: 100%;">@lang('View my Cart') </p>
        </a>
        @else
        <a href="{{route('login')}}" class="btn_done" style="background-color: #d80001;color: #fff;cursor: pointer">Login To Add</a>

        <a class="btn_cancel" style="margin-left: 9%;cursor: pointer" onclick="hideModal()">@lang('Cancel') </a>
        @endif
    </div>
</div>
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


    var ratings = document.getElementsByClassName('ratings');

    for (var i = 0; i < ratings.length; i++) {

        var r = new SimpleStarRating0(ratings[i]);

    }
    //5 functions for 1, 2, 3, 4, 5 Stars for anything
    //one more function for those which don't have any rate
    //Initial Rate Subcategory
    var ratings = document.getElementsByClassName('ratings1');

    for (var i = 0; i < ratings.length; i++) {

        var r = new SimpleStarRating1(ratings[i]);

    }


    //Form Rate This Product
    var ratings = document.getElementsByClassName('form-rate');
    for (var i = 0; i < ratings.length; i++) {
        var r = new SimpleStarRating(ratings[i]);

    }
    //Initial Rate Product
    var ratings = document.getElementsByClassName('ratings2');
    for (var i = 0; i < ratings.length; i++) {
        var r = new SimpleStarRating2(ratings[i]);

        ratings[i].addEventListener('rate', function (e) {

        });
    }

    //Initial Rate Comments

    var ratings = document.getElementsByClassName('ratings3');
                <?php $counter = 0 ?>

                for (var i = 0; i < ratings.length; i++) {

        var r = new SimpleStarRating3(ratings[i]);
                    <?php $counter++ ?>
                }
    //Initial Rate Simiproducts


    var ratings = document.getElementsByClassName('ratings4');
    for (var i = 0; i < ratings.length; i++) {
        var r = new SimpleStarRating4(ratings[i]);

    }

    var ratings = document.getElementsByClassName('ratings5');
    for (var i = 0; i < ratings.length; i++) {
        var r = new SimpleStarRating5(ratings[i]);

    }

               // function formRateInitialize(){
                 //   var ratings = document.getElementsByClassName('form-rate');
                    //for (var i = 0; i < ratings.length; i++) {
                    //    ratings.r = new SimpleStarRating(ratings[i]);
                  //  }
                //}
</script>
<script>
    $('.form-rate').click(function () {
        var num_star_active = 0;
        $(this).find('.star').each(function () {
            if ($(this).hasClass('active')) {
                num_star_active++;
            }
        });
        type = $(this).data('type');
        id = $(this).data('id');

        data = {};
        $.ajax({
            url: "/rate",
            type: "POST",
            data: { "type": type, "rate": num_star_active, "id": id },
            dataType: 'json',
            success: function (response) {
                alert(response.status);
            }
        });
        //      Value star is variable : num_star_active
        //      Request Update rating
    });

    $('.rating').click(function () {
        var num_star_active = 0;
        $(this).find('.star').each(function () {
            if ($(this).hasClass('active')) {
                num_star_active++;
            }
        });
    });

    $('#myBtn').on('click', function (e) {
        e.preventDefault();
        return false;
    })

    $('#btn-comment').on("click", function (e) {
        e.preventDefault();

        var num_star_active = 0;
        $('.leave_constructive_review').find('.star').each(function () {
            if ($(this).hasClass('active')) {
                num_star_active++;
            }
        });
        var comment = $('input[name=commentbody]').val();
        var id = $(this).data('id');

        $.ajax({
            url: "/comment-save",
            type: "POST",
            data: { "comment": comment, "rate": num_star_active, "id": id },
            dataType: 'json',
        }).done(response => {
            if (response == 1)
                swal({ title: "Successfully!", text: "Comment Added.", type: "success", timer: 2000, showConfirmButton: false });;
            location.reload();
        });

    });
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
    $('#btn_modal_one_item_details').click(function () {
        showModal();
    });
    $('.background_modal').click(function () {
        hideModal();
    });
    $('#modal_one_item_details .btn_cancel').on('click', function () {
        hideModal();
    });

    $('#modal_one_item_details .btn_done').on('click', function () {
        //get productId,Qty
        productId = $('#modal_one_item_details').attr('data-productId');
        qty = $('#modal_one_item_details').attr('data-qty');
        //submit add to cart ajax.
        $.ajax({
            type: "POST",
            url: `/cart/add`,
            data: { 'productId': productId, 'qty': qty },
            headers: {
                "x-csrf-token": $("[name=_token]").val()
            },
        }).done(response => {
            if (response.id > 0) {
                swal({ title: "Successfully!", text: "Item Added.", type: "success", timer: 2000, showConfirmButton: false });
                hideModal();
            }
        });
    });

    function showModal() {
        $('#modal_one_item_details').show();
        $('.background_modal').show();
        $('#header').css('filter', 'blur(5px)');
        $('#content_page').css('filter', 'blur(5px)');
        $('.footer').css('filter', 'blur(5px)');
    }

    function hideModal() {
        $('#modal_one_item_details').hide();
        $('.background_modal').hide();
        $('#header').css('filter', 'blur(0px)');
        $('#content_page').css('filter', 'blur(0px)');
        $('.footer').css('filter', 'blur(0px)');
    }
</script>
<script>
    function num_plus(obj) {
        counter = parseInt($(obj).parent().parent().find('p').text());
        if (counter < <?php echo $product -> qty - 1 ?> ) {
            counter = counter + 1
            $(obj).parent().parent().find('p').text(counter);
        }
                else if (counter < 1) {
            counter = 1;
            $(obj).parent().parent().find('p').text(counter);
        }
        changeTotal(counter);
    }
    function num_min(obj) {
        counter = parseInt($(obj).parent().parent().text());
        if ((counter > 1)) {
            counter = counter - 1;
            $(obj).parent().parent().find('p').text(counter);
        }
        changeTotal(counter);
    }

    function changeTotal(qty) {
        productPrice = $('#modal_one_item_details .price_item_details').attr('data-product-price');
        $('.total_qty').text((parseFloat(parseFloat(qty) * productPrice).toFixed(2)) + " €");
        $('#modal_one_item_details').attr('data-qty', parseInt(qty));
    }
</script>
<script>
    function circle_check(obj) {
        if ($(obj).find('.icon_item_out_of_stock').css('display') != 'none') {
            $(obj).find('.icon_item_out_of_stock').css('display', 'none');
        } else {
            $(obj).find('.icon_item_out_of_stock').css('display', 'block');
            $.ajax({
                type: "POST",
                url: `notify`,
                data: { 'id': {{ $product-> id }}
    },
    headers: {
        "x-csrf-token": $("[name=_token]").val()
    },
                    }).done(response => {
        swal({ title: "Successfully!", text: "We will notify you when this product is availabe", type: "success", timer: 2000, showConfirmButton: false });

    });
                }
            }

</script>
<script>
    if (parseInt($('.one_item_details').height()) < 730) {
        $('.one_item_details .text_item_details').css('paddingBottom', '8em');
    } else {
        $('.one_item_details .text_item_details').css('paddingBottom', '0em');
    }
    $('.item_out_of_stock').css('height', parseInt($('.one_item_details').height()) - 380);

</script> @endsection
