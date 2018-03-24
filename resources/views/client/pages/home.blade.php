@extends ('client.main')
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
        <div class="landing-items-block" style="margin-top: {{($firstflag)? '0':'160'}}px;">
          <p class="food">{{$categories[$counter]->english}}</p>
          <a href="{{route('category' , $categories[$counter]->id) }}"><img class="" src="{{ $categories[$counter]->image_id }}" width="300" height="10" /></a>
        </div>
        <?php $firstflag =1 ; ?> 
      @endfor
      </div>

      <div class="col-4 second">
        <div class="items-col second-col">
        </div>
        <img class="welcome-img" src="front-end/images/welcome-logo.png" />
        @for($counter ; $counter < $col2+$col1 ; $counter++ )
        <div class="landing-items-block" style="margin-top: {{($midflag)? '0':'160'}}px;">
          @if ($midflag == 0)
          <p class="title " >
            @lang('Choose your category')
          </p>
          <?php $midflag = 1; ?>
          @endif
          <p class="house-tools">{{$categories[$counter]->english}}</p>
          <a href="{{route('category' , $categories[$counter]->id) }}"><img class="" src="{{$categories[$counter]->image_id}}"/></a>
        </div>
        @endfor
      </div>


      <div class="col-4">
        <div class="items-col third-col">
        </div>
        @for($counter ; $counter < $col1+$col2+$col3 ; $counter++ )
        <div class="landing-items-block"  style="margin-top: {{($lastflag)? '0': '160'}}px;"">
          <p class="shisha">{{$categories[$counter]->english}}</p>
          <a href="{{route('category' , $categories[$counter]->id) }}"><img class="" src="{{$categories[$counter]->image_id}}"/></a>
        </div>
          <?php $lastflag = 1; ?>
        @endfor
   
      </div>
    </div>
  </div>
@endsection