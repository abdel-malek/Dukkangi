@extends('client.main')

@section('main_section')
<?php 
  echo App::getLocale();

?>
        <div class="col-md-12 col-sm-12 page_content_item">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:-85px;width:1024px;height:200px;overflow:none;visibility:hidden;background-color:#24262e;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:850px;height:200px;overflow:hidden;">
                    
                    @foreach($subcategories as $subcategory) 
                    <div>
                        <img data-u="image" src="/front-end/images/items_page/food.png" style="height:15em !important;" />
                        <img data-u="thumb" src="/front-end/images/items_page/food.png" style="left: -4em !important;width: auto !important;height: 4.1em !important;" />
                        <p class="text_big_image_slider">
                            {{ $subcategory->english}}
                            <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
                            <span class="rating" ></span>
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
                                Subcategory
                            </p>
                            <svg viewBox="0 0 16000 16000" class="cv">
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">jssor_1_slider_init();</script>
        </div>

        <div class="col-md-9 col-sm-12 section_item" >
            <div class="col-sm-3" style="float:left;">
                <img src="http://localhost:8000/front-end/images/light_logo.png" class="img-resposive logo_text" />
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
                    <input type="text" class="form-control input_search" id="inlineFormInputGroupUsername" placeholder="@lang('Search') ..">
                </div>
            </div>

            <div class="container" style="margin-top: 6em;padding-right: 0em;padding-left: 0em;">
                <div class="tabs">
                    <ul class="tabs__items">
                        @foreach($categories as $category)
                        <li class="tabs__item ">{{ $category->english }}</li>
                        @endforeach <!-- class tabs_active -->
                       </ul>
                    <div class="tabs__content-wrapper" style="    border-top: 0.1em solid #aaa;">
                         <?php 
                                $category_products = [];
                                for ( $i=0 ; $i < $categories->count() ; $i++)
                                {
                                    $category_products[$i] = $products->where('category_id' , '=',$categories[$i]->id);
                                }
                             
                         ?>
                        @for( $i=0 ; $i < $categories->count() ; $i++)
                           
                        <div class="tabs__content tabs_active"><!-- Tab 1 -->
                            @foreach($category_products[$i] as $product)        
                            <div class="col-md-3" style="margin-top: 1em;float: left;">
                                <div class="div_item">
                                    <div class="discount_item">
                                        <p class="text_discount"> 15% off</p>
                                        <div class="shadow_div_discount"></div>
                                    </div>
                                    <img src="\front-end\images\slider\item1.jpg" class="img_item" />
                                    <p class="item_name">{{ $product->english}}</p>
                                    <p class="item_price" style="margin-bottom: 0em;">{{$product->price }}€</p>
                                    <span class="rating" ></span>
                                    <img src="\front-end\images\user_actions\view-my-cart.png" class="icon_view_my_card" />
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endfor
                        
                    </div>
                </div>
            </div>
        </div>
        @endsection
        
        @section('scripts')
        <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        <script src="/front-end/js/plugin/jquery-pretty-tabs.js"></script>
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
        @endsection
