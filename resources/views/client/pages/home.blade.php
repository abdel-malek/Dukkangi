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
    height: 8em;
    width: 8em;
    border-radius: 23em;
}
.bottom_left_background_block{
    background-image: url('/front-end/images/main/bottom_left.png');
      height: 163px;
    width: 270px;
    background-size: cover;
    margin-top: 3em;
}
.bottom_left_background_block img{
    position: absolute;
    margin-top: 4.4em;
    margin-left: 3.4em;
}
.bottom_left_background_block .text_item_block {
    position: absolute;
    right: 19px;
    font-size: 31px;
    transform: rotate(-9deg);
    bottom: 91px;
}

.bottom_right_background_block{
    background-image: url('/front-end/images/main/bottom_right.png');
      height: 163px;
    width: 270px;
    background-size: cover;
    margin-top:3em;
}
.bottom_right_background_block img{
    position: absolute;
    margin-top: 3.4em;
    margin-left: 6.4em;
}
.bottom_right_background_block .text_item_block {
       position: absolute;
    left: 25px;
    font-size: 31px;
    transform: rotate(8deg);
    top: 12px;
    bottom: unset;
    right: unset;
}

.top_left_background_block{
    background-image: url('/front-end/images/main/top_left.png');
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
    background-image: url('/front-end/images/main/top_right.png');
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
   width: 16px;
   height: 16px;
}

     @media (min-width: 768px) and (max-width: 1023px) {
         .item_in_lg{
             display: none !important;
         }    
         .rate-us{
             display: none;
         }
         .item_in_sm{
                display: inline-block !important;
             width: 100%;
             height: 100em;
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
         .bottom_left_background_block {
             height: 270px;
             width: 440px;
         }
         .bottom_right_background_block {
             height: 270px;
             width: 440px;
         }
         .bottom_left_background_block img {
             margin-top: 7.4em;
             margin-left: 4.4em;
         }
         .bottom_right_background_block img {
             margin-top: 7.4em;
             margin-left: 10.4em;
         }
         .landing-items-block img {
             height: 12em;
             width: 12em;
         }
         .bottom_left_background_block .text_item_block {
             right: 22px;
             font-size: 62px;
             bottom: 137px;
         }
         .bottom_right_background_block .text_item_block {
             left: 28px;
             font-size: 67px;
             top: 16px;
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
             overflow-y: auto;
             height: 80.5em;
                 margin-top: 13em;
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
      <div class="col-4">
        <div class="items-col first-col">
        </div>
      @for($counter ; $counter < $col1;  $counter++)
        <div class="landing-items-block {{ $counter %2 == 0 ? 'bottom_right_background_block':'bottom_left_background_block'}} " style="margin-top: {{($firstflag)? '8':'14'}}em;">
          <p class="text_item_block">{{$categories[$counter]->english}}</p>
          <a href="{{route('category' , $categories[$counter]->id) }}"><img class="" src="{{$categories[$counter]->image_id }}" /></a>
        </div>
        <?php $firstflag =1 ; ?> 
      @endfor
      </div>

      <div class="col-4 second">
        <div class="items-col second-col">
        </div>
        <img class="welcome-img" src="front-end/images/welcome-logo.png" />
         <div class="landing-items-block ">
          <p class="title " style="margin-top: 160px">
            @lang('Choose your category')
          </p>
        @for($counter ; $counter < $col2+$col1 ; $counter++ )
       <div class="landing-items-block  {{ $counter %2 == 0 ? 'bottom_right_background_block':'bottom_left_background_block'}}" style="margin-top: 100px;margin-bottom: 40px;">
         
          <p class="house-tools">{{$categories[$counter]->english}}</p>
          <a href="{{route('category' , $categories[$counter]->id) }}"><img class="" src="{{$categories[$counter]->image_id}}"/></a>
        </div>
        @endfor
      </div>
    </div>


      <div class="col-4">
        <div class="items-col third-col ">
        </div>
        @for($counter ; $counter < $col1+$col2+$col3 ; $counter++ )
        <div class="landing-items-block  {{ $counter %2 == 0 ? 'bottom_right_background_block':'bottom_left_background_block'}}"  style="margin-top: {{($lastflag)? '8': '16'}}em;">
          <p class="shisha">{{$categories[$counter]->english}}</p>
          <a href="{{route('category' , $categories[$counter]->id) }}"><img class="" src="{{$categories[$counter]->image_id}}"/></a>
        </div>
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
               <div class="landing-items-block" style="margin-top: 160px;">
                   <p class="title">
                       Choose your category
                   </p>
               </div>
               <div class="col-12 cloum_in_mobile" style="float:left">
                <?php $counter = 0 ?>
                @foreach($categories as $category)
                 @if($counter % 2 == 0)
                   <div class="landing-items-block bottom_left_background_block  ">
                       <p class="text_item_block">{{$category->english}}</p>
                        <a href="{{route('category' , $category->id)}}"><img class="" src="{{$category->image_id}}"/></a>
                   </div>
                   @else 
                   <div class="landing-items-block bottom_right_background_block  ">
                       <p class="text_item_block">{{$category->english}}</p>
                       <a href="{{route('category' , $category->id)}}"><img class="" src="{{$category->image_id}}"/></a>
                   </div>
                   @endif
                   <?php $counter++ ?>
                @endforeach
               </div>
           </div>
       </div>
@endsection