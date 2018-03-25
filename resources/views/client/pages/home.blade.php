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
    margin-top: 3.4em;
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
    <div  id="main-container" >
      <div class="col-4">
        <div class="items-col first-col">
        </div>
      @for($counter ; $counter < $col1;  $counter++)
        <div class="landing-items-block {{ $counter %2 == 0 ? 'bottom_right_background_block':'bottom_left_background_block'}} " style="margin-top: {{($firstflag)? '8':'14'}}em;">
          <p class="text_item_block">{{$categories[$counter]->english}}</p>
          <a href="{{route('category' , $categories[$counter]->id) }}"><img class="" src="/front-end/images/slider/item1.jpg" /></a>
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
       <div class="landing-items-block  {{ $counter %2 == 0 ? 'bottom_right_background_block':'bottom_left_background_block'}}" style="margin-top: 100px">
         
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
@endsection