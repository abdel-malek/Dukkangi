@extends ('client.main')
@section ('styles')

 <style>
     .trapezoid {
         border-bottom: 100px solid red;
         border-left: 50px solid transparent;
         border-right: 50px solid transparent;
         height: 0;
         width: 100px;
         float: left;
     }
     .landing-items-block img{
         height: auto;
         width: 100%;
         border-radius: 0em;

     }
     .div_icon_footer {
    padding-left: 11.5vw;
     }
     @media (min-width: 1600px){
         .div_icon_footer {
    padding-left: 11.5vw;
     }
     }
     /* .icon_shopping_cart{
                 font-size: 2.2em !important;
             }*/
     .bottom_left_background_block{
         background-image: url('/front-end/images/main/rec_cat.png');
         height: 153px;
         width: 270px;
         background-size: cover;
         margin-top: 3em;
     }
     .bottom_left_background_block img{
         position: absolute;
         margin-top: 1.4em;
         margin-left: -2em;
         box-shadow: 0px -4px 5px #555;
     }
     .bottom_left_background_block .text_item_block {
         position: absolute;
         z-index: 11;
         /*right: 19px;*/
         font-size: 16px;
         /*transform: rotate(-9deg);*/
         bottom: 91px;
     }
     .img_item {
         width: auto;
         height: 8.4em;
     }
     .bottom_right_background_block{
         background-image: url('/front-end/images/main/rec_cat.png');
         height: 153px;
         width: 270px;
         background-size: cover;
         margin-top:3em;
     }
     .bottom_right_background_block img{
         position: absolute;
         margin-top: 1.4em;
         margin-left: 1.4em;
         box-shadow: 0px -4px 5px #555;
     }
     .bottom_right_background_block .text_item_block {
         position: absolute;
         /*left: 25px;*/
         z-index: 11;
         font-size: 16px;
         /*transform: rotate(8deg);*/
         top: 12px;
         bottom: unset;
         right: unset;
     }
     .bottom_left_background_block p{
         left: 7.6rem !important;
         top: 32px !important;
     }
     .bottom_right_background_block p{
         left: 14% !important;
         top: 31px !important;
     }
     .top_left_background_block{
         background-image: url('/front-end/images/main/rec_cat.png');
         height: 175px;
         width: 270px;
         background-size: cover;
         margin-top: 3em;
     }
     .top_left_background_block img{
         position: absolute;
         margin-top: -1.4em;
         margin-left: 3.4em;
     }
     .top_left_background_block .text_item_block {
         position: absolute;
         left: unset;
         font-size: 31px;
         transform: rotate(8deg);
         top: unset;
         bottom: 0px;
         right: 15px;
     }

     .top_right_background_block{
         background-image: url('/front-end/images/main/rec_cat.png');
         height: 175px;
         width: 270px;
         background-size: cover;
         margin-top: 3em;
     }
     .top_right_background_block img{
         position: absolute;
         margin-top: -1.4em;
         margin-left: 6.4em;
     }
     .top_right_background_block .text_item_block {
         position: absolute;
         left: 15px;
         font-size: 31px;
         transform: rotate(-8deg);
         top: unset;
         bottom: 0px;
         right: unset;
     }
     .col-item{
         float: left;
         margin-top: 10em;
     }
     .item_in_sm{
         display: none !important;
     }
     .icon-flag {
         width: 25px;
         height: 25px;
     }
     .col_item{
         width: 30%;
     }
     /*.container_item{
         width: 1000px;
         max-width: 1000px;
     }*/
     .bottom_left_background_block  .img_cloud_right{
         width: 9rem !important;
         height: auto !important;
         z-index: 8;
         top: -1.7rem;
         right: -0.3rem;
         box-shadow: none;
     }

     .bottom_right_background_block  .img_cloud_right{
         width: 9rem !important;
         height: auto !important;
         z-index: 8;
         top: -1.7rem;
         left: -1.9rem;
         box-shadow: none;
     }
     .hint_title{
         display: none;
         width: auto;
         border-radius: 6px;
         background-color: #fff;
         position: absolute;
         z-index: 13;
         padding: 0.4rem 1rem;
         box-shadow: 0px 0px 9px #000000ab;
         opacity: 0;
         font-family: EagarFont !important;
         font-weight: 600;
         color: #d81219;
         transition: .7s;
     }
     .hint_title span{
         font-family: EagarFont !important;
     }
     .bottom_right_background_block .hint_title{
         left:7rem;
     }
     .bottom_left_background_block .hint_title{
         left: 2rem;
         top: -0.5rem;
     }
     .block_tite_section_home:hover  .hint_title{
         opacity: 1;
     }
     .flexslider .slides img {
         width: auto;
         display: block;
     }
     @media (min-width: 1400px) {
         .bottom_left_background_block p {
             left: 8.5rem !important;
         }
          .div_icon_footer {
            padding-left: 12.5vw;
          }
     }
     @media (min-width: 1600px) {
         .bottom_left_background_block p{
             left: 54% !important;
         }
          .div_icon_footer {
            padding-left: 15.5vw;
          }
         .bottom_right_background_block p {
             left: 7% !important;
         }
     }
     @media (min-width: 1025px) and (max-width: 1150px){
         /*    .landing-items-block{
                 width: 88% !important;
             }*/

         .landing-items-block_parent{
             margin-left: 22px !important;
             width: 80% !important;
         }

     }

     @media (min-width: 1151px) and (max-width: 1280px){
         /*    .landing-items-block{
                 width: 88% !important;
             }*/

         .landing-items-block_parent{
             margin-left: 26px !important;
             width: 70% !important;
         }
         .bottom_left_background_block p {
             left: 8.3rem !important;
         }
         .bottom_right_background_block p {
             left: 11% !important;
         }
     }
     @media (min-width: 1025px) and (max-width: 1150px){
         .bottom_left_background_block p{
             left: 7rem !important;
             top: 32px !important;
         }
         .bottom_right_background_block p{
             left: 16% !important;
             top: 31px !important;
             width: 36% !important;
         }
     }


     .input_search_lg{
         display: none;
     }
     input_search_sm{
         display: none;
     }


     @media (min-width: 1024px) {
         .item_in_lg{
             display: flex !important;
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
     @media (min-width: 1024px) and (max-width: 1200px) {
         .flexslider{
             width: 300% !important;
             left: -100% !important;

         }
     }
@media (max-width: 766px) and (min-width: 300px){

}
     @media (min-width: 1066px) and (max-width: 1150px) {
         .bottom_left_background_block p {
             left: 8.7rem !important;
         }
     }
     @media (min-width: 20px) and (max-width: 1023px) {
         .item_in_lg{
             display: none !important;
         }   
         .bottom_right_background_block, .bottom_left_background_block {
            margin-top: 5em;
         }
         .input_search_lg{
             display: none !important;
         }
         input_search_sm{
             display: block !important;
         }
         .top_nav_mobile{
             margin-top: 0rem;
         }
         .rate-us{
             display: none;
         }
         .bottom_left_background_block .hint_title {
             left: 12rem;
         }
         .item_in_sm{
             display: inline-block !important;
             width: 100%;
             height: auto;
             overflow-y: hidden;
             overflow-x: hidden;
             background-position-x: -25em;
         }
         .welcome-img {
             left: -109px;
         }
         .items-col {
             height: 97.5em;
             top: 0em;
             width: 48.5%;
         }
         .landing-items-block .title {
             margin-left: 52px;
             width: 60%;
             text-align: center;
             font-size: 1.9em;
         }
         /*         .bottom_left_background_block {
                      height: 18.5em;
                      width: 31em;
                  }*/
         /*         .bottom_right_background_block {
                      height: 18.5em;
                      width: 31em;
                  }*/
         .bottom_left_background_block img {
             margin-top: 1.4em;
             margin-left: -2.4em;
         }
         /*         .bottom_left_background_block .img_cloud_right {
             width: 16rem !important;
                  }*/
         /*         .bottom_right_background_block .img_cloud_right {
             width: 16rem !important;
                  }*/
         .bottom_right_background_block img {
             margin-top: 1.4em;
             margin-left: 1.4em;
         }
         /*         .landing-items-block img {
                      height: auto;
                      width: 32em;
                  }*/
         .bottom_left_background_block .text_item_block {
             right: 22px;
             font-size: 26px;
             width: 40% !important;
             bottom: 137px;
         }
         .bottom_left_background_block p {
             /*left: 8.5em !important;*/
             top: 53px !important;
         }
         .bottom_right_background_block .text_item_block {
             left: 28px;
             /*font-size: 30px;*/
             top: 16px;
         }
         .bottom_right_background_block p {
             /*left: 87px !important;*/
             top: 52px !important;
         }
         .top_left_background_block {
             height: 283px;
             width: 437px;
             margin-top: 5em;
         }
         .top_left_background_block img {
             margin-top: -2.4em;
             margin-left: 4.4em;
         }
         .top_left_background_block .text_item_block {
             font-size: 50px;
             transform: rotate(9deg);
             bottom: 19px;
             right: 18px;
         }
         #lang-nav-bar{
             -moz-box-shadow: 0px 0px 0px #7777778c
                 -o-box-shadow: 0px 0px 0px #7777778c;
             -wekit-box-shadow: 0px 0px 0px #7777778c;
             box-shadow: 0px 0px 0px #7777778c;
         }
         .cloum_in_mobile{
             overflow-y: hidden;
             height: auto;
             margin-top: 32em;
             padding-bottom: 3rem;
         }
         #main-navbar-items ul li {
             margin-right: 26px;
             font-size: 25px;
         }
         #navbarSupportedContent ul li {
             font-size: 21px;
         }

         .landing-items-block .title {
             margin-left: 7px;
             top: 7em;
         }
         .icon-flag {
             float: right;
             margin-top: 0.3em;
             margin-left: 0.3em;
         }

         .bottom_left_background_block {
             height: 12.5em;
             width: 23em;
         }
         .bottom_right_background_block .img_cloud_right {
             width: 14rem !important;
         }
         .bottom_left_background_block .img_cloud_right{
             width: 14rem !important;
         }
         .bottom_right_background_block .text_item_block {
             font-size: 25px;
         }
         .bottom_right_background_block p {
             left: 3em !important;
         }
         .bottom_left_background_block p {
             left: 9.1rem !important;
         }
         .bottom_right_background_block {
             height: 12.5em;
             width: 23em;
         }
         .landing-items-block img {
             height: auto;
             width: 23em;
         }
         .flexslider2{
             width: 68% !important;
             height: 14em !important;
             left: 15% !important;
         }
         .flexslider2 .div_item{
             margin-left: 0rem !important;
         }
         .div_icon_footer {
             margin-left: 21%;
         }
         /*.navbar-nav .nav-link{
             width: 3rem !important;
         }*/
         .input_search_sm{
             width: 380px !important;
             display: block !important;
         }

         .footer{
             margin-top: -1rem !important;
         }
     }
     @media (max-width: 1030px) and (min-width: 768px){
         .input_search {
             padding: 0.2em 1em;
         }
         .item_price {
             font-size: 1.2em;
         }
         #main-navbar-items ul li {
             font-size: 0.8rem !important;
         }
         #lang-nav-bar .nav-item a{
             font-size: 0.8rem !important;
         }
         .icon-flag {
             margin-top: -0.1em;
         }
     }
     @media(max-width: 991px){
         .autocomplete-items {
             width: 38% !important;
             left: 19rem;
         }
         .welcome-img {
            width: 100%;
         }
         .icon-flag {
             margin-top: -0.1em;
         }
         #lang-nav-bar .nav-item a{
             font-size: 0.8rem !important;
         }
         #main-navbar-items ul li {
             font-size: 0.7rem !important;
         }
         .div_item .item_name{
             font-size: 0.8rem !important;
         }
         .div_item{
             height: 16em !important;
             width: 14em !important;
         }
         .flexslider{
             height: 19em !important;
         }
         .img_item {
             height: 9.4em !important;
         }
         .text_footer {
             font-size: 1.3em;
         }
     }
     @media (max-width: 775px){
         #main-navbar-items ul li {
             font-size: 0.8rem !important;
         }
     }
     @media (min-width: 200px) and (max-width: 860px) {
         .div_icon_footer {
             margin-left: 14%;
             flex: 0 0 100.333333%;
             max-width: 100.333333%;
         }
         .footer{
             margin-top: -1rem !important;
         }
     }
     @media (min-width: 777px) and (max-width: 860px) {
         .div_icon_footer {
             margin-left: 14%;
             flex: 0 0 100.333333%;
             max-width: 66.333333%;
         }
         .footer{
             margin-top: -1rem !important;
         }
     }

     @media (min-width: 200px) and (max-width: 700px) {
         .div_icon_footer {
             padding-left: 0%;
         }
     }
     @media (min-width: 200px) and (max-width: 650px) {
         .bottom_right_background_block, .bottom_left_background_block {
             height: 12em;
             width: 20em;
         }
         .welcome-img {
            left: -6rem;
            width: 110%;
         }
         .landing-items-block img {
             width: 20em;
         }
         .bottom_left_background_block p {
             left: 8.1rem !important;
         }
         .bottom_left_background_block .img_cloud_right{
             width: 12rem !important;
         }
         .bottom_left_background_block .text_item_block {
             font-size: 26px;
         }
         /*.bottom_left_background_block p {
             top: 27px !important;
         }*/
     }
     @media (min-width: 1024px) {


     }
     /* @media (max-width: 1024){
         .bottom_right_background_block {
             height: 12.5em;
             width: 23em;
         }
      }*/

     @media (min-width: 200px) and (max-width: 570px) {
         .div_icon_footer {
             margin-left: 0%;
             flex: 0 0 100.333333%;
             max-width: 100.333333%;
         }
         .ul_navbar {
    width: 26.7rem !important;
}
         .flexslider2 .div_item {
            margin-left: 2rem !important;
        }
         .flexslider2{
             left: 15% !important;
         }
         .cloum_in_mobile{
             margin-left: -7rem;
             overflow-y: visible;
         }
         .div_icon_footer {
             padding-left: 0% !important;
         }
         .top_nav {
             max-width: 100% !important;
         }
         #main-navbar-items ul li {
             font-size: 0.7rem !important;
         }
          .welcome-img {
            width: 120%;
         }
     }
     @media (max-width: 428px){
         .ul_navbar {
             width: 100% !important;
         }
     }

      </style>
      
      
@if(session('lang') == 'ar' )
<style>
/*    body{
        font-family: 'Scheherazade', serif;
    }
    #search{
        text-align: right;
        padding-right: 1rem;
        padding-left: 3rem;
    }
    .one_start_slider {
        float: left;
    }
    .text_in_header{
        font-family: 'Scheherazade', serif;
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
    }*/
    .nav-link, .sub-paragraph, .input_search_lg, .input_search_sm, .tabs__item, .tabs_active, .btn_filter, .item_name, .tax_include, .off_item, .text_footer, .title_footer a, .tabs_active, .rate-us, .text_in_header, .lable_input_filter, .select-label, .btn_model_filter, .title_qty, .price_item_details span:first-child, .btn_done, .btn_cancel, .btn_view_my_cart, .text_item_block  {
        /*font-family: 'Tajawal', sans-serif;*/
        /*font-family: 'Cairo', sans-serif !important;*/
        /*font-family: 'Reem Kufi', sans-serif;*/
        /*font-family: 'Lateef', cursive;*/
        /*font-family: 'Mirza', cursive;*/
        /*font-family: 'Markazi Text', serif;*/
        
        /*font-family: 'Mada', sans-serif;*/
        /*font-family: 'Aref Ruqaa', serif;*/
        
        font-family:arabic3Font !important;
    }
    .off_item{
        font-size: 16px;
    }
    input::placeholder{
        /*font-family: 'Tajawal', sans-serif;*/
        /*font-family: 'Cairo', sans-serif;*/
        /*font-family: 'Markazi Text', serif;*/
        font-family:arabic3Font !important;
    }
</style>

<style>
    .ul_navbar_for_mobile {
        width: 40rem;
    }
    .div_item .item_name_for_mobile {
        font-size: 1.4rem !important;
    }
    #lang-nav-bar .nav-item_for_mobile a{
        font-size: 1.9rem !important;
    }
    .icon-flag_for_mobile {
        width: 35px !important;
        height: 35px !important;
        margin-top: 0.1em;
    }
    .item_price_for_mobile {
        font-size: 2em;
    }
    .input_search_sm_for_mobile{
        font-size: 1.5rem;
    }
    .text_footer_for_mobile {
        font-size: 1.8em !important;
    }
    .title_footer_for_mobile {
        font-size: 3rem !important;
    }
    .div_item .item_name_for_mobile {
        font-size: 1.7rem !important;
        margin-top: 0rem;
    }
    .item_in_sm_for_mobile{
        height: 100em;
        overflow-y: auto;
    }
</style>
@endif
      
@endsection
@section ('main_section')
<?php 
// echo App::getLocale();
  $count = $categories->count();
  $fullrows = (int)($count / 3);
  $col1 = $fullrows;
  $col2 = $fullrows;
  $col3 = $fullrows;
  if ($count % 3 == 2){
    $col1 = $col1 + 1;
    $col2 = $col2 + 1;
  } 
  if ($count % 3 == 1 ){
    $col1 = $col1 + 1;
  }
  $counter = 0;
  $midflag = 0;
  $firstflag = 0;
  $lastflag = 0;
?>
 <div class="col-md-12" style="padding-right: 0px;padding-left: 0px" id="content_page">
    <div  id="main-container" class="item_in_lg" >
       

      <div class="col-lg-4 col-md-5">
        <div class="items-col first-col">
        </div>
      @for($counter ; $counter < $col1;  $counter++)
     
        <div class="landing-items-block landing-items-block_parent {{ $counter %2 == 0 ? 'bottom_left_background_block':'bottom_right_background_block'}} " style="margin-top: {{($firstflag)? '8':'34'}}em;margin-left: 50px;
    width: 62.2%; margin-bottom: 5em">
            <a href="{{route('category' , $categories[$counter]->id) }}">
                <div class="block_tite_section_home">
                    <p class="text_item_block text_item_block_lg" style="width: 35%;text-align: center;">{{$categories[$counter]->english}}</p>
                    <div class="hint_title"><span>{{$categories[$counter]->english}}</span></div>
                </div>
            </a>
            <a href="{{route('category' , $categories[$counter]->id) }}"> 
                <img class="" src="{{$categories[$counter]->image_id }}" />
            </a>
          <!--<img class="" src="uploads/maxresdefault.jpg" />-->
        </div>
        </a>
        <?php $firstflag =1 ; ?> 
      @endfor
      </div>

      <div class="col-lg-4 col-md-5 second">
        <div class="items-col second-col">
        </div>
        <img class="welcome-img" src="front-end/images/welcome-logo.png" />
       
      <div class="flexslider carousel" style="position: absolute;left: -100%;width: 300%;height: 14em;top: 14em;background-color: rgba(239, 239, 239,0.5);    border-color: rgba(239, 239, 239,-0.5);    z-index: 1;">
        <ul class="slides">
          @foreach($topProducts as $product)
          <li>
              <div class="col-md-11 col-lg-3" style="margin-top: 1em;float: left;max-width: 100%;margin-bottom: 1em">
                  <div class="div_item" style="height: 12em;width: 10em;margin-left: 0px;">
                     <a href="{{route('product',(string)$product->id)}}"> <img src="{{$product->image_id}}" class="img_item" />
                      <p class="item_name" style="font-size: 0.7em">{{$product->english}}</p>
                      <p class="item_price" style="margin-bottom: 0em;">{{isset($product->discounted_price) ? $product->discount_price : $product->price}}€</p>
                     </a>
                  </div>
              </div>
          </li>
          @endforeach
          <!-- items mirrored twice, total of 12 -->
        </ul>
      </div>
       <div class="landing-items-block ">
          
        @for($counter ; $counter < $col2+$col1 ; $counter++ )
          <a href="{{route('category' , $categories[$counter]->id) }}">
       <div class="landing-items-block landing-items-block_parent {{ $counter %2 == 0 ? 'bottom_left_background_block':'bottom_right_background_block'}}" style="margin-top: {{$midflag == 0 ?'20em' : '8em'}};margin-bottom: 40px;margin-left: 50px;width: 62.2%;">
           <a href="{{route('category' , $categories[$counter]->id) }}"> <img class="" src="{{$categories[$counter]->image_id}}"/> </a>
           <!--<img class="" src="uploads/maxresdefault.jpg" />-->
          <a href="{{route('category' , $categories[$counter]->id) }}">  <div class="block_tite_section_home">
          <p class="house-tools text_item_block text_item_block_lg" style="text-align: center;width: 35%;left: 0px" >{{$categories[$counter]->english}}</p>
              
          <div class="hint_title"><span>{{$categories[$counter]->english}}</span></div>
              </div></a>
        </div>
        </a>
        <?php $midflag++ ?>
        @endfor
      </div>
    </div>


      <div class="col-lg-4 col-md-5">
        <div class="items-col third-col">
        </div>
        @for($counter ; $counter < $col1+$col2+$col3 ; $counter++ )
        
        <div class="landing-items-block landing-items-block_parent  {{ $counter %2 == 0 ? 'bottom_left_background_block':'bottom_right_background_block'}}"  style="margin-top: {{($lastflag)? '8': '34'}}em;left: 50px;width: 62%;">
            <a href="{{route('category' , $categories[$counter]->id) }}">
                <div class="block_tite_section_home">
                    <p class="shisha text_item_block text_item_block_lg" style="width: 37%;text-align: center;left: 0px">{{$categories[$counter]->english}}</p>

                    <div class="hint_title"><span>{{$categories[$counter]->english}}</span></div>
                </div>
            </a>
            <a href="{{route('category' , $categories[$counter]->id) }}">
                <img class="" src="{{$categories[$counter]->image_id}}"/>
            </a>
        <!--<img class="" src="uploads/maxresdefault.jpg" />-->
        </div>
        </a>
          <?php $lastflag = 1; ?>
        @endfor
   
      </div>
    </div>
  </div>


<div  id="main-container" class="item_in_sm" >
           <div class="col-sm-2"></div>
           <div class="col second " style="margin-left: 23%;
    margin-top: -12%;
    max-width: 77%;">
               <div class="items-col second-col">
               </div>
               <img class="welcome-img" src="/front-end/images/welcome-logo.png" />
               <div class="landing-items-block " style="margin-top: 160px;">
               </div>
                  <div class="flexslider carousel" style="  position: absolute;left: -32%;width: 133%;height: 16em;top: 14em;background-color: rgba(239, 239, 239,0.5);border-color: rgba(239, 239, 239,-0.5);z-index: 1;">
        <ul class="slides">
          @foreach($topProducts as $product)
          <li>
              <div class="col-md-11 col-lg-3" style="margin-top: 1em;float: left;max-width: 100%;margin-bottom: 1em" class="block_logo_company">
                  <div class="div_item" style="height: 14em;width: 12em;margin-left: 47px;">
                     <a href="{{route('product',(string)$product->id)}}"> <img src="{{$product->image_id}}" class="img_item" />
                      <p class="item_name" style="font-size: 0.7em">{{$product->english}}</p>
                      <p class="item_price" style="margin-bottom: 0em;">{{isset($product->discounted_price) ? $product->discount_price : $product->price}}€</p>
                     </a>
                  </div>
              </div>
          </li>
          @endforeach
          <!-- items mirrored twice, total of 12 -->
        </ul><span class="off_item" value="5"></span>
      </div>
               <div class="col-12 cloum_in_mobile" style="float:left;    padding-left: 3em;">
                <?php $counter = 0 ?>
                @foreach($categories as $category)
                 @if($counter % 2 == 0)
                   <div class="landing-items-block  bottom_left_background_block" style="">
                       <a href="{{route('category' , $category->id)}}">
                      <div class="block_tite_section_home">
                          <p class="text_item_block" style="width: 39%;text-align: center;">{{$category->english}}</p>
                       <div class="hint_title"><span>{{$category->english}}</span></div>
                      </div>
                       </a>
                        <a href="{{route('category' , $category->id)}}"><img class="" src="{{$category->image_id}}" /></a>
                   </div>
                   @else 
                   <div class="landing-items-block   bottom_right_background_block">
                       <a href="{{route('category' , $category->id)}}">
                    <div class="block_tite_section_home">
                        <p class="text_item_block" style="width: 34%;text-align: center;">{{$category->english}}</p>
                       <div class="hint_title"><span>{{$category->english}}</span></div>
                    </div>
                       </a>
                       <a href="{{route('category' , $category->id)}}"><img class="" src="{{$categories[$counter]->image_id}}" /></a>
                   </div>
                   @endif
                   <?php $counter++ ?>
                @endforeach
               </div>
           </div>
       </div>
@endsection

@section('scripts')
 <script type="text/javascript">
  $(document).ready(function() {
       if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 260,
    directionNav: true,  
    itemMargin: 3,
    minItems: 1,
    maxItems: 3,
    controlNav : false, 
    animationSpeed: 2000, 
    slideshowSpeed: 5000, 
  });
       }else{
           if($(window).width() > 520){
         $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 260,
    directionNav: true,  
    itemMargin: 5,
    minItems: 1,
    maxItems: 5,
    controlNav : false, 
    animationSpeed: 2000, 
    slideshowSpeed: 5000, 
  });   
           }else{
                      $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 400,
    directionNav: true,  
    itemMargin: 1,
    minItems: 1,
    maxItems: 1,
    controlNav : false, 
    animationSpeed: 2000, 
    slideshowSpeed: 5000, 
  });    
           }
       }
       if($(window).width() > 600){
  $('.flexslider2').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 210, 
    itemMargin: 5,
    minItems: 2,
    maxItems: 4,
    slideshow : false,
    controlNav : true,
    directionNav: true,    
    animationSpeed: 100, 
    slideshowSpeed: 10000,     
  });
       }else{
             $('.flexslider2').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 270, 
    itemMargin: 5,
    minItems: 1,
    maxItems: 1,
    slideshow : false,
    controlNav : true,
    directionNav: true,    
    animationSpeed: 100, 
    slideshowSpeed: 10000,     
  });
       }
});
</script>
<script>
    function when_open_mobile(){
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.ul_navbar').addClass('ul_navbar_for_mobile');
            $('.item_name').addClass('item_name_for_mobile');
            $('.nav-item').addClass('nav-item_for_mobile');
            $('.icon-flag').addClass('icon-flag_for_mobile');
            $('.item_price').addClass('item_price_for_mobile');
            $('.input_search_sm').addClass('input_search_sm_for_mobile');
            $('.text_footer').addClass('text_footer_for_mobile');
            $('.title_footer').addClass('title_footer_for_mobile');
            $('.item_name').addClass('item_name_for_mobile');
            $('.item_in_sm').addClass('item_in_sm_for_mobile');
        }
    }
when_open_mobile();
    
    
              if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
//                  var item_sm = $('item_in_sm').attr('style');
//                   var item_lg = $('item_in_lg').attr('style');
//                   item_sm += ";display:block !important;";
//                   item_lg += ";display:none !important;";
//                   $('.item_in_sm').attr('style',item_sm);
//                   $('.item_in_lg').attr('style',item_lg);
$('.item_in_sm').css('display','block');
$('.item_in_lg').css('display','none');


}
$('.text_item_block').each(function(){
    if($(this).text().length >= 16){
        $(this).text($(this).text().slice(0,10)+'..');
        $(this).parent().find('.hint_title').css('display','block');
    }else{
         $(this).parent().find('.hint_title').css('display','none');
    }
    if($(window).width() > 650){
    if($(this).text().length >= 14){
        var styles = $(this).attr('style');
        
        styles += ";top:16% !important;";
//        if($(this).hasClass('text_item_block_lg')){
        $(this).attr('style',styles);
//    }
    }
    }else{
    if($(this).text().length >= 13){
        var styles = $(this).attr('style');
        
        styles += ";top:10% !important;";
//        if($(this).hasClass('text_item_block_lg')){
        $(this).attr('style',styles);
//    }
    }
    }

    
    
   
     if($(this).text().length <= 8){
        var styles = $(this).attr('style');
        styles += ";top:16% !important;font-size:25px;";
        if($(this).hasClass('text_item_block_lg')){
        $(this).attr('style',styles);
    }
    }
});
    $('.bottom_right_background_block').each(function(){
       $(this).append('<a href="'+$(this).find('a').attr('href')+'" ><img src="images/left.svg" class="img_cloud_right" /></a>'); 
    });
      $('.bottom_left_background_block').each(function(){
       $(this).append('<a href="'+$(this).find('a').attr('href')+'" ><img src="images/right.svg" class="img_cloud_right" /></a>'); 
    });
//     $('.bottom_right_background_block').append('<a href="" ><img src="images/left.svg" class="img_cloud_right" /></a>');
//    $('.bottom_left_background_block').append('<a href="" ><img src="images/right.svg" class="img_cloud_right" /></a>');
    </script>
@endsection 