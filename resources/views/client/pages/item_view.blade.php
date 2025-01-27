@extends('client.main') @section('styles')
<link rel="stylesheet" href="{{URL::asset('/front-end/css/lib/bootstrap.min.css')}}">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{URL::asset('/front-end/css/jquery-pretty-tabs.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{URL::asset('/front-end/css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('/front-end/css/login.css')}}">

<link rel="stylesheet" href="{{URL::asset('/front-end/css/item_view.css')}}">
<link rel="stylesheet" href="{{URL::asset('/front-end/css/item.css')}}">
<link rel="stylesheet" href="{{URL::asset('/front-end/css/buy_item.css')}}">
<link rel="stylesheet" href="{{URL::asset('/front-end/css/out_of_stock.css')}}">
<link rel="stylesheet" href="{{URL::asset('/front-end/css/material_icons.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
        .div_icon_footer {
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
    justify-items: center;
    padding-left: 1%;
    }
    .div_item .rating .star::before {
   width: 0.9em;
}

.div_item .rating .star::after {
   width: 0.9em;
}
    .rating .star::before {
   width: 0.9em;
}

.rating .star::after {
   width: 0.9em;
}
    .icon_inst {
        margin-left: 0em !important;
    }
    .star {
        cursor: pointer;
        color: #fff;
    }
    .input_search_lg, .input_search_sm{
        border: none;
        padding-right: 1rem;
        padding-left: 1rem;
    }
.footer {
 margin-top: 1rem !important;
}
    #content_page {
        margin-top: 0em;
        float: left;
    }
    .item_out_of_stock{
        margin-top: 3em;
    }
    header {
        position: absolute;
        z-index: 33;
        width: 100%;
    }
    .circle_check {
    margin-left: 47%;
    }
.title_item_details {
    margin-bottom: 1.6em;
    font-size: 1.2em;
}
.title_item_details_mobile{
     font-size: 1.8em;
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
/*
            max-width: 16% !important;
            margin-left: 6%;
*/
        }
        
        .div_title_item_details {
    padding: 0.5em 2em;
    margin-top: 3rem;
        }

    .rating {
        font-size: 1.3em;
        color: #fff;
        bottom: 0.6em;
        left: 1.4em;
    }

    .header_page .rating {
        bottom: 0.2em;
        left: 29.7%;
    }
/*    .input_search_sm{
        display: none !important;
    }*/
    .rating .star::after {
        color: #fff;
    }
    .rating .star::before {
        color: #fff;
    }
    .div_item .rating .star::after {
        color: #d80001;
        width: 0.75em;
        height: 1.7em;
    }
    .modal_one_item_details{
        width: 350px;
    }
    .div_item .rating .star::before {
        color: #d80001;
        width: 0.75em;
        height: 0.7em;
    }

  .rating_navbar .star::after {
        color: #d80001 !important;
    }
    .rating_navbar .star::before {
        color: #d80001 !important;
    }
    .div_item .rating {
        left: 2em;
    }

    .div_item {
        width: 229px;
        height: 283px
    }



    .details_comment .rating {
        bottom: unset;
        right: 0em;
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
.customer_reviews {
    overflow: hidden;
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
        width: 92.3%;
        padding-left: 30%;
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

.item_name {
    width: 100%;
    margin-bottom: 0rem;
}
.item_price {
    width: 100%;
}

    .title_reviews {
        float: left;
/*        margin-top: 290px*/
        margin-top: 330px
    }

    .add_to_card_item_details span {
        margin-top: 13.7em;
        color: #fff;
    }

    .img_add_to_card_item_details {
        margin-top: 18.5em;
    }

    .logo_prodect {
        margin-left: 210px;
        width: 9rem;
    }
    .img_item
    {
        height: 10.4em;
    }
    .rate-logo {

        width: 102px;
    margin-left: -2px;
    margin-top: -1%;

    }
    .div_title_item_details .product-rate{
        left: 36% !important;
    }
    .modal_one_item_details .rating .star::before {
        color: #fff;
    }
    .image-modal{
        position: absolute;
        left: 25%;
        top: 25%;
    }
    .d-none{
        display: flex !important;
    }
    .button_modal_one_item_details {
            margin-top: 3em;
        }

        .text_item_details{
            height: 9em;
            margin-bottom: 7rem;
            padding-bottom: 0em;
            overflow-y: auto;
            overflow-x: hidden
        }

                .block_similar {
/*
            width: 1200px;
            max-width: 1200px;
*/
            /*overflow: auto;*/
        }
            body{
/*
            overflow-y: auto;
            overflow-x: auto;
            position: fixed;
            height: 100%;
            width: 100%;
*/
    }
    .footer {
    width:100%;
}

#slider_preview{
    width: 623px;
    max-height: 600px;
    position: fixed;
    top: 21px;
    left: 25%;
    z-index: 99;
}
.off_item_prodect{
        font-family: 'EagarFont';
}	
.background_slide{
    position: fixed;
    top: 0px;
    left: 0px;
    z-index: 97;
    height: 100%;
    width: 100%;
    background-color: #00000050;
    display: none;
}

.modal_all_comment{
    max-height: 38rem;
    min-height: 15rem;
    width: 80%;
    position: fixed;
    top: 5%;
    margin-left: 10%;
    border-radius: 0.5rem;
    background-color: #fff;
    z-index: 111;
    padding: 2rem;
    /*overflow-y: auto;*/
}
.btn_modal_all_comment{
    margin-top: 2rem;
    padding: 0.4rem 2rem;
    border: none;
    color: #fff;
    border-radius: 0.4rem;
    background-color: #d80001;
    cursor: pointer;
}

.customer_reviews {
    max-height: 40em;
}
@media (min-width:1550px){
    .header_page_text_div {
        width: 93%;
    }
}
@media (min-width:1450px){
    .div_title_item_details .product-rate {
    left: 40% !important;
}
}
@media (max-width: 1030px) and (min-width: 768px){
    .input_search {
        padding: 0.2em 1em;
    }
}



#slider_preview .carousel-control-prev-icon {
    background-image: url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' f…3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E);
}
.product-rate span{
    cursor: initial !important;
}
@media (min-width: 768px) and (max-width: 1000px) {
    .zoomWindowContainer div{
     display: none !important;   
    }
    .zoomLens{
        display: none !important;
   }
    .modal_one_item_details {
    width: 60% !important;
    margin-left: -10% !important;
}
#modal-img{
	width: auto;
    height: auto !important;
    max-height: 22rem;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.modal_one_item_details  .div_title_item_details{
    top: unset !important;
    bottom: unset !important;
    height: 97px;
    margin-top: -4rem !important;
}
.modal_one_item_details .div_title_item_details_mobile{
    margin-top: -6rem !important;
}
.img_price_item_details_mobile{
    width: 16em;
    left: -2.49em;
}
.modal_one_item_details .img_price_item_details_mobile{
    width: 13em;
    left: -1.4em;
}
.tax_include_item_mobile{
    font-size: 1.3rem !important;
    margin-top: 1rem !important;
        /*margin-left: -1.3rem !important;*/
}
.price_item_details .old-price_mobile{
        font-size: 1.4rem !important;
}
.div_item .old-price_mobile{
     font-size: 1.4rem !important;
}
.price_item_details_mobile .price-wrapper{
    width:9em !important;
    margin-top: 1.4rem;
        left: -0.2em;
}
.price_item_details_mobile .new-price{
    font-size: 1.7rem !important;
}
.price_item_details_mobile b{
    font-size: 1.5rem ;
}
.modal_one_item_details .div_title_item_details_mobile .rating{
    font-size: 1.5em !important;
}
.modal_one_item_details_mobile .rating .star::before{
    width: 0.95em !important;
}
.div_item .tax_include_item_mobile{
    margin-left: -9.2rem !important;
    margin-top: 0.8rem !important;
}
.text_item_details_mobile{
    margin-top: 53px !important;
}
.price_item_details_mobile .total_qty{
        font-family: 'HeadlinesFont';
}
.modal_one_item_details_mobile .button_modal_one_item_details a{
    font-size: 1.2em;
    font-family: 'HeadlinesFont';
}
}

    @media (min-width: 768px) and (max-width: 1200px) {
        .all_page_item_view {
            padding: 0em 0em;
        }
        .text_item_details_mobile{
    font-size: 1.5rem !important;
}
        .details_comment .rating {
        bottom: unset;
        right: -1.6em;
        left: unset;
    }
  
        .margin-right {
            margin-right :31px !important;
        }
        .rate-logo {
            margin-left: 0em;
        }
        .rated_details_comment {
            display: none;
        }
        .details_comment .rating {
            margin-top: 0em !important;
            font-size: 1.7em !important;
            margin-right: 82px !important;
        }
          .block_comment_logo .rating{
        margin-top: 1.5rem !important;
    }
        .simi {
/*
            max-width: 50% !important;
            margin-left: 0px !important;
*/
        }
        .text_discount{
                width: 5em;
                left: -0.1em;
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
            padding-left: 30%;
        }
        .one_item_details,
        .modal_one_item_details {
            width: 39%;
            margin-left: 2em;
        }
        .sections {
            width: 69%;
        }
        .discount_item_details {
            border-top: 9em solid #d80001;
            border-right: 7.8em solid transparent;
        }
        .text_discount_details {
            font-size: 1.7em;
        }
        .header_page_text_div {
            padding-left: 33%;
        }
        .header_page .rating {
            left: 29.6%;
            font-size: 1.5em;
        }
        .text_section {
            font-size: 1em;
        }
        .text_item_details {
            font-size: 1.5em;
        }
        .points_item_details {
            font-size: 1.2em;
        }
        .img_buy_item_details,
        .img_add_to_card_item_details {
            margin-top: 37.5em;
        }
        .buy_item_details span,
        .add_to_card_item_details span {
            margin-top: 20.1em;
            font-size: 1.5em;
        }
        .add_to_card_item_details span {
            margin-top: 13.1em;
        }
        .img_add_to_card_item_details {
            margin-top: 17.5em;
        }
        .img_buy_item_details,
        .img_add_to_card_item_details {
            width: 14em;
            right: 2.2rem;
        }
        .title_section {
            font-size: 1.4em;
        }
        .text_item_details {
            margin-bottom: 5em;
            height: 11em;
        }
        .img_buy_item_details,
        .img_add_to_card_item_details {
            right: -2.2em;
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
            height: 15.4em;
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
            /*width: 19%;*/
            float: right;
            margin-right: 2em;
            margin-top: -3em;
        }

        .logo_prodect img {
            width: 55%;
        }
        .title_reviews {
            float: left;
            margin-top: 419px;
        }
        .block_similar {
            float: left;
            margin-left: 0px;
            margin-top: 20px;
            padding-right: 0px;
            
            /*overflow: auto;*/
        }
        .rate-us {
            display: none;
        }
        .button_modal_one_item_details {
            margin-top: 5em;
        }
        .modal_all_comment .button_modal_one_item_details{
            margin-top: 2em;
        }
        .one_item_details, .modal_one_item_details {
    box-shadow: 1px 1px 25px #000000b0;
    
}
    }
    .zoomContainer {
    z-index: 15 !important;
}
    .zoomContainer_hide {
    z-index: 2 !important;
}
    @media (max-width: 991px){
        .input_search_sm {
            width: 55%;
        }   
        #content_page .title_reviews{
            top: 0rem !important;
        }
        .block_comment_logo{
            margin-top: 2rem !important;
            margin-bottom: 2rem !important;
        }
        .rate-logo {
            margin-top: 2%;
        }
           .details_comment .rating {
            margin-top: -1.2em !important;
           }
        #main-navbar-items ul li {
            margin-right: 1.5rem !important;
            font-size: 0.7rem !important;
        }
    }
    @media (max-width: 950px){
        #slider_preview{
    width: 500px;
}
.details_comment .rating {
    margin-right: 39px !important;
}

.username_details_comment{
    width: 100% !important;
}
.modal_one_item_details .div_title_item_details{
    margin-top: -4rem !important;
}
#lang-nav-bar .nav-item a {
    font-size: 1.1em !important;
}
.icon-flag {
    width: 20px !important;
    height: 20px !important;
    margin-top: 0.2rem !important;
}
    }
    @media (max-width:768px){
        .modal_one_item_details .div_title_item_details{
            margin-top: 0rem !important;
        }
    }
    @media (max-width: 650px){
        .modal_one_item_details{
                left: 12%;
        }
        #slider_preview{
    left: 15%;
}
    }
    @media (min-width: 300px) and (max-width: 600px) {
        .header_page_text_div {
            padding-left: 30% !important;
        } 
        .top_nav {
            max-width: 100% !important;
        }
    }
    @media (min-width: 1050px) and (max-width: 1110px) {
       .rating2 {
    right: 3em !important;
} 
    }
    
     @media (min-width: 990px) and (max-width: 1049px) {
       .rating2 {
    right: 2.1em !important;
} 
    }
    
         @media (min-width: 930px) and (max-width: 989px) {
       .rating2 {
    right: 1.5em !important;
} 
#content_page {
    margin-top: 0em;
}
    }
    
        @media (min-width: 880px) and (max-width: 929px) {
       .rating2 {
    right: 1em !important;
} 
#content_page {
    margin-top: 0em;
}
    }
    
           @media (min-width: 840px) and (max-width: 879px) {
       .rating2 {
    right: 0.5em !important;
} 
#content_page {
    margin-top: 0em;
}
    }
    
    @media (min-width: 767px) and (max-width: 839px) {
        .rating2 {
            right: -0.2em !important;
        } 
        #content_page {
    margin-top: 0em;
}
    }
    
    @media (min-width: 300px) and (max-width: 766px) {
        /*        .leave_constructive_review {
                    width: 100%;
                }*/
        #content_page {
            margin-top: 0em;
        }
        .ul_navbar {
            width: 24rem !important;
        }
    }

        @media (min-width: 300px) and (max-width: 600px) {
        /*        .leave_constructive_review {
                    width: 100%;
                }*/
        #content_page {
            margin-top: 0em;
        }
        .ul_navbar {
            width: 29rem !important;
        }
    }

    @media (min-width: 700px) and (max-width: 770px) {
        .rating2 {
            right: -0.8em !important;
        } 
    }

         @media (min-width: 1311px) and (max-width: 1339px) {
            .header_page_text_div {
                width: 92.3%;
            }
            .rating2{
                right: 3.3em !important;
            }
        }
        @media (min-width: 1280px) and (max-width: 1310px) {
            .header_page_text_div {
                width: 92.3%;
            }
              .rating2{
                right: 2.6em !important;
            }
        }
          @media (min-width: 1250px) and (max-width: 1279px) {
            .header_page_text_div {
                width: 92.2%;
            }
              .rating2{
                right: 2em !important;
            }
            .header_page_text_div {
    padding-left: 30%;
        }
          }
           @media (min-width: 1212px) and (max-width: 1249px) {
            .header_page_text_div {
                width: 92.2%;
            }
              .rating2{
                right: 1.7em !important;
            }
                  .header_page_text_div {
    padding-left: 30%;
        }
        }
         @media (min-width: 1201px) and (max-width: 1211px) {
            .header_page_text_div {
                width: 92.1%;
            }
             .rating2{
                right: 1.4em !important;
            }
        }
        
        
        
        
        @media (min-width: 1100px) and (max-width: 1199px) {
            .header_page_text_div {
                padding-left: 30% !important;
            }
        }
          @media (min-width: 1050px) and (max-width: 1099px) {
            .header_page_text_div {
                padding-left: 30% !important;
            }
        }
           @media (min-width: 1000px) and (max-width: 1049px) {
            .header_page_text_div {
                padding-left: 30% !important;
            }
        }
        
        
        
         /*For mobile iphone s6+ (5 inch)*/  
         
        .container_mobile{
            width: 100% !important;
                max-width: 100% !important;
                margin: 0px;
                padding: 0px;
        }
        .all_page_item_view_mobile{
            max-width: 100% !important;
            width: 100% !important;
        }
        .block_similar_mobile{
            max-width: 100% !important;
            width: 100% !important;
        }
        .rating_mobile{
            margin-top: 1rem;
        }
/*        .title_reviews_mobile{
            margin-top: 29rem;
        }*/
        .header_rating_mobile{
            left : 14.4em !important;
        }
        .block_similar_mobile{
            margin-top: 3rem;
        }
        .ratings4_mobile{
            margin-top: 0rem !important;
        }
        .main-nav-bar_mobile{
            width: 90px !important;
        }
        .top_nav_mobile{
            max-width: 80% !important;
        }
        .sections_mobile{
            width: 103.8% !important;
        }
        .modal_one_item_details_mobile {
            width: 39%;
            margin-left: 2em;
        }
        
        
            @media (min-width: 300px) and (max-width: 990px) {
   .input_search_sm {
    display: block !important;
        margin-top: 1rem;
}
   .input_search_lg {
    display: none !important;
}
.nav-item a {
    font-size: 1.2em !important;
}
            }
            @media (min-width: 766px) and (max-width: 1030px) {
            .text_discount {
                left: -0.1em;
                top: -4.8em;
            }
            .tax_include{
                margin-top:1.4rem !important;
            }
                
            }
             @media (min-width: 300px) and (max-width: 767px) {
            .text_discount {
                left: -0.1em;
                 top: -5.3em;
            }
                
            }
            
           
                     @media (min-width: 992px) and (max-width: 1030px) {
/*   .input_search_sm {
    display: block !important;
        margin-top: 1rem;
}
   .input_search_lg {
    display: none !important;
}*/
.top_nav {
    max-width: 83% !important;
}
#nav-bar-search {
    margin-right: 0rem;
    width: 179px;
}
.ul_navbar {
    width: 42rem;
}
.nav-item a {
    font-size: 0.9em !important;
}
     }
                  @media (min-width: 750px) and (max-width: 817px) {
               .ul_navbar {
    width: 23rem;
        display: flex!important;
}

   .ul_navbar_mobile {
    width: 31rem;
}
.ul_navbar .nav-item a {
    font-size: 1.2em !important;
}
.ul_navbar_mobile .nav-item a {
    font-size: 1.8em !important;
}

     }
              @media (max-width: 1024px) and (min-width: 400px){
         #nav-bar-search {
             margin-top: -2.3rem;
             height: 2.28rem;
         }
         .icon_search {
             width: 2.2rem !important;
             padding-bottom: 0.2rem !important;
         }
     }
            
                      @media (min-width: 300px) and (max-width: 766px) {
               .ul_navbar {
    width: 25rem;
        display: flex!important;
}
.logo {
    width: 9rem;
}
.navbar {
    padding: .5rem 1rem;
}
   .ul_navbar_mobile {
    width: 31rem;
}
/*.ul_navbar .nav-item a {
    font-size: 1.3em !important;
}*/
.ul_navbar_mobile .nav-item a {
    font-size: 1.8em !important;
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
        width: auto !important;
        height: 2rem !important;
        border: 1px solid #D80F16 !important;
        /*        margin-right: 3px !important;
                margin-left: 3px !important;
                margin-bottom: 0px !important;
                margin-top: 1px !important;*/
    }

    .one_item_details{
        width: 29%;
        margin-left: 1.7em
    }
    .price_item_details, .points_item_details{
        margin-top: 5em
    }

    .price_item_details_mobile{
        margin-top: 11rem;
    }
    .header_item_details .slide-bg{
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        cursor: pointer
    }
    .btn_qty {
        width: 75%;
    }
    @media(min-width: 992px) and (max-width: 1199px){
        .one_item_details{
            width: 30%;
            margin-left: 1.7em
        }
        .header_page_text_div{
            padding-left: 34% !important;
        }
        .title_reviews{
            margin-top: 366px
        }
        .leave_constructive_review .details_comment .rating{
            right: 0% !important;
            left: 1em;
            /*			margin-top: 25% !important*/
        }
    }
    @media (max-width: 1030px) and (min-width: 768px){
        .item_price {
            font-size: 1.3em;
        }
        .item_name{
            font-size: 1rem;
        }
        .text_discount {
            font-size: 1.4em;
        }
        .discount_item {
            border-top: 7em solid #d80001;
            border-right: 6em solid transparent;
        }
        .icon_view_my_card {
            height: 3.5em;
        }
        .div_item .ratings{
            bottom: 2.2rem !important;
        }
        .tax_include {
            margin-top: 0.4rem !important;
        }
        .username_details_comment {
            font-size: 1.5em;
        }
        .text_upvoted_user_actions {
            font-size: 1.1rem;
        }
        .img_upvoted_user_actions{
            width: 20%;
        }
        .text_details_comment {
            font-size: 1em;
        }
        .title_customer_review{
            font-size: 1.5rem;
        }
        .add_to_card_item_details span {
            font-size: 1.5em;
            margin-top: 13.1em;
        }
        .img_add_to_card_item_details {
            width: 14em;
            right: -2.2em;
        }
        .points_item_details {
            font-size: 1.2em;
        }
    }
    @media(max-width: 991px){
        .sections_mobile{
            width: 100%;
        }
         .one_start_slider {
            height: 1.5em;
        }
        .one_item_details{
            position: relative;
            width: 100%;
            margin: 0;
            margin-top: 20px
        }
        .title_reviews_mobile{
            margin-top: -3rem;
        }
        .input_search_sm{
            display: block !important;
        }
        .div_title_item_details .product-rate{
            left: 42% !important;
        }
        .all_page_item_view{
            padding-left: 3rem !important;
            padding-right: 3rem !important;
        }
        .sections{
            width: 100%
        }
        .title_reviews{
            margin-top: 0
        }
        .customer_reviews{
            float: none
        }
        .comments_customer_reviews .details_comment .rating{
            top: 45px
        }
        .all_page_item_view{
            padding: 0
        }
        .leave_constructive_review{
            float: none;
            width: 100%
        }
        .header_page{
            position: relative;
            height: 10em;
            background-size: cover !important;
            width: 100%;
            margin-left: 0
        }
        .header_page_text_div{
            top: auto;
            bottom: 0;
            width: 100%;
            padding-left: 2.5em !important;
            margin: 0
        }
        .header_page .rating{
            left: 0
        }
        .leave_constructive_review .details_comment .rating{
            right: 0% !important;
            left: 1em;
            /*			margin-top: 25% !important*/
        }
        .leave_constructive_review{
            margin-top: 2rem;
            margin-bottom: 40px;
            background-image: url()
        }
    }
    @media(min-width: 750px) and (max-width: 991px){
        .all_page_item_view {
            padding-left: 10rem !important;
            padding-right: 10rem !important;
        }

    }
    .navbar {
    padding: .5rem 5rem;
}
    .price_item_details .old-price{
        font-family: inherit;
        font-size: 0.9rem;
        padding-right: 5px
    }
    .price_item_details .new-price{
        font-family: inherit;
        font-size: 1.3rem;
    }


    #slider_preview .carousel-item img{
        width: auto !important;
        margin: auto
    }
    
    @media(max-width: 767px){
        #slider_preview{
            width:100%;
            max-height: 95vh;
            position: fixed;
            top: 21px;
            left: 0;
        }
       
        #slider_preview .carousel-inner,
        #slider_preview .carousel-item,
        #slider_preview img{
            max-height: inherit
        }
    }

    @media (min-width: 200px) and (max-width: 530px) {
        #main-navbar-items ul li {
            font-size: 0.6rem !important;
        }
              .ul_navbar {
    width: 25.7rem !important; 
            }
        .input_search_sm{
            width: 100%;
        }
        .ul_navbar {
            width: 25rem !important;
        }
        .title_section {
            width: 110%;
        }
        .all_page_item_view {
            padding-left: 2rem !important;
            padding-right: 2rem !important;
        }
        .div_icon_footer {
            padding-left: 0% !important;
        }
    }
    @media (max-width: 428px){
        .title_section {
            width: 110%;
        }
    }
    .zoomContainer{
        z-index: 1000
    }
    .navbar-light{
        z-index: 2 !important;
    }
</style>

<style>
    .ul_navbar_for_mobile {
        width: 37rem;
    }
    .input_search_sm_for_mobile {
        width: 77%;
        font-size: 1.7rem;
    }
    .navbarSupportedContent_for_mobile ul li {
        font-size: 35px !important;
    }
    .icon-flag_for_mobile {
        width: 35px !important;
        height: 35px !important;
    }
    .title_section_for_mobile, .text_leave_constructive_review_for_mobile{
        font-size: 2.5rem;
    }
    .text_section_for_mobile{
        font-size: 1.9rem;
    }
    .rate-logo_for_mobile {
        width: 185px;
    }
    .details_comment .rating_for_mobile {
        left: 0.5rem !important;
        font-size: 2.7em !important;
    }
    .btn_leave_constructive_review_for_mobile {
        font-size: 2rem;
    }
    .carousel-indicators_for_mobile .active{
        height:5rem !important;
    }
     .carousel-indicators_for_mobile{
        height:5rem !important;
    }
    .points_item_details_for_mobile span{
        font-size: 2.5rem !important;
    }
    .price_item_details_mobile b_for_mobile {
        font-size: 2.5rem !important;
    }
    .tax_include_item_mobile_for_mobile {
        font-size: 1.7rem !important;
    }
    .text_item_details_mobile_for_mobile {
        font-size: 1.8rem !important;
    }
    .add_to_card_item_details_for_mobile small{
        font-size: 2rem;
    }
    .off_item_for_mobile, .text_discount_details_for_mobile{
        font-size: 2.2rem;
    }
    .text_discount_details_for_mobile{
            top: -4.5em;
    }
    .discount_item_details_for_mobile {
        border-top: 10em solid #d80001;
        border-right: 8.8em solid transparent;
    }
    .title_customer_review_for_mobile{
        font-size: 2.3rem;
    }
    .text_details_comment_for_mobile{
        font-size: 1.8rem;
    }
    .text_upvoted_user_actions_for_mobile{
        font-size: 1.6rem;
    }
    .img_upvoted_user_actions_for_mobile{
        width: 30%;
    }
    .customer_reviews_for_mobile {
        max-height: 36em;
    }
    .leave_constructive_review_for_mobile {
        margin-top: 2rem;
    }
    .item_name_for_mobile{
        font-size: 1.8rem;
    }
    .img_item_for_mobile{
        height: 19rem;
    }
    .item_price_for_mobile {
        font-size: 3em;
    }
    .div_item .tax_include_item_mobile_for_mobile {
        margin-top: 1.8rem !important;
    }
    .icon_view_my_card_for_mobile {
        height: 5.5em;
    }
    .div_item .rating_for_mobile{
        font-size: 2.3rem;
        bottom: 2.9rem !important;
    }
    .btn_cancel_for_mobile, .btn_done_for_mobile, .btn_view_my_cart_for_mobile{
        font-size: 2rem !important;
    }
    .total_qty_for_mobile{
        font-size: 2.2rem;
        left: 3.2em !important;
        margin-top: 0.5rem !important;
    }
    .title_qty_for_mobile{
        font-size: 1.9rem;
    }
    .modal_one_item_details .div_title_item_details_mobile .rating_for_mobile {
        font-size: 1.9em !important;
        left: 1em;
    }
    .title_item_details_mobile_for_mobile {
        font-size: 2.1em !important;
    }
    .num_qty_for_mobile{
        font-size: 2rem;
    }
    .img_item_details_for_mobile {
        max-height:  30rem !important;
    }
    .img_price_item_details_mobile_for_mobile{
        left: -1.6rem;
        width: 16rem !important;
    }
    #product-name .rating_for_mobile{
        font-size: 2rem;
        left: 38% !important;
    }
    .slider_image_item_for_mobile{
        height: 437px !important;
    }
    .slider_zoom_item_for_mobile{
        height: 400px !important;
    }
    .header_page_text_div_for_mobile{
        font-size: 1.7rem;
    }
    .header_page_for_mobile{
        height: 15em;
    }
</style>
@if(session('lang') == 'ar' )
<style>
    .nav-link, .header_page_text_div, .title_section, .off_item, .product-name, .tax_include_item, .text_item_details, small, .title_customer_review, .rated_details_comment, .text_upvoted_user_actions, .text_leave_constructive_review, .btn_leave_constructive_review, .title_similar_items, .off_item_prodect, .text_discount, .item_name, .tax_include, .title_footer a,  
    .title_item_details, .title_qty, .btn_done, .btn_cancel, .btn_view_my_cart, .title_total{
        font-family:arabic3Font !important;
    }
    .text_leave_constructive_review, .item_name, .text_item_details, .title_customer_review, .text_details_comment{
        text-align: right;
    } 
    .rate-logo{
        float: right;
    }
    .block_comment_logo{
        width: 100%;
    }
    .block_comment_logo .rating {
     right: 0% !important;
     margin-right: 13px !important;
     left: unset !important;
    }
    .title_item_details{
        text-align: right;
    }
    .block_title_qty{
        float: right !important;
    }
    .block_qty{
        float: left !important;
    }
    .block_qty div{
        float: right !important;
    }
    .block_qty .num_qty{
        float: right ;
        text-align: left;
        margin-left: 0rem;
        margin-right: 2rem;
    }
    .title_qty span{
        float: right;
        margin-bottom: 1rem;
    }
    /*
    .input_leave_constructive_review{
        text-align: right;
        direction: rtl;
    }
    .icon_view_my_card{
        float: left;
    }
    .ratings5, .ratings4, .ratings3, .ratings1, .ratings2{
        left: 7.5em !important;
    }
    .rating_comment{
        left: unset !important;
    }
    .one_item_details{
        right: 3rem;
    }
    .header_page_text_div {
     padding-left: 3%;
     padding-right: 30%;
    }
    .sections {
     float: left;
     margin-left: 1rem;
    }
    .customer_reviews, .section, .img_user_comments_customer_reviews, .username_details_comment, .rated_details_comment, .text_details_comment, .upvoted_user_actions{
        float: right;
    }
    .leave_constructive_review{
        float: left;
    }
    .section{
        text-align: right;
        margin-right: 2rem;
        width: 48%;
    }
    .logo_prodect{
        float: left;
        margin-left: 1rem;
        margin-top: 0.4rem;
    }
    .rating_comment{
        left: 2rem !important;
        right: unset !important;
    }
    .rated_details_comment{
        margin-right: 0.5rem;
    }
    .username_details_comment, .text_upvoted_user_actions{
        text-align: right;
    }
    .img_user_comments_customer_reviews{
        margin-right: 0rem;
    }
    .img_upvoted_user_actions{
        float: right;
    }
    .title_similar_items{
        width:90.7%;
        text-align: right;
    }*/
</style>
@endif
@endsection @section('main_section')
    <style>
        @media (max-width: 600px) and (min-width: 200px){
            #main-nav-bar a{
                float: none !important;
                margin: 8px auto !important;
                width: auto !important;
                text-align: center !important;
            }
            .ul_navbar{
                float: none !important;
                margin: 5px auto !important;
            }
            .top_nav{
                margin-left: 0rem;
            }
            #main-navbar-items ul li {
                margin-right: 0.65rem !important;
                margin-left: 0.65rem;
                font-size: 0.76rem !important;
            }
            .logo {
                width: 9rem !important;
            }
            .icon_search{
                margin-top: 0.3rem;
            }
        }
    </style>
<div class="col-md-12 all_page_item_view" id="content_page" >
    <div class="header_page" style="background-image: url('{{$subcategory->image_id}}');background-size:133%">

        <p class="header_page_text_div">
            {{$subcategory->english}}
            <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
<!--            <span class="rating  rating-info ratings{{$subcategory->rate}}" data-type="subcategory" data-id="{{$subcategory->id}}" style="margin-left: 40px"></span>-->
        </p>
    </div>

    <div class="one_item_details" data-id="{{$product->id}}">
        <div class="header_item_details">
            @if(isset($product->discount) && $product->discount != 0)
            <div class="discount_item_details" style="z-index: 20">
                <p class="text_discount_details" >
                    <small style="font-family: 'EagarFont' !important;">{{sprintf('%0.0f',$product->discount)}}</small> %<span value="@lang('off')" class="off_item"> @lang('off')</span></p>
            </div>
            @endif

            <!-- -Slider -->
            <div id="slider_image_item" class="carousel slide" data-pause="hover" data-ride="false" style="height: 350px">
                <ol class="carousel-indicators" onchange="refresh_zoom()" style="bottom:-57px">
                    <!--<li data-target="#slider_image_item" data-slide-to="0" class="active"></li>-->
                    <img src="{{$product->image_id}}" data-target="#slider_image_item" onclick='show_image_slider("{{$product->image_id}}",this)' data-slide-to="0" class="active" style="height:2rem;width:auto;margin: 0rem 0.2rem;border: 1px solid #aaa;cursor: pointer;" />
                    @if(isset($product->image_id2))
                    <!--<li data-target="#slider_image_item" data-slide-to="1"></li>-->
                    <img src="{{$product->image_id2}}" data-target="#slider_image_item" onclick='show_image_slider("{{$product->image_id2}}",this)' data-slide-to="1" style="height:2rem;width:auto;margin: 0rem 0.2rem;border: 1px solid #aaa;cursor: pointer;" />
                    @endif @if(isset($product->image_id3))
                    <!--<li data-target="#slider_image_item" data-slide-to="2"></li>-->
                    <img src="{{$product->image_id3}}" data-target="#slider_image_item" onclick='show_image_slider("{{$product->image_id3}}",this)' data-slide-to="2" style="height:2rem;width:auto;margin: 0rem 0.2rem;border: 1px solid #aaa;cursor: pointer;" />
                    @endif @if(isset($product->image_id4))
                    <!--<li data-target="#slider_image_item" data-slide-to="3"></li>-->
                    <img src="{{$product->image_id4}}" data-target="#slider_image_item" onclick='show_image_slider("{{$product->image_id4}}",this)' data-slide-to="3" style="height:2rem;width:auto;margin: 0rem 0.2rem;border: 1px solid #aaa;cursor: pointer;" />
                    @endif

                </ol>
                 <div class="carousel-inner" id="carousel-inner">
                    <div class="carousel-item active" >
<!--                        <img class=" d-block w-100" onclick="imageModal(this);" data-target="carouselExampleIndicators" style="height: 350px" src="{{$product->image_id}}" alt="First slide">-->
                        <div class="slide-bg slider_zoom_item"  onclick="imageModal(this);" data-target="slider_image_item" id="thum1_slider" style="height: 350px; background-image: url({{$product->image_id}})" data-zoom-image="{{$product->image_id}}"></div>
                    </div>
                </div>

            </div>
            

            <div class="background_slide" onclick="closeImageModal()"> </div>
                <div id="slider_preview" class="carousel slide" data-pause="hover" data-ride="false" style="display: none;">
                    <div class="carousel-inner">
                        @if(isset($product->image_id))
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{$product->image_id}}" alt="First slide">
                        </div>
                        @endif @if(isset($product->image_id2))
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{$product->image_id2}}" alt="First slide">
                        </div>
                        @endif @if(isset($product->image_id3))
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{$product->image_id3}}" alt="Second slide">
                        </div>
                        @endif @if(isset($product->image_id4))
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{$product->image_id4}}" alt="Third slide">
                        </div>
                        @endif
                    </div>
                    <a class="carousel-control-prev" style="left: -5.5rem;opacity: 1;" href="#slider_preview" role="button" data-slide="prev">
<!--                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
   <i class="fa fa-arrow-left carousel-control-prev-icon" style="color:#fff;font-size: 3rem;background-image: none;" aria-hidden="true"></i>
                        <!--<span class="sr-only">Previous</span>-->
                    </a>
                    <a class="carousel-control-next" style="right: -4rem;opacity: 1;" href="#slider_preview" role="button" data-slide="next">
                       <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                        <i class="fa fa-arrow-right carousel-control-next-icon" style="color:#fff;font-size: 3rem;background-image: none;" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
           
            <!-- /Slider -->
            <!-- <img src="{{$product->image_id}}" /> -->
            <div class="div_title_item_details" style="height: auto;" id="product-name" >
                <p class="title_item_details product-name" style="text-align: center">{{$product->english}}</p>
                <span class="rating rating-info ratings{{$product->rate}} product-rate" data-type="product" data-id="{{$product->id}}" style="left: 5.5em; cursor: none;"></span>
               
            </div>
        </div>

@if ($product->qty == 0)
<style>
    .points_item_details{
        margin-top: 11em !important;
    }
    .title_reviews{
        top: 122px !important;
    }
    .block_similar{
        margin-top: 6em;
    }
    @media (max-width : 1200px){
        .points_item_details {
            margin-top: 5em !important;
            width: 65%;
        }
    }
      @media (min-width : 991px) and (max-width : 1200px){
      .title_reviews{
        top: 60px !important;
    }
    }
</style>
        <div class="item_out_of_stock">
            <h3 class="title_item_out_of_stock">
                @lang('Sorry')
            </h3>
            <p class="text_item_out_of_stock" style="font-family: 'EagarFont';padding: 0em 0em !important;">
                @lang('item is out of stock')
            </p>
            <div class="circle_check" onclick="circle_check(this);" style="cursor: pointer;">
                <img src="/front-end/images/user_actions/check.png" class="icon_item_out_of_stock" style="display: none;">
            </div>
            <p class="text_item_out_of_stock" style="font-size: 1.3em;padding: 0em 0em !important;">
                @lang('Notify me by email when this item becomes available')
            </p>
        </div>
     @endif
        <!--<div class="price_tag_item_details">-->
        @if ($product->qty != 0 )
        <p class="price_item_details">

            @if (isset($product->discount) && $product->discount_price != $product->price)
            <span class="price-wrapper" style="width: 5em;">

                <small style="font-size: 50%;">
                    <b style="font-family: 'EagarFont';"><span class="tax_include_item" style="font-size: 0.9rem;float: left;margin-top: 1.4rem;margin-left: -1rem;font-weight: 500;" value="@lang('tax included')" >@lang('tax included')</span>  <i class="old-price" style="text-decoration: line-through;color:#8e8d8d;">{{$product->price}}€</i>/ <span class="new-price">{{$product->discount_price}}</span> €</b>

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
        <p class="points_item_details" style="margin-left:50px;margin-top: 0em;{{ $product->qty == 0 ?" filter: blur(5px) " : '' }}">
            <span> {{ $product->gain_points }} @lang('Points') </span> @lang('Bounce')
        </p>

        <p class="text_item_details"  style="margin-top:32px;font-size: 20px;{{ $product->qty == 0 ?"filter: blur(5px)" : '' }}"> {{ $product->desc_english}}

        </p>
        

        @if ($product->qty != 0 ) 
            <p class="add_to_card_item_details" style="cursor: pointer;margin-top: 100px" id="btn_modal_one_item_details">
            @if ($existedInCart == 0)
                    <span>
                        <small>@lang('Add to cart')</small>
                    </span>
                
                <img src="/front-end/images/price-tag/buy-this-item.png" id="img_add_to_card_item_details" class="img_add_to_card_item_details" @if(session( 'lang')=='de'
                    ) style="height: 7.2em;" @endif />
            @else
           
                    <span>
                        <small style="color:#d80000;">@lang('You have ordered') {{$itemQty}} </small>
                    </span>
                
                <img src="/front-end/images/price-tag/add-to-cart.png" class="img_add_to_card_item_details" @if(session( 'lang')=='de'
                    ) style="height: 7.2em;" @endif />
            @endif
             </p>
           
        @endif
    </div>

    <div class="sections">
        <div class="section">
            <h4 class="title_section">
                @lang('Description') 
            </h4>
            <p class="text_section">
                <big>
                    <span>{{$product->section1_english}}</span>
                </big>
            </p>
        </div>

        <div class="logo_prodect">
            <a href="{{ route('brandfilter', $brand->id ) }}">
                <img style="width:75%" src="{{ $brand->image_path }}" />
            </a>
        </div>

        <div class="section">
            <h4 class="title_section">
                @lang('barcode') 
            </h4>
            <p class="text_section">
                <span>{{$product->barcode}}</span>
               
            </p>
        </div>
        
    </div>

    <div class="col-md-12 title_reviews" style="top: 140px;">
        <h3 class="title_customer_review">
            @lang("Customer's Reviews")
        </h3>
        <div class="customer_reviews col-lg-8">
        
            @foreach($comments as $comment)
            <div class="comments_customer_reviews block_one_comment" comment_id="{{$comment->id}}" user_id="{{isset($comment->user)?$comment->user->id:''}}">
                <img src="{{isset($comment->user) && isset($comment->user->image_id) ? $comment->user->image_id : '/uploads/user.png'}}" style="min-height: 0em;" class="img_user_comments_customer_reviews">
                <div class="details_comment">
                    <h3 class="username_details_comment" style="width:225px">{{isset($comment->user) && isset($comment->user->name) ?$comment->user->name :'Anonymous' }}</h3>
                    <p class="rated_details_comment" style="margin-left: 0px">
                        <?php if($comment->rate != 0){ ?> @lang('Rated this product')
                        <?php } ?>
                    </p>
                    <span class="rating ratings{{$comment->rate}} margin-right rating_comment" ></span>
                    <p class="text_details_comment">
                        {{$comment->description}}
                    </p>
                    <div class="user_actions_details_comment">
                        <div class="upvoted_user_actions">
                            <img src="/front-end/images/user_actions/upvoted.png" class="img_upvoted_user_actions" onclick="like_user('{{isset($comment->user) ?$comment->user->id: ''}}','{{$comment->id}}',this)" />
                            <p class="text_upvoted_user_actions">
                                @lang('Upvoted')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @if(!$comments->isEmpty())
                <button type="button" id="btn_modal_all_comment" class="btn_modal_all_comment">@lang('Show All Comment')</button>
            @endif

        </div>
        <div class="leave_constructive_review col-lg-4">
            {!! Form::open(['route' => ['comment',$product->id ]]) !!}
            <h3 class="text_leave_constructive_review" style="color: #d80001;margin-top: 0em;">@lang('Leave a constructive review')</h3>
            <p class="text_leave_constructive_review" style="margin-top:0.6em;">@lang('Rate this product') </p>
            <div class="details_comment block_comment_logo" style="margin-bottom: 50px">
                <span class="rating2 ratinge rating form-rate" data-id="{{$product->id }}" style="margin-right: 130px;right: 9%;margin-top: 11%;"></span>
                <img src="/front-end/images/logo.png" class="rate-logo" >
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
<div class="col-md-12 block_similar" style="margin-top: 8rem;">
    @if(!$simiProducts->isEmpty())
    <h3 class="title_similar_items">
        @lang('Similar items')
    </h3>
    @else
    <br/>
    <br/>
    <br/>
    @endif
<div class="container">
    @foreach($simiProducts as $simiproduct) @if($simiproduct->id == $product->id)
    <?php
                            continue;
                            ?> @endif

    <div class=" col-lg-4 col-md-6 col-xl-3 simi" style="margin-top: 1em;float: left;margin-bottom: 20px;">
        <div class="div_item">
            @if (isset($simiproduct->discount) && $simiproduct->discount != 0)
            <div class="discount_item">
                <p class="text_discount" style="font-family: 'EagarFont' !important;">
                    <span item_pricestyle="font-family: 'EagarFont';"  style="font-family: 'EagarFont' !important;">{{$simiproduct->discount}} % <br/><span value="@lang('off')" class="off_item_prodect">@lang('off')</span></span> <br>
<!--                <span style="font-family: unset;font-weight: bolder;font-size: 17px;"> {{ $simiproduct->discount_price}} €</span>-->
                </p>
                <div class="shadow_div_discount"></div>
            </div>
            @endif
            <a href="{{ route('product',$simiproduct->id) }}">
                <img src="{{$simiproduct->image_id}}" class="img_item product-img" />
                <p class="item_name">{{ $simiproduct->english}} </p>
            </a>
            <p class="item_price" style="margin-bottom: 0em;"> <span class="tax_include" style="font-size: 0.8rem;margin-top: 0.7rem;    position: absolute;margin-left: -4.8rem;float: left;font-weight: 500;" value="@lang('tax included')">@lang('tax included')</span> &nbsp;{!! isset($simiproduct->discount_price) ?"<span class='old-price' style='text-decoration: line-through;font-family: EagarFont;color: #8e8d8d;font-size: 0.9rem;'>".$simiproduct->price.' €</span>  / '. $simiproduct->discount_price : $simiproduct->price !!}€</p>
            <span class="rating ratings{{$simiproduct->rate}}" style="width: 0.75em;height: 1.7em; left: 1em;bottom: 0.2em;"></span>
            <img onclick="addCartModal($(this).parent().find('.product-img').attr('src') , $(this).data('id'),{{isset($simiproduct->discount_price) ?$simiproduct->discount_price : $simiproduct->price }} ,{{ $simiproduct->order }},'{{$simiproduct->english}}')" data-id="{{$simiproduct->id}}" src="{{($simiproduct->order != 0) ?'\front-end\images\user_actions\view-my-cart_after_add.png' :
            '\front-end\images\user_actions\view-my-cart.png'}}" class="icon_view_my_card" style="cursor: pointer;">
        </div>
    </div>
    
    @endforeach
</div>
</div>
</div>
@endsection @section('cart')

<!-- Add To Cart -->

<div class="background_modal" style="display: none;"></div>
<div class="modal_one_item_details" id="modal_one_item_details" style="display: none;" data-productId="{{$product->id}}"
    data-qty='1'>
    <div class="header_item_details">
        <img src="{{$product->image_id}}" id="modal-img" class="img_item_details" style="height: 300px" />
        <div class="div_title_item_details"  style="top: 14.7em;  height: auto;margin-top: 0rem;">
            <p class="title_item_details" style="">
                {{$product->english}}
            </p>
            <!--<span class="rating ratings{{$product->rate}}" style="float:left;"></span>-->
            
        </div>
    </div>
    <div class="col-md-12" style="margin-top: 0.6em;float: left;">
        <div style="width: 30%;float: left;" class="block_title_qty">
            <h3 class="title_qty" id="title_qty">
                @lang('Quantity') <span style="display: none;font-size: 0.7em;overflow: visible;white-space: nowrap;">@lang("Sorry, we don't have this quantity")</span>
            </h3>
        </div>
        <div style="width: 70%;float: right;" class="block_qty">
            <p class="num_qty" id="num_qty">
                {{ $itemQty != 0 ? $itemQty : '1' }}
            </p>
            <div style="width:30%;float: right;">
                <img src="/front-end/images/payment/handler-plus.png" onclick="num_plus(this)" class="btn_qty">
                <img src="/front-end/images/payment/handler-min.png" onclick="num_min(this)" class="btn_qty" style="margin-top: -0.9em">
            </div>
            <!-- <img -->
        </div>
    </div>

    <p class="price_item_details" style="margin-top: 0em;" data-product-price='{{isset($product->discount_price) ? $product->discount_price: $product->price}}'>
        <span class="title_total" style="    position: absolute;font-size: 1.3em;margin-top: 0.4em;left: 0em;z-index:22;">@lang('Total') </span>
        <span class="total_qty" style="    position: absolute;left:4.2em;width: 6em;margin-top:1rem;z-index:22;" value="{{isset($product->discount_price) ? $product->discount_price: $product->price}}"> {{isset($product->discount_price) ? $product->discount_price: $product->price}} €</span>
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
        <a href="{{route('login')}}" class="btn_done" style="background-color: #d80001;color: #fff;cursor: pointer">@lang('Login To Add')</a>

        <a class="btn_cancel" style="margin-left: 9%;cursor: pointer" onclick="hideModal()">@lang('Cancel') </a>
        @endif
    </div>
</div>


<div class="modal_all_comment" id="modal_all_comment" style="display: none;" data-qty='1'>
    <div class="col-md-12" style="margin-top: 0.6em;float: left;min-height: 7rem;max-height: 27rem;overflow-y: auto;overflow-x: hidden;">
        @foreach($all_comments as $all_comment)
            <div class="comments_customer_reviews block_one_comment" comment_id="{{$all_comment->id}}" user_id="{{isset($all_comment->user)?$all_comment->user->id:''}}">
                <img src="{{isset($all_comment->user) && isset($all_comment->user->image_id) ? $all_comment->user->image_id : '/uploads/user.png'}}" style="min-height: 0em;" class="img_user_comments_customer_reviews">
                <div class="details_comment">
                    <h3 class="username_details_comment" style="width:225px">{{isset($all_comment->user) && isset($all_comment->user->name) ?$all_comment->user->name :'Anonymous' }}</h3>
                    <p class="rated_details_comment" style="margin-left: 0px">
                        <?php if($all_comment->rate != 0){ ?> 
                            @lang('Rated this product')
                        <?php } ?>
                    </p>
                    <span class="rating ratings{{$all_comment->rate}} margin-right rating_comment" ></span>
                    <p class="text_details_comment">
                        {{$all_comment->description}}
                    </p>
                    <div class="user_actions_details_comment">
                        <div class="upvoted_user_actions">
                            <img src="/front-end/images/user_actions/upvoted.png" class="img_upvoted_user_actions" onclick="like_user('{{isset($all_comment->user) ?$all_comment->user->id: ''}}','{{$all_comment->id}}',this)" />
                            <p class="text_upvoted_user_actions">
                                @lang('Upvoted')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
        <div class="button_modal_one_item_details">
        <a class="btn_cancel" style="margin-left: 0%;cursor: pointer;width: 30%;" onclick="hideModal()">@lang('Cancel') </a>
    </div>
</div>
<!-- 

<div class="image-modal" style="display: none" id="image-modal">
    <img id="modal-img"  src="/">
    src src src srcs
</div>

 -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('/front-end/js/plugin/jquery-pretty-tabs.js')}}"></script>
<script>
    function validation_is_like(){
        var id_user = "";    
        $('.customer_reviews .block_one_comment').each(function(){
            id_user = $(this).attr('user_id');
        });
            $.ajax({
            url: "/load_like",
            type: "POST",
            data: {"_token": "{{ csrf_token() }}", "user_id": id_user},
            dataType: 'json',
            success: function (response) {
            console.log(response);
            var data = response.data;
            for(var i = 0;i < data.length; i++){
                $('.customer_reviews .block_one_comment').each(function(){
                    if(data[i] == $(this).attr('comment_id')){
                        $(this).find('.img_upvoted_user_actions').attr('src','/front-end/images/user_actions/upvote.png');
                    }
                });
            }
            }
        });
    }
    validation_is_like();
    
    function like_user(user_id,comment_id,obj){
          $.ajax({
            url: "/like",
            type: "POST",
            data: {"_token": "{{ csrf_token() }}", "user_id": user_id, "comment_id": comment_id},
            dataType: 'json',
            success: function (response) {
               if(response.status == 'true'){
                    $(obj).attr('src','/front-end/images/user_actions/upvote.png');
               }
            }
        });
    }
    function when_open_mobile(){
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.ul_navbar').addClass('ul_navbar_for_mobile');
            $('.input_search_sm').addClass('input_search_sm_for_mobile');
            $('#navbarSupportedContent').addClass('navbarSupportedContent_for_mobile');
            $('.icon-flag').addClass('icon-flag_for_mobile');
            $('.title_section').addClass('title_section_for_mobile');
            $('.text_section').addClass('text_section_for_mobile');
            $('.text_leave_constructive_review').addClass('text_leave_constructive_review_for_mobile');
            $('.rate-logo').addClass('rate-logo_for_mobile');
            $('.details_comment .rating2').addClass('rating_for_mobile');
            $('.btn_leave_constructive_review').addClass('btn_leave_constructive_review_for_mobile');
            $('.carousel-indicators').addClass('carousel-indicators_for_mobile');
            $('.points_item_details').addClass('points_item_details_for_mobile');
            $('.price_item_details_mobile b').addClass('b_for_mobile');
            $('.tax_include_item_mobile').addClass('tax_include_item_mobile_for_mobile');
            $('.text_item_details_mobile').addClass('.text_item_details_mobile_for_mobile');
            $('.add_to_card_item_details').addClass('add_to_card_item_details_for_mobile');
            $('.off_item').addClass('off_item_for_mobile');
            $('.text_discount_details').addClass('text_discount_details_for_mobile');
            $('.discount_item_details').addClass('discount_item_details_for_mobile');
            $('.title_customer_review').addClass('title_customer_review_for_mobile');
            $('.text_details_comment').addClass('text_details_comment_for_mobile');
            $('.text_upvoted_user_actions').addClass('text_upvoted_user_actions_for_mobile');
            $('.img_upvoted_user_actions').addClass('img_upvoted_user_actions_for_mobile');
            $('.customer_reviews').addClass('customer_reviews_for_mobile');
            $('.leave_constructive_review').addClass('leave_constructive_review_for_mobile');
            $('.item_name').addClass('item_name_for_mobile');
            $('.img_item').addClass('img_item_for_mobile');
            $('.item_price').addClass('item_price_for_mobile');
            $('.icon_view_my_card').addClass('icon_view_my_card_for_mobile');
            $('.rating').addClass('rating_for_mobile');
            $('.btn_view_my_cart').addClass('btn_view_my_cart_for_mobile');
            $('.btn_cancel').addClass('btn_cancel_for_mobile');
            $('.btn_done').addClass('btn_done_for_mobile');
            $('.total_qty').addClass('total_qty_for_mobile');
            $('.title_qty').addClass('title_qty_for_mobile');
            $('.title_item_details_mobile').addClass('title_item_details_mobile_for_mobile');
            $('.num_qty').addClass('num_qty_for_mobile');
            $('#modal-img').addClass('img_item_details_for_mobile');
            $('.img_price_item_details_mobile').addClass('img_price_item_details_mobile_for_mobile');
            $('#slider_image_item').addClass('slider_image_item_for_mobile');
            $('.slider_zoom_item').addClass('slider_zoom_item_for_mobile');
            $('.header_page_text_div').addClass('header_page_text_div_for_mobile');
            $('.header_page').addClass('header_page_for_mobile');
        }
    }
    
when_open_mobile();
   
    
      if($('.tax_include').attr('value').length > 14){
    $('.tax_include').css('marginLeft','-5.9rem');
    }
      if($('.off_item').attr('value').length > 5){
    $('.off_item').css('fontSize','0.6rem');
    }
   if($('.off_item').attr('value').length > 6){
    $('.off_item').css('fontSize','0.9rem');
    $('.off_item').css('marginLeft','-0.2rem');
    }
    
    if($('.off_item_prodect').attr('value').length > 6){
    $('.off_item_prodect').css('fontSize','0.6rem');
    $('.off_item_prodect').css('marginLeft','-0.2rem');
    }
      function reset_value(){
        counter_qty = 1;
    }
</script>

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
        if (comment.length < 2){
            swal({
                title:<?php
                                if (session('lang') == 'ar') 
                                    echo "'فشل'";
                                else 
                                    echo "'Fail'";
                             ?>, 
                text : <?php
                                if (session('lang') == 'ar') 
                                    echo "'يرجى كتابة تعليق'";
                                else 
                                    echo "'Please leave a comment'";
                             ?>,
                             type: "error",
                             confirmButtonText: <?php
                                if (session('lang') == 'ar') 
                                    echo "'تم'";
                                else 
                                    echo "'Ok'";
                             ?>
 
            });
            return ;
        }
        var id = $(this).data('id');

        $.ajax({
            url: "/comment-save",
            type: "POST",
            data: { "comment": comment, "rate": num_star_active, "id": id },
            dataType: 'json',
        }).done(response => {
        	
            if (response == 1){
                swal({ title:  <?php
                                if (session('lang') == 'ar') 
                                    echo "'نجاح'";
                                else 
                                    echo "'Successful!'";
                             ?>, text: <?php
                                if (session('lang') == 'ar') 
                                    echo "'تمت اضافة التعليق'";
                                else 
                                    echo "'Comment Added'";
                             ?>,
                              type: "success", timer: 2000, showConfirmButton: false });;
            				location.reload();
                }
        }).error(error=> {
            if (error[0] = 'h')
                window.location.href = error.responseText;
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
        $('.total_qty').text(parseInt($('.new-price').text()) * parseInt($('#num_qty').text()) + ' €');
        $('#modal-img').attr('src' , $('#thum1_slider').attr('data-zoom-image'));
    });
    $('.background_modal').click(function () {
        hideModal();
        reset_value();
    });
    $('#modal_one_item_details .btn_cancel').on('click', function () {
        hideModal();
        reset_value();
    });

    $('#modal_one_item_details .btn_done').on('click', function () {
        //get productId,Qty
        productId = $('#modal_one_item_details').attr('data-productId');
        qty = $('#modal_one_item_details').attr('data-qty');
        //submit add to cart ajax.
        addToCart(productId, qty, 'false');
    });

  
</script>
    
    <script>
    $('#btn_modal_all_comment').click(function () {
        $('#modal_all_comment').show();
        $('.background_modal').show();
        $('#header').css('filter', 'blur(5px)');
        $('#content_page').css('filter', 'blur(5px)');
        $('.footer').css('filter', 'blur(5px)');
    });
    
    $('#modal_all_comment .btn_cancel').on('click', function () {
        hideModal();
    });

</script>
<script>
    function num_plus(obj) {
        counter = parseInt($(obj).parent().parent().find('p').text());
        if (counter + 1 <= <?php echo $product -> qty ?> ) {
            counter = counter + 1;
            $('#title_qty span').css('display','none');
            $(obj).parent().parent().find('p').text(counter);
        }else if (counter < 1) {
            counter = 1;
            $(obj).parent().parent().find('p').text(counter);
        }else{
        $('#title_qty span').css('display','inline');
        }
        changeTotal(counter);
    }
    function num_min(obj) {
        counter = parseInt($(obj).parent().parent().text());
        if ((counter > 1)) {
            counter = counter - 1;
            $(obj).parent().parent().find('p').text(counter);
        }
        $('#title_qty span').css('display','none');
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
        swal({ title:  <?php
                                if (session('lang') == 'ar') 
                                    echo "'نجاح!'";
                                else 
                                    echo "'Successful!'";
                             ?>, text: <?php
                                if (session('lang') == 'ar') 
                                    echo "'سيتم اعلامك بحن يصبح هذا المنتج موجود'";
                                else 
                                    echo "'We will notify you when this product is available'";
                             ?>, type: "success", timer: 2000, showConfirmButton: false });

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
    $('.item_out_of_stock').css('height', parseInt($('.one_item_details').height()) - 398);
$(window).resize(function(){

       if ($(window).width() <= 920) {  

             $('.item_out_of_stock').css('height', parseInt($('.one_item_details').height()) - 330);

       }     

});

    str = $('.product-name').text();
    if (str.length < 10)
    {
        $('.product-name').css('text-align',  'center');
        $('.product-rate').css('left','9.5em').css("bottom" , "0.5em");
        $('#product-name').css('height','4em');
    }   
</script> 

<script >
    function addToCart(productId , qty  = 1,  is_pay = 'true'){
        $.ajax({
            type: "POST",
            url: `/cart/add`,
            data: { 'productId': productId, 'qty': qty, 'is_pay': is_pay },
            headers: {
                "x-csrf-token": $("[name=_token]").val()
            },
        }).done(response => {
            if (response.id > 0) {
                swal({ title:  <?php
                                if (session('lang') == 'ar') 
                                    echo "'نجاح!'";
                                else 
                                    echo "'Successful!'";
                             ?>,
                            text: <?php
                                if (session('lang') == 'ar') 
                                    echo "'تمت اضافة المنتج'";
                                else 
                                    echo "'Item Added'";
                             ?>, type: "success", timer: 2000, showConfirmButton: false });
                hideModal();
                location.reload();
            }
        });
    };
    
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
$('.container').addClass('container_mobile');
$('.all_page_item_view').addClass('all_page_item_view_mobile');
$('.block_similar').addClass('block_similar_mobile');
$('.details_comment .rating').addClass('rating_mobile');
$('.title_reviews').addClass('title_reviews_mobile');
$('.header_page .rating').addClass('header_rating_mobile');
$('.block_similar').addClass('block_similar_mobile');
$('.ratings4').addClass('ratings4_mobile');
$('#main-nav-bar a').addClass('main-nav-bar_mobile');
$('.top_nav').addClass('top_nav_mobile');
$('.sections').addClass('sections_mobile');
$('.modal_one_item_details').addClass('modal_one_item_details_mobile');
$('.title_item_details').addClass('title_item_details_mobile');
$('.price_item_details').addClass('price_item_details_mobile');
$('.div_title_item_details').addClass('div_title_item_details_mobile');
$('.img_price_item_details').addClass('img_price_item_details_mobile');
$('.tax_include_item').addClass('tax_include_item_mobile');
$('.tax_include').addClass('tax_include_item_mobile');
$('.old-price').addClass('old-price_mobile');
$('.text_item_details').addClass('text_item_details_mobile');
$('.item_out_of_stock').css('height', parseInt($('.one_item_details').height()) - 390);
}

    function imageModal(obj){
        $('#slider_preview').css('display','block');
        $('.background_slide').css('display','block');
        $('#slider_preview .carousel-item').removeClass('active');
        $('.zoomContainer').addClass('zoomContainer_hide');
		var objImg = $(obj).css('background-image');
		objImg = objImg.replace('url(', '').replace(')', '');
		$('#slider_preview .carousel-item').each(function(){
           if(objImg.indexOf($(this).find('img').attr('src')) >=0){
			   
               $(this).addClass('active');
           }
        });
        
    }
    
    function closeImageModal(){
    $('.zoomContainer').removeClass('zoomContainer_hide');
        $('#slider_preview').css('display','none');
        $('.background_slide').css('display','none');
    }	
</script>
<script type="text/javascript" src="{{url('/front-end/js/plugin/jquery.elevateZoom-3.0.8.min.js')}}"></script>

<script>
                 function show_image_slider(link,obj){
           $('#thum1_slider').css('backgroundImage',"url('"+link+"')");
           $('.zoomLens').css('backgroundImage',"url('"+link+"')");
           $('#slider_image_item .carousel-indicators img').removeClass('active');
           $(obj).addClass('active');
       }
                                                                                                                            
	$(function () {
     
            $("#carousel-inner .carousel-item .slider_zoom_item").elevateZoom({
 constrainType:"height", constrainSize:274, zoomType: "lens", containLensZoom: true,  cursor: 'pointer',scrollZoom : true
});
$('#slider_preview img').elevateZoom({
        zoomWindowFadeIn: 400,
			zoomWindowFadeOut: 400,
			lensFadeIn: 400,
			lensFadeOut: 400,
        zoomWindowWidth:300,
		zoomWindowWidth:300,
		zoomWindowHeight:300,
		responsive: true
		
	});

	});
</script>
@endsection
