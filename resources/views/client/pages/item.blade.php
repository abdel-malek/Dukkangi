@extends('client.main')
@section('styles')
    <style >
    .image_slider{
                height:13em !important;
                border: 0.04em solid #8a8a8a;
                width: 100% !important;
            }
            .image_thum{
                left: -4em !important;
                width: auto !important;
                height: 4.1em !important;
            }
    a:hover{
        color: inherit;
        text-decoration:none;
    }
    a{

        color: inherit;
        text-decoration:none;

    }

    </style>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection

@section('main_section')
      <div class="col-md-12" style="padding: 0em 5em;" id="content_page">
        <div class="col-md-12 col-sm-12 page_content_item">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:-85px;width:1024px;height:200px;overflow:none;visibility:hidden;background-color:#24262e;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:850px;height:200px;overflow:hidden;">

                    @foreach($subcategories as $subcategory)

                    <div>
                        <!--Some Changes-->
                        <img  data-u="image" src="{{$subcategory->image_id}}" style="height:15em;width: 45em;    border: 0.04em solid #8a8a8a" />

                        <img  data-u="thumb" src="{{$subcategory->image_id}}" />



                        <p  class="text_big_image_slider">
                            <a href="{{ route('subcategoryfilter',$subcategory->id) }}">
                            {{ $subcategory->english }}

                            </a>
                        <img src="/front-end/images/items_page/star.png" class="one_start_slider" />

                        <span class=" subcategory" ></span>
                        </p>

                    </div>
                    @endforeach
                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:900px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
                    <div data-u="slides">
                        <div data-u="prototype" class="p" style="width:110px;height:88px;">
                            <div data-u="thumbnailtemplate" class="t">

                            </div>
                            <p class="text_small_image_slider">
                                {{-- @lang('Subcategory') --}}
                            </p>
                            {{-- <svg viewBox="0 0 16000 16000" class="cv">
                            </svg> --}}
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">jssor_1_slider_init();</script>
        </div>

        <div class="col-md-9 col-sm-12 section_item" >
            <div class="col-sm-3" style="float:left;">
                <img src={{URL::asset('/front-end/images/light_logo.png')}} class="img-resposive logo_text" />
            </div>
            <div class="col-sm-3" style="float:left;margin-left: 2em;">
                <p class="btn_filter">
                    @lang('Filter')
                </p>
            </div>
            <div class="col-sm-5 my-1" style="margin-top: 0em !important;float: left;">
                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                    <div class="input-search_icon">
                        <!--                        <img src="./images/signup/at.png">-->
                        <i class="material-icons">&#xE8B6;</i>
                    </div>
                    {!! Form::open(['route' => 'categoryfilter' , 'method' =>'GET']) !!}
                        <input type="text" class="form-control input_search" id="search" name="search" placeholder="{{ (isset($lastSearch) ? $lastSearch : __('Search' .'..')) }}">
                        <input type="text" hidden="hidden"  id = "category_id" name="categoryId" value="{{isset($products[0]) ? $products[0]->category_id : ''}}">
                        <button type="submit" id="myBtn" hidden="hidden">
                    {!! Form::close() !!}
                    Button</button>
                </div>
            </div>

            <div class="container" style="margin-top: 6em;padding-right: 0em;padding-left: 0em;">
                <div class="tabs">
                    <ul class="tabs__items">
                        @foreach($categories as $category)
                        <a href="{{route('category',$category->id)}}"><li class="tabs__item {{ isset($subcategories[0]) ?($subcategories[0]->category_id == $category->id ? 'tabs_active':'' ) : ''}} ">{{ $category->english }}</li></a>
                        @endforeach
                       </ul>
                    <div class="tabs__content-wrapper" style="    border-top: 0.1em solid #aaa;">

                        <div class="tabs__content tabs_active"><!-- Tab 1 -->
                            @foreach($products as $product)
                            <div class="col-md-3" style="margin-top: 1em;float: left;">
                                <div class="div_item">
                                    <div class="discount_item">
                                        <!-- Need a Change -->
                                        <p class="text_discount"> 15% off</p>
                                        <div class="shadow_div_discount"></div>
                                    </div>
                                   <a href="{{route('product',$product->id)}}"> <img src="{{$product->image_id}}" class="img_item" />
                                    <p class="item_name">{{ $product->english}}</p>
                                    <p class="item_price" style="margin-bottom: 0em;">{{$product->price }}€</p>
                                    <span class="rating product" ></span>
                                    <img src="\front-end\images\user_actions\view-my-cart.png" class="icon_view_my_card" /></a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection

        @section('scripts')
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
                var ratings = document.getElementsByClassName('subcategory');

                for (var i = 0; i < ratings.length; i++) {

                    var r = new SimpleStarRating<?php echo (!isset($subcategory->rate)?'0':$subcategory->rate)?>(ratings[i]);

                    ratings[i].addEventListener('rate', function (e) {
                        console.log('Rating: ' + e.detail);
                    });
                }

                var ratings = document.getElementsByClassName('simi');
                <?php $counter= 0 ?>

                for (var i = 0; i < ratings.length; i++) {
                    var r = new SimpleStarRating<?php echo (isset($simiProducts[$counter]->rate)?$simiProducts[$counter]->rate:'0') ?>(ratings[i]);
                    <?php $counter++?>
                    ratings[i].addEventListener('rate', function (e) {
                        console.log('Rating: ' + e.detail);
                    });
                }
        </script>
        <script >
            var input = document.getElementById("search");

            input.addEventListener("keyup", function(event) {
                event.preventDefault();
                if (event.keyCode === 13) {
                    var click1 =  document.getElementById('myBtn');
                    click1.click();
                    }
                });
        </script>
        @endsection
