
 @extends('client.main') 

 @section('styles')

<link rel="stylesheet" href="{{URL::asset('/front-end/css/buy_item.css')}}">
<style>
    .image_slider {
        height: 13em !important;
        border: 0.04em solid #8a8a8a;
        width: 100% !important;
    }
    .text_in_header{
        float: left;
        margin-top: 0.7rem;
    }
.shadow_div_discount {
    width: 6.7em;
    -moz-box-shadow: 6px -5px 5px rgba(0,0,0,.8);
    -o-box-shadow: 6px -5px 5px rgba(0,0,0,.8);
    -webkit-box-shadow: 6px -5px 5px rgba(0,0,0,.8);
    box-shadow: 6px -5px 5px rgba(0,0,0,.8);
    top: -3.5em;
    left: -0.85em;
}
    .image_thum {
        left: -4em !important;
        width: auto !important;
        height: 4.1em !important;
    }
    .shadow_div_discount {
    display: none;
    }
    .col_item{
        max-width: 300px;
            flex: 0 0 300px;
    }
.header_page .rating {
    left: 29.8%;
}
    a:hover {
        color: inherit;
        text-decoration: none;
    }

    a {
        color: inherit;
        text-decoration: none;

    }

    .div_item .rating .star::after {
        color: #d80001;
        width: 0.75em;
        height: 1.7em;
    }
    .total_qty{
        font-family: 'EagarFont';
    }
    .div_item .rating .star::before {
        color: #d80001;
        width: 0.75em;
        height: 0.7em;
    }

    a:click {
        color: inherit;
        text-decoration: none;
    }

    .sub-paragraph {
        background-color: rgba(0,0,0,.4);
        position: relative;
        bottom: 31px;
        font-size: 0.9em;
        color: #fff;
        max-height: 2em;
    }
    .buttons {
        margin: 5px 0;
    }

    button {
        font-size: 14px;
        display: inline;
        padding: 3px 6px;
        border: 2px solid #d80f16;
        background: #fff;
        border-radius: 5px;
        outline: none;
    }

    button:hover {
        border: 2px solid #888;
        background: #ffe;
        cursor: pointer;
    }

    #carouselWrapper {
        position: relative;
        overflow: hidden;
        height: 350px !important;
    }

    #carousel {
        position: absolute;
        visibility: hidden;
    }

    .slider {
        cursor: default;
        position: relative;
        top: 0px;
        left: 240px;
        width: 850px;
        height: 200px;
        overflow: hidden;
    }

    .pictureFrame {
        height: 86px !important;
        margin-bottom: 1rem;
    }

    .line_category {
        width: 74%;
        margin-top: 0.1em;
        float: right;
    }

    .text_price {
        width: 16%;
    }

    .line_price {
        width: 84%;
        float: right;
    }

    .block_thum,
    .pictureFrame {
        width: 115px !important;
        height: 92px !important;
    }

    #carouselWrapper,
    #carousel {
        width: 110px !important;
    }
    .header_slider{
            width: 900px !important;
        }
        .input-search_icon i {
    margin-right: 1em;
    
}
.item_name {
    width: 100%;
    margin-bottom: 0rem;
}
.item_price {
    width: 100%;
}
.price_discount{
        font-family: 'EagarFont';
}
.img_item {
    height: 14.4em;
}
/*   .tabs__content-wrapper{
        padding: 0rem 0rem;
    }*/
@media (min-width: 1289px) and (max-width: 1348px){
    .tabs__content-wrapper{
        padding: 0rem 8rem;
    }
}
@media (min-width: 1196px) and (max-width: 1289px){
    .tabs__content-wrapper{
        padding: 0rem 6rem;
    }
}
@media (min-width: 1150px) and (max-width: 1196px){
    .tabs__content-wrapper{
        padding: 0rem 5rem;
    }
}
@media (min-width: 1063px) and (max-width: 1150px){
    .tabs__content-wrapper{
        padding: 0rem 3rem;
    }
}
@media (min-width: 987px) and (max-width: 1063px){
    .tabs__content-wrapper{
        padding: 0rem 2rem;
    }
}
@media (min-width: 940px) and (max-width: 987px){
    .tabs__content-wrapper{
        padding: 0rem 1rem;
    }
}
@media (min-width: 894px) and (max-width: 940px){
    .tabs__content-wrapper{
        padding: 0rem 0rem;
    }
}
@media (min-width: 800px) and (max-width: 894px){
    .tabs__content-wrapper{
        padding: 0rem 7rem;
    }
}
@media (min-width: 750px) and (max-width: 800px){
    .tabs__content-wrapper{
        padding: 0rem 6rem;
    }
}
@media (min-width: 650px) and (max-width: 750px){
    .tabs__content-wrapper{
        padding: 0rem 4rem;
    }
}
@media (min-width: 600px) and (max-width: 650px){
    .tabs__content-wrapper{
        padding: 0rem 3rem;
    }
}
@media (min-width: 550px) and (max-width: 600px){
    .tabs__content-wrapper{
        padding: 0rem 2rem;
    }
}
@media (min-width: 500px) and (max-width: 550px){
    .tabs__content-wrapper{
        padding: 0rem 0rem;
    }
}
/*@media (min-width:1254){
    .tabs__content-wrapper{
        padding: 0rem 8rem;
    }
}*/
@media (min-width: 1200px) and (max-width: 1300px) {
    
    .img_item {
    height: 12.4em;
}
}
@media (min-width: 768px) and (max-width: 1000px) {
    .modal_one_item_details {
    width: 60% !important;
    margin-left: -10% !important;
}
.title_qty, .num_qty{
        font-size: 1.8em;
}
.button_modal_one_item_details .btn_done, .button_modal_one_item_details .btn_cancel, .button_modal_one_item_details .btn_view_my_cart {
    font-size: 1.4em;
    
}
#modal-img{
        width: auto;
    height: auto !important;
    max-height: 17rem;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.modal_one_item_details  .div_title_item_details{
    top: unset !important;
    bottom: unset !important;
    height: 97px;
    margin-top: -6rem;
}
.div_item .old-price_mobile{
     font-size: 1.4rem !important;
}
.div_item .tax_include_item_mobile{
    margin-left: -9.2rem !important;
    margin-top: 0.8rem !important;
}
.tax_include_item_mobile{
    font-size: 1.3rem !important;
    margin-top: 1rem !important;
        /*margin-left: -1.3rem !important;*/
}
.btn_qty {
    width: 75%;
}
.modal-img_mobile{
    min-height: 30rem;
}
}

    @media (min-width: 300px) and (max-width: 768px) {
.modal_one_item_details {
    left: 6%;
    width: 60%;
}
.text_discount {
    line-height: 1.4;
        left: 0.1em !important;
    /*top: -7em;*/
}
    }
/*.img_price_item_details{
    width: 12.5em !important;
    margin-left: 1.26em;    
}*/

@media (min-width: 768px) and (max-width: 1100px){
    .text_discount {
    line-height: 0.8;
    top: -3.1em;
    left: -0.19em !important;
}
}
    @media (min-width: 300px) and (max-width: 1100px) {
        .div_item .rating {
            bottom: 1em;
            left: 1em;
        }
        .modal_filter .input-search_icon {
            margin-top: 0.4em !important;
            left: 0.5em !important;
        }
        .input-search_icon i {
            font-size: 24px;
        }
        .input-search_icon i {
             margin-right: 1em;
        }
        .tabs__item {
            font-size: 1.1em;
        }
        .div_item {
            padding-bottom: 1em;
        }
        .tax_include{
            margin-top: 0.6rem !important;
        }
         .thumnbail{
            margin-top: -13rem !important;
            width: 12.6rem !important;
            padding-left: 0rem !important;
        }
        .thumnbail_mobile{
            margin-top: -12rem !important;
            width: 13.6rem !important;
            padding-left: 0rem !important;
        }
        .text_discount span{
            font-size: 1.2rem !important;
        }
        .discount_item {
            border-top: 6em solid #d80001;
            border-right: 5em solid transparent;
        }
        .text_price {
            width: 24%;
        }
        .item_name {
            margin-bottom: 0rem;
            width: 100%;
            font-size: 1rem;
        }
        .item_price {
            width: 100%;
        }
        .text_discount{
            width: 4em;
            left: -0.19em;
            /*top: -4em ;*/
        }
        .line_price {
            width: 76%;
            margin-top: 1em;
        }
        #carouselWrapper {
            height: 38em !important;
        }
        .select-menu .select-label {
            height: 63px;
        }
        .select-menu .select-label:before {
            font-size: 18px !important;
        }
        .lable_input_filter {
            width: 24%;
            font-size: 1.2rem;
            margin-top: 1em;
        }
        .line_category {
            margin-top: 0.7em;
        }
        .line_title_input_modal {
            margin-top: 1.5em;
        }

        .modal_filter {
            width: 55%;
            margin-left: 24%;
            max-height: 100%;
            padding-top: 2rem;
        }
        .block_slider {
            height: 250px;

        }
        .img_item {
            max-height: 12rem;
            height: auto;
            /*width:100%;*/
        }
        .icon_view_my_card {
            height: 3.5em;
        }
        .text_footer {
            font-size: 1.3em;
        }
        .rating {
            left: 0.3em;
            bottom: 0.1em;
        }
        .rating {
            font-size: 1.7em;
            
        }
        .rating_slide {
            font-size: 1.8em;
        }
        .item_price {
            font-size: 1.4em;
        }
        .image_slider {
            height: 17em !important;
        }
        .thumnbail_mobile .block_thum,
        .pictureFrame {
            width: 8rem!important;
            height: 7rem !important;
        }
        .block_thum, .pictureFrame {
            width: 8rem!important;
            height: 7rem !important;
        }
        .sub-paragraph {
            bottom: 2.4rem;
            font-size: 1em;
            padding: 4.4px 19.5px !important;
        }
        .thumnbail {
            margin-left: 0px !important;
        }
        #carouselWrapper,
        #carousel {
            width: 174px !important;
        }
        .block_text_footer {
            margin-left: 20%;
        }
        .navbar_slide {
            height: 700px !important;
            width: 1200px;
        }
        .block_navbar_slide {
            height: 920px !important;
            top: 80px !important;
        }

       
        .jssor_1 {
            left: -102px !important;
        }
         .jssor_1_mobile {
            left: 25px !important;
        }
        #carouselWrapper {
            margin-top: 44px;
        }
        .col-md-3 {
            margin-left: 3.5em;
            max-width: 80% !important;
        }
        .logo_text {
            height: 3em;
            margin-left: 0em;
        }
        .line_category {
            width: 62%;
            margin-top: 1em;
        }
        .max_input,
        .min_input {
            height: 2em;
            font-size: 1em;
        }
        .btn_model_filter {
            font-size: 1.2em;
            margin-top: 0.5em;
        }
        .input_search_in_modal {
            height: 3em;
            font-size: 1em;
        }
        .header_slider{
            width: 730px !important;
        }
        .jssor_1{
            width:920px !important;
        }
        

    }
    @media (min-width: 300px) and (max-width: 768px) {

.discount_item {
    border-top: 6em solid #d80001;
    border-right: 5em solid transparent;
}
    }
        @media (min-width: 1022px) and (max-width: 1100px) {
    .discount_item {
           border-top: 6em solid #d80001;
    border-right: 5em solid transparent;
    }
    /*.text_discount span {*/
        /*font-size: 1.5rem !important;*/
    /*}*/
/*    .text_discount {
    left: 0em;
    top: -8em;
    }*/
}

    @media (min-width: 1030px) and (max-width: 1100px) {
        .text_discount {
            top: -5.9em;
            line-height: 1.3;
            left: -0.1em !important;
        }
    }
     @media (min-width: 300px) and (max-width: 1060px) {
        .jssor_1 {
            left: 0px !important;
        }
        .input_search {
            padding: 0.3em 1em;
        }
     }
      @media (min-width: 992px) and (max-width: 1025px) {
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
    font-size: 1.7em !important;
}
     }
     
           @media (min-width: 817px) and (max-width: 890px) {
               .ul_navbar {
    width: 27rem;
}
   .ul_navbar_mobile {
    width: 31rem;
}

     }
     
          @media (min-width: 750px) and (max-width: 817px) {
               .ul_navbar {
        width: 25rem;
        display: flex!important;
}

   .ul_navbar_mobile {
    width: 31rem;
}
.ul_navbar .nav-item a {
    font-size: 1.4em !important;
}
.ul_navbar_mobile .nav-item a {
    font-size: 1.8em !important;
}

     }
       @media (min-width: 300px) and (max-width: 766px) {
     .tax_include {
    margin-top: 0.6rem !important;
}
       }
            @media (min-width: 300px) and (max-width: 750px) {
               .ul_navbar {
    width: 22rem;
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
.ul_navbar .nav-item a {
    font-size: 1.3em !important;
}
.ul_navbar_mobile .nav-item a {
    font-size: 1.8em !important;
}

     }
  
@media (min-width: 915px) and (max-width: 1000px) {
     .thumnbail {
    margin-top: -12rem !important;
     }
}
@media (min-width: 830px) and (max-width: 915px) {
     .thumnbail {
    margin-top: -11rem !important;
     }
     .jssor_1 {
    width: 795px !important;
     }
}
@media (min-width: 770px) and (max-width: 830px) {
     .thumnbail {
    margin-top: -10rem !important;
     }
     .jssor_1 {
    width: 700px !important;
     }
}
@media (min-width: 300px) and (max-width: 770px) {
     .thumnbail {
    margin-top: -9.4rem !important;
        width: 11.6rem !important;
     }
    .thumnbail .block_thum, .pictureFrame {
    width: 8rem!important;
    height: 7rem !important;
}
     .jssor_1 {
    width: 670px !important;
     }
     .section_item{
             padding-right: 0.7em;
    margin-right: 0em;
     }
     .text_discount {
         /*top: -5.4em;*/
     }
     .text_discount span {
         font-size: 1rem !important;
     }
}

@media (min-width: 300px) and (max-width: 727px) {
     .thumnbail {
    margin-top: -8.7rem !important;
        width: 9.6rem !important;
     }
     .thumnbail .sub-paragraph {
         bottom: 2rem;
         font-size: 0.9em;
         padding: 4.4px 0px !important;
     }
     .thumnbail_mobile .sub-paragraph {
         bottom: 3rem;
         font-size: 1.4em;
     }
    .thumnbail .block_thum, .pictureFrame {
    width: 8rem!important;
    height: 5rem !important;
}
     .jssor_1 {
    width: 670px !important;
     }
     .section_item{
             padding-right: 0.7em;
    margin-right: 0em;
     }
}

@media (min-width: 574px) and (max-width: 700px) {
      .block_filter{
          margin-top: 1rem;
          margin-left: 1rem !important; 
          flex: 0 0 90.666667%;
          max-width: 90.666667%;
     }
}
/*@media (min-width: px) and (max-width: 626px) {
     .thumnbail {
    margin-top: -8rem !important;
        width: 9.6rem !important;
     }
      .block_filter{
         margin-left: 4rem !important; 
     }
}*/
@media (min-width: 300px) and (max-width: 626px) {
     .thumnbail {
    margin-top: -7rem !important;
        width: 9.6rem !important;
     }
    
}
    @media (min-width: 1024px) and (max-width: 1100px) {
        .item_price {
            font-size: 1.5em;
        }

        .block_navbar_slide {
            top: 100px !important;
        }
    }
    
        @media (min-width: 1024px) and (max-width: 1281px) {
    .col_item_mobile {
        max-width: 48%;
    }
    .col_item_mobile .img_item {
    height: 13.4em;
    }
        }
        @media (min-width: 1100px) and (max-width: 1201px) {
        .thumnbail{
            padding-left: 0rem !important;
            margin-left: 10px !important;
        }
        }
        
        
        
         @media (min-width: 200px) and (max-width: 568px) {
            .thumnbail {
                margin-top: 0rem !important;
                width: 8.6rem !important;
            }
            .block_header{
                left: 0px !important;
                width: 96% !important;
            }
            .block_header .header_slider{
                width: 64rem !important;
                left: 0rem !important;
            }
            .block_header .header_slider div{
                width: 64rem !important;
            }
            .block_header .header_slider .image_header{
                width: 100% !important;
            }
            .block_filter{
                margin-top: 0.8rem;
            }
            .top_nav {
                max-width: 100% !important;
            }
            .section_item_select {
                width: 66% !important;
            }
            .modal_one_item_details {
                left: 0%;
                width: 73%;
            }
         }
           @media (min-width: 200px) and (max-width: 450px) {
             
             
         }
</style>

@if(session('lang') == 'ar' )
<style>
    #search{
        text-align: right;
        padding-right: 1rem;
        padding-left: 3rem;
    }
    .one_start_slider {
        float: left;
    }
    .text_in_header{
        float: right;
    }
    .input-search_icon {
    margin-top: 0.6em;
    right: unset;
    left: 1.5em;
    }
    .item_name{
        text-align: right;
    }
    .tabs__items{
        text-align: right;
        direction: rtl;
    }
    .input_search_in_modal{
        text-align: right;
        direction: rtl;
    }
    .lable_input_filter{
        float: right;
        text-align: right;
    }
    .input_filter {
        text-align: right;
        direction: rtl;
    }
    .select-label{
        text-align: right;
    }
    .select-menu .select-label:before{
           padding: 0 15px 0 16px !important;
    }
</style>
@endif
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="/front-end/css/multe_select.css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> 
@endsection 
@section('main_section')
<div class="col-md-12 page_content_item" id="content_page">
    @if(!isset($brandfilter))
    <div id="content_page_item" style="z-index: -3;">
        <div class="col-md-12 col-sm-12 page_content_item" style="z-index: -3;">
            <div id="jssor_1" class="jssor_1" style="position:relative;margin:0 auto;top:0px;left:-85px;width:1024px;height:200px;overflow:none;visibility:hidden;background-color:#24262e;">



                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                </div>
                <div data-u="slides" class="header_slider" style="       
                        cursor:default;position:relative;top:0px;left:230px;height:200px;overflow:hidden;
                ">

                    @if(isset($category))
                    <div>
                        <img data-u="image" src="{{$category->image_id2}}" style="height:15em;width: 45em;    border: 0.04em solid #8a8a8a" class="image_header"/>
                        <img data-u="thumb" src="{{$category->image_id}}" />
                        <p class="text_big_image_slider">
                            <span class="text_in_header"> {{ $category->english }}</span>
                            <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                        </p>
                    </div>

                    @else

                        @foreach($subcategories as $subcategory)
                        <div>
                            <img data-u="image" src="{{$subcategory->image_id}}" style="height:15em;width: 45em;    border: 0.04em solid #8a8a8a" />
                            <img data-u="thumb" src="{{$subcategory->image_id}}" />
                            <p class="text_big_image_slider">
                                {{ $subcategory->english }}
                                <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                                <span class="rating ratings{{$subcategory->rate}}" style="bottom: 0.1em;left: 0.9em;"></span>
                            </p>
                        </div>
                        @endforeach
                    @endif
                </div>

            </div>
            <script type="text/javascript">jssor_1_slider_init();</script>

      
        </div>
        
              <div class='thumnbail' style="float: left;position: inherit;margin-top: -13.3rem;bottom: 10px;width: 180px;height: auto;margin-left: 50px;overflow: hidden;    padding-left: 3em;">
                @foreach($subcategories as $subcategory)
                <a href="{{ route('subcategoryfilter',$subcategory->id) }}">
                    <div class="pictureFrame" style="width: 110px; height: 92px;">
                        <img src="{{$subcategory->image_id2}}" class="block_thum" style="z-index: 1; width: 110px; height: 88px; padding-top: 2px; padding-bottom: 2px;">

                        <p class="sub-paragraph" style="z-index: 1;padding: 4.4px 0px;text-align: center;">
                            {{$subcategory->english}}
                        </p>
                    </div>
                </a>
                @endforeach
            </div>
        @endif

        <div class="col-md-9 col-sm-12 section_item section_item_select">
            <div class="row" style="width: 100%;">
            @if(!isset($brandfilter))
            <div class="col-lg-3 col-md-6 col-sm-6" style="float:left;">
                <img src={{URL::asset( '/front-end/images/light_logo.png')}} class="img-resposive logo_text" />
            </div>
            @endif
            <div class="col-xl-3 col-lg-4  col-md-5 col-sm-12 col-xs-10 block_filter" style="float:left;margin-left: 2em;">
                <p class="btn_filter" id="btn_modal_filter">
                    @lang('Filter')
                </p>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 my-1" style="margin-top: 0em !important;float: left; {{isset($brandfilter) ? 'max-width: 70.666667% !important;' : ';'}}">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <!--<div class="input-group">-->
                    <div class="input-search_icon">
                        <!--                        <img src="./images/signup/at.png">-->
                        <i class="material-icons">&#xE8B6;</i>
                    </div>
                    {!! Form::open(['route' => 'categoryfilter' , 'method' =>'GET']) !!}
                    <input type="text" class="form-control input_search" id="search" name="search" placeholder="@lang('Search') ">
                    <input type="text" hidden="hidden" id="category_id" name="categoryId" value="{{isset($categoryId) ? $categoryId : ''}}">

                    <button type="submit" id="myBtn" hidden="hidden">
                        {!! Form::close() !!} Button
                    </button>
                <!--</div>-->
            </div>
            <div class="container container_item" style="margin-top: 6em;padding-right: 0em;padding-left: 0em;margin-bottom:20px">
                <div class="tabs">
                    <ul class="tabs__items" >
                        @foreach($categories as $category)
                        <a href="{{route('category',$category->id)}}">
                            <li class="tabs__item {{ isset($subcategories[0]) ?($subcategories[0]->category_id == $category->id ? 'tabs_active':'' ) : ''}} ">{{ $category->english }}</li>
                        </a>
                        @endforeach
                    </ul>
                    <div class="tabs__content-wrapper" style="    border-top: 0.1em solid #aaa;">
                        <div class="tabs__content tabs_active" id="filteredproducts">
                            @include('client.pages.item_products',["products" =>$products ])


                        </div>
                        @if(isset($filter) && count($products) >= 15)
                        <div id="loadm" class="col-md-4 col-sm-5" style="float:left;margin-left: 20em;margin-top: 50px">
                            <p class="btn_filter" id="btn_modal_filter" onclick="scrollload()">
                                @lang('Load More')
                            </p>
                        </div>
                        @elseif (count($products) >= 15)
                        <div id="loadm" class="col-md-4 col-sm-5" style="float:left;margin-left: 20em;margin-top: 50px">
                            <p class="btn_filter" id="btn_modal_filter" onclick="loadmore()">
                                @lang('Load More')
                            </p>
                        </div>
                        @endif

                    </div>
                </div>

            </div>
            </div>
      
          </div>
    </div>
</div>


<div class="background_modal" style="display: none">
</div>
{!! Form::open(['route'=> 'fullfiltercategory' , 'method'=>'GET' ]) !!}
<div class="modal_filter" id="modal_filter" style="display: none;   overflow: hidden;;max-height: 100%;">
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="input-group">
            <input type="text" class="form-control input_filter input_search_in_modal" id="inlineFormInputGroupUsername" name="name"
                placeholder="@lang('Search') ...">
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <p class="lable_input_filter">@lang('Category')</p>
        <div class="input-group line_category">
            <hr class="line_title_input_modal">

        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="select-menu js-select-menu" id="unique-id">
            <input class="menu-state js-menu-state" id="unique-id-menu-state" type="checkbox" />
            <label class="select-label js-select-label" data-default-label="Category" data-label="@lang('Category')" name="categories[]" for="unique-id-menu-state">
            </label>
            <ul class="menu js-select-options">
                @foreach($categories as $category)
                <li class="js-filterable" data-filter-criteria="Aliquam erat volutpat">
                    <label class="menu-item">
                        <input class="checkbox js-option" name="categories[]" type="checkbox" value="{{$category->id}}" />
                        <div class="choice-input"></div>
                        <span>{{$category->english}}</span>
                    </label>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <p class="lable_input_filter text_price">@lang('Price')</p>
        <div class="input-group line_price">
            <hr class="line_title_input_modal">
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="input-group">
            <div class="input-search_icon">
                <!--                        <img src="./images/signup/at.png">-->
                <i class="material-icons" style="color:#fff;">€</i>
            </div>
            <input type="text" class="form-control input_filter validation_just_number max_input" name="max" id="inlineFormInputGroupUsername"
                placeholder="@lang('Max')">
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="input-group">
            <div class="input-search_icon">
                <!--                        <img src="./images/signup/at.png">-->
                <i class="material-icons" style="color:#fff;">€</i>
            </div>
            <input type="text" name="min" class="form-control input_filter validation_just_number min_input" id="inlineFormInputGroupUsername"
                placeholder="@lang('Min')">
        </div>
    </div>
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <div class="input-group">
            <input type="text" hidden="" class="form-control input_filter" id="inlineFormInputGroupUsername" placeholder="Custom field">
        </div>
    </div>

    <div class="col-sm-12 my-1" style="margin-top: 2em !important;float: left;">
        <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
        <div class="input-group">
            <input type="submit" class="btn_model_filter" value="@lang('Show results')" style="border: 0px; cursor: pointer">

        </div>
    </div>
    {!! Form::close() !!}
    <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
        <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
        <div class="input-group">
            <p class="btn_model_filter cancel-modal" style="background-color: #fff;color: #222;cursor: pointer">
                @lang('Cancel')
            </p>
        </div>
    </div>
</div>




<!-- Add To Cart -->

<div class="background_modal" style="display: none;"></div>
<div class="modal_one_item_details" id="modal_one_item_details" style="display: none;z-index: 100;" data-productId=""
    data-qty='1'>
    <div class="header_item_details">
        <img src="" id="modal-img" class="img_item_details" style="height: 300px" />
        
    </div>
    <div class="col-md-12" style="margin-top: 0.6em;float: left;">
        <div style="width: 30%;float: left;">
            <h3 class="title_qty">
                @lang('Quantity')
            </h3>
        </div>
        <div style="width: 70%;float: right;">
            <p class="num_qty" id="num_qty">
                1
            </p>
            <div style="width:30%;float: right;">
                <img src="/front-end/images/payment/handler-plus.png" onclick="num_plus(this)" class="btn_qty">
                <img src="/front-end/images/payment/handler-min.png" onclick="num_min(this)" class="btn_qty" style="margin-top: -0.9em">
            </div>
            <!-- <img -->
        </div>
    </div>
    <div class="col-md-12" style="margin-top: 0.6em;float: left;">
        <p class="price_item_details" style="margin-top: 0em;" data-product-price='23423'>
            <span style="    position: absolute;font-family: 'HeadlinesFont';font-size: 1.3em;margin-top: 0.4em;left: 0em;z-index:22;">@lang('Total') </span>
            <span class="total_qty" id="total_qty" style="    position: absolute;left:5.2em;width: 6em;margin-top:1rem;z-index:22;"></span>
            <img src="/front-end/images/price-tag/price-tag@3x.png" style="width: 14em;" class="img_price_item_details" />
        </p>
    </div>
    <div class="button_modal_one_item_details">
        @if( Auth::check())
        <p class="btn_done" onclick="reset_value()" style="background-color: #d80001;color: #fff;cursor: pointer">@lang('Done')</p>
        <p class="btn_cancel" onclick="reset_value()" style="margin-left: 9%;cursor: pointer">@lang('Cancel') </p>
        <a href="{{route('mycart')}}">
            <p class="btn_view_my_cart" style="width: 100%;">@lang('View my Cart') </p>
        </a>
        @else
        <a href="{{route('login')}}" class="btn_done" style="background-color: #d80001;color: #fff;cursor: pointer">Login To Add</a>

        <a class="btn_cancel" style="margin-left: 9%;cursor: pointer" onclick="hideModal()">@lang('Cancel') </a>
        @endif
    </div>
</div>
@endsection 
@section('scripts')

<script src="/front-end/js/plugin/multe_select.js"></script>
<script src="/front-end/js/plugin/vertical-slider.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script src="/front-end/js/plugin/jquery-pretty-tabs.js"></script>

<script>
    if($('.tax_include').attr('value').length > 14){
    $('.tax_include').css('marginLeft','-5.9rem');
    }
      if($('.off_item').attr('value').length > 5){
    $('.off_item').css('fontSize','0.6rem');
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
<script>
    function num_plus(obj) {
    
            if (counter_qty < 1) {
                counter_qty = 1;
                $(obj).parent().parent().find('p').text(counter_qty);
            }
            else {
                 counter_qty = counter_qty + 1
                $(obj).parent().parent().find('p').text(counter_qty);
            }
                counter_qty = parseInt($('.num_qty').text());
        $('.total_qty').text((counter_qty * parseFloat($('.total_qty').attr('value')))+' €');
    }
    function num_min(obj) {
        counter_qty = parseInt($(obj).parent().parent().text());
        if ((counter_qty > 1)) {
            counter_qty = counter_qty - 1;
            $(obj).parent().parent().find('p').text(counter_qty);
        }
    counter_qty = parseInt($('.num_qty').text());
        $('.total_qty').text((counter_qty * parseFloat($('.total_qty').attr('value')))+' €');
    }
    function reset_value(){
        counter_qty = 1;
    }
</script>
<script>
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

</script>
<script>
    var input2 = document.getElementById("search");

    input2.addEventListener("keyup", function (event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            var click1 = document.getElementById('myBtn');
            click1.click();
        }
    });
</script>
<script>
    $('#btn_modal_filter').click(function () {
        $('.background_modal').show();
        $('#modal_filter').show();
        $('#content_page_item').css('filter', 'blur(5px)');
    });
    $('.background_modal').click(function () {
        $('.background_modal').hide();
        $('#modal_filter').hide();
        $('#content_page_item').css('filter', 'blur(0px)');
    });
    $('.cancel-modal').click(function () {
        $('.background_modal').hide();
        $('#modal_filter').hide();
        $('#content_page_item').css('filter', 'blur(0px)');
    });

</script>
<script>
    $(".validation_just_number").keypress(function (event) {
        $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
</script>
<script type="text/javascript">
    // $(function () {
    //     $('.multiselect-ui').multiselect({
    //         includeSelectAllOption: true
    //     });
    // });
</script>
<script>
    var counter = 1;
     var counter_qty = 1;
    function scrollload() {
        counter++;
        // console.log(counter);
        var request = $.ajax({
            url: '',
            type: "POST",
            data: { "loads": counter },
        }).done((response) => {
            $('#filteredproducts').append(response);
            if (response[0] == '`' )
            {
                hideBtn();
            }
        });
    }

    function addToCart(id ,qty){
        // id = $(obj).data('id');
        $.ajax({
            type: "POST",
            url: `/cart/add`,
            data: { 'productId': id, 'qty': qty },
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
                                    echo "'تم اضافة العنصر'";
                                else 
                                    echo "'Item Added'";
                             ?>,
                    type: "success", timer: 2000, showConfirmButton: false });
                hideModal();
                location.reload();
            }
        });
    }

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
        // qty = $('#modal_one_item_details').attr('data-qty');
        qty = $('.num_qty').text();
        // console.log(qty);
        //submit add to cart ajax.
        addToCart(productId, qty);
    });


        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.thumnbail').addClass('thumnbail_mobile');
            $('#jssor_1').addClass('jssor_1_mobile');
            $('.ul_navbar').addClass('.ul_navbar_mobile');
            $('.old-price').addClass('old-price_mobile');
            $('.tax_include').addClass('tax_include_item_mobile');
            $('#modal-img').addClass('modal-img_mobile');
        }

link = window.location.href;

idarr=link.split('/');
id =idarr[idarr.length-1];

skip = 15;
function loadmore(){
      $.ajax({
            type: "POST",
            url: `/loadmore`,
            data: { 'skip' : skip  , 'category_id' : id },
            headers: {
                "x-csrf-token": $("[name=_token]").val()
            }
        }).done(response => {
            $('#filteredproducts').append(response);
            if (response[0] == '`' )
            {
                hideBtn();
            }
        });
    skip+= 15;
}

function hideBtn(){
    $('#loadm').css('display','none');
}

$('.header_slider').parent().parent().addClass('block_header');
</script> @endsection