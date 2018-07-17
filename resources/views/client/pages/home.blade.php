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
    left: 46% !important;
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
    
    @media (min-width: 1600px) {
    .bottom_left_background_block p{
    left: 54% !important;
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
    left: 48% !important;
}
.bottom_right_background_block p {
    left: 11% !important;
}
}
@media (min-width: 1025px) and (max-width: 1150px){
    .bottom_left_background_block p{
        left: 47% !important;
        top: 32px !important;
    }
    .bottom_right_background_block p{
           left: 16% !important;
    top: 31px !important;
    width: 32% !important;
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
           
           @media (min-width: 1024px) and (max-width: 1200px) {
           .flexslider{
                       width: 312% !important;
                     
               }
           }
     @media (min-width: 20px) and (max-width: 1023px) {
         .item_in_lg{
             display: none !important;
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
             height: 100em;
             overflow-y: auto;
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
             font-size: 30px;
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
           margin-top: 0.5em;
           margin-left: 0.3em;
        }
        
               .bottom_left_background_block {
             height: 14.5em;
             width: 25em;
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
    left: 6.1em !important;
}
         .bottom_right_background_block {
    height: 14.5em;
    width: 25em;
}
         .landing-items-block img {
    height: auto;
    width: 25em;
}
.flexslider2{
    width: 69% !important;
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
      @media (min-width: 200px) and (max-width: 860px) {
.div_icon_footer {
    margin-left: 14%;
        flex: 0 0 70.333333%;
    max-width: 70.333333%;
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
 @media (min-width: 1024px) {
     

 }
      @media (min-width: 200px) and (max-width: 530px) {
     .div_icon_footer {
    margin-left: 0%;
    flex: 0 0 100.333333%;
    max-width: 100.333333%;
     }
 }

      </style>
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
      <a href="{{route('category' , $categories[$counter]->id) }}">
        <div class="landing-items-block landing-items-block_parent {{ $counter %2 == 0 ? 'bottom_left_background_block':'bottom_right_background_block'}} " style="margin-top: {{($firstflag)? '8':'34'}}em;margin-left: 50px;
    width: 62.2%; margin-bottom: 5em">
            <div class="block_tite_section_home">
             <p class="text_item_block text_item_block_lg" style="width: 35%;text-align: center;">{{$categories[$counter]->english}}</p>
     
          <div class="hint_title"><span>{{$categories[$counter]->english}}</span></div>
            </div>
          <img class="" src="{{$categories[$counter]->image_id }}" />
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
       
      <div class="flexslider carousel" style="left: -112%;    width: 323%;height: 14em;top: 14em;background-color: rgba(239, 239, 239,0.5);    border-color: rgba(239, 239, 239,-0.5);    z-index: 1;">
        <ul class="slides">
          @foreach($topProducts as $product)
          <li>
              <div class="col-md-11 col-lg-3" style="margin-top: 1em;float: left;max-width: 100%;margin-bottom: 1em">
                  <div class="div_item" style="height: 12em;width: 10em;margin-left: 47px;">
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
         <img class="" src="{{$categories[$counter]->image_id}}"/> 
           <!--<img class="" src="uploads/maxresdefault.jpg" />-->
           <div class="block_tite_section_home">
          <p class="house-tools text_item_block text_item_block_lg" style="text-align: center;width: 35%;left: 0px" >{{$categories[$counter]->english}}</p>
              
          <div class="hint_title"><span>{{$categories[$counter]->english}}</span></div>
           </div>
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
        <a href="{{route('category' , $categories[$counter]->id) }}">
          <div class="landing-items-block landing-items-block_parent  {{ $counter %2 == 0 ? 'bottom_left_background_block':'bottom_right_background_block'}}"  style="margin-top: {{($lastflag)? '8': '34'}}em;left: 50px;width: 62%;">
        <div class="block_tite_section_home">
              <p class="shisha text_item_block text_item_block_lg" style="width: 41%;text-align: center;left: 0px">{{$categories[$counter]->english}}</p>
            
           <div class="hint_title"><span>{{$categories[$counter]->english}}</span></div>
        </div>
          <img class="" src="{{$categories[$counter]->image_id}}"/>
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
              <div class="col-md-11 col-lg-3" style="margin-top: 1em;float: left;max-width: 100%;margin-bottom: 1em">
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
        </ul>
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
});
</script>
<script>
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
    if($(this).text().length >= 17){
        $(this).text($(this).text().slice(0,10)+'..');
        $(this).parent().find('.hint_title').css('display','block');
    }else{
         $(this).parent().find('.hint_title').css('display','none');
    }
    if($(this).text().length >= 14){
        var styles = $(this).attr('style');
        styles += ";top:16% !important;";
//        if($(this).hasClass('text_item_block_lg')){
        $(this).attr('style',styles);
//    }
    }
     if($(this).text().length <= 8){
        var styles = $(this).attr('style');
        styles += ";top:16% !important;font-size:25px;";
        if($(this).hasClass('text_item_block_lg')){
        $(this).attr('style',styles);
    }
    }
});
//    $('.bottom_right_background_block').each(function(){
//       $(this).append('<a href="'+$(this).find('a').attr('href')+'" ><img src="images/left.svg" class="img_cloud_right" /></a>'); 
//    });
     $('.bottom_right_background_block').append('<a href="" ><img src="images/left.svg" class="img_cloud_right" /></a>');
    $('.bottom_left_background_block').append('<a href="" ><img src="images/right.svg" class="img_cloud_right" /></a>');
    </script>
@endsection 